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
        'change_type', 
        'details'
    ];

    public function personal_detail()
    {
        return $this->belongsTo(PersonalDetail::class, 'persona_detail_id');
    }
}
