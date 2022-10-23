<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductsRequest extends FormRequest
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
            'name_en'=>['required','string','max:255'],
            'name_Ar'=>['required','string','max:255'],
            'price'=>['required','numeric','between:1,999999.99'],
            'Quantity'=>['required','integer','between:1,999'], 
            'Code'=>['required','integer','between:1,999999','unique:products,code'],
            'Status'=>['required','in:0,1'],      
            'details_en'=>['required','string'],
            'details_ar'=>['required','string'],
            'image'=>['required','max:1000','mimes:jpg,png,jpeg'],
        ];
    }
}
