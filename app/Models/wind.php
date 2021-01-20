<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wind extends Model
{
    use HasFactory;

    protected $table = 'wind';

    protected $fillable = [
        'seed',
        'deg',
        'idcities',
    ];
}
