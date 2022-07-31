<?php

declare(strict_types=1);

/**
 * @author Dawnc
 * @date   2022-07-14
 */

namespace App\Middleware;

use App\Middleware\DataContract;
use Closure;

interface HandlerContract
{
    public function handle(DataContract $input, Closure $next): DataContract;
}
