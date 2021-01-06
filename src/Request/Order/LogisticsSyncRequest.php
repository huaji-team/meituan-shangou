<?php
/**
 * LogisticsSyncRequest.php
 * @author   Liu Zhang
 */

namespace MeituanShanGou\Request\Order;

use MeituanShanGou\AbstractRequest;

class LogisticsSyncRequest extends AbstractRequest
{
    /**
     * 订单ID
     * @var string
     */
    protected $orderId;

    /**
     * 配送员姓名
     * @var string
     */
    protected $courierName;

    /**
     * 配送员电话
     * @var string
     */
    protected $courierPhone;

    /**
     * 物流平台
     * @var string
     */
    protected $logisticsProviderCode;

    /**
     * 配送状态
     * @var string
     */
    protected $logisticsStatus;

    /**
     * 骑手当前的纬度
     * @var string
     */
    protected $latitude;

    /**
     * 骑手当前的经度
     * @var string
     */
    protected $longitude;

    /**
     * LogisticsSyncRequest constructor.
     * @param array $params
     */
    public function __construct($params = [])
    {
        $url = 'api/v1/ecommerce/order/logistics/sync';
        $method = 'POST';

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
     * @param string $courierName
     */
    public function setCourierName($courierName)
    {
        $this->courierName = $courierName;
    }

    /**
     * @param string $courierPhone
     */
    public function setCourierPhone($courierPhone)
    {
        $this->courierPhone = $courierPhone;
    }

    /**
     * @param string $logisticsProviderCode
     */
    public function setLogisticsProviderCode($logisticsProviderCode)
    {
        $this->logisticsProviderCode = $logisticsProviderCode;
    }

    /**
     * @param string $logisticsStatus
     */
    public function setLogisticsStatus($logisticsStatus)
    {
        $this->logisticsStatus = $logisticsStatus;
    }

    /**
     * @param string $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @param string $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

}