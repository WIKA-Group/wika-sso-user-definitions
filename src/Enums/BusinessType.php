<?php

declare(strict_types=1);

namespace WikaGroup\Sso\Enums;

enum BusinessType: string
{
    case None = 'none';
    case Private = 'private';
    case Business = 'business';
}
