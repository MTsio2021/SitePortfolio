<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperiencePro extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'compagny',
        'city',
        'body',
        'date',
    ];
}
