<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class passwordCheck implements Rule
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
      return  preg_match('/[A-Z]/', $value) &&  preg_match('/[a-z]/', $value) && preg_match('/\d/', $value) && preg_match('/[^a-zA-Z0-9]/', $value);        
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute must contain at least one uppercase letter, one lowercase letter, one number, and one special character.';
    }
}
