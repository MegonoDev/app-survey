<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'namalengkap' => 'required',
            'name' => 'required|alpha_dash|unique:users',
            'email' => 'required|string',
            'no_handphone' => 'required'
        ];
    }
    public function messages(Type $var = null)
    {
        return[
            'namalengkap.required' => 'Nama Lengkap Dilarang Kosong',
            'name.required' => 'Username Dilarang Kosong',
            'name.alpha_dash' => 'Username Dilarang Menggunakan spasi',
            'name.unique' => 'Username Sudah Digunakan',
            'email.required' => 'Email Dilarang Kosong',
            'no_handphone.required' => 'No Handphone Dilarang Kosong',
        ];
    }
}
