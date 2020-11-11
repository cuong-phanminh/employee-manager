<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCriteriaRequest extends FormRequest
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
            'point' => 'required|numeric'
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
            'name.min' => 'Tên tiêu chí ít nhất phải 3 kí tự',
            'point.required' => 'Trường này là bắt buộc',
            'point.numeric' => 'Điểm phải là kí tự số',
        ];
    }
}
