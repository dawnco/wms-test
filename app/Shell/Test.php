<?php

declare(strict_types=1);

/**
 * @author Dawnc
 * @date   2022-07-10
 */

namespace App\Shell;

use Wms\Fw\Shell;

class Test extends Shell
{
    public string $name = '测试名称';
    public string $description = '测试名称描述';
    public string $cmd = 'test';

    public function handle(?array $param = null): void
    {
        var_dump("------------------");
        var_dump($param);
    }

}
