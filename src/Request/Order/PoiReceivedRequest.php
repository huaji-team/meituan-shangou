<?php
/**
 * PoiReceivedRequest.php
 * @author   Liu Zhang
 */

namespace MeituanShanGou\Request\Order;


use MeituanShanGou\AbstractRequest;

class PoiReceivedRequest extends AbstractRequest
{
    /**
     * 订单ID
     * @var string
     */
    protected $orderId;

    /**
     * PoiReceivedRequest constructor.
     * @param array $params
     */
    public function __construct($params = [])
    {
        $url = 'api/v1/order/poi_received';
        $method = 'GET';
        parent::__construct($url, $method, $params);
    }

    /**
     * @param string $orderId
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }
}