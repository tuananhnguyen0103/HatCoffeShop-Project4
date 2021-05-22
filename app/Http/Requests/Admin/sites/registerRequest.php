<?php

namespace App\Http\Requests\admin\sites;

use Illuminate\Foundation\Http\FormRequest;

class registerRequest extends FormRequest
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
            // Dùng unique cần thì phải cần tới database
            // Trường cần compare unique phải trùng với cả trường trong database
            'user_name'             => "required",
            'user_email'            => "required|email",
            'user_password'         => "required|max:12",
            'user_password_confirm' => "required|same:user_password",
        ];
    }
    public function messages()
    {
        return [
            'user_name.required'     => "Trường này không được để trống",
            'user_name.unique'       => "Tên sản phẩm đã tồn tại, Vui lòng thử lại",
            'user_email.required'    => "Trường này không được để trống",
            "user_email.email"       => "Vui lòng nhập email theo định dạng",
            "user_password.required" =>"Trường này không được để trống",
            "user_password.max"      => "Trường này chỉ tối đa 12 kí tự",
            "user_password_confirm"  => "Trường này không được để trống",
            "user_password_confirm"  => "Vui lòng nhập đúng với mật khẩu trên"
        ];
    }
}
