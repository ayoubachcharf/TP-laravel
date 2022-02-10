<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offreemploi extends Model
{
    use HasFactory;
    protected $table = 'offreemplois';

    protected $fillable = [
        'titre',
        'description',
        'etat'
        
    ];
}
