<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

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
            'name'=>'required|string|max:255'
        ];
    }

    /**
     * @return string[]
     */
    #[ArrayShape(['name.required' => "string", 'name.string' => "string", 'name.max' => "string"])] public function messages(): array
    {
        return [
          'name.required'=>'Vui lòng nhập tên công việc',
          'name.string'=>'Tên có kiểu dữ liệu không hợp lệ',
          'name.max'=>'Vượt quá 255 ký tự',
        ];
    }
}
