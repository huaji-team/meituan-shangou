<?php
/**
 * 1.php
 * @author   Liu Zhang
 */

require_once 'vendor/autoload.php';

use MeituanShanGou\Utils\Str;
use MeituanShanGou\Request\Order\PreparationMealCompleteRequest;
use MeituanShanGou\Request\Order\GetOrderDaySeq;
use MeituanShanGou\ShanGouClient;


$request = new GetOrderDaySeq([
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
