<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTaskRequest extends FormRequest
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
            'due_date' => 'required',
            'priority' => 'required|in:veryLittle','little','average','aLot','veryMuch',
            'body' => 'nullable',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' =>'فیلد نام نمیتوان خالی باشد',
            'due_date.required' =>'انتخاب زمان نمیتواند خالی باشد',
            'priority.required' =>'اولویت باید انتخاب شود',
            'body.nullable' => 'توضیحات تسک الزامی نیست'

        ];
    }
}
