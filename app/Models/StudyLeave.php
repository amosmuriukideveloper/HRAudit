<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudyLeave extends Model
{
    use HasFactory;

    protected $table = 'leave';

    protected $fillable = [
        'personal_detail_id', 
        'date_started', 
        'date_ended', 
        'institution_of_study', 
        'course_of_study', 
        'certificate_date', 
        'approving_signatory'
    ];

    public function personal_detail()
    {
        return $this->belongsTo(PersonalDetail::class, 'personal_detail_id');
    }
}
