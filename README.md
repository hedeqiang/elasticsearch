Laravel ElasticSearch
---

ElasticSearch service provider for Laravel.

![StyleCI build status](https://github.styleci.io/repos/318086568/shield) 

## 安装

```shell
$ composer require hedeqiang/elasticsearch -vvv
```

## 配置

`config/database.php` 添加如下代码：
```php
.
.
.
'elasticsearch' => [
    'hosts' => explode(',', env('ES_HOSTS')),
],
```
`.env` 配置文件
```
ES_HOSTS=localhost
```

## 使用
### 服务名使用
```php
return app('es')->info();
```
### Facades 门面使用
```php
use Hedeqiang\ElasticSearch\Facades\Elastic;

return Elastic::es()->info();
```

TODO

## License

MIT
