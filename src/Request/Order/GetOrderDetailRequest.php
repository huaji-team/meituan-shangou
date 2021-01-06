<?php
/**
 * GetOrderDetailRequest.php
 * @author   Liu Zhang
 */

namespace MeituanShanGou\Request\Order;


use MeituanShanGou\AbstractRequest;

class GetOrderDetailRequest extends AbstractRequest
{
    /**
     * 订单ID
     * @var string
     */
    protected $orderId;

    /**
     * 美团配送
     * @var boolean
     */
    protected $isMtLogistics;


    public function __construct($params = [])
    {
        $url = 'api/v1/order/getOrderDetail';
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

    /**
     * @param bool $isMtLogistics
     */
    public function setIsMtLogistics($isMtLogistics)
    {
        $this->isMtLogistics = $isMtLogistics;
    }

}