<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmploymentChange extends Model
{
    use HasFactory;

    protected $table = 'employment_changes';

    protected $fillable = [
        'personal_detail_id',
        'relative_id',
        'name',
        'id_no',
        'job_title_id',
        'relationship_id',
        'department_id',
        'study_leave_id',
        'start_date',
        'end_date',
        'institution_id',
        'course_id',
        'certificate_id',
        'date', 
        'approving_supervisor',
        'change_type_id',

            
            
    ];

    public function personal_detail()
    {
        return $this->belongsTo(PersonalDetail::class, 'persona_detail_id');
    }
}
