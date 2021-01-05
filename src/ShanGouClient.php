<?php
/**
 * ShanGouClient.php
 * @author   Liu Zhang
 */

namespace MeituanShanGou;


class ShanGouClient
{
    /**
     * @var array
     */
    protected $sysParams = [];

    public function __construct($appId, $appSecret, $accessToken = '')
    {
        $this->sysParams['app_id'] = $appId;
        $this->sysParams['app_secret'] = $appSecret;

        if ($accessToken) {
            $this->sysParams['access_token'] = $accessToken;
        }
    }

    /**
     * 发送请求
     * @param AbstractRequest $request
     * @return Response
     * @throws \Exception
     */
    public function send(AbstractRequest $request)
    {
        $request->setSysParams($this->sysParams);

        return $request->send();
    }
}