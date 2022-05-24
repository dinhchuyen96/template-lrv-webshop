<?php

namespace App\Http\Requests\Account;

use Illuminate\Foundation\Http\FormRequest;

class EditAccountRequest extends FormRequest
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
            'sex' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address'=>'required|max:265',
            'birth_day' => 'required'
        ];
    }
    public function messages(){
        return [
            'first_name.required' => 'Vui lòng nhập họ của bạn',
            'name.required' => 'Vui lòng nhập tên của bạn',
            'sex.required' => 'Vui lòng chọn giới tính',
            'address.required' => 'Vui lòng nhập địa chỉ của bạn',
            'address.max' => 'Địa chỉ quá dài, vui lòng nhập lại địa chỉ của bạn',
            'birth_day.required' => 'Vui lòng nhập sinh nhật của bạn'
        ];
    }
}
