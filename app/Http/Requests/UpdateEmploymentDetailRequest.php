<?php

namespace App\Http\Requests;

use App\Models\Certificate;
use Illuminate\Foundation\Http\FormRequest;

class UpdateEmploymentDetailRequest extends FormRequest
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
            'department_id' =>'required|integer',
            
            'appointment_letter_id' => 'required|string',
            'employment_term_id' => 'required|integer',
            'probation_statuses_id' => 'required|integer',
            'position_id' => 'required|integer',
            'job_grade_id' => 'required|integer',
            'employee_certificate' => 'required|string'

        ];
    }
}
