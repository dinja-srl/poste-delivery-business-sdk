<?php

namespace Dinja\PosteDeliveryBusinessSDK\Api;

class Waybill
{
    /** @var string */
    private $printFormat;

    /** @var string */
    private $product;

    /** @var string */
    private $clientReferenceId;

    /** @var WaybillData */
    private $data;

    public function toArray()
    {
        return [
            'printFormat' => $this->printFormat,
            'clientReferenceId' => $this->clientReferenceId,
            'product' => $this->product,
            'data' => $this->data->toArray()
        ];
    }


    /**
     * Get the value of printFormat
     */ 
    public function getPrintFormat()
    {
        return $this->printFormat;
    }

    /**
     * Set the value of printFormat
     *
     * @return  self
     */ 
    public function setPrintFormat($printFormat)
    {
        $this->printFormat = $printFormat;

        return $this;
    }

    /**
     * Get the value of product
     */ 
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set the value of product
     *
     * @return  self
     */ 
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get the value of data
     */ 
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set the value of data
     *
     * @return  self
     */ 
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }


    /**
     * Get the value of clientReferenceId
     */ 
    public function getClientReferenceId()
    {
        return $this->clientReferenceId;
    }

    /**
     * Set the value of clientReferenceId
     *
     * @return  self
     */ 
    public function setClientReferenceId($clientReferenceId)
    {
        $this->clientReferenceId = $clientReferenceId;

        return $this;
    }

}
