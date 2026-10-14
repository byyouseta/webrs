<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PpidInformationRequest extends Model
{
     protected $fillable = [
        'registration_number',
        'applicant_name',
        'nik',
        'organization',
        'email',
        'phone',
        'address',
        'requested_information',
        'purpose',
        'delivery_method',
        'information_format',
        'identity_file',
        'status',
        'officer_note',
        'processed_at',
        'completed_at',
    ];

    protected $casts = [
        'processed_at' => 'datetime',
        'completed_at' => 'datetime',
    ];
}
