<?php

declare(strict_types=1);

/**
 * @author Dawnc
 * @date   2022-07-04
 */

namespace App\Control;

use Wms\Fw\Log;
use Wms\Fw\WDb;

class PortalControl
{
    public function index($p1 = '', $p2 = '', $p3 = '')
    {
        //var_dump($p1, $p2, $p3);
        $r = WDb::getData("show tables");
        //return (new Response())->withContent("xxxx");
        Log::info("info");
        return $r;
    }
}
