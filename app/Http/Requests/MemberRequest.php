<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MemberRequest extends FormRequest
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
            'nama' => 'required|string|max:32',
            'jenis_kelamin' => 'required',
            'alamat' => 'required|string|max:90',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'handphone' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nama.required' => 'Nama Mohon Di isi',
            'jenis_kelamin.required' => 'Jenis Kelamin Belum di Pilih',
            'alamat.required' => 'Alamat Mohon Di isi',
            'tempat_lahir.required' => 'Tempat Lahir Mohon Di isi',
            'tanggal_lahir.required' => 'Tanggal Lahir Mohon Di isi',
            'handphone.required' => 'Nomer Handphone Mohon Di isi'
        ];
    }
}
