<?php

declare(strict_types=1);

/**
 * @author Dawnc
 * @date   2022-07-10
 */
require __DIR__ . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";

use Wms\Fw\Conf;
use Wms\Fw\Fw;

Conf::set('app', include __DIR__ . "/config/app.php");
$fw = new Fw();
$fw->shell($argv);
