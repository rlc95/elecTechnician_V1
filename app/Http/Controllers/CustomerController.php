<?php

namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use App\Http\Controllers\Hash;
use Illuminate\Support\Facades\Hash;
use Validator;
use Auth;

class CustomerController extends Controller
{
   



    public function store(Request $request){

        $request->validate([
            'inputFName' => 'required',
            'inputLName' => 'required',
            'inputEmail' => 'required|email',
            'inputUserName' => 'required|min:5|max:8',
            'inputAddress' => 'required',
            'inputPassword' => 'required|min:4|max:10',
            'inputContact' => 'required|numeric|digits:10',
            'inputBD' => 'required|date_format:d-m-Y',
            'inputOne' => 'required',
            
    
        ]);


        $customer = new Customer;
        $customer->FirstName=$request->inputFName;
        $customer->LastName=$request->inputLName;
        $customer->Email=$request->inputEmail;
        $customer->UserName=$request->inputUserName;
        $customer->Address=$request->inputAddress;
        $customer->Password=$request->inputPassword;
        //$customer['Password']= Hash::make($customer['password']);
        $customer['Password'] = bcrypt($customer['Password']);
        $customer->ContactNumber=$request->inputContact;
        $customer->Birthday=$request->inputBD;
        $customer->Gender=$request->inputOne;

        $customer->save();
        return view('/customer');
    }

    public function cuscheck(Request $request){

        //$con = mysqli_connect("localhost","root","","electechnician");
        $inputCusName =$request->inputCusUserName;
        $inputCusPasswd=$request->inputCusPassword;

        
       
        $this->validate($request, [

            'inputCusUserName' => 'required|min:5',
            'inputCusPassword' => 'required|alphaNum|min:4'

        ]);
        
        
        
        
        //$customer = DB::table('customers')->where([ ['UserName',$inputCusName],['Password',$inputCusPasswd]])->get();
        $customer = DB::table('customers')->where('UserName',$inputCusName)->first();
        
        //dd($hash);
        $request->session()->put( 'customerID' , $customer->id );
/*
        $verify = password_verify($inputCusPasswd, $customer->Password);
  
  // Print the result depending if they match
            if ($verify) {
                    echo 'Password Verified!';
            } else {
                    echo 'Incorrect Password!';
            }

*/


        

        //$coun = $customer->count();

        if(!$customer){

            //if(Hash::check('$inputCusPasswd', $customer->Password))
            
            return back()->with('error','Wrong Login conform Details');


        }else{

            if(Hash::check($inputCusPasswd, $customer->Password)){

                //return view('/customerLogin')->with('customer',$customer);
                return view('/customerLogin');

             
            }else{

                return back()->with('error','Wrong Password');
            }
            
        }





        //$count = $customer->count();
       /*
        if($count > 0){
            
            echo  $customer->Password;
            return view('/customerLogin')->with('customer',$customer);
        
        }else{
        
            //echo "Faild Login Try Again!";
            //echo '<script>alert("Faild Login Try Again!")</script>';
            return back()->with('error','Wrong Login conform Details');
        }
        */
    }



    


    public function indexcustomer(){

        return view('customer');
    }


    public function indexcustomerDetails(){


        if(session()->has('AdminID'))
        {

            $customer = Customer::all();
             return view('customerDetails')->with('customer',$customer);
        }

        return redirect('/Admin/login');

        
    }


    public function indexCusRegister(){

        return view('customer.register');
    }

    public function indexCusLogin(){

        if(session()->has('customerID'))
        {

            return redirect('customerLogin');
        }

        return view('customer.login');
    }


    function logout(){

        //Auth::logout();
        if(session()->has('customerID'))
        {

            session()->pull('customerID');
        }



        return redirect('/customer/login');

    }


    public function indexservices($id){

       $customer = DB::table('customers')->where('id', $id)->first();

        return view('services')->with('customer',$customer);
    }



}



/*
<script type="text/javascript">
function preventBack() { window.history.forward(); }
setTimeout("preventBack()", 0);
window.onunload = function () { null };
</script>
*/