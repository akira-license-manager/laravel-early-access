<?php

declare(strict_types=1);

namespace Akira\EarlyAccess\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static mixed method()
 *
 * @see \Akira\EarlyAccess\EarlyAccess
 */
final class EarlyAccess extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Akira\EarlyAccess\EarlyAccess::class;
    }
}
