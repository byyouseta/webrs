<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroShortcut extends Model
{
    protected $fillable = [
        'title_id',
        'title_en',
        'icon',
        'url',
        'sort',
        'is_active'
    ];
}
