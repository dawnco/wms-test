<?php

declare(strict_types=1);

/**
 * @author Dawnc
 * @date   2022-07-09
 */

require dirname(__DIR__) . DIRECTORY_SEPARATOR . "vendor/autoload.php";

use Wms\Fw\Conf;
use Wms\Fw\Fw;

Conf::set('app', include dirname(__DIR__) . "/config/app.php");
Conf::set('route', include dirname(__DIR__) . "/config/route.php");
$fw = new Fw();
$fw->run();
