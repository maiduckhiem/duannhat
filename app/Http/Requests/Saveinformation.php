<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Saveinformation extends FormRequest
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
            'name' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
        ];
           

        
       
    }   

    public function messages()
    {
        return [
            'name.required' => "Hãy nhập tên",
            'address.required' => "Hãy nhập địa chỉ",
            'email.required' => "Hãy nhập email",
            'phone_number.required' => "Hãy nhập số điện thoại",
            'email.required' => "Hãy nhập email",
        ];
        
    }
}
