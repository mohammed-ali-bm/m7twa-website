<?php

namespace App\Http\Requests\Guest;

use App\Rules\SaudiMobileNumber;
use Illuminate\Foundation\Http\FormRequest;

class StoreGuestRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'job_title' => ['max:255'],
            'company' => ['max:255'],
            'gender' => ['required', "in:male,female"],
            "email" => ['required', 'email', 'max:255', "unique:guests,email"],
            "phone" => [new SaudiMobileNumber(), "required", "unique:guests,phone"],
            // 'job_title' => [ 'string' , 'max:255' , 'unique:pages,slung' ], 
            'city' => ['required'],
            'address' => ['required'],


        ];
    }
}
