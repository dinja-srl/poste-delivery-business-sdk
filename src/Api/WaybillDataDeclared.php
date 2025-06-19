<?php

namespace Dinja\PosteDeliveryBusinessSDK\Api;

class WaybillDataDeclared
{
    /** @var string */
    private $weight;

    /** @var string */
    private $height;

    /** @var string */
    private $length;

    /** @var string */
    private $width;

    /** @var string */
    private $description;

    /** @var string */
    private $packagingCode;

    /** @var array */
    private $items;

    public function toArray()
    {
        $itemsObj = array();
        if(!is_null($this->items))
            foreach($this->items as $itemObj) {
                array_push($itemsObj, $itemObj->toArray());
            }
        return [
            'weight' => $this->weight,
            'height' => $this->height,
            'length' => $this->length,
            'width' => $this->width,
            'description' => $this->description,
            'packagingCode' => $this->packagingCode,
            'items' => $itemsObj
        ];
    }

    /**
     * Get the value of weight
     */ 
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set the value of weight
     *
     * @return  self
     */ 
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get the value of height
     */ 
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set the value of height
     *
     * @return  self
     */ 
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get the value of length
     */ 
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set the value of length
     *
     * @return  self
     */ 
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get the value of width
     */ 
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Set the value of width
     *
     * @return  self
     */ 
    public function setWidth($width)
    {
        $this->width = $width;

        return $this;
    }


    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of packagingCode
     */ 
    public function getPackagingCode()
    {
        return $this->packagingCode;
    }

    /**
     * Set the value of packagingCode
     *
     * @return  self
     */ 
    public function setPackagingCode($packagingCode)
    {
        $this->packagingCode = $packagingCode;

        return $this;
    }

    /**
     * Get the value of items
     */ 
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Set the value of items
     *
     * @return  self
     */ 
    public function setItems($items)
    {
        $this->items = $items;

        return $this;
    }
}
