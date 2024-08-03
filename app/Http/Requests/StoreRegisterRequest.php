<?php

namespace App\Http\Requests;

use App\Rules\SaudiMobileNumber;
use Illuminate\Foundation\Http\FormRequest;

class StoreRegisterRequest extends FormRequest
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

            "mobile" => ['required', 'string', 'max:255', new SaudiMobileNumber],
            // "service" => ['required', 'string', 'max:255'],
            "coupon" => ['nullable', 'string', 'max:255' , 'exists:coupons,code,status,active'],
            "flat_id" => ['nullable', 'exists:flats,id'],
        ];
    }

    function messages()
    {
        return [
            "coupon.exists" => "الكوبون غير صالح ، يرجى التحقق من الكوبون او المتابعة بدون إستخدام كوبون",
        ];
    }
}
