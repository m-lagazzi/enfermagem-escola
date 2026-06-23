<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Enums\CompletionStatus;
use App\Enums\RecordStatus;


#[Fillable(['patient_id', 'service_type_id', 'entered_by_id', 'occurred_at', 'completion_status', 'refusal_reason', 'notes', 'status', 'cancellation_reason', 'cancelled_by_id', 'cancelled_at'])]

class ServiceRecord extends Model
{
    protected function casts(): array
    {
        return [
            'occurred_at' => 'datetime',
            'cancelled_at' => 'datetime',
            'completion_status' => CompletionStatus::class,
            'status' => RecordStatus::class,
        ];
    }

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    public function serviceType(): BelongsTo
    {
        return $this->belongsTo(ServiceType::class);
    }

    public function enteredBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'entered_by_id');
    }

    public function cancelledBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'cancelled_by_id');
    }

    public function professionals(): BelongsToMany
    {
        return $this->belongsToMany(Professional::class);
    }

    public function medicationDetail(): HasOne
    {
        return $this->hasOne(MedicationDetail::class);
    }

}
