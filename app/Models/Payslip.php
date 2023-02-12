<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payslip extends Model
{
    use HasFactory;
    protected $table = 'payslips';

    protected $fillable = [
        'personal_detail_id', 
        'payment_month', 
        'document_name'
    ];

    public function personal_detail()
    {
        return $this->belongsTo(PersonalDetail::class, 'personal_detail_id');
    }
    
}
