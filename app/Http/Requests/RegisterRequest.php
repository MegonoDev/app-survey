<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'password' => 'required',
            'no_hanphone' => 'required',
            'email' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Username Mohon Di isi',
            'password.required' => 'Password Mohon Di isi',
            'no_hanphone.required' => 'No Handphone Mohon Di isi',
            'email.required' => 'Email Mohon Di isi',
        ];
    }
}
