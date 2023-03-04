<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeWorkExperience extends Model
{
    use HasFactory;

    protected $table = 'employee_work_experience';
    protected $fillable = [
        'personal_detail_id',
        'position',
        'position_type',
        'job_grade_id',
        'employment_year'


    ];

}
