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
            'nama' => 'required|string|max:50',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required|string|max:90',
            'id_prov' => 'required',
            'id_kab' => 'required',
            'id_kel' => 'required',
            'id_kec' => 'required',
            'email' => 'required|email',
            'handphone' => 'required|min:10|max:13',
            'ketentuan' => 'required'
            // 'jenis_kelamin' => 'required',
            // 'id_seri' => 'required',
            // 'kendaraan' => 'required',
            // 'id_merk' => 'required',
            // 'motorbaru' => 'required',
            // 'motorbaru1' => 'required',
            // 'pekerjaan' => 'required',
            // 'perkawinan' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'nama.required' => 'Nama Mohon Di isi',
            'email.required' => 'Email Dilarang Kosong',
            'email.email' => 'Email Anda Tidak Benar',
            'alamat.required' => 'Alamat Mohon Di isi  ',
            'tempat_lahir.required' => 'Tempat Lahir Mohon Di isi',
            'tanggal_lahir.required' => 'Tanggal Lahir Mohon Di isi',
            'handphone.required' => 'Nomer Handphone Mohon Di isi dengan Benar',
            'handphone.max' => 'No Handphone harus benar ',
            'handphone.min' => 'No Handphone harus benar',
            'id_prov.required' => 'Provinsi Belum Di pilih',
            'id_kab.required' => 'Kabupaten/Kota Belum Di pilih',
            'id_kec.required' => 'Kecamatan Belum Di pilih',
            'id_kel.required' => 'Kelurahan Belum Di pilih',
            'ketentuan.required' => 'Silahkan Ceklis Syarat dan Ketentuan'
            // 'jenis_kelamin.required' => 'Jenis Kelamin Belum di Pilih',
            // 'id_merk.required' => 'Merk Motor Belum Di pilih',
            // 'id_seri.required' => 'Tipe Kendaraan Belum Di pilih',
            // 'kendaraan.required' => 'Kendaraan Belum Di pilih',
            // 'motorbaru.required' => 'Silahkan Jawab Pertanyaan',
            // 'motorbaru1.required' => 'Silahkan Memilih Pertanyaan',
            // 'pekerjaan.required' => 'Pekerjan Belum Di pilih',
            // 'perkawinan.required' => 'Status Belum Di pilih',
        ];
    }
}

