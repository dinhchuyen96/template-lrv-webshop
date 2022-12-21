<?php

namespace App\Http\Requests\Account;

use Illuminate\Foundation\Http\FormRequest;

class ForgetPasswordRequest extends FormRequest
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
            'email' => 'required|email|exists:accounts',
        ];
    }

    public function messages()
    {
        return [
            'email.email' => 'Bạn chưa nhập đúng định dạng email',
            'email.required' => 'Email không được để trống',
            'email.exists' => 'Có vẻ bạn chưa đăng ký',
        ];
    }
}
