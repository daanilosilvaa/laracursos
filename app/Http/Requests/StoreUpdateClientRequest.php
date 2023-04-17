<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateClientRequest extends FormRequest
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
            'name' => ['required','string', 'min:3', 'max:255'],
            'email' => ['required', 'email',"unique:clients,email,{$id},id"],
            'phone' => ['required','min:8'],
            'description'=> ['required','min:3', 'max:10000'],

        ];

        if ($this->method() == 'PUT') {
            //nenhuma regra aplicada .
        }

        return $rules;

    }
}
