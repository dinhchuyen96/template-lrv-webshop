<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'address_1' => 'required|max: 150',
            'address_2' => 'max: 150',
            'email_1' => 'string|email|max: 100|min:9',
            'email_2' => 'string|email|max: 100|min:9',
            'phone_1' => 'required|max:20',
            'phone_2' => 'max:20',
            'fax_1' => 'max:20',
            'fax_2' => 'max:20',
        ];
    }
    public function messages()
    {
        return [
            'address_1.required' => 'Vui lòng nhập địa chỉ',
            'address_1.max' => 'Địa chỉ quá dài, vui lòng nhập lại',
            'address_2.max' => 'Địa chỉ quá dài, vui lòng nhập lại',
            'email_1.max' => 'Địa chỉ email quá dài, vui lòng nhập lại',
            'email_1.min' => 'Địa chỉ email quá ngắn, vui lòng nhập lại',
            'email_1.email' => 'Vui lòng nhập đúng địa chỉ email của bạn',
            'email_2.max' => 'Địa chỉ email quá dài, vui lòng nhập lại',
            'email_2.min' => 'Địa chỉ email quá ngắn, vui lòng nhập lại',
            'email_2.email' => 'Vui lòng nhập đúng địa chỉ email của bạn',
            'phone_1.required' => 'Vui lòng nhập ít nhất một số điện thoại',
            'phone_1.max' => 'Số điện thoại quá dài, vui lòng nhập lại',
            'phone_2.max' => 'Số điện thoại quá dài, vui lòng nhập lại',
            'fax_1.max' => 'Số fax quá dài, vui lòng nhập lại',
            'fax_2.max' => 'Số fax quá dài, vui lòng nhập lại',
        ];
    }
}
