<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class customerrequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'phone' => 'required|numeric|between:1000000,99999999999',
            'price' =>'required|numeric|max:1000',
            'subscribe' => 'required|string',
            'statue' => 'required|string',
            'expiredate' => 'required|date',
        ];
    }
}
