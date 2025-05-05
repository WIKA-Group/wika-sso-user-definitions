<?php

declare(strict_types=1);

namespace App\Enums;

enum RegistrationStatus: string
{
    case None = '';
    case Migrated = 'migrated';
    case PasswordSet = 'pwdSet';
    case Completed = 'completed';
}
