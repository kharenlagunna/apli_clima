<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sys extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'type',
        'country',
        'sunrise',
        'sunset',
        'idcities',
    ];

}
