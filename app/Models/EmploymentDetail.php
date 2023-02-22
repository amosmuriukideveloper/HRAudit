<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmploymentDetail extends Model
{
    use HasFactory;

    protected $table = 'employment_details';
    protected $fillable = [
         'department_id',
        
        'appointment_letter_id',
        'employment_term_id',
       
        'probation_statuses_id',
        'position_id',
        'job_grade_id',

        'employee_certificate' 

    
    ];

    public function personalDetail()
    {
        return $this->belongsTo(PersonalDetail::class);
    }
}
