<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class InvoiceFreghtCurrentPositionEnum extends Enum
{
    const warehouse1 = 'Kho_Nghe_an';
    const warehouse2 = 'Kho_Thanh_hóa';
    const warehouse3 = 'Kho_Hà_nội';
}