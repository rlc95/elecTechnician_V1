<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Technician;
use App\Models\Customer;
use App\Models\CustomerUser;
use App\Models\VerifyTechnician;
use Validator;
use Illuminate\Support\Facades\DB;

class CustomUserController extends Controller
{


    public function findTechnician(Request $request , $id){

        $request->validate([
            'inputDeviceName' => 'required',
            'inputDistrict' => 'required|regex:/^[a-zA-ZÑñ\s]+$/',
            'inputTown' => 'required|regex:/^[a-zA-ZÑñ\s]+$/',
            'inputAddress' => 'required',
            'inputLocationCode' => 'required|numeric',
            
            
        ]);





        $inputDevice =$request->inputDeviceName;
        $inputTown=$request->inputTown;
        $inputLocation=$request->inputLocationCode;
        //$inputUserPassword=$request->inputPassword;
        //$inputName=$request->inputUserName;


        //$customer = DB::table('customers')->where([ ['UserName',$inputName],['Password',$inputUserPassword]])->get();

        //$Cus_count = $customer->count();


        


        $technician = DB::table('technicians')
        ->join('verify_technicians', 'technicians.id', '=', 'verify_technicians.Technician_ID')
        ->where([ ['technicians.Town',$inputTown],['technicians.LocationCode',$inputLocation]])
        ->where('verify_technicians.Verify','=',1)
        ->where( function($query) use ($inputDevice){
            
            $query->where('Device_A','=',$inputDevice)->orwhere('Device_B','=',$inputDevice)->orwhere('Device_C','=',$inputDevice);

        })->get();
        //$request->session()->put( 'techID' , $technician->id );


        $customer = DB::table('customers')->where('id', $id)->first();
        //$request->session()->put( 'CusID' , $customer->id );
        /*
        $technician = DB::table('technicians')->where([ ['Town',$inputTown],['LocationCode',$inputLocation]])
                        ->where( function($query) use ($inputDevice){
                            
                            $query->where('Device_A','=',$inputDevice)->orwhere('Device_B','=',$inputDevice)->orwhere('Device_C','=',$inputDevice);

                        })->get();
        
        */
            $count = $technician->count();

            if($count > 0){

                
                    //$VerifyTechnician = DB::table('verify_technicians')->where('Technician_ID','=',15)->first();
                

                return view('MeetTechnician')->with('technician',$technician)->with('customer',$customer);
                //return view('MeetTechnician',['technician'=> $technician,'VerifyTechnician'=>$VerifyTechnician]);

            }else{

                return view('MeetTechnician')->with('customer',$customer);
                //echo '<script>alert("Please wait | Now not available your service Try Again!")</script>';
                //echo "Please wait Now not available your service";
            }







        
        

        
           
        



    }






    public function indexMeetTechnician(){

        
        if(session()->has('customerID'))
        {
            return view('MeetTechnician');
            
        }

            
        return redirect('/customer/login');
     

        
        
    }
}

/*

<p>{{session('techID')}}</p>
  


<?php
    
    $TechId = session('techID');

    $technician = \App\Models\Technician::join('verify_technicians', 'verify_technicians.Technician_ID', '=', 'technicians.id')->where('technicians.id',$TechId)->first();

?>

*/