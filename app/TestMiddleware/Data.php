<?php

declare(strict_types=1);

/**
 * @author Dawnc
 * @date   2022-07-14
 */

namespace App\TestMiddleware;

use App\Middleware\DataContract;

class Data implements DataContract
{
    public array $arr = [];
}
