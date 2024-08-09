<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class Rqservice extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:1',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên dịch vụ là thông tin bắt buộc.',
            'name.string' => 'Tên dịch vụ phải là một chuỗi văn bản.',
            'name.max' => 'Tên dịch vụ không được vượt quá 255 ký tự.',

            'price.required' => 'Giá dịch vụ là thông tin bắt buộc.',
            'price.numeric' => 'Giá dịch vụ phải là một số.',
            'price.min' => 'Giá dịch vụ phải lớn hơn hoặc bằng 0.',

            'image.required' => 'Tệp tải lên phải là thông tin bắt buộc.',
            'image.image' => 'Tệp tải lên phải là một ảnh.',
            'image.mimes' => 'Ảnh phải có định dạng jpeg, png, jpg, gif, hoặc svg.',
            'image.max' => 'Ảnh không được vượt quá 2MB.',
        ];
    }
}
