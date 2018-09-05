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
            'namalengkap' => 'required',
            'name' => 'required|alpha_dash|unique:users',
            'password' => 'required',
            'no_handphone' => 'required',
            'email' => 'required|email',
            'dealereo_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'namalengkap.required' => 'Nama Lengkap Mohon Di isi',
            'name.required' => 'Username Mohon Di isi',
            'name.alpha_dash' => 'Username Dilarang Menggunakan spasi',
            'name.unique' => 'Username Sudah Digunakan',
            'password.required' => 'Password Mohon Di isi',
            'no_handphone.required' => 'No Handphone Mohon Di isi',
            'email.required' => 'Email Mohon Di isi',
            'email.email' => 'Mohon Di isi Dengan Benar Format Email',
            'dealereo_id.required' => 'Kode Dealer Mohon Di isi'
        ];
    }
}
