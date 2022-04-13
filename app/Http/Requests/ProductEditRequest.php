<?php

namespace App\Http\Requests;

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
            'category_id' => 'required|numeric',
            'sale_price' => 'lt:price',
            'upload' => 'image|mimes:jpg,png,jpeg,gif,svg'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên sản phẩm không được để trống',
            'name.unique' => 'Tên sản phẩm đã được sử dụng',
            'price.numeric' => 'Giá sản phẩm phải là số',
            'upload.required' => 'Anh sản phẩm không được để trống',
            'price.required' => 'Giá sản phẩm không được để trống',
            'sale_price.required' => 'Giá khuyễn mãi không được để trống',
            'sale_price.numeric' => 'Giá khuyễn mãi phải là số',
            'category_id.required' => 'Tên danh mục không được để trống',
            'upload.mimes' => 'Ảnh phải có định dạng VD jpg, jpeg, gif, png '
        ];
    }
}
