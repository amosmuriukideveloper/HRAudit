<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateLeaveRequest extends FormRequest
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
            'date_started' => 'required|date',
            'date_ended' => 'required|date',
            'institution_of_study' => 'required|string|max:255',
            'course_of_study' => 'required|string|max:255',
            'certificate_date' => 'required|date',
            'approving_signatory' => 'required|string|max:255',
        ];
    }
}
