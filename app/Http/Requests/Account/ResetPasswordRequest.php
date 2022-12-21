<?php

namespace App\Http\Requests\Account;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
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
            'password' => 'bail|required|digits_between:5,8',
            'conf_password' => 'bail|required|same:password',
        ];
    }

    public function messages()
    {
        return [
            'password.required' => 'Vui lòng nhập mật khẩu',
            'password.digits_between' => 'Mật khẩu từ 5-8 ký tự',
            'conf_password.same' => 'Xác nhận mật khẩu chưa khớp, vui lòng nhập lại',
            'conf_password.required' => 'Vui lòng xác nhận mật khẩu',
        ];
    }
}
