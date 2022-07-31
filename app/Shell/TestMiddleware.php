<?php

declare(strict_types=1);

/**
 * @author Dawnc
 * @date   2022-07-31
 */

namespace App\Shell;

use App\Middleware\MData;
use App\Middleware\Onion;
use App\TestMiddleware\Data;
use Wms\Fw\Shell;
use App\TestMiddleware\Middleware1;
use App\TestMiddleware\Middleware2;
use App\TestMiddleware\Middleware3;

class TestMiddleware extends Shell
{

    /**
     * 名称
     * @var string
     */
    public string $name = '';

    /**
     * @var string 描述
     */
    public string $description = '';

    /**
     * @var string 执行命令
     */
    public string $cmd = 'test:middleware';

    public function handle(?array $param = null): void
    {
        $onion = new Onion();
        $onion->add(
            [
                Middleware1::class,
                Middleware2::class,
                Middleware3::class,
            ]
        );
        $input = new Data();
        $input->s = 1;
        $result = $onion->start($input, function ($input) {
            $input->done = "ok";
            return $input;
        });
        var_dump($result);
    }

}
