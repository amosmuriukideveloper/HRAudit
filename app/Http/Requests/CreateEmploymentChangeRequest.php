<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEmploymentChangeRequest extends FormRequest
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
            'relative_id' => 'nullable|string',
            'name' => 'nullable|string',
            'job_title_id' => 'nullable|string',
            'relationship' => 'nullable|string',
            'department_id' => 'nullable|integer',
            'study_leave' => 'sometimes',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'institution' => 'required|string', 
            'course' => 'required|string',
            'certificate' => 'required|string',
            'date' => 'nullable|date',
            'approving_signatory' => 'nullable|string',
            'comments' => 'nullable|string|max:255',
        ];
    }
}
