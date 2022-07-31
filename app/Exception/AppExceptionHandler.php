<?php

declare(strict_types=1);

/**
 * @author Dawnc
 * @date   2022-07-31
 */

namespace App\Exception;

use Wms\Fw\Response;

class AppExceptionHandler
{
    public function handle(\Throwable $throwable, Response $response): Response
    {
        return $response->withContent($throwable->getMessage());
    }
}
