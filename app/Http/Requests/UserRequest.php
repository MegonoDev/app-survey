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
            'name'  => 'required|string',
            'email' => 'required|string',
            'no_handphone' => 'required'
        ];
    }
    public function messages(Type $var = null)
    {
        return[
            'name.required' => 'Nama Dilarang Kosong',
            'email.required' => 'Email Dilarang Kosong',
            'no_handphone.required' => 'No Handphone Dilarang Kosong',
        ];
    }
}
