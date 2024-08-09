<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class Rqroomtype extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'is_public' => 'required|boolean',
            'price_per_night' => 'required|numeric|min:0',
            'room_quality' => 'required|integer|min:1',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Tiêu đề là thông tin bắt buộc.',
            'title.string' => 'Tiêu đề phải là một chuỗi văn bản.',
            'title.max' => 'Tiêu đề không được vượt quá 255 ký tự.',

            'description.required' => 'Mô tả phải là thông tin bắt buộc.',
            'description.string' => 'Mô tả phải là một chuỗi văn bản.',


            'is_public.required' => 'Trạng thái hiển thị là thông tin bắt buộc.',
            'is_public.boolean' => 'Trạng thái hiển thị phải là đúng hoặc sai.',

            'price_per_night.required' => 'Giá mỗi đêm là thông tin bắt buộc.',
            'price_per_night.numeric' => 'Giá mỗi đêm phải là một số.',
            'price_per_night.min' => 'Giá mỗi đêm phải lớn hơn hoặc bằng 0.',

            'room_quality.required' => 'Số lượng khách là thông tin bắt buộc.',
            'room_quality.integer' => 'Số lượng khách phải là một số nguyên.',
            'room_quality.min' => 'Số lượng khách phải lớn hơn hoặc bằng 1.',

            'image.required' => 'Tệp tải lên phải là thông tin bắt buộc.',
            'image.image' => 'Tệp tải lên phải là một ảnh.',
            'image.mimes' => 'Ảnh phải có định dạng jpeg, png, jpg, gif, hoặc svg.',
            'image.max' => 'Ảnh không được vượt quá 2MB.',
        ];
    }

}
