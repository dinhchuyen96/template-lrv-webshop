<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreateRequest extends FormRequest
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
            'name' => 'required|unique:products',
            'price' => 'required|numeric',
            'category_id' => 'required|numeric',
            'sale_price' => 'lt:price',
            'upload' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:5120'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên sản phẩm không được để trống',
            'name.unique' => 'Tên sản phẩm đã được sử dụng',
            'price.numeric' => 'Giá sản phẩm phải là số',
            'price.required' => 'Giá sản phẩm không được để trống',
            'sale_price.numeric' => 'Giá khuyễn mãi phải là số',
            'category_id.required' => 'Tên danh mục không được để trống',
            'upload.required' => 'Ảnh sản phẩm không được để trống',
            'upload.mimes' => 'Ảnh phải có định dạng VD jpg, jpeg, gif, png ',
            'upload.max' => 'Ảnh quá lớn',
        ];
    }
}
