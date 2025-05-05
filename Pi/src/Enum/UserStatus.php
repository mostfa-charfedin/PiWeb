<?php

namespace App\Enum;

enum UserStatus: string
{
    case ACTIVE = 'ACTIVE';
    case BLOCKED = 'BLOCKED';

    public static function choices(): array
    {
        return [
            'Active' => self::ACTIVE->value,   // returns strings: 'ACTIVE'
            'Blocked' => self::BLOCKED->value,
        ];
    }
}

