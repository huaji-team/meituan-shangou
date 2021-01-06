<?php
/**
 * OrderConfirmRequest.php
 * @author   Liu Zhang
 */

namespace MeituanShanGou\Request\Order;

use MeituanShanGou\AbstractRequest;

class OrderConfirmRequest extends AbstractRequest
{
    /**
     * 订单ID
     * @var string
     */
    protected $orderId;

    /**
     * OrderConfirmRequest constructor.
     * @param array $params
     */
    public function __construct($params = [])
    {
        $url = 'api/v1/order/confirm';
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