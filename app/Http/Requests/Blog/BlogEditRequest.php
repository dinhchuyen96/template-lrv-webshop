<?php

namespace App\Http\Requests\Blog;

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
            'name' => 'required|unique:blogs,name,'.$this->blog->id,
            'title' => 'required|max:7000|unique:blogs,title,'.$this->blog->id,
            'content' => 'required|min:20|max:90000',
            'upload' => 'image|mimes:jpg,png,jpeg,gif,svg|max:5120',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên Blog không được để trống',
            'name.unique' => 'Tên Blog đã được sử dụng',
            'title.unique' => 'Title Blog đã được sử dụng',
            'title.max' => 'Title Blog quá dài',
            'content.required' => 'Nội dung blog không được để trống',
            'content.min' => 'Nội dung blog quá ngắn',
            'content.max' => 'Nội dung quá dài, vui lòng thử lại',
            'upload.required' => 'Ảnh blog không được để trống',
            'upload.mimes' => 'Tệp phải có định dạng VD jpg, jpeg, gif, png',
            'upload.max' => 'file quá lớn, vui lòng chọn file nhỏ hơn',
        ];
    }
}
