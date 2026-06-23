<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['name', 'category', 'health_plan_id', 'birth_date', 'notes', 'active'])]

class Patient extends Model
{
    protected function casts(): array
    {
        return [
            'active' => 'boolean',
            'birth_date' => 'date',
        ];
    }

    public function healthPlan(): BelongsTo
    {
        return $this->belongsTo(HealthPlan::class);
    }

    public function serviceRecords(): HasMany
    {
        return $this->hasMany(ServiceRecord::class);
    }

}
