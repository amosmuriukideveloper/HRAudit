<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePayslipRequest extends FormRequest
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
                'personal_detail_id' => 'nullable|integer',
                'date.*' => 'required|date|max:255',
                'pf_number.*' => 'required|array|max:255',
                'name.*' => 'required|array|max:255',
                'station_name.*' => 'required|array|max:255',
                'station_code.*' => 'required|array|max:255',
                'desig_code.*' => 'required|array|max:255',
                'desig_name.*' => 'required|array|max:255',
                'id_no.*' => 'required|array',
                'phone.*' => 'required|array|max:255',
                'email.*' => 'requiredarray|max:255',
                'message.*' => 'required|array|max:255',
        
    ];


    }
}
