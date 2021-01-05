<?php
/**
 * Common.php
 * @author   Liu Zhang
 */

namespace MeituanShanGou\Utils;


use MeituanShanGou\Constants;

class Common
{
    public static function makeSign($url, $params, $appSecret)
    {
        ksort($params);

        return md5(Constants::HOST.$url.'?'.http_build_query($params).$appSecret);
    }
}