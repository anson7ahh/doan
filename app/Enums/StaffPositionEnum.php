<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class StaffPositionEnum extends Enum
{
    public const accounting = 'accounting';
    public const driver = 'driver';
    public const manager = 'manager';
    public const assistant_driver = 'assistant driver';
}
