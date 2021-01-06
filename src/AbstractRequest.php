<?php
/**
 * AbstractRequest.php
 * @author   Liu Zhang
 */

namespace MeituanShanGou;

use MeituanShanGou\Utils\Common;
use MeituanShanGou\Utils\HttpClient;
use MeituanShanGou\Utils\Str;

abstract class AbstractRequest
{
    /**
     * 请求地址
     * @var string
     */
    private $url;

    /**
     * 请求方法
     * @var string
     */
    private $method;

    /**
     * @var array
     */
    private $sysParams = [];

    /**
     * AbstractRequest constructor.
     * @param $url
     * @param array $params
     * @param $method
     */
    public function __construct($url, $method, $params)
    {
        $this->url = $url;
        $this->method = $method;
        $this->sysParams['timestamp'] = time();

        foreach ($params as $key => $val) {
            $this->$key = $val;
        }
    }

    /**
     * 请求
     * @return Response
     * @throws \Exception
     */
    public function send()
    {
        $client = new HttpClient();

        if (method_exists($client, strtolower($this->method))) {
            $method = $this->method;
            $params = $this->getParams();
            $appSecret = $params['app_secret'];
            unset($params['app_secret']);
            $params['sig'] = Common::makeSign($this->url, $params, $appSecret);

            return new Response($client->$method($this->url, $params));
        } else {
            throw new \Exception("请求方法不存在");
        }
    }

    /**
     * 解析参数
     * @return array
     * @throws \ReflectionException
     */
    protected function toArray()
    {
        $class = new \ReflectionClass($this);
        $attributes = [];

        foreach ($class->getProperties(\ReflectionProperty::IS_PROTECTED | \ReflectionProperty::IS_PUBLIC) as $property) {
            if (!$property->isStatic()) {
                $name = $property->getName();

                if ($this->$name != null) {
                    $attributes[Str::camel2id($name)] = $this->$name;
                }
            }
        }

        return $attributes;
    }

    /**
     * @param $values
     */
    public function setSysParams($values)
    {
        foreach ($values as $key => $val) {
            $this->sysParams[$key] = $val;
        }
    }

    /**
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {
        $name = Str::camelize($name);
        $this->$name = $value;
    }

    /**
     * @return array
     * @throws \ReflectionException
     */
    protected function getParams()
    {
        return array_merge($this->sysParams, $this->toArray());
    }
}