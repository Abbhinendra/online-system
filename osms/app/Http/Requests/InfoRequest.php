<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class InfoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(Auth::check()){
            return true;
        }
        else{
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title'=>'required|string|max:200',
            'description'=>'max:10000',
            'name'=>'required|string|max:100',
            'address1'=>'required|string|max:200',
            'address2'=>'max:200',
            'map_address'=>' nullable|url|max:600',
            'city'=>'max:200',
            'state'=>'max:100',
            'zip'=>'max_digits:6',
            'email'=>'email|max:100',
            'number'=>['required', 'regex:/^(\+?\d{1,3}[- ]?)?\d{10}$/'],
            'date'=>'required|date',

        ];
    }

    public function messages()
    {
        return [
            
            'number.required' => 'The phone number is required.',
            'number.regex' => 'The phone number format is invalid.',
        ];
    }
}
