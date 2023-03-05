<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherCertificate extends Model
{
    use HasFactory;
    protected $table = 'other_certificates';
    public $timestamps = true;

    protected $fillable = [
        'personal_detail_id',
        'cert_title',
        'course',
        'cert_year',
        'cert_number',
        'comments',

    ];
}
