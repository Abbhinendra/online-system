<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use App\Rules\passwordCheck;
use App\Rules\checkAdminUser;
class AdminUserStoreRequest extends FormRequest
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
            'email'=>'required|string|email|max:100|unique:users,email',
            'password'=>['required','string','confirmed','min:6','max:8', new passwordCheck()],
            'name' => 'required|string|regex:/^[a-zA-Z\s]+$/|max:60',
            'type'=>['required','string', new checkAdminUser()]
        ];
    }
    public function messages(){
        return [
        'name'=>'The name only contains characters',
        ];
    }
}
