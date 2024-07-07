<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'store_p_id' => ['required', 'string', 'max:255'],
            'expire_date' => ['required', 'date', 'after:today'],
            "price" => "required|numeric",
            'offers_ids' => ['required', 'array', 'exists:offers,id',],
            'validity_type' => ['required', 'in:date,duration'],
            'expire_date' => ['required_if:validity_type,date', 'nullable', 'date', 'after:today'],
            'duration' => ['required_if:validity_type,duration', 'nullable', 'numeric', 'min:1'],
            "price" => "required|numeric",
            "max_usage" => "nullable|numeric|min:1",
            "offers_counts" => "nullable|array",
        ];
    }
}
