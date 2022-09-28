<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavePostRequest extends FormRequest
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
            'tieu_de' => 'required',
            'content1' => 'required',
            'content2' => 'required',
            'author' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'image' => 'mimes:jpg,bmp,png'];
        if($this->id == null){
            $requestRule['image'] = "required|" . $requestRule['image'];
        }
        return $requestRule;
    }

    public function messages()
    {
        return [
            'tieu_de.required' => "Hãy nhập tiêu đề",
            'content1.required' => "Hãy nhập nội dung",
            'content2.required' => "Hãy nhập nội dung",
            'author.required' => "Hãy nhập tên tác giả",
            'email.required' => "Hãy nhập email",
            'phone_number.required' => "Hãy nhập số điện thoại",
            'image.required' => "Hãy up file ảnh",
            'image.mimes' => "Hãy nhập đúng định dạng ảnh",
        ];
    }
}
