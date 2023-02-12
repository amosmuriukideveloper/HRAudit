<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmploymentDetail extends Model
{
    use HasFactory;

    protected $table = 'employment_details';
    protected $fillable = [
        'personal_detail_id',
        'appointment_letter',
        'employment_term_id',
        'date_of_employment',
        'probation_status_id',
        'position_id',
        'job_grade_id'
    ];

    public function personalDetail()
    {
        return $this->belongsTo(PersonalDetail::class);
    }
}
