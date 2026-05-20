<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [

        'parent_id',
        'url',
        'icon',
        'sort',
        'is_active'

    ];

    public function parent()
    {
        return $this->belongsTo(
            Menu::class,
            'parent_id'
        );
    }

    public function children()
    {
        return $this->hasMany(
            Menu::class,
            'parent_id'
        );
    }

    public function translations()
    {
        return $this->hasMany(
            MenuTranslation::class
        );
    }
}
