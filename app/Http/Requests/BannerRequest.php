<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
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
            'title' => 'required',
            'upload' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:5120',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Title không được để trống',
            'upload.required' => 'Logo không được để trống',
            'upload.mimes' => 'Logo phải có định dạng VD jpg, jpeg, gif, png',
            'upload.max' => 'file quá lớn, vui lòng chọn file nhỏ hơn',
        ];
    }
}
