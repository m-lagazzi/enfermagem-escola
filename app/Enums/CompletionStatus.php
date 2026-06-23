<?php

namespace App\Enums;

enum CompletionStatus: string
{
    case Completed = 'completed';
    case Refused = 'refused';
}