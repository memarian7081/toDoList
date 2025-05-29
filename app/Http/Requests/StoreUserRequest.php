<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            "name" => "required|string",
            "userName" => "required|string",
            "email" => "required|string|email|unique:users,email",
            "password" => "required|string|min:3|max:15",
            "password_confirm" => "required|same:password",

        ];

    }
   public function messages(): array

   {
       return [
           "name.required" => "وارد کردن نام الزامی است",
           "name.string" => " نامم بید از نوع رشته باشد",
           "userName.required" => "نام کاربری الزامی است",
           "userName.string" => "نام کاربری باید از نوع رشته باشد",
           "email.required" => "ایمیل الزامی است",
           "email.string" => "ایمیل باید از نوع رشته باشد",
           "email.email" => "نوع داده  ورودی باید از نوع ایمیل باشد",
           "email.unique" => "ایمیل تکراری است",
           "password.required" => "پسورد الزامی است",
           'password.min' => 'حداقل کاراکتر لازم برای پسورد 3است',
           "password.max" => 'حداکثر کاراکتر لازم برای پسورد 15 است',
           "password.string" => "پسورد از نوع رشته باید باشد",
           "password_confirm.required" => "تکرار پسورد الزامی است",
           "password_confirm.same" => "نوع پسورد باید از نوع پسورد باشد",

       ];
   }
}
