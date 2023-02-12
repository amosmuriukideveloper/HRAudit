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
        'disability_status_id',
        'passport_photo', 
        'tel_mobile',
        'ethnicity_id'
    ];

    public function disabilityStatus()
    {
        return $this->belongsTo(DisabilityStatus::class);
    }

    public function ethnicity()
    {
        return $this->belongsTo(Ethnicity::class);
    }

}
