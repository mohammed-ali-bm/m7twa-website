<?php

namespace App\Http\Requests;

use App\Rules\SaudiMobileNumber;
use Illuminate\Foundation\Http\FormRequest;

class StoreFlatRequest extends FormRequest
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

            "area" => ['required', 'string', 'max:255',],
            "price" => ['required', 'string', 'max:255',],
            "attrs" => ['array'],
        ];
    }

    function messages()
    {
        return [
            'statement.required' => 'صورة الايصال مطلوبة',
            'statement.file' => 'صورة الايصال يجب ان تكون ملف pdf او صورة',
            'statement.mimes' => 'صورة الايصال يجب ان تكون بهذه الصيغة: pdf, doc, docx, jpg, jpeg, png',
            'statement.max' => 'صورة الايصال يجب ان تكون اقل من 4 ميجا بايت',
            "id_number.required" => "رقم الهوية مطلوب",
            "id_number.min" => "رقم الهوية يجب ان يكون 10 ارقام",
            "id_number.max" => "رقم الهوية يجب ان يكون 10 ارقام",
            "id_number.unique" => "رقم الهوية هذا مسجل مسبقا ، اذا قمت بالتسجيل مسبقاً لا تقم بالتسجيل مرة اخرى",
            "mobile.unique" => "رقم الجوال هذا مسجل مسبقا ، اذا قمت بالتسجيل مسبقاً لا تقم بالتسجيل مرة اخرى",
            "email.unique" => "رقم الجوال هذا مسجل مسبقا ، اذا قمت بالتسجيل مسبقاً لا تقم بالتسجيل مرة اخرى",
            "company.required" => "الجهة مطلوبة",
            "service.required" => "يرجى إختيار نوع الخدمة",
        ];
    }
}
