<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|min:3|max:50',
            'email' => 'required|unique:users,email|email',
            'password' => 'required|min:6|max:32',
            'password_again' => 'required|same:password'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
          'name.required' => 'Tên không được để trống',
          'name.min' => 'Name phải có độ dài từ 3 đến 50 ký tự',
          'name.max' => 'Name phải có độ dài từ 3 đến 50 ký tự',
          'email.required' => 'Email không được để trống',
          'email.unique' => 'Email đã tồn tại',
          'email.email' => 'Định dạng email không đúng',
          'password.required' => 'Password không được để trống',
          'password.min' => 'Email phải có độ dài từ 6 đến 32 ký tự',
          'password.max' => 'Email phải có độ dài từ 6 đến 32 ký tự',
          'password_again.required' => 'Password again không được để trống',
          'password_again.same' => 'Password again chưa khớp'
        ];
    }
}
