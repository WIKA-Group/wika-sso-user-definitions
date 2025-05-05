<?php

declare(strict_types=1);

namespace WikaGroup\Sso\Enums;

enum EntityClaimType: string
{
    case Employee = 'employee';
    case Customer = 'customer';
    case Supplier = 'supplier';
}
