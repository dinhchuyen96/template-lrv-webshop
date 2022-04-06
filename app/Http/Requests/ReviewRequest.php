<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'review' => 'required|max:500|min:10'
        ];
    }
    public function messages()
    {
        return [
            'product_id.required' => 'Có lỗi xảy ra, vui lòng thử lại sau',
            'name_reviewer.unique' => 'Mời bạn nhập!',
            'review.required' => 'Mời bạn nhập!',
            'name_review.max:50' => 'Tên quá dài, mời bạn nhập lại',
            'name_review.min:4' => 'Mời bạn nhập đầy đủ họ-tên',
            'review.max:500' => 'Bài viết quá dài, tối đa 500 ký tự',
            'review.min:10' => 'Review quá ngắn, mời bạn nhập lại'
        ];
    }
}
