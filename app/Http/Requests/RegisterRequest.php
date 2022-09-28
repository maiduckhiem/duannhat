<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required',
            'password_confirmation' => 'required_with:password|same:password'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Hãy nhập tên",
            'email.required' => "Hãy nhập email",
            "email.email" => "Email không đúng định dạng",
            "password.required" => "Hãy nhập mật khẩu",
            "password_confirmation.required_with" => "Hãy nhập lại mật khẩu",
            "password_confirmation.same" => "Mật khẩu không trùng khớp"
        ];
    }
}