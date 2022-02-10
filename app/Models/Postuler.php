<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
 
class Postuler extends Model
{
    use HasFactory;
    protected $table = 'postulers';

    protected $fillable = [
        'offreemploi_id',
        'employee_id',
        'date'
        
    ];
    public function offreemploi() {
        return $this->belongsTo(Offreemploi::class,'offreemploi_id','id');
    }
    public function employee() {
        return $this->belongsTo(Employee::class,'employee_id','id');
    }
}
