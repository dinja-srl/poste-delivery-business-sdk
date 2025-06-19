<?php

namespace Dinja\PosteDeliveryBusinessSDK\Api;

class WaybillDataDeclaredItem
{
    /** @var string */
    private $itemNumber;

    /** @var string */
    private $taric;

    /** @var string */
    private $totalValue;

    /** @var string */
    private $quantity;

    /** @var string */
    private $totalWeight;

    /** @var string */
    private $originCountry;

    public function toArray()
    {
        return [
            'itemNumber' => $this->itemNumber,
            'taric' => $this->taric,
            'totalValue' => $this->totalValue,
            'quantity' => $this->quantity,
            'totalWeight' => $this->totalWeight,
            'originCountry' => $this->originCountry
        ];
    }

    /**
     * Get the value of itemNumber
     */ 
    public function getItemNumber()
    {
        return $this->itemNumber;
    }

    /**
     * Set the value of itemNumber
     *
     * @return  self
     */ 
    public function setItemNumber($itemNumber)
    {
        $this->itemNumber = $itemNumber;

        return $this;
    }

    /**
     * Get the value of taric
     */ 
    public function getTaric()
    {
        return $this->taric;
    }

    /**
     * Set the value of taric
     *
     * @return  self
     */ 
    public function setTaric($taric)
    {
        $this->taric = $taric;

        return $this;
    }

    /**
     * Get the value of totalValue
     */ 
    public function getTotalValue()
    {
        return $this->totalValue;
    }

    /**
     * Set the value of totalValue
     *
     * @return  self
     */ 
    public function setTotalValue($totalValue)
    {
        $this->totalValue = $totalValue;

        return $this;
    }

    /**
     * Get the value of quantity
     */ 
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     *
     * @return  self
     */ 
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get the value of totalWeight
     */ 
    public function getTotalWeight()
    {
        return $this->totalWeight;
    }

    /**
     * Set the value of totalWeight
     *
     * @return  self
     */ 
    public function setTotalWeight($totalWeight)
    {
        $this->totalWeight = $totalWeight;

        return $this;
    }

    /**
     * Get the value of originCountry
     */ 
    public function getOriginCountry()
    {
        return $this->originCountry;
    }

    /**
     * Set the value of originCountry
     *
     * @return  self
     */ 
    public function setOriginCountry($originCountry)
    {
        $this->originCountry = $originCountry;

        return $this;
    }
}
