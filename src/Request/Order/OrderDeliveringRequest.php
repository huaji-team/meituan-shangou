<?php
/**
 * OrderDeliveringRequest.php
 * @author   Liu Zhang
 */

namespace MeituanShanGou\Request\Order;

use MeituanShanGou\AbstractRequest;

/**
 * Class OrderDeliveringRequest
 * @package MeituanShanGou\Request\Order
 */
class OrderDeliveringRequest extends AbstractRequest
{
    /**
     * 订单ID
     * @var string
     */
    protected $orderId;

    /**
     * OrderDeliveringRequest constructor.
     * @param array $params
     */
    public function __construct($params = [])
    {
        $url = 'api/v1/order/delivering';
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