<?php

namespace App\Http\Controllers;
use App\Models\Technician;
use Illuminate\Http\Request;
use App\Models\VerifyTechnician;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Validator;
use Auth;
//use Illuminate\Support\Facades\Hash;


class TechnicianController extends Controller
{
   public function store(Request $request){

    $request->validate([
        'inputFName' => 'required',
        'inputLName' => 'required',
        'inputEmail' => 'required|email',
        'inputUserName' => 'required|min:5|max:8',
        'inputAddress' => 'required',
        'inputLocationCode' => 'required|numeric',
        'inputPassword' => 'required|min:4|max:10',
        'inputContact' => 'required|numeric',
        'Image' => 'image|mimes:jpg,jpeg,png',
        'inputTown' => 'required',
        'inputDeviceA' => 'required',
        'inputDeviceB' => 'required',
        'inputDeviceC' => 'required'

    ]);


      
    $technician = new Technician;
    $technician->FirstName=$request->inputFName;
    $technician->LastName=$request->inputLName;
    $technician->Email=$request->inputEmail;
    $technician->UserName=$request->inputUserName;
    $technician->Address=$request->inputAddress;
    $technician->LocationCode=$request->inputLocationCode;
    $technician->Password=$request->inputPassword;
    //$technician['Password']= Hash::make($technician['password']);
    $technician['Password'] = bcrypt($technician['Password']);
    $technician->ContactNumber=$request->inputContact;
    //$technician->Image=$request->InputImage;
    $technician->Town=$request->inputTown;
    $technician->Device_A=$request->inputDeviceA;
    $technician->Device_B=$request->inputDeviceB;
    $technician->Device_C=$request->inputDeviceC;

    
    if ($request->hasfile('Image')){
        $file = $request->file('Image');
        $extension = $file->getClientoriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads/technician/', $filename);
        $technician->Image = $filename;
    } else {
        return $request;
        $technician->Image = '';
    }
        
    $technician->save(); 
    return view('/technician');

    }


    public function check(Request $request){
        
        $inputName =$request->inputUserName;
        $inputPasswd=$request->inputPassword;
        
        $this->validate($request, [

            'inputUserName' => 'required|min:5',
            'inputPassword' => 'required|alphaNum|min:4'

        ]);

       
    /*
        $verifytechnician = DB::table('technicians')
        ->join('verify_technicians', 'technicians.id', '=', 'verify_technicians.Technician_ID')
        ->where([ ['technicians.UserName',$inputName],['technicians.Password',$inputPasswd]])->get();
    */

    $verifytechnician = DB::table('technicians')
    ->join('verify_technicians', 'technicians.id', '=', 'verify_technicians.Technician_ID')
    ->where('technicians.UserName',$inputName)->first();

    



        //$V_count = $verifytechnician->count();


     
        //$technician = DB::table('technicians')->where([ ['UserName',$inputName],['Password',$inputPasswd]])->get();
        
        $technician = DB::table('technicians')->where('UserName',$inputName)->first();
        $request->session()->put( 'technicianID' , $technician->id );
        //$count = $technician->count();
       
        
        if(!$technician){

            return back()->with('error','Wrong Login Details');

        }else{


            if(!$verifytechnician){


                if(Hash::check($inputPasswd, $technician->Password)){

                    return view('/technicianLogin')->with('technician',$technician);

                }else{

                    return back()->with('error','Wrong Password');
                }

                //return view('/VerifyTechnician')->with('Verifytechnician',$Verifytechnician);

            }else{

               
                if(Hash::check($inputPasswd, $verifytechnician->Password)){

                    return view('/technician/VerifyDashboard')->with('verifytechnician',$verifytechnician);

                }else{

                    return back()->with('error','Wrong Password');
                }

            }

        }






    /* 
        if($count > 0){
            

            

            
            if($V_count > 0){

                return view('/technician/VerifyDashboard')->with('verifytechnician',$verifytechnician);
                //return view('/VerifyTechnician')->with('Verifytechnician',$Verifytechnician);

            }else{

                return view('/technicianLogin')->with('technician',$technician);

            }
       
            
        }else{


            //echo "Faild Login Try Again!";
           //echo '<script>alert("Faild Login Try Again!")</script>';
            return back()->with('error','Wrong Login Details');
            //return redirect()->back();

        }
    
        
    */



       /*
        $technician = array(

            'inputUserName' => $request->get('inputUserName'),
            'inputPassword' => $request->get('inputPassword')

        );

        if(Auth::attempt($technician)){

            return view('/technicianLogin')->with('technician',$technician);
        }
        else{
            return back()->with('error','Wrong Login Details');
        }

        */

        /*
        if(mysqli_num_rows($result) > 0){

            $row = mysqli_fetch_array($result);

        echo $row["UserName"];
        echo $row["Password"];

        }else{

            echo "Unsuccessfully login";
        }
        
        */

    }

    public function indextechnician(){
        
        return view('technician');
    }

    public function indextechnicianDetails(){

        if(session()->has('AdminID')){

            $technician = Technician::all();
            return view('technicianDetails')->with('technician',$technician);


        }



        return redirect('/Admin/login');

        
    }

    

    public function indextechRegister(){
        
        return view('technician.register');
    }

    

    public function indextechLogin(){

        $Vtechnician = DB::table('verify_technicians')->where('Technician_ID',session('technicianID'))->first();
        
        
        if(session()->has('technicianID'))
        {

            if($Vtechnician){

                return redirect('/technician/VerifyDashboard');

            }else{

                return redirect('technicianLogin');

            }

        }

        return view('technician.login');

    }


    public function indexVerifyDashboard(){

        if(session()->has('technicianID')){

            return view('technician.VerifyDashboard');


        }
        
        return redirect('technician.login');

    }





    function logout(){

        //Auth::logout();
        if(session()->has('technicianID'))
        {

            session()->pull('technicianID');
        }
        return redirect('/technician/login');

    }


}
