<?php
/**
 * Str.php
 * @author   Liu Zhang
 */

namespace MeituanShanGou\Utils;


class Str
{
    /**
     * 下划线转驼峰
     * @param $words
     * @param string $separator
     * @return string
     */
    public static function camelize($words, $separator = '_')
    {
        $words = $separator. str_replace($separator, " ", strtolower($words));

        return ltrim(str_replace(" ", "", ucwords($words)), $separator);
    }

    
    /**
     * 驼峰转下划线
     * @param $camelCaps
     * @param string $separator
     * @return string
     */
    public static function camel2id($camelCaps, $separator='_')
    {
        return strtolower(preg_replace('/([a-z])([A-Z])/', "$1" . $separator . "$2", $camelCaps));
    }
}