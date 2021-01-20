<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cloud extends Model
{
    use HasFactory;

    protected $fillable = [
        'dt',
        'idcities',
    ];
}
