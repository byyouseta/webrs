<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HeroBanner extends Model
{
    protected $fillable = [
        'image',
        'title_id',
        'title_en',
        'subtitle_id',
        'subtitle_en',
        'sort',
        'is_active'
    ];
}
