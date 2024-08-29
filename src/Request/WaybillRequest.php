<?php

namespace Dinja\PosteDeliveryBusinessSDK\Request;

use Dinja\PosteDeliveryBusinessSDK\Api\Waybill;
use Dinja\PosteDeliveryBusinessSDK\Response\WaybillResponse;

class WaybillRequest extends BaseRequest
{
    protected $method = 'POST';
    protected $endpointTest = 'https://apid.gp.posteitaliane.it/dev/kindergarden/postalandlogistics/parcel/waybill';
    protected $endpointProd = 'https://apiw.gp.posteitaliane.it/gp/internet/postalandlogistics/parcel/waybill';

    protected $mandatoryFields = [
        'costCenterCode',
        'shipmentDate',
        'partnerId',
        'waybill'
    ];

    /**
     * @var string
     */
    private $costCenterCode;

    /**
     * @var string
     */
    private $shipmentDate;

    /**
     * @var string
     */
    private $partnerId;

    /**
     * @var Waybill
     */
    private $waybill;


    public function call($debug = FALSE)
    {
        return new WaybillResponse(parent::call($debug));
    }

    public function toArray()
    {
        return array_filter([
            array_filter([
                'costCenterCode' => $this->costCenterCode,
                'shipmentDate' => $this->shipmentDate,
                'partnerId' => $this->partnerId,
                'waybills' => [$this->waybill->toArray()]], function ($v) { return !is_null($v); })
        ], function ($v) {
            return !is_null($v);
        });
    }

    /**
     * Get the value of costCenterCode
     *
     * @return  string
     */ 
    public function getCostCenterCode()
    {
        return $this->costCenterCode;
    }

    /**
     * Set the value of costCenterCode
     *
     * @param  string  $costCenterCode
     *
     * @return  self
     */ 
    public function setCostCenterCode(string $costCenterCode)
    {
        $this->costCenterCode = $costCenterCode;

        return $this;
    }

    /**
     * Get the value of shipmentDate
     *
     * @return  string
     */ 
    public function getShipmentDate()
    {
        return $this->shipmentDate;
    }

    /**
     * Set the value of shipmentDate
     *
     * @param  string  $shipmentDate
     *
     * @return  self
     */ 
    public function setShipmentDate(string $shipmentDate)
    {
        $this->shipmentDate = $shipmentDate;

        return $this;
    }

    /**
     * Get the value of partnerId
     *
     * @return  string
     */ 
    public function getPartnerId()
    {
        return $this->partnerId;
    }

    /**
     * Set the value of partnerId
     *
     * @param  string  $partnerId
     *
     * @return  self
     */ 
    public function setPartnerId(string $partnerId)
    {
        $this->partnerId = $partnerId;

        return $this;
    }

    /**
     * Get the value of waybill
     *
     * @return  Waybill
     */ 
    public function getWaybill()
    {
        return $this->waybill;
    }

    /**
     * Set the value of waybill
     *
     * @param  Waybill  $waybill
     *
     * @return  self
     */ 
    public function setWaybill(Waybill $waybill)
    {
        $this->waybill = $waybill;

        return $this;
    }

}
