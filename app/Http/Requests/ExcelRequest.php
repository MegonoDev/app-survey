<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ExcelRequest extends FormRequest
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
        if (Auth::user()->role_id == 1) {
            $rules = [
                'dealer' => 'required',
                'tahun' => 'required',
                'bulan' => 'required'
            ];
        } else {
            $rules = [
                'tahun' => 'required',
                'bulan' => 'required'
            ];
        }
        return $rules;
    }

    public function messages()
    {
        return [
            'dealer.required' => 'Dealer mohon diisi',
            'bulan.required' => 'Bulan mohon diisi',
            'tahun.required' => 'Tahun mohon diisi'
        ];
    }
}
