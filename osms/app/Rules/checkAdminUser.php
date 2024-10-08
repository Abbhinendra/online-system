<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class checkAdminUser implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {

        if($value!='Admin' && $value!='User'){
          return false;
        }
         return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The Type not match any type like Admin or User.';
    }
}
