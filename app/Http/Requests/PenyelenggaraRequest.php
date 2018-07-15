<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PenyelenggaraRequest extends FormRequest
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
            'nama' => 'required|string',
            'organizer_id' => 'required|string'
        ];
    }
    public function messages(Type $var = null)
    {
        return[
            'nama.required' => 'Penyelenggara Dilarang Kosong',
            'organizer_id.required'  => 'Pilih Penyelenggara',
        ];
    }
}
