<?php
/**
 * Response.php
 * @author   Liu Zhang
 */

namespace MeituanShanGou;


class Response
{
    /**
     * 解析内容
     * @var array
     */
    protected $content;

    /**
     * BaseResponse constructor.
     * @param $body
     */
    public function __construct($body)
    {
        $this->content = json_decode($body, true);
    }

    /**
     * @return bool
     */
    public function isSuccess()
    {
        if (isset($this->content['error'])) {
            return false;
        }

        return true;
    }

    public function getMessage()
    {
        if (isset($this->content['error']) && isset($this->content['error']['msg'])) {
            return $this->content['error']['msg'];
        }

        return '';
    }

    public function getResult()
    {
        return $this->content;
    }
}