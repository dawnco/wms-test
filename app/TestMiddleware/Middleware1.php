<?php

declare(strict_types=1);

/**
 * @author Dawnc
 * @date   2022-07-14
 */

namespace App\TestMiddleware;

use App\Middleware\DataContract;
use Closure;
use App\Middleware\DataInterface;
use App\Middleware\HandlerContract;


class Middleware1 implements HandlerContract
{
    public function handle(DataContract $input, Closure $next): DataContract
    {
        echo "middleware 1 before\n";
        //$input->arr[] = "ware1";
        //$input->arr[] = 'stop';
        //return $input;
        $input->ware1 = 'ware1';
        $val = $next($input);
        echo "middleware 1 after\n";
        return $val;
    }

}
