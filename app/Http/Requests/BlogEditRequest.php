<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogEditRequest extends FormRequest
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
            'name' => 'required|unique:name',
            'title' => 'required|unique:title|max:400',
            'content' => 'required|min:20|max:90000'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên Blog không được để trống',
            'name.unique' => 'Tên Blog đã được sử dụng',
            'content.required' => 'Nội dung blog không được để trống',
            'content.min' => 'Nội dung blog quá ngắn',
            'content.max' => 'Nội dung quá dài, vui lòng thử lại'
        ];
    }
}
