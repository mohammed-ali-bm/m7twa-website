<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class SaudiMobileNumber implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //
    
        if (!preg_match('/^05\d{8}$/', $value) && !preg_match('/^5\d{8}$/', $value) ) {
            $fail( trans("رقم الجوال يجب ان يكون بالصيغة 05XXXXXXX"  , ) );
        }

    }
}
