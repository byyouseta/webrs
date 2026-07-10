<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PpidCategory extends Model
{
    protected $fillable = [
        'name'
    ];

    public function documents()
    {
        return $this->hasMany(PpidDocument::class, 'category_id');
    }

}
