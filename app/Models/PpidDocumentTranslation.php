<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PpidDocumentTranslation extends Model
{
    protected $fillable = [
        'ppid_document_id',
        'title',
        'description',
        'locale'
    ];

    // translation milik dokumen
    public function document()
    {
        return $this->belongsTo(PpidDocument::class, 'ppid_document_id');
    }
}
