<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
            'role' => 'required|unique:roles,role|min:2|max:50'
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
          'role.required' => 'Role không được để trống',
          'role.min'      => 'Role phải có độ dài từ 2 đến 50 ký tự',
          'role.max'      => 'Role phải có độ dài từ 2 đến 50 ký tự',
          'role.unique'   => 'Role đã tồn tại'
        ];
    }
}
