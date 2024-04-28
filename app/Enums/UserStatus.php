<?php

namespace App\Enums;

use App\Traits\EnumHasSerialization;

enum UserStatus: string
{
    use EnumHasSerialization;

    case Active = 'active';
    case Inactive = 'inactive';
}
