<?php

/*
 * This file is part of the hedeqiang/elasticsearch.
 *
 * (c) hedeqiang<laravel_code@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Hedeqiang\ElasticSearch\Facades;

class Elastic
{
    /**
     * Return the facade accessor.
     *
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'es';
    }

    /**
     * @return \Elasticsearch\Client
     */
    public static function es()
    {
        return app('es');
    }
}
