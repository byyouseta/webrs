<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'nip',
        'nama',
        'spesialis',
        'foto',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    /**
     * Hanya mengambil dokter yang aktif praktik.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
