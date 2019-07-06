<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProductRequest extends FormRequest
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
            'name' => 'required|min:6',
            'producer' => 'required|',
            'price' => 'required|numeric',
            'quantity' =>'required|numeric',
            'description' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Không được để trống trường này',
            'name.min' => 'Cần ít nhất 6 ký tự',
            'producer.required' => 'Không được để trống trường này',
            'price.required' => 'Không được để trống trường này',
            'price.numeric' => 'Nhập dữ liệu dạng số',
            'quantity.numeric' => 'Nhập dữ liệu dạng số',
            'quantity.required' => 'Không được để trống trường này',
            'description.required' => 'Không được để trống trường này',
        ];
    }
}
