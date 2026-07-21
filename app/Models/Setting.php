<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'key',
        'value',
        'hero_tagline_id',
        'hero_tagline_en',
    ];

     public function getTaglineAttribute()
    {
        return app()->getLocale() === 'en'
            ? $this->hero_tagline_en
            : $this->hero_tagline_id;
    }
}
