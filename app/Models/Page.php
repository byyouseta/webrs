<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'type',
        'slug',
        'image',
        'is_active'
    ];

    public function translations()
    {
        return $this->hasMany(
            PageTranslation::class
        );
    }

    public function translation(
        $locale = null
    ) {
        return $this->hasOne(
            PageTranslation::class
        )
            ->where(
                'locale',
                $locale ??
                    app()->getLocale()
            );
    }
}
