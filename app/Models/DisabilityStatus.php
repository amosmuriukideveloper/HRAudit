<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DisabilityStatus extends Model
{
    use HasFactory;

    protected $table = 'disability_status';
    protected $fillable = [
        'name'
    ];
}
