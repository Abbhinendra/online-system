<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\frontend\ProfileController;
use App\Http\Controllers\frontend\RequestController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\frontend\RequestStatusController;
use App\Http\Controllers\changePasswordController;


//Admin Controller;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\EnginnerController;
use App\http\Controllers\Admin\AllRequestController;
use App\http\Controllers\Admin\assignworkController;
use App\http\Controllers\Admin\usersController;
use App\http\Controllers\Admin\serviceController;
use App\http\Controllers\Admin\changePasswordController as AdminChange;

//custom controller
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\Auth\GoogleController;
use App\Models\Service;
use App\Models\Map;
Route::get('/',function(){
$services=Service::count();
$servicesValue=Service::all();
$map=Map::all();
return view('frontend.home',compact('services','servicesValue','map'));
})->name('name');

//Registration routes;
Route::middleware(['checkLogin'])->group(function(){
    Route::get('/signup',function(){
        return view('auth.signup');
    })->name('signup');

    Route::get('/login',function(){
    return view('auth.login');
    })->name('loginpage');

    Route::get('/reset-password',function(){
        return view('auth.forgot');
   })->name('resetpassword');

   Route::get('/change-password',function(){
    return view('auth.changePassword');
    })->name('change-pass');
});

//Auth Routes;
Route::post('/register',[LoginController::class,'signup'])->name('register');
Route::post('/login',[LoginController::class,'login'])->name('login');
Route::middleware(['checkLogout'])->group(function() {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

//Reset Password;
Route::post('forget-email',[LoginController::class,'forgetPassword'])->name('forget-email');
Route::post('/change-pass',[LoginController::class,'changepassword'])->name('changepassword');


//Profile
Route::middleware(['auth'])->group(function(){
Route::resource('frontend/profile',ProfileController::class);
Route::resource('frontend/request',RequestController::class);
Route::get('/generatePdf',[PDFController::class,'generatePDF'])->name('generatePdf');
Route::get('/status',[RequestStatusController::class,'search'])->name('status');
Route::get('/statusview',[RequestStatusController::class,'index'])->name('statusview');
Route::get('/change-my-password', function(){
 return view('changeuserpassword');
})->name('change-my-password');
Route::post('/changePass',[changePasswordController::class,'changePass'])->name('changePass');
});


//Admin Area Routes

Route::middleware(['auth','can:isAdmin'])->group(function(){
Route::get('/admin',[HomeController::class,'index'])->name('admin');
Route::resource('/admin/enginner',EnginnerController::class);
Route::resource('/admin/allrequests', AllRequestController::class);
Route::resource('/admin/assignwork', assignworkController::class);
Route::resource('/admin/users',usersController::class);
Route::resource('/admin/services', serviceController::class);
Route::resource('/admin/maps', MapController::class);
Route::resource('/admin/changepassword', AdminChange::class);
});



//Custom route

Route::post('/contact-us',[ContactController::class, 'index'])->name('contact-us');
Route::get('/pdf/{id}',[PDFController::class,'generatePDFforTechnician'])->name('pdf');

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
