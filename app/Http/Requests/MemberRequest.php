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
            'handphone' => 'required|min:11|max:13'
            // 'handphone' =>'regex: / (62) [0-9] {12} /'
        ];
    }

    public function messages()
    {
        return [
            'nama.required' => 'Nama Mohon Di isi',
            'jenis_kelamin.required' => 'Jenis Kelamin Belum di Pilih',
            'alamat.required' => 'Alamat Mohon Di isi  ',
            'tempat_lahir.required' => 'Tempat Lahir Mohon Di isi',
            'tanggal_lahir.required' => 'Tanggal Lahir Mohon Di isi',
            'handphone.required' => 'Nomer Handphone Mohon Di isi dengan Benar',
            'handphone.max' => 'No Handphone harus benar maksimal 12 angka',
            'handphone.min' => 'No Handphone harus benar manimal 11 angka',
            // 'handphone.regex' => 'Format Nomer Handphone di awali dengan (62) exp:6281234567890'
        ];
    }
}
