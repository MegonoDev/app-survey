<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HadiahRequest extends FormRequest
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
            'member_id' => 'required',
            'is_hangus' => 'required',
            'hadiah' => 'required_if:is_hangus,0',
            'kode' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'hadiah.required_if' => 'hadiah mohon diisi ya :)...',
            'member_id.required' => 'member tidak terisi :(... browser tidak support',
            'kode.required' => 'kode tidak terisi :(...browser tidak support',
        ];
    }
}
