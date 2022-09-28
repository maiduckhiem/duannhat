<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveSlideShow extends FormRequest
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
            'link_lk' => 'required',
            'image' => 'mimes:jpg,bmp,png'];
        if($this->id == null){
            $requestRule['image'] = "required|" . $requestRule['image'];
        }
        return $requestRule;
    }

    public function messages()
    {
        return [
            'image.required' => "Hãy up file ảnh",
            'image.mimes' => "Hãy nhập đúng định dạng ảnh",
            'link_lk.required' => "Hãy nhập link slide",
            
        ];
    }
}
