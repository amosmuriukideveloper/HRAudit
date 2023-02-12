<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmploymentTerm extends Model
{
    use HasFactory;

    protected $table = 'employment_terms';

    protected $fillable = [
        'name'
    ];
}
