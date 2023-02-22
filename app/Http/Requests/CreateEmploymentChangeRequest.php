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
            'relative_id' => 'integer',
            'name' => 'required|string',
            'id_no' => 'required|string',
            'job_title_id' => 'required|integer',
            'relationship_id' => 'required|integer',
            'department_id' => 'required|integer',
            'study_leave_id' => 'required|integer',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'institution_id' => 'required|integer', 
            'course_id' => 'required|integer',
            'certificate_id' => 'required|integer',
            'date' => 'required|date',
            'approving_supervisor' => 'string',
            'change_type_id' => 'required|integer',
        ];
    }
}
