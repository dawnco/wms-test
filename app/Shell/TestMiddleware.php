<?php

declare(strict_types=1);

/**
 * @author Dawnc
 * @date   2022-07-14
 */

namespace App\Shell;

use App\Middleware\Onion;
use App\TestMiddleware\Data;
use App\TestMiddleware\Middleware1;
use App\TestMiddleware\Middleware2;
use App\TestMiddleware\Middleware3;
use Wms\Fw\Shell;

/**
 *  php src/Test/shell.php  \\Wms\\Test\\TestMiddleware
 */
class TestMiddleware extends Shell
{
    public function handle(?array $param = null): void
    {

        $onion = new Onion();
        $onion->add([
            Middleware1::class,
            Middleware2::class,
            Middleware3::class,
        ]);
        $data = new Data();
        $data->arr[] = 'input';
        $output = $onion->start($data, function ($input) {
            return $input;
        });
        //var_dump($output);
    }

}
