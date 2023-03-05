<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfessionalCertificate extends Model
{
    use HasFactory;

    protected $table = 'professional_certificates';
    public $timestamps = true;

    protected $fillable = [
        'personal_detail_id',
        'professional_body',
        'membership_number',
        'license_number',
        'cert_year',
        'membership_status',
        
    ];
}
