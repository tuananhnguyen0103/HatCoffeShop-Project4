<?php

namespace App\Http\Requests\Admin\Product;

use Illuminate\Foundation\Http\FormRequest;

class storeRequest extends FormRequest
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
            'product_name' => "required|unique:products",
        ];
    }

    public function messages()
    {
        return [
            'product_name.required' => "Trường này không được để trống",
            'product_name.unique' => "Tên sản phẩm đã tồn tại, Vui lòng thử lại",
        ];
    }
}
