<?php

declare(strict_types=1);

/**
 * @author Dawnc
 * @date   2022-07-10
 */

namespace App\Shell;

use Wms\Fw\Shell;

class Test2 extends Shell
{
    public string $name = 'Test2';
    public string $cmd = 'test2';

    public function handle(?array $param = null): void
    {
        var_dump($param);
    }

}
