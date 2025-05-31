<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
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
            'due_date' => 'required|after:now',
            'priority' => 'required|in:veryLittle,little,average,aLot,veryMuch',
            'body' => 'nullable',

        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'نام الزامی است.',
            'due_date.required' => 'تاریخ نجام وظیفه الزامی است',
            'priority.required' => 'اولویت انجام کار ها الزامی است',
            'priority.in' => 'اولویت باید یکی از موارد زیر انتخاب شود.',
            'body.nullable' => 'توضیحات میتواند خالی باشد',
            'due_date.after' => 'تاریخ مورد نظر باید بعد از تاریخامروز انتخاب شود و قبل از آن ممکن نیست'
        ];
    }
}
