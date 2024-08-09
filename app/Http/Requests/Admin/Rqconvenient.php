<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class Rqconvenient extends FormRequest
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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên Tiện ích là thông tin bắt buộc.',
            'name.string' => 'Tên Tiện ích phải là một chuỗi văn bản.',
            'name.max' => 'Tên Tiện ích không được vượt quá 255 ký tự.',

            'image.required' => 'Tệp tải lên phải là thông tin bắt buộc.',
            'image.image' => 'Tệp tải lên phải là một ảnh.',
            'image.mimes' => 'Ảnh phải có định dạng jpeg, png, jpg, gif, hoặc svg.',
            'image.max' => 'Ảnh không được vượt quá 2MB.',
        ];
    }
}
