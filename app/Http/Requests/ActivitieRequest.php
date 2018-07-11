<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActivitieRequest extends FormRequest
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
            'penyelenggara' => 'required',
            'nama_event'    => 'required|unique:activities',
            'alamat'        => 'required',
            'start_event'   => 'required',
            'finish_event'  => 'required',
            'status'        => 'required',
            'ketentuan'     => 'required'
        ];
    }

    public function messages()
    {
        return [
            'penyelenggara.required'   => 'Kolom ini di larang Kosong',
            'nama_event.required'      => 'Kolom ini di larang Kosong',
            'nama_event.unique'        => 'Nama Event Sudah Ada',
            'alamat.required'          => 'Kolom ini di larang Kosong',
            'start_event.required'     => 'Kolom ini di larang Kosong',
            'finish_event.required'    => 'Kolom ini di larang Kosong',
            'status.required'          => 'Kolom ini di larang Kosong',
            'ketentuan.required'       => 'Kolom ini di larang Kosong'
        ];
    }
}
