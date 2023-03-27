<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegformRequest extends FormRequest
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
        return [
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
            'phone' => ['required'],
            'address' => ['required'],
            'city' => ['required'],
            'state' => ['required'],
            'country' => ['required'],
            'postcode' => ['required'],
            'dob' => ['required'],
            'qualification' => ['required'],
            'expdetails' => ['required'],
            'hobby' => ['required'],
            'resumefile' => ['required'],
            'status' => ['required'],
        ];
    }
}
