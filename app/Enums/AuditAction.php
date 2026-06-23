<?php

namespace App\Enums;

enum AuditAction: string
{
    case Created = 'created';
    case Updated = 'updated';
    case Cancelled = 'cancelled';
}