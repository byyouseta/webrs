<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Article extends Model
{
    use LogsActivity;

    protected $fillable = [
        'type',
        'thumbnail',
        'is_published',
        'published_at',
        'created_by',
        'updated_by',
    ];

      public function translations()
    {
        return $this->hasMany(
            ArticleTranslation::class
        );
    }

    public function translation()
    {
        return $this->hasOne(
            ArticleTranslation::class
        )->where(
            'locale',
            app()->getLocale()
        );
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly([
                'type',
                'is_published',
                'published_at'
            ])
            ->logOnlyDirty()
            ->setDescriptionForEvent(
                fn(string $eventName)
                => "Artikel {$eventName}"
            );
    }
}
