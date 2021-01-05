<?php
/**
 * PreparationMealCompleteRequest.php
 * @author   Liu Zhang
 */

namespace MeituanShanGou\Request\Order;

use MeituanShanGou\AbstractRequest;

/**
 * Class PreparationMealCompleteRequest
 * @package MeituanShanGou\Request\Order
 */
class PreparationMealCompleteRequest extends AbstractRequest
{
    /**
     * 订单ID
     * @var string
     */
    protected $orderId;

    public function __construct($params = [])
    {
        $url = 'api/v1/order/preparationMealComplete';
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