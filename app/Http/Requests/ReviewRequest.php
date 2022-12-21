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
            'content_review' => 'required|string|max:300|min:2',
        ];
    }

    public function messages()
    {
        return [
            'content_review.max' => 'Bài viết quá dài, tối đa 300 ký tự',
            'content_review.min' => 'Review quá ngắn, mời bạn nhập lại',
        ];
    }
}
