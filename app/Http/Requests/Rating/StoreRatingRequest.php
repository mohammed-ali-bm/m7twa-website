<?php

namespace App\Http\Requests\Rating;

use App\Models\RatingFactor;
use App\Rules\SaudiMobileNumber;
use Illuminate\Foundation\Http\FormRequest;

class StoreRatingRequest extends FormRequest
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
        $rules  =  [
            "phone" => ["required", "exists:guests,phone", new SaudiMobileNumber()],



        ];


        $query = RatingFactor::where('status', "active")->get();


        foreach ($query as $factor) {

            if ($factor->required == 1) {
                $rules["input_" . $factor->id][] = 'required';
            }

            if ($factor->type == "rating") {
                $rules["input_" . $factor->id] = ['numeric', 'min:1', 'max:5'];
            }else{

                if($factor->required != 1){
                    $rules["input_" . $factor->id] = [ "nullable",'string', 'max:1020'];

                }
            }
        }

        return $rules;
    }


    public function attributes()
    {
        $attributes = [];

        $query = RatingFactor::where('status', "active")->get();




        foreach ($query as $field) {
            $attributes["input_" . $field->id] = $field->title;
        }

        return $attributes;
    }

    public function messages()
    {
        $messages = [];

        $query = RatingFactor::where('status', "active")->get();

        foreach ($query as $field) {
            $messages["input_" . $field->id . ".required"] = "يرجى إختيار تقييم  على السؤال  " .    $field->title;
            $messages["input_" . $field->id . ".numeric"] = "يرجى إختيار تقييم  على السؤال  " .  $field->title;
            $messages["input_" . $field->id . ".min"] = $field->title . " 1 على الأقل";
            $messages["input_" . $field->id . ".max"] = $field->title . " على الاكثر 5";
        }

        return $messages;
    }
}
