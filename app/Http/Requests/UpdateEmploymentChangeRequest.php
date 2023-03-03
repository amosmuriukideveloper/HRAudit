<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmploymentChangeRequest extends FormRequest
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
            'relative_id' => 'nullable|integer',
            'name' => 'required|string',
            'id_no' => 'required|string',
            'job_title_id' => 'nullable|string',
            'relationship' => 'nullable|integer',
            'department_id' => 'nullable|integer',
            'study_leave' => 'sometimes',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'institution' => 'required|integer', 
            'course' => 'required|integer',
            'certificate' => 'required|integer',
            'date' => 'nullable|date',
            'approving_signatory' => 'nullable|string',
            'comments' => 'nullable|string|max:255',
        ];
    }
}
