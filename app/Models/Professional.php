<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

#[Fillable(['name', 'active'])]

class Professional extends Model
{
    protected function casts(): array
    {
        return [
            'active' => 'boolean',
        ];
    }


    public function serviceRecords(): BelongsToMany
    {
        return $this->belongsToMany(ServiceRecord::class);
    }
}
