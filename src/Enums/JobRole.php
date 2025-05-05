<?php

declare(strict_types=1);

namespace WikaGroup\Sso\Enums;

enum JobRole: string
{
    case None = '';
    case EngineeringAndDesign = 'engineeringAndDesign';
    case FinanceAndAccounting = 'financeAndAccounting';
    case HumanResources = 'humanResources';
    case IT = 'it';
    case Logistics = 'logistics';
    case Maintenance = 'maintenance';
    case Management = 'management';
    case Marketing = 'marketing';
    case Operations = 'operations';
    case ProductManagement = 'productManagement';
    case Production = 'production';
    case Purchasing = 'purchasing';
    case Quality = 'quality';
    case ResearchAndDevelopment = 'researchAndDevelopment';
    case Sales = 'sales';
    case ServiceAndSupport = 'serviceAndSupport';
    case Other = 'other';
}