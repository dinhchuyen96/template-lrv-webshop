<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentBlogRequest extends FormRequest
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
            'comment' => 'required|string|min:10|max:255',
            'name' => 'required|min:2|max:30',
            'email' => 'required|email|min:10|max:100',
            'webside' => 'nullable|max:100|min:5|string',
        ];
    }
    public function messages()
    {
        return [
            'comment.required' => 'Vui lòng nhập bình luận',
            'comment.min' => 'Bình luận quá ngắn',
            'comment.max' => 'Bình luận quá dài',
            'name.required' => 'Tên không được để trống',
            'name.min' => 'Tên quá ngắn, vui lòng nhập lại',
            'name.max' => 'Tên quá dài, vui lòng nhập lại',
            'email.required' => 'vui lòng nhập email của bạn',
            'email.email' => 'Vui lòng nhập đúng địa chỉ email của bạn',
            'email.min' => 'Vui lòng nhập đúng địa chỉ email của bạn',
            'email.max' => 'Vui lòng nhập đúng địa chỉ email của bạn',
            'webside.max' => 'Địa chỉ webside quá dài',
            'webside.min' => 'Địa chỉ webside quá ngắn',
        ];
    }
}
