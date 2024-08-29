<?php

namespace Dinja\PosteDeliveryBusinessSDK\Api;

class ShipmentsData
{
    /** @var string */
    private $waybillNumber;

    /** @var string */
    private $lastTracingState;

    public function toArray()
    {
        return [
            'waybillNumber' => $this->waybillNumber,
            'lastTracingState' => $this->lastTracingState
        ];
    }

    /**
     * Get the value of waybillNumber
     */ 
    public function getWaybillNumber()
    {
        return $this->waybillNumber;
    }

    /**
     * Set the value of waybillNumber
     *
     * @return  self
     */ 
    public function setWaybillNumber($waybillNumber)
    {
        $this->waybillNumber = $waybillNumber;

        return $this;
    }

    /**
     * Get the value of lastTracingState
     */ 
    public function getLastTracingState()
    {
        return $this->lastTracingState;
    }

    /**
     * Set the value of lastTracingState
     *
     * @return  self
     */ 
    public function setLastTracingState($lastTracingState)
    {
        $this->lastTracingState = $lastTracingState;

        return $this;
    }
}