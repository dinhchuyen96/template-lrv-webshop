<?php

namespace App\Http\Requests\Account;

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
            'first_name' => 'bail|required',
            'last_name' => 'bail|required',
            // 'sex' => 'required',
            'email' => 'bail|required|unique:accounts',
            'phone' => 'bail|required|unique:accounts',
            'password' => 'bail|required|digits_between:5,8',
            'conf_password' => 'bail|required|same:password',
            'address'=>'bail|required',
            'birth_day' => 'bail|required'
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
            'password.digits_between' => 'Mật khẩu từ 5-8 ký tự',
            'conf_password.same' => 'Mật khẩu chưa khớp, vui lòng nhập lại',
            'conf_password.required' => 'Vui lòng nhập lại mật khẩu',
            'address.required' => 'Vui lòng nhập địa chỉ của bạn',
            'birth_day.required' => 'Vui lòng nhập sinh nhật của bạn'
        ];
    }

}
