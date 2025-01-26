<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    //

    public function AdminCheck(Request $request){

        $inputEmail =$request->inputAdminEmail;
        $inputPasswd=$request->inputAdminPassword;
       
        $this->validate($request, [

            'inputAdminEmail' => 'required|email',
            'inputAdminPassword' => 'required|alphaNum|min:5'

        ]);


        $Admin = DB::table('admins')->where([ ['Email',$inputEmail],['Password',$inputPasswd]])->first();
        $request->session()->put( 'AdminID' , $Admin->id );

        
       
        if($Admin){
            
            return view('/Admin/Dashboard')->with('Admin',$Admin);
        
        }else{
        
            //echo "Faild Login Try Again!";
            //echo '<script>alert("Faild Login Try Again!")</script>';
            return back()->with('error','Wrong Login Details');
        }







    }













    public function indexAdminDashboard(){

        if(session()->has('AdminID'))
        {
            return view('Admin.Dashboard');
            
        }



        return redirect('/Admin/login');
    }




    public function indexAdminLogin(){

        
        if(session()->has('AdminID'))
        {

            return redirect('/Admin/Dashboard');
        }




        return view('Admin.login');
    }



    
    function logout(){

        //Auth::logout();

        if(session()->has('AdminID'))
        {

            session()->pull('AdminID');
        }





        return redirect('/Admin/login');

    }


}
