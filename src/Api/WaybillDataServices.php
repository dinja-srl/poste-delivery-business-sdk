<?php

namespace Dinja\PosteDeliveryBusinessSDK\Api;

class WaybillDataServices
{
    /** @var array */
    private $dataWrapper;

    /** @var string */
    private $amount;

    /** @var string */
    private $paymentMode;

    public function toArray()
    {
        $obj = array();
        if(isset($this->dataWrapper))
        {
            foreach($this->dataWrapper as $serviceCode) {
                if($serviceCode == 'APT000918') {
                    $obj[$serviceCode]  = [
                        'amount' => $this->amount,
                        'paymentMode' => $this->paymentMode
                    ];
                }
                if($serviceCode == 'APT000945') {
                    $obj[$serviceCode]  = (object) [];
                }
                if($serviceCode == 'APT000946') {
                    $obj[$serviceCode]  = (object) [];
                }
            }
        }
        if(count($obj) == 0)
            $obj = $this;

        return $obj;
    }


    /**
     * Get the value of amount
     */ 
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set the value of amount
     *
     * @return  self
     */ 
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get the value of paymentMode
     */ 
    public function getPaymentMode()
    {
        return $this->paymentMode;
    }

    /**
     * Set the value of paymentMode
     *
     * @return  self
     */ 
    public function setPaymentMode($paymentMode)
    {
        $this->paymentMode = $paymentMode;

        return $this;
    }

    /**
     * Get the value of dataWrapper
     */ 
    public function getDataWrapper()
    {
        return $this->dataWrapper;
    }

    /**
     * Set the value of dataWrapper
     *
     * @return  self
     */ 
    public function setDataWrapper($dataWrapper)
    {
        $this->dataWrapper = $dataWrapper;

        return $this;
    }

}
