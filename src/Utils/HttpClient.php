<?php
/**
 * HttpClient.php
 * @author   Liu Zhang
 */

namespace MeituanShanGou\Utils;

use GuzzleHttp\Client;
use MeituanShanGou\Constants;

/**
 * Class HttpClient
 * @package MeituanShanGou\Utils
 */
class HttpClient
{
    /**
     * @var Client
     */
    private $client;


    public function __construct()
    {
        $this->client = new Client([
            'base_uri' =>  Constants::HOST,
            'timeout' => 10,
            'verify' => false
        ]);
    }

    public function get($url, $data = [])
    {
        $res = $this->client->get($url.'?'.http_build_query($data));

        return $res->getBody();
    }

    public function post($url, $data)
    {
        $url = $url.'?app_id='.$data['app_id']."&timestamp=".$data['timestamp'].'&sig='.$data['sig'];
        unset($data['app_id']);
        unset($data['timestamp']);

        $res = $this->client->post($url, [
            'form_params' => $data
        ]);

        return $res->getBody();
    }

    public function json($method, $url, $data)
    {
        $res = $this->client->request($method, $url, [
            'json' => $data
        ]);

        return $res->getBody();
    }
}