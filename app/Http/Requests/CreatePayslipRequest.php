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
                'date' => 'required',
                'basic_salary' => 'required|array',
                'total_earnings' => 'required|array',
                'pf_number' => 'required|array',
                'tax_pin' => 'required|array',
                'name' => 'required|array',
                'station_name' => 'required|array',
                'station_code' => 'required|array',
                'desig_code' => 'required|array',
                'desig_name' => 'required|array',
                'id_no' => 'required|array',
                'phone' => 'required|array',
                'email' => 'required|array',
                'message' => 'required|array',

    ];


    }
}
