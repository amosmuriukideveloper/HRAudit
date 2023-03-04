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
        'department_id',

        'appointment_letter',
        'employment_term_id',

        'probation_statuses_id',
        'comments'




    ];

    public function personalDetail()
    {
        return $this->belongsTo(PersonalDetail::class);
    }


    public function department()
    {
        return $this->hasOne(Department::class,'id','department_id');
    }

    public function employment_terms()
    {
        return $this->hasOne(EmploymentTerm::class,'id','employment_terms_id');
    }

    public function positions()
    {
        return $this->hasOne(Position::class,'id','positions');
    }
}
