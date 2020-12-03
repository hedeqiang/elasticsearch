<?php

/*
 * This file is part of the hedeqiang/elasticsearch.
 *
 * (c) hedeqiang<laravel_code@163.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Hedeqiang\ElasticSearch;

use Illuminate\Support\ServiceProvider;
use Elasticsearch\ClientBuilder as ESClientBuilder;

class ElasticSearchServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('es', function () {
            $builder = ESClientBuilder::create()->setHosts(config('database.elasticsearch.hosts'));
            if ('local' === app()->environment()) {
                $builder->setLogger(app('log')->driver());
            }

            return $builder->build();
        });
    }
}
