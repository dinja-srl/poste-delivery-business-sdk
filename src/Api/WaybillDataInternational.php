<?php

namespace Dinja\PosteDeliveryBusinessSDK\Api;

class WaybillDataInternational
{
    /** @var string */
    private $carrier;

    /** @var string */
    private $receiverType;

    /** @var string */
    private $currency;

    /** @var string */
    private $waybillTotalValue;

    /** @var string */
    private $note;

    /** @var string */
    private $contentCode;

    public function toArray()
    {
        return [
            'carrier' => $this->carrier,
            'receiverType' => $this->receiverType,
            'currency' => $this->currency,
            'waybillTotalValue' => $this->waybillTotalValue,
            'note' => $this->note,
            'contentCode' => $this->contentCode
        ];
    }

    /**
     * Get the value of carrier
     */ 
    public function getCarrier()
    {
        return $this->carrier;
    }

    /**
     * Set the value of carrier
     *
     * @return  self
     */ 
    public function setCarrier($carrier)
    {
        $this->carrier = $carrier;

        return $this;
    }

    /**
     * Get the value of receiverType
     */ 
    public function getReceiverType()
    {
        return $this->receiverType;
    }

    /**
     * Set the value of receiverType
     *
     * @return  self
     */ 
    public function setReceiverType($receiverType)
    {
        $this->receiverType = $receiverType;

        return $this;
    }

    /**
     * Get the value of currency
     */ 
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set the value of currency
     *
     * @return  self
     */ 
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Get the value of waybillTotalValue
     */ 
    public function getWaybillTotalValue()
    {
        return $this->waybillTotalValue;
    }

    /**
     * Set the value of waybillTotalValue
     *
     * @return  self
     */ 
    public function setWaybillTotalValue($waybillTotalValue)
    {
        $this->waybillTotalValue = $waybillTotalValue;

        return $this;
    }

    /**
     * Get the value of note
     */ 
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set the value of note
     *
     * @return  self
     */ 
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get the value of contentCode
     */ 
    public function getContentCode()
    {
        return $this->contentCode;
    }

    /**
     * Set the value of contentCode
     *
     * @return  self
     */ 
    public function setContentCode($contentCode)
    {
        $this->contentCode = $contentCode;

        return $this;
    }
}
