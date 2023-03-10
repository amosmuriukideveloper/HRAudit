<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePersonalDetailRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'payroll_number' => 'required|string|max:255',
            'id_no' => 'required|string|max:255',
            'age' => 'required|integer',
            'gender' => 'required|string|max:255',
            'disability_status' => 'required|string',
            'passport_photo' => 'nullable|string',
            'tel_mobile' => 'required|string|max:255',
            'ethnicity' => 'required|integer',
            'comments' => 'nullable|string|max:255',
        ];
    }
}
