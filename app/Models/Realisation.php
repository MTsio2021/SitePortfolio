<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realisation extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'tech',
        'image',
        'link',
        'linkgithub',
        'pdfmission',
    ];
}
