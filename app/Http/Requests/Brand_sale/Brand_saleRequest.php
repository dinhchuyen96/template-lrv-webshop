<?php

namespace App\Http\Requests\Brand_sale;

use Illuminate\Foundation\Http\FormRequest;

class Brand_saleRequest extends FormRequest
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
            'name' => 'required|max:50|unique:brand_sales',
            'category_id' => 'required',
            'upload' => 'image|mimes:jpg,png,jpeg,gif,svg|max:3056',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Vui lòng nhập tên thương hiệu',
            'category_id.required' => 'Vui lòng chọn',
            'name.max' => 'Tên thương hiệu quá dài',
            // 'upload.required' => 'Logo không được để trống',
            'upload.mimes' => 'Logo phải có định dạng VD jpg, jpeg, gif, png',
            'upload.max' => 'file quá lớn, vui lòng chọn file nhỏ hơn',
        ];
    }
}
