<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalDetail extends Model
{
    use HasFactory;

    protected $table = 'personal_details';
    protected $fillable = [
        'name',
        'payroll_number',
        'id_no',
        'age',
        'gender',
        'disability_status',
        'passport_photo', 
        'tel_mobile',
        'ethnicity',
        'comments'
    ];

   
    public function ethnicity()
    {
        return $this->belongsTo(Ethnicity::class);
    }

    public function employmentDetails()
    {
        return $this->hasOne(EmploymentDetail::class, 'personal_detail_id');
    }

    
    public function employmentChanges()
    {
        return $this->hasOne(EmploymentChange::class, 'personal_detail_id');
    }

    
    public function payslip()
    {
        return $this->hasOne(Payslip::class, 'personal_detail_id');
    }

}
