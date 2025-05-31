<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'userName' => 'required',
        ];

    }
    public function messages(): array
    {
        return [
            'name.required' => 'ورود نام الزامی است',
            'email.required' => 'ورود ایمیل الزامی است',
            'userName.required' => 'وارد کردن نام کاربری الزامی است',
            'email.email' => 'فرمت ایمیل از نوع ایمیل باید باشد',
        ];
    }
}
