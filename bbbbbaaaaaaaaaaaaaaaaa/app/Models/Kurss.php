<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurss extends Model
{
    use HasFactory;

    protected $fillable = [
        'nosaukums',
        'teksts',
        'banera_adrese',
        'cilveku_skaits'
    ];
}
