<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEmploymentDetailRequest extends FormRequest
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
            'appointment_letter' => 'nullable|string',
            'employment_term_id' => 'required|integer',
            'probation_statuses_id' => 'required|integer',
            'position'=>'nullable|array',
            'position_type'=>'nullable|array',
            'job_grade_id'=>'nullable|array',
            'employment_year'=> 'nullable|array',
            'comments' => 'nullable|string|max:255',

        ];
    }
}
