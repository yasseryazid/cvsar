<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class UrlWithDash implements Rule
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
        $url = str_replace(' ', '-', $value);

        // Validate the modified URL format
        return filter_var($url, FILTER_VALIDATE_URL) !== false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute must be a valid URL with spaces replaced by "-".';
    }
}
