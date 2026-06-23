<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Relations\HasMany;


#[Fillable(['name', 'active', 'requires_medication_detail'])]

class ServiceType extends Model
{
    protected function casts(): array
    {
        return [
            'active' => 'boolean',
            'requires_medication_detail' => 'boolean',
        ];
    }

    public function serviceRecords(): HasMany
    {
        return $this->hasMany(ServiceRecord::class);
    }

}
