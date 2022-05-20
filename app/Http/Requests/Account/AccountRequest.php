<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccountRequest extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            // 'sex' => 'required',
            'email' => 'required|unique:accounts',
            'phone' => 'required|unique:accounts',
            'password' => 'required',
            'conf_password' => 'required|same:password',
            'address'=>'required',
            'birth_day' => 'required'
        ];
    }
    public function messages(){
        return [
            'first_name.required' => 'Vui lòng nhập họ của bạn',
            'name.required' => 'Vui lòng nhập tên của bạn',
            'sex.required' => 'Vui lòng chọn giới tính',
            'email.required' => 'Vui lòng nhập email',
            'email.unique' => 'Email đã được sử dụng',
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'phone.unique' => 'Số điện thoại đã được sử dụng',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'conf_password.same' => 'Mật khẩu chưa khớp, vui lòng nhập lại',
            'conf_password.required' => 'Vui lòng nhập lại mật khẩu',
            'address.required' => 'Vui lòng nhập địa chỉ của bạn',
            'birth_day.required' => 'Vui lòng nhập sinh nhật của bạn'
        ];
    }

}
