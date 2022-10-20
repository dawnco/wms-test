<?php

declare(strict_types=1);

/**
 * @author Dawnc
 * @date   2022-07-10
 */

namespace App\Shell;

use Wms\Fw\Shell;
use Wms\Lib\HttpClient;
use Wms\Lib\Pagination;

class Test extends Shell
{
    public string $name = '测试名称';
    public string $description = '测试名称描述';
    public string $cmd = 'test';

    public function handle(?array $param = null): void
    {

        var_dump((boolean)1);
        return;

        $url = "http://www.baidu.com";
        $client = new HttpClient($url);
        $client->execute();
        var_dump($client->getRequestHeaderFromRequest());
        $pagination = new Pagination([
            'page' => 2,
            'total' => 10,
            "size" => 2,
            "pageUrl" => "/a/{page}.html",
            "firstPageUrl" => "/a/index.html",
        ]);
        //echo $pagination->html();
    }

}
