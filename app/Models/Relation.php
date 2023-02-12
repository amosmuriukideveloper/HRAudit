<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{
    use HasFactory;

    protected $table = 'relations';
    protected $fillable = [
        'name', 
        'job_title_id', 
        'relationships_id', 
        'department_id'
    ];
    
    public function job_title()
    {
        return $this->belongsTo(JobTitle::class, 'job_title_id');
    }
    
    public function relationship()
    {
        return $this->belongsTo(Relationship::class, 'relationships_id');
    }
    
    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }
}
