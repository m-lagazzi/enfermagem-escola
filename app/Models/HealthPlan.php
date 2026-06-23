<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['name', 'active'])]

class HealthPlan extends Model
{
    protected function casts(): array
    {
        return [
            'active' => 'boolean',
        ];
    }

    public function patients(): HasMany
    {
        return $this->hasMany(Patient::class);
    }

}
