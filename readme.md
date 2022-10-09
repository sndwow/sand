# sndwow/sand
杉德 sdk
杉德支付产品中心 [点击前往](https://open.sandpay.com.cn/product/index)

* 支持 `composer` 安装
* 支持 hyperf、laravel/lumen、tp 等框架

## 安装 - install

```bash
composer require sndwow/sand
```

发布配置 vendor:publish
```bash
Hyperf
php bin/hyperf.php vendor:publish sndwow/sand
Laravel
php artisan vendor:publish
```

```php
fpm框架 调用：
$app = new \Sndwow\Sand\SandApp($config);
$app->wechat_mini->orderCreate([]);
```
