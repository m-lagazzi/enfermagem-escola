<?php

namespace App\Enums;

enum RecordStatus: string
{
    case Active = 'active';
    case Cancelled  = 'cancelled';
}