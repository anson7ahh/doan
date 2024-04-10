<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class InvoiceFreghtStatusEnum extends Enum
{
    public const delivering = 'delivering';
    public const finished = 'finished';
    public const returned = 'returned';
}
