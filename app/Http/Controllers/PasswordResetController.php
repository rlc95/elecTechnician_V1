<?php

namespace App\Http\Controllers;
use App\Models\Technician;
use App\Models\Customer;
use App\Models\ResetPassword;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Validator;
use Illuminate\Http\Request;

class PasswordResetController extends Controller
{
    //



    public function ResetPassword(Request $request)
{


    //Customer reset password
        if (isset($_POST['reset-password']))
    {


        $email =$request->email;


        $this->validate($request, [

            'email' => 'required|email'

        ]);



        $UserEmail = DB::table('customers')->where('Email',$email)->first();

        if($UserEmail){


            $token = bin2hex(random_bytes(50));


            DB::table('reset_passwords')->insert([
                'email' => $email,
                'token' => $token
            ]);

            // *** To Email ***
            $to = $email;

            // *** Subject Email ***
            $subject = "Reset Password";
//
            // *** Content Email ***
            $content = "Hi there, click on this <a href=\"127.0.0.1:8000/ResetPassword/NewPassword?token=" . $token . "\">link</a> to reset your password on our site";
//
            //*** Head Email ***
            $headers = "From: ranganalak@gmail.com\r\n";
//
            //*** Show the result... ***
            if (mail($to, $subject, $content, $headers))
            {
                //return view('/ResetPassword/Edit')->with('success_message','Mail was sent successfully');;
                //return redirect()->back()->with('message', 'Mail was sent successfully and Check Your mail box');
                return view('/ResetPassword/Edit')->with('UserEmail',$UserEmail);
            } 
            else 
            {
                return back()->with('error','Failed! Mail was not sent');
            }
            
            

        }else{



            return back()->with('error','Not available this email in system');


        }





    }
    
    
    //Customer new password
    if (isset($_POST['new_password'])){
        $NewUserName = $request->new_userName;
        $NewPassword =$request->new_pass;
        $NewPassConform =$request->new_pass_c;
        $token =$request->token;

       
        $this->validate($request, [

            'new_userName' =>'required|min:5|max:8',
            'new_pass' => 'required|min:4|max:10',
            'new_pass_c' => 'required|min:4|max:10',

        ]);


        if($NewPassword == $NewPassConform ){

           $CusEmail = ResetPassword::select('email')->where('token',$token)->first();
           
            if($CusEmail){

                $customer = new Customer;
                $customer->Password=$NewPassword;
                $customer->UserName=$NewUserName;
                $customer['Password'] = bcrypt($customer['Password']);

                
                             DB::table('customers')
                            ->where('Email',$CusEmail->email )
                            ->update(['Password' => $customer['Password'], 'UserName' => $customer['UserName'] ]);


                    
                    return view('/ResetPassword/Edit')->with('CusEmail',$CusEmail);

            }else{

                return back()->with('error','Not available this email in system');
            }
           
           
           


        }else{

            return back()->with('error','password not matching');

                

        }
        
    }



//Technician reset password

    if (isset($_POST['TechReset-password'])){


        $email =$request->email;


        $this->validate($request, [

            'email' => 'required|email'

        ]);


        $UserEmail = DB::table('technicians')->where('Email',$email)->first();

        if($UserEmail){


            $token = bin2hex(random_bytes(50));


            DB::table('reset_passwords')->insert([
                'email' => $email,
                'token' => $token
            ]);

            // *** To Email ***
            $to = $email;

            // *** Subject Email ***
            $subject = "Reset Password";
//
            // *** Content Email ***
            $content = "Hi there, click on this <a href=\"127.0.0.1:8000/ResetPassword/TechNewPassword?token=" . $token . "\">link</a> to reset your password on our site";
//
            //*** Head Email ***
            $headers = "From: ranganalak@gmail.com\r\n";
//
            //*** Show the result... ***
            if (mail($to, $subject, $content, $headers))
            {
                //return redirect()->back()->with('message', 'Mail was sent successfully and Check Your mail box');
                return view('/ResetPassword/Edit')->with('UserEmail',$UserEmail);
            } 
            else 
            {
                return back()->with('error','Failed! Mail was not sent');
            }
            
            

        }else{



            return back()->with('error','Not available this email in system');


        }



    }




    //Technician New password

    if (isset($_POST['TechNewpassword'])){

        $NewUserName = $request->new_userName;
        $NewPassword =$request->new_pass;
        $NewPassConform =$request->new_pass_c;
        $token =$request->token;

       
        $this->validate($request, [
            'new_userName' =>'required|min:5|max:8',
            'new_pass' => 'required|min:4|max:10',
            'new_pass_c' => 'required|min:4|max:10',

        ]);


        if($NewPassword == $NewPassConform ){

           $TechEmail = ResetPassword::select('email')->where('token',$token)->first();
           
            if($TechEmail){

                $technician = new Technician;
                $technician->Password=$NewPassword;
                $technician->UserName=$NewUserName;
                $technician['Password'] = bcrypt($technician['Password']);

                
                             DB::table('technicians')
                            ->where('Email',$TechEmail->email )
                            ->update(['Password' => $technician['Password'], 'UserName' => $technician['UserName'] ]);


                
                return view('/ResetPassword/Edit')->with('TechEmail',$TechEmail);

            }else{

                return back()->with('error','Not available this email in system');
            }
           
           
           


        }else{

            return back()->with('error','password not matching');

                

        }
        
    }






}











    public function indexRequestReset(){

        return view('ResetPassword.RequestReset');
    }

    
    public function indexNewPassword(){

        
        return view('ResetPassword.NewPassword');
    }


    public function indexEdit(){

        return view('ResetPassword.Edit');
    }



    public function indexTechRequestReset(){

        return view('ResetPassword.TechRequestReset');
    }

    public function indexTechNewPassword(){

        
        return view('ResetPassword.TechNewPassword');
    }











}
