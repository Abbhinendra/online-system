<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\PasswordCheckRequest;
class changePasswordController extends Controller
{
    public function changePass(PasswordCheckRequest $request){
     if(Auth::check()){
        $user=User::where('id',Auth::id())->first();
        if($user){
            $user->update(['password'=>$request->input('password')]);
            return redirect()->route('name')->with('message','Password updated successfully');
        }
        else{
            abort(403);
        }
     }else{
        abort(403);
     }
    }
}
