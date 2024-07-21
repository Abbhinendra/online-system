<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
class ContactController extends Controller
{
    public function index(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'subject'=>'required|string|max:600',
            'number' =>['required', 'regex:/^[0-9]{10}$/'],
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:6000',
        ]);
       $data=$request->all();
       $success=Mail::to('thakurabhinendra6@gmail.com')->send(new ContactMail($data));
       if($success){
        return back()->with('message', 'Your meesage send successfully our team respond your message as soon as possible!.');
       }
    }
}
