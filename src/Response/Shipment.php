<?php

namespace Dinja\PosteDeliveryBusinessSDK\Response;

class Shipment
{
    /**
     *
     * @var string
     */
    private $waybillNumber;

    /**
     *
     * @var string
     */
    private $product;

    /**
     *
     * @var string
     */
    private $NotificationFlag;

    /**
     *
     * @var string
     */
    private $returnFlag;

    /**
     *
     * @var Tracking
     */
    private $tracking;

    /**
     *
     * @var ShipmentDelivered
     */
    private $shipment;


    public function __construct($waybillNumber, $product, $NotificationFlag, $returnFlag, $shipment, $tracking)
    {
        $this->waybillNumber = $waybillNumber;
        $this->product = $product;
        $this->NotificationFlag = $NotificationFlag;
        $this->returnFlag = $returnFlag;
        $this->shipment = $shipment;
        $this->tracking = $tracking;
    }

    /**
     * Get the value of waybillNumber
     *
     * @return  string
     */ 
    public function getWaybillNumber()
    {
        return $this->waybillNumber;
    }

    /**
     * Set the value of waybillNumber
     *
     * @param  string  $waybillNumber
     *
     * @return  self
     */ 
    public function setWaybillNumber(string $waybillNumber)
    {
        $this->waybillNumber = $waybillNumber;

        return $this;
    }

    /**
     * Get the value of product
     *
     * @return  string
     */ 
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set the value of product
     *
     * @param  string  $product
     *
     * @return  self
     */ 
    public function setProduct(string $product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get the value of NotificationFlag
     *
     * @return  string
     */ 
    public function getNotificationFlag()
    {
        return $this->NotificationFlag;
    }

    /**
     * Set the value of NotificationFlag
     *
     * @param  string  $NotificationFlag
     *
     * @return  self
     */ 
    public function setNotificationFlag(string $NotificationFlag)
    {
        $this->NotificationFlag = $NotificationFlag;

        return $this;
    }

    /**
     * Get the value of returnFlag
     *
     * @return  string
     */ 
    public function getReturnFlag()
    {
        return $this->returnFlag;
    }

    /**
     * Set the value of returnFlag
     *
     * @param  string  $returnFlag
     *
     * @return  self
     */ 
    public function setReturnFlag(string $returnFlag)
    {
        $this->returnFlag = $returnFlag;

        return $this;
    }

    /**
     * Get the value of tracking
     *
     * @return  Tracking
     */ 
    public function getTracking()
    {
        return $this->tracking;
    }

    /**
     * Set the value of tracking
     *
     * @param  Tracking  $tracking
     *
     * @return  self
     */ 
    public function setTracking(Tracking $tracking)
    {
        $this->tracking = $tracking;

        return $this;
    }
}