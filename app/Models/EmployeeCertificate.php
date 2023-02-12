<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeCertificate extends Model
{
    use HasFactory;

    protected $table = 'employee_certificate';
    public $timestamps = true;

    protected $fillable = [
        'employee_id',
        'certificates_id'
    ];

    public function employee()
    {
        return $this->belongsTo(PersonalDetail::class, 'employee_id');
    }

    public function certificate()
    {
        return $this->belongsTo(Certificate::class, 'certificates_id');
    }
}
