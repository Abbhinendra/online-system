<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\frontend\ProfileController;
use App\Http\Controllers\frontend\RequestController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\frontend\RequestStatusController;



//Admin Controller;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\EnginnerController;
use App\http\Controllers\Admin\AllRequestController;

Route::get('/',function(){
return view('frontend.home');
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
});


//Admin Area Routes

Route::middleware(['auth'])->group(function(){
Route::get('/admin',[HomeController::class,'index'])->name('admin');
Route::resource('/admin/enginner',EnginnerController::class);
Route::resource('/admin/allrequests', AllRequestController::class);
});

