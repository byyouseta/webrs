<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'slug',
        'image',
        'is_featured',
        'is_executive',
        'sort',
        'is_active'
    ];

    protected $casts = [
        'is_featured' => 'boolean',
        'is_executive' => 'boolean',
        'is_active' => 'boolean'
    ];

    public function translations()
    {
        return $this->hasMany(
            ServiceTranslation::class
        );
    }

    public function translation(
        $locale = null
    ) {
        return $this->hasOne(
            ServiceTranslation::class
        )->where(
            'locale',
            $locale ??
                app()->getLocale()
        );
    }
}
