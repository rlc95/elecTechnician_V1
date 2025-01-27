<?php

namespace App\Http\Controllers;
use App\Models\VerifyTechnician;
use Illuminate\Http\Request;
use App\Models\Technician;
use Validator;
use Auth;
use Illuminate\Support\Facades\DB;

class VerifyTechController extends Controller
{
    //
    public function store(Request $request, $id){


      $request->validate([
        'inputIndex' => 'required',
        'comment' => 'required',
        'Certificate' => 'image|mimes:jpg,jpeg,png'
        
    ]);

  if($id == $request->inputIndex){

      $verifyTechnician = new VerifyTechnician;
      $verifyTechnician->Technician_ID=$request->inputIndex;  
      $verifyTechnician->About_Field =$request->comment;  

      if ($request->hasfile('Certificate')){
        $file = $request->file('Certificate');
        $extension = $file->getClientoriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads/certificate/', $filename);
        $verifyTechnician->Certificate = $filename;
    } else {
        return $request;
        $verifyTechnician->Certificate = '';
    }
        
    

      $verifyTechnician->save(); 
      return view('/VerifyTechnician');

  }else{



    return back()->with('error','Enter your correct Technician ID');


  }





}





  public function indexVerifyTechnician(){
        
      return view('VerifyTechnician');
  }


  public function indexVerifyTechDetails(){
   

    if(session()->has('AdminID')){

      $Verifytechnician = VerifyTechnician::join('technicians', 'verify_technicians.Technician_ID', '=', 'technicians.id')->get();

        return view('VerifyTechDetails')->with('Verifytechnician',$Verifytechnician);


  }

  return redirect('/Admin/login');
   

  }


  public function indexCheckTechDetails($Technician_ID){


    if(session()->has('AdminID')){

      
    $VeriTechnician = VerifyTechnician::join('technicians', 'technicians.id', '=', 'verify_technicians.Technician_ID')->where('verify_technicians.Technician_ID', '=',$Technician_ID)->get();
    return view('technician.VerifyDetails')->with('VeriTechnician', $VeriTechnician);


  }

  return redirect('/Admin/login');
   
  }


  public function indexUpdateVerifyTech($Technician_ID){
    
    //$VtechData = VerifyTechnician::where('Technician_ID', '=',$Technician_ID)->first();
    //$VtechData = DB::table('verify_technicians')->where('Technician_ID', '=',$Technician_ID)->first();
    //$VtechData = VerifyTechnician::find($Technician_ID);
    //$VtechData->Verify = 1;
    //$VtechData->save();

     
    $VtechData = DB::table('verify_technicians')
              ->where('Technician_ID', $Technician_ID)
              ->update(['Verify' => 1]);

    
    //$VtechData->save();
    return redirect()->back();
  }



  public function indexDeletVerifyTech($Technician_ID){


    DB::table('verify_technicians')->where('Technician_ID', $Technician_ID)->delete();

    return redirect()->back();
  }



  public function indexVerifyDetails(){

    if(session()->has('technicianID')){

      return view('technician.VerifyDetails');


  }
 
  return redirect('/Admin/login');
  }



  public function indexSendMail(){

    return view('SendMail');

  }




  public function SendMail($id){


    $Email = DB::table('technicians')->select('Email')->where('id',$id)->first();

    $customer = DB::table('customers')->select('*')->where('id',session('customerID'))->first();

    
    // *** To Email ***
    $to = $Email->Email;

    // *** Subject Email ***
    $subject = "elecTechnician Repairing Service";
//
    // *** Content Email ***
    $content = "You got a request from a customer for repairing service. Ready and provide your service as customer need
    
                  ____Customer Details____
                  Name : $customer->FirstName $customer->LastName
                  Email: $customer->Email
                  Contact No: $customer->ContactNumber
                  
                
                ";
//
    //*** Head Email ***
    $headers = "From: ranganalak@gmail.com\r\n";
//
    //*** Show the result... ***
    if (mail($to, $subject, $content, $headers))
    {
        //return view('/ResetPassword/Edit')->with('success_message','Mail was sent successfully');;
        //return redirect()->back()->with('message', 'Mail was sent successfully and Check Your mail box');
        return view('/SendMail');
    }else{

      return redirect()->back();
    }

  }




}
