<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $fillable = [
        'logo',
        'tagline',
        'section',
        'title',
        'url',
        'email',
        'phone',
        'is_active'
    ];
}
