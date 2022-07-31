<?php

declare(strict_types=1);

/**
 * @author Dawnc
 * @date   2022-07-14
 */

namespace App\TestMiddleware;

use App\Middleware\DataContract;
use App\Middleware\DataInterface;
use App\Middleware\HandlerContract;
use App\Middleware\OnionData;
use Closure;

class Middleware2 implements HandlerContract
{
    public function handle(DataContract $input, Closure $next): DataContract
    {
        //return $input;
        echo "middleware 2 before\n";
        $input->ware2 = 'ware2';
        $val = $next($input);
        echo "middleware 2 after\n";
        return $val;
    }
}
