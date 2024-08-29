<?php

namespace Dinja\PosteDeliveryBusinessSDK\Request;

use Dinja\PosteDeliveryBusinessSDK\Api\ShipmentsData;
use Dinja\PosteDeliveryBusinessSDK\Response\TrackingResponse;

class TrackingRequest extends BaseRequest
{
    protected $method = 'POST';
    protected $endpointTest = 'https://apid.gp.posteitaliane.it/dev/kindergarden/postalandlogistics/parcel/tracking';
    protected $endpointProd = 'https://apiw.gp.posteitaliane.it/gp/internet/postalandlogistics/parcel/tracking';
    protected $dataWrapper = 'arg0';
    protected $mandatoryFields = [
        'shipmentsData',
        'statusDescription',
        'customerType'
    ];

    /**
     * @var string
     */
    private $statusDescription;

    /**
     * @var string
     */
    private $customerType;

    /**
     * @var ShipmentsData
     */
    private $shipmentsData;


    public function call($debug = FALSE)
    {
        return new TrackingResponse(parent::call($debug));
    }

    public function toArray()
    {
        return array_filter([
            array_filter([
                $this->dataWrapper => [
                    'statusDescription' => $this->statusDescription,
                    'customerType' => $this->customerType,
                    'shipmentsData' => [$this->shipmentsData->toArray()]]
                ], function ($v) { return !is_null($v); })
        ], function ($v) {
            return !is_null($v);
        });
    }

    /**
     * Get the value of statusDescription
     *
     * @return  string
     */ 
    public function getStatusDescription()
    {
        return $this->statusDescription;
    }

    /**
     * Set the value of statusDescription
     *
     * @param  string  $statusDescription
     *
     * @return  self
     */ 
    public function setStatusDescription(string $statusDescription)
    {
        $this->statusDescription = $statusDescription;

        return $this;
    }

    /**
     * Get the value of customerType
     *
     * @return  string
     */ 
    public function getCustomerType()
    {
        return $this->customerType;
    }

    /**
     * Set the value of customerType
     *
     * @param  string  $customerType
     *
     * @return  self
     */ 
    public function setCustomerType(string $customerType)
    {
        $this->customerType = $customerType;

        return $this;
    }

    /**
     * Get the value of shipmentsData
     *
     * @return  ShipmentsData
     */ 
    public function getShipmentsData()
    {
        return $this->shipmentsData;
    }

    /**
     * Set the value of shipmentsData
     *
     * @param  ShipmentsData  $shipmentsData
     *
     * @return  self
     */ 
    public function setShipmentsData(ShipmentsData $shipmentsData)
    {
        $this->shipmentsData = $shipmentsData;

        return $this;
    }

}
