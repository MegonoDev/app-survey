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
            'kode_dealer' => 'required|string|unique:dealereos'
        ];
    }
    public function messages(Type $var = null)
    {
        return[
            'kode_dealer.required' => 'Kode Dealer Dilarang Kosong',
            'kode_dealer.unique' => 'Kode Dealer Sudah Ada',
        ];
    }
}
