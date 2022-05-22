<?php

namespace App\Http\Requests\Account;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|exists:accounts',
            'password' => 'required|max:10|min:5',
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Email không được để trống',
            'email.exists' => 'Email không hợp lệ',
            'password.required' => 'Mời bạn nhập mật khẩu',
            'password.min' => 'Mật khẩu phải từ 5-10 ký tự',
            'password.max' => 'Mật khẩu phải từ 5-10 ký tự'
        ];
    }
}
