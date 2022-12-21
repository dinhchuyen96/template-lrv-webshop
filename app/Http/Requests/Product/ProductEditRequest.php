<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductEditRequest extends FormRequest
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
        // dd($this->product->id);
        return [
            'name' => 'required|unique:products,name,'.$this->product->id,
            'price' => 'required|numeric',
            'number_sale' => 'numeric',
            'category_id' => 'required|numeric',
            'sale_price' => 'numeric|min:0|lt:price',
            'upload' => 'image|mimes:jpg,png,jpeg,gif,svg|max:5120',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên sản phẩm không được để trống',
            'name.unique' => 'Tên sản phẩm đã được sử dụng',
            'price.numeric' => 'Giá sản phẩm phải là số',
            'number_sale.numeric' => 'Mục này phải là số',
            'upload.required' => 'Anh sản phẩm không được để trống',
            'price.required' => 'Giá sản phẩm không được để trống',
            'sale_price.numeric' => 'Giá khuyễn mãi phải là số',
            'category_id.required' => 'Tên danh mục không được để trống',
            // 'upload.required' => 'Vui lòng chọn ảnh',
            'upload.mimes' => 'Ảnh phải có định dạng VD jpg, jpeg, gif, png ',
            'upload.max' => 'Ảnh quá lớn',
        ];
    }
}
