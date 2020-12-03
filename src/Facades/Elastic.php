<?php

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