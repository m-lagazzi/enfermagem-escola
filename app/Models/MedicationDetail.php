<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['service_record_id', 'medication_name'])]

class MedicationDetail extends Model
{
    public function serviceRecord(): BelongsTo
    {
        return $this->belongsTo(ServiceRecord::class);
    }
}
