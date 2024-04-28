<?php

namespace App\Enums;

use App\Traits\EnumHasSerialization;

enum DocumentStatus: string
{
    use EnumHasSerialization;

    case Active = 'active';
    case Inactive = 'inactive';
}
