<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PpidDocument extends Model
{
    protected $fillable = [
        'category_id',
        'tanggal',
        'file',
        'thumbnail'
    ];

    // dokumen milik 1 category
    public function category()
    {
        return $this->belongsTo(PpidCategory::class, 'category_id');
    }

    // 1 dokumen punya banyak translation
    public function translations()
    {
        return $this->hasMany(PpidDocumentTranslation::class);
    }

    // helper ambil translation berdasarkan locale
    public function translation($locale = null)
    {
        return $this->hasOne(PpidDocumentTranslation::class)
                   ->where(
                        'locale',
                        $locale ??
                            app()->getLocale()
                    );
    }
    protected $casts = [
        'tanggal' => 'date',
    ];
}
