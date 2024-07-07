<?php

namespace App\Http\Requests\Questions;

use App\Rules\SaudiMobileNumber;
use Illuminate\Foundation\Http\FormRequest;

class StoreQuestionRequest extends FormRequest
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
            'question' => ['required', 'string', 'max:255'],
            "mobile" => ["required" , "exists:guests,phone" , new SaudiMobileNumber() ],
            "session_token" => ['required', 'exists:sessions,token,status,active'],
            "speaker_id" => ['required', 'exists:speakers,id'],



        ];
    }

    // customized error messages
    public function messages()
    {
        return [
            'mobile.exists' => 'لم يتم العثور على رقم الجوال ، يرجى  إدخال  رقم الحوال الذي قمت بالتسجيل به مسبقاً',
            'session_token.exists' => 'لا يمكن إرسال اسئلة لهذه الجلسة',
            'speaker_id.exists' => 'يرجى إختيار الضيف من القائمة',
        ];
    }
}
