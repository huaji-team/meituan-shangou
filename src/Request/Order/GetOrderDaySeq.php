<?php
/**
 * GetOrderDaySeq.php
 * @author   Liu Zhang
 */

namespace MeituanShanGou\Request\Order;


use MeituanShanGou\AbstractRequest;

class GetOrderDaySeq extends AbstractRequest
{
    /**
     * 门店id
     * @var integer
     */
    protected $appPoiCode;

    /**
     * GetOrderDaySeq constructor.
     * @param array $params
     */
    public function __construct($params = [])
    {
        $url = 'api/v1/order/getOrderDaySeq';
        $method = 'GET';

        parent::__construct($url, $method, $params);
    }

    /**
     * @param int $appPoiCode
     */
    public function setAppPoiCode($appPoiCode)
    {
        $this->appPoiCode = $appPoiCode;
    }
}