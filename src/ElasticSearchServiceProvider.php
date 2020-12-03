<?php

namespace Hedeqiang\ElasticSearch;

use Illuminate\Support\ServiceProvider;
use Elasticsearch\ClientBuilder as ESClientBuilder;

class ElasticSearchServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->singleton('es', function () {
            $builder = ESClientBuilder::create()->setHosts(config('database.elasticsearch.hosts'));
            if (app()->environment() === 'local') {
                $builder->setLogger(app('log')->driver());
            }

            return $builder->build();
        });
    }
}
