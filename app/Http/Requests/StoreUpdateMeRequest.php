<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateMeRequest extends FormRequest
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
        $id = $this->segment(3);
        $rules =  [
            'title' => ['required','string','min:8','max:255'],
            'facebook' => ['nullable','min:3','max:255'],
            'instagram' => ['nullable','min:3','max:255'],
            'whatsapp' => ['nullable','min:3','max:255'],
            'image' => ['required','image'],
            'description'=> ['required','min:3', 'max:10000'],

        ];

        // if ($this->method() == 'PUT') {
        //    $rules = [
        //    ];
        // }

        return $rules;

    }
}
