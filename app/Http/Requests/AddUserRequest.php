<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class AddUserRequest extends FormRequest
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
            'name' => 'required',
            'fullname' => 'required',
            'email' => 'required|unique:users,email',
            'phone' => 'required|min:10|max:11',
            'password' => 'required',
            're-password' => 'same:password',
            'address' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'email.required' =>  'Vui lòng nhập email',
            'email.unique' =>  'Tài khoản đã tồn tại',
            'fullname.required' =>  'Vui lòng nhập họ và tên',
            'name.required' => 'Vui lòng nhập tên',
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'phone.min' => 'Không phải định dạng số điện thoại',
            'password' => 'Vui lòng nhập mật khẩu',
            're-password.same' => 'Mật khẩu không khớp',
            'address.required' => 'Vui lòng nhập địa chỉ',
        ];
    }
}
