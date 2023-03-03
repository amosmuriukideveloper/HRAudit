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
        'job_title_id',
        'relationship',
        'department_id',
        'study_leave',
        'start_date',
        'end_date',
        'institution',
        'course',
        'certificate',
        'date', 
        'approving_signatory',
        'comments'
        

            
            
    ];

    public function personal_detail()
    {
        return $this->belongsTo(PersonalDetail::class, 'personal_detail_id');
    }

}
