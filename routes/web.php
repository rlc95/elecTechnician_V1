<?php

use Illuminate\Support\Facades\Route;
use app\Models\Technician;
use App\Models\Customer;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contactus');
});

Route::get('/service', function () {
    return view('services');
});

Route::get('/aboutUs', function () {
    return view('aboutus');
});

Route::get('/technicianLogin', function () {
    
        if(session()->has('technicianID'))
        {

           
            return view('technicianLogin');
        }
    
    
        return redirect('/technician/login');
   
});


Route::get('/customerLogin', function () {

        if(session()->has('customerID'))
        {

            //return redirect('customerLogin');
            return view('customerLogin');
        }

        return redirect('/customer/login');

});



Route::get('/technician','TechnicianController@indextechnician');
Route::get('/services/{id}','CustomerController@indexservices');
Route::get('/customer','CustomerController@indexcustomer');
Route::post('/technician','TechnicianController@store');
Route::post('/customer','CustomerController@store');
//Route::post('/MeetTechnician','CustomUserController@store');
Route::post('/MeetTechnician/{id}','CustomUserController@findTechnician');
Route::get('/MeetTechnician','CustomUserController@indexMeetTechnician');
Route::post('/technicianLogin','TechnicianController@check');
Route::post('/customerLogin','CustomerController@cuscheck');
Route::get('/technicianDetails','TechnicianController@indextechnicianDetails');
Route::get('/customerDetails','CustomerController@indexcustomerDetails');
Route::post('/VerifyTechnician/{id}','VerifyTechController@store');
Route::get('/VerifyTechnician','VerifyTechController@indexVerifyTechnician');
Route::get('/VerifyTechDetails','VerifyTechController@indexVerifyTechDetails');
Route::get('/technician/register','TechnicianController@indextechRegister');
Route::get('/technician/login','TechnicianController@indextechLogin');
Route::get('/VerifyTechDetails/{Technician_ID}','VerifyTechController@indexCheckTechDetails');
Route::get('/MarkAsVerified/{Technician_ID}','VerifyTechController@indexUpdateVerifyTech');
Route::get('/DeleteTechnician/{Technician_ID}','VerifyTechController@indexDeletVerifyTech');
Route::get('/customer/register','CustomerController@indexCusRegister');
Route::get('/customer/login','CustomerController@indexCusLogin');
Route::get('/Admin/login','AdminController@indexAdminLogin');
Route::post('/Admin/Dashboard','AdminController@AdminCheck');
Route::get('/Admin/Dashboard','AdminController@indexAdminDashboard');
Route::get('/technician/VerifyDetails','VerifyTechController@indexVerifyDetails');
Route::get('/technician/VerifyDashboard','TechnicianController@indexVerifyDashboard');
Route::get('/logout','TechnicianController@logout');
Route::get('/Cuslogout','CustomerController@logout');
Route::get('/Adminlogout','AdminController@logout');
Route::get('/ResetPassword/RequestReset','PasswordResetController@indexRequestReset');
Route::get('/ResetPassword/NewPassword','PasswordResetController@indexNewPassword');
Route::get('/ResetPassword/Edit','PasswordResetController@indexEdit');
Route::post('/ResetPassword/Edit','PasswordResetController@ResetPassword');
Route::get('/ResetPassword/TechRequestReset','PasswordResetController@indexTechRequestReset');
Route::get('/ResetPassword/TechNewPassword','PasswordResetController@indexTechNewPassword');
Route::get('/SendMail','VerifyTechController@indexSendMail');
Route::get('/SendMail/{id}','VerifyTechController@SendMail');
//Route::get('/Findservices/{id}','CustomerController@indexFindservices');


