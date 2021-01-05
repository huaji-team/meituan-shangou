# 说明

美团闪购 PHP 版的SDK  [官网地址](https://open-shangou.meituan.com/),官网值提供了Java 版本。自己撸了一个。

# 安装

```shell 
composer require huaji-team/meiguan-shagou
```


# 使用

首先创建一个请求类，添加参数。

```php
$request = new GetOrderDaySeqRequest();
$request->setAppPoiCode(281);

//也可以直接创建请求类传入参数
$request = new GetOrderDaySeqRequest([
    'app_poi_code' => 281
]);

```

发送请求

```php
$request = new GetOrderDaySeqRequest([
    'app_poi_code' => 281
]);
$request->setAppPoiCode(281);
$client = new ShanGouClient('**', '****');
$res = $client->send($request);

if ($res->isSuccess()) {
    print_r($res->getResult());
} else {
    echo $res->getMessage();
}
```

