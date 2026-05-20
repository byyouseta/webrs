<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $fillable = [

        'code',
        'name',
        'flag',
        'is_default',
        'is_active',
        'sort'

    ];

    protected $casts = [

        'is_default' => 'boolean',
        'is_active' => 'boolean'

    ];

    public function menuTranslations()
    {
        return $this->hasMany(
            MenuTranslation::class
        );
    }

    public function articleTranslations()
    {
        return $this->hasMany(
            ArticleTranslation::class
        );
    }
}
