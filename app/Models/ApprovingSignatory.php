<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApprovingSignatory extends Model
{
    use HasFactory;
    protected $table = 'approving_signatory';
    protected $fillable = [
        'name'
    ];
}
