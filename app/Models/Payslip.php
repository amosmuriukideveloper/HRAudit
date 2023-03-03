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
        'pf_number',
        'name',
        'station_name',
        'station_code',
        'desig_code',
        'desig_name',
        'id_no',
        'tax_pin',
        'basic_salary',
        'total_earnings',
        'comments'
        
    ];
    

    public function personal_detail()
    {
        return $this->belongsTo(PersonalDetail::class, 'personal_detail_id');
    }
    
}
