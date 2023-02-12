<?php

namespace App\Http\Requests;

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
            'personal_detail_id' => 'required|integer',
            'appointment_letter' => 'required|boolean',
            'employment_term_id' => 'required|integer',
            'date_of_employment' => 'required|date',
            'probation_status_id' => 'required|integer',
            'position_id' => 'required|integer',
            'job_grade_id' => 'required|integer',

        ];
    }
}
