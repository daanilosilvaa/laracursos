<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateCourseRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {

        $validation = 'regex:/^[0-9]+(\.[0-9][0-9]?)?$/';
        $rules =  [
            'name' => ['required','string', 'min:3', 'max:255'],
            'description' => ['required','string', 'min:3','max:50000'],
            'image' => ['required','image'],
            'price_current' => ['required',$validation],
            'price_commission' => ['required', $validation,],
            'link' => ['required', 'string']
        ];

        if($this->method() == 'PUT'){
            $rules['image'] = ['nullable', 'image'];
        }


        return $rules;
    }
}
