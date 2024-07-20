<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Request as UserRequest;
class RequestStatusController extends Controller
{
    public function index(){
      return view('status');
    }

    public function search(Request $request){
    $search=$request->input('search');
    $userrequest=UserRequest::where('id', $search)->where('technicine_id','!=','')->where('user_id',auth()->id())->first();
    if($userrequest){
    return view('frontend.request.show',compact('userrequest'));
    }
    else{
        return back()->with("message","Your request is still pending, when your request is assigned to any engineer, I'll show it here..");
    }
    }
}
