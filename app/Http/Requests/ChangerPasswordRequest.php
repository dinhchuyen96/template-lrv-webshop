<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ChangerPasswordRequest extends FormRequest
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
            'old_password' => 'required',
            'new_password' => 'required|different:old_password|min:6|string',
            'conf_password' => 'required|same:new_password',
        ];
    }
    public function messages(){
        return [     
            'old_password.required' => 'Vui lòng nhập mật khẩu',
            'new_password.required' => 'Vui lòng nhập mật khẩu',
            'new_password.different' => 'Mật khẩu mới cần khác mật khẩu cũ',
            'new_password.min' => 'Mật khẩu tối thiểu 6 ký tự',
            'conf_password.same' => 'Mật khẩu chưa khớp, vui lòng nhập lại',
            'conf_password.required' => 'Vui lòng nhập lại mật khẩu',
        ];
    }
}