<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'name' => 'required|min:3',
            'email' => 'required|email|unique:employees'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Trường này là bắt buộc',
            'name.min' => 'Tên ít nhất phải 3 kí tự',
            'email.required' => 'Trường này là bắt buộc',
            'email.email' => 'Email định dạng không hợp lệ',
            'email.unique' => 'Email đã tồn tại',
        ];
    }
}
