<?php

namespace App\Enum;

enum UserRole: string
{
    case ADMIN = 'ADMIN';
    case USER = 'USER';
    case chefprojet = 'chefprojet';

    public static function choices(): array
    {
        return [
            'ADMIN' => self::ADMIN->value,  
            'USER' => self::USER->value,
            'chefprojet' => self::chefprojet->value,
        ];
    }
}

