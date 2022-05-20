<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;


class ReviewRequest extends FormRequest
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
            'product_id' => 'required',
            'name_reviewer' => 'required|max:50|min:4',
            'content_review' => 'required|string|max:500|min:10'
        ];
    }
    public function messages()
    {
        return [
            'product_id.required' => 'Có lỗi xảy ra, vui lòng thử lại sau',
            'content_review.required' => 'Mời bạn nhập!',
            'name_review.max' => 'Tên quá dài, mời bạn nhập lại',
            'name_review.min' => 'Mời bạn nhập đầy đủ họ-tên',
            'content_review.max' => 'Bài viết quá dài, tối đa 500 ký tự',
            'content_review.min' => 'Review quá ngắn, mời bạn nhập lại'
        ];
    }
}
