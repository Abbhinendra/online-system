<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\User;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Notifications\ResetPassword;
use App\Rules\passwordCheck;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller
{
    public function signup(LoginRequest $request){
        $validated = $request->validated();
        User::create($validated);
        return redirect()->route('login')->with('message', 'User registered successfully!');
    }

    public function login(Request $request){
    $checkLogin=$request->only('email','password');
    if(Auth::attempt($checkLogin)){
        return redirect()->route('name')->with('message','You Are Logged in!.');
    }
    else{
        return redirect()->back()->with('error', 'invalid credentials!.');
    }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('error', 'You have been logged out!');
    }

    public function forgetPassword(Request $request){
    $email=$request->input('email');
    $resetLink=route('change-pass');
    $user = User::select('email')->where('email', $email)->first();
    if ($user){
        $email=$user->email;
        session()->put('reset-user-email',$email);
        $user->notify(new ResetPassword($resetLink));
        return redirect()->back()->with('success', 'We have sent a password reset link to your registered email address.');
    } else {
        return redirect()->back()->with('message', 'This email does not match any registered emails.');
    }
}

public function changepassword(Request $request)
{
  $request->validate([
    'password'=>['required','string','confirmed','min:6','max:8', new passwordCheck()],
  ]);
  $checkEmial=session()->get('reset-user-email');
  if($request->email!=$checkEmial){
    return redirect()->route('change-pass')->with('message','invailid email address!.');
  }
  else{
   User::where('email',$checkEmial)->update([
    'password'=>Hash::make($request->password),
    ]);
    session()->forget('reset-user-email');
    return redirect()->route('loginpage')->with('message','Password Change Successfully!.');
}
 
}
}