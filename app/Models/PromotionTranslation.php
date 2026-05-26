<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PromotionTranslation extends Model
{
    protected $fillable = [
        'promotion_id',
        'locale',
        'title',
        'description'
    ];

    public function promotion()
    {
        return $this->belongsTo(
            Promotion::class
        );
    }
}
