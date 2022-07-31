<?php

declare(strict_types=1);

/**
 * @author Dawnc
 * @date   2022-07-14
 */

namespace App\TestMiddleware;

use App\Middleware\DataContract;
use App\Middleware\HandlerContract;
use App\Middleware\OnionData;
use Closure;

class Middleware3 implements HandlerContract
{
    public function handle(DataContract $input, Closure $next): DataContract
    {

        echo "middleware 3 before\n";
        $input->ware3 = 'ware3';
        $val = $next($input);
        echo "middleware 3 after\n";
        return $val;
    }
}
