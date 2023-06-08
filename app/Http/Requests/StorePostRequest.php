<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            // // 'brand_code' => 'required|max:255',
            // // 'brand_name' => 'required',
            // // unitcode
            // 'code' => 'required',
            // 'unit_code' => 'required', 
            // 'type' => 'required',
            // // groupproduct
            // 'group_name' => 'required',
            // // exchangerate 
            // 'curency_no' => 'required',
            // 'exchange_rate' => 'required',
            // // currency
            // 'curency_no' => 'required',
            // 'curency' => 'required',
            // // paymentMethod
            // 'paymentmethod_code' => 'required',
            // 'paymentmethod' => 'required',



        ];
    }
}
