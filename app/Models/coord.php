<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coord extends Model
{
    use HasFactory;

    protected $table = 'coord';
    protected $fillable = [
        'lon',
        'lat',
        'idcities',
    ];
}
