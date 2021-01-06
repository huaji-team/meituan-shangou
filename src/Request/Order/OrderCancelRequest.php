<?php
/**
 * OrderCancel.php
 * @author   Liu Zhang
 */

namespace MeituanShanGou\Request\Order;

use MeituanShanGou\AbstractRequest;

class OrderCancelRequest extends AbstractRequest
{
    /**
     * 订单ID
     * @var string
     */
    protected $orderId;

    /**
     * 取消原因
     * @var string
     */
    protected $reason;


    /**
     * 取消编码
     * @var integer
     */
    protected $reasonCode;

    /**
     * OrderCancelRequest constructor.
     * @param $url
     * @param $method
     * @param $params
     */
    public function __construct($params = [])
    {
        $url = 'api/v1/order/cancel';
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
     * @param string $reason
     */
    public function setReason($reason)
    {
        $this->reason = $reason;
    }

    /**
     * @param int $reasonCode
     */
    public function setReasonCode($reasonCode)
    {
        $this->reasonCode = $reasonCode;
    }

}