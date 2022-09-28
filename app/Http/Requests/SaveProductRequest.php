<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveProductRequest extends FormRequest
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
        $requestRule =  [
            'name' => ['required'],
            'description' => 'required',
            'price' => 'required',
            'link_sp' => 'required',
            'quantity' => 'required',
            'image' => 'mimes:jpg,bmp,png'];
        if($this->id == null){
            $requestRule['image'] = "required|" . $requestRule['image'];
        }
        return $requestRule;
    }

    public function messages()
    {
        return [
            'name.required' => "Hãy nhập tên Sản phẩm",
            'description.required' => "Hãy nhập mô tả",
            'image.required' => "Hãy up file ảnh",
            'image.mimes' => "Hãy nhập đúng định dạng ảnh",
            'price.required' => "Hãy nhập giá",
            'link_sp.required' => "Hãy nhập link sản phẩm",
            'quantity.required' => "Hãy nhập số lượng",
        ];
    }
}
