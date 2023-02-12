<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Duty extends Model
{
    use HasFactory;
    protected $table = 'duties';

    protected $fillable = [
        'personal_detail_id',
        'duty_name',
        'description'
    ];

    public function personalDetail()
    {
        return $this->belongsTo(PersonalDetail::class, 'personal_detail_id');
    }
}
