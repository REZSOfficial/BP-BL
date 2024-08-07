<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataRequest extends FormRequest
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
            'name' => 'required|min:5|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'over18' => 'accepted',
            'accept' => 'accepted',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Kérjük adja meg a nevét.',
            'name.min' => 'A névnek minimum 5 karatker hosszúnak kell lennie.',
            'name.max' => 'A névnek maximum 255 karatker hosszúnak kell lennie.',
            'email.required' => 'Kérjük adja meg az email címét.',
            'email.email' => 'A megadott email nem helyes.',
            'phone.required' => 'Kérjük adja meg a telefonszámát.',
            'over18.accepted' => 'Kötelező.',
            'accept.accepted' => 'Kötelező.',
        ];
    }
}
