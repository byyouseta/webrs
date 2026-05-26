<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $fillable = [

        'service_id',
        'image',
        'start_date',
        'end_date',
        'sort',
        'is_active'

    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'is_active' => 'boolean'
    ];

    public function service()
    {
        return $this->belongsTo(
            Service::class
        );
    }

    public function translations()
    {
        return $this->hasMany(
            PromotionTranslation::class
        );
    }

    public function translation($locale = null)
    {
        return $this->hasOne(
            PromotionTranslation::class
        )
            ->where(
                'locale',
                $locale ??
                    app()->getLocale()
            );
    }

    // scope promo aktif
    public function scopeActive($query)
    {
        return $query

            ->where(
                'is_active',
                true
            )

            ->whereDate(
                'start_date',
                '<=',
                now()
            )

            ->whereDate(
                'end_date',
                '>=',
                now()
            );
    }
}
