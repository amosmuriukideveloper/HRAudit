<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;
    protected $table = 'certificates';
    protected $fillable = [
        'name',
        
    ];

    public function personalDetail()
    {
        return $this->belongsTo(PersonalDetail::class);
    }
}
