<?php

declare(strict_types=1);

namespace WikaGroup\Sso\Enums;

enum Salutation: string
{
    case None = '';
    case Mr = 'mr';
    case Ms = 'ms';
    case Other = 'other';
}
