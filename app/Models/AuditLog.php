<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use App\Enums\AuditAction;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['service_record_id', 'user_id', 'action', 'old_data', 'new_data' ])]

class AuditLog extends Model
{
    protected function casts(): array
    {
        return [
            'action' => AuditAction::class,
            'old_data' => 'array',
            'new_data' => 'array',
        ];
    }

    public function serviceRecord(): BelongsTo
    {
        return $this->belongsTo(ServiceRecord::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
