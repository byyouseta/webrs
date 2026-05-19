<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class ArticleTranslation extends Model
{
    use LogsActivity;

    protected $fillable = [
        'article_id',
        'locale',
        'title',
        'slug',
        'excerpt',
        'content',
    ];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()

            ->logOnly([
                'title',
                'locale',
                'excerpt',
                'content'
            ])

            ->logOnlyDirty()

            ->setDescriptionForEvent(
                fn(string $eventName)
                => "Terjemahan artikel {$eventName}"
            );
    }
}
