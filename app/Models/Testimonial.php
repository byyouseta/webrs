<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = [
        'display_name',
        'photo',
        'quote',
        'service_id',
        'patient_type',
        'is_anonymous',
        'consent_published',
        'is_active',
        'sort'
    ];

    protected $casts = [
        'consent_published' => 'boolean',
        'is_anonymous' => 'boolean',
        'is_active' => 'boolean'
    ];

    public function scopeActive($query)
    {
        return $query
            ->where(
                'is_active',
                true
            );
    }

    //Fungsi Sensor nama pasien jika anonim
    public function getDisplayPatientNameAttribute()
    {
        if (
            !$this->is_anonymous
        ) {
            return $this->display_name;
        }

        return collect(
            explode(
                ' ',
                $this->display_name
            )
        )
            ->map(function ($name) {
                return substr(
                    $name,
                    0,
                    1
                ) . '***';
            })
            ->implode(' ');
    }

    public function service()
    {
        return $this->belongsTo(
            Service::class
        );
    }
}
