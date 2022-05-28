<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CartRequest extends FormRequest
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
            'quantity' => 'bail|numeric|min:1|max:69'
        ];
    }
    public function messages(){
        return [
            'quantity.numeric' => 'Số lượng phải là số',
            'quantity.min' => 'Số lượng phải > hoặc = 1',
            'quantity.min' => 'Bạn mua số lượng quá lớn, vui lòng liên hệ cửa hàng',
        ];
    }
}
