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
            'email' => 'required|email',
            'jenis_kelamin' => 'required',
            'alamat' => 'required|string|max:90',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'handphone' => 'required|min:11|max:13',
            'pekerjaan' => 'required',
            'perkawinan' => 'required',
            // 'kendaraan' => 'required',
            'id_kab' => 'required',
            'id_prov' => 'required',
            'id_seri' => 'required',
            'id_merk' => 'required',
            // 'motorbaru' => 'required',
            // 'motorbaru1' => 'required',
            'ketentuan' => 'required'

        ];
    }

    public function messages()
    {
        return [
            'nama.required' => 'Nama Mohon Di isi',
            'email.required' => 'Email Dilarang Kosong',
            'email.email' => 'Email Anda Tidak Benar',
            'jenis_kelamin.required' => 'Jenis Kelamin Belum di Pilih',
            'alamat.required' => 'Alamat Mohon Di isi  ',
            'tempat_lahir.required' => 'Tempat Lahir Mohon Di isi',
            'tanggal_lahir.required' => 'Tanggal Lahir Mohon Di isi',
            'handphone.required' => 'Nomer Handphone Mohon Di isi dengan Benar',
            'handphone.max' => 'No Handphone harus benar ',
            'handphone.min' => 'No Handphone harus benar',
            'pekerjaan.required' => 'Pekerjan Belum Di pilih',
            'perkawinan.required' => 'Status Belum Di pilih',
            'id_prov.required' => 'Provinsi Belum Di pilih',
            'id_kab.required' => 'Kabupaten/Kota Belum Di pilih',
            'id_merk.required' => 'Merk Motor Belum Di pilih',
            'id_seri.required' => 'Tipe Kendaraan Belum Di pilih',
            // 'kendaraan.required' => 'Kendaraan Belum Di pilih',
            // 'motorbaru.required' => 'Silahkan Jawab Pertanyaan',
            // 'motorbaru1.required' => 'Silahkan Memilih Pertanyaan',
            'ketentuan.required' => 'Silahkan Ceklis Syarat dan Ketentuan'
        ];
    }
}

