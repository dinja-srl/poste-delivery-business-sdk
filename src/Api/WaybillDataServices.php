<?php

namespace Dinja\PosteDeliveryBusinessSDK\Api;

class WaybillDataServices
{
    /** @var array */
    private $dataWrapper;

    /** @var string */
    private $amount;

    /** @var string */
    private $insuranceAmount;

    /** @var string */
    private $paymentMode;

    /** @var string */
    private $officeCode;

    /** @var string */
    private $officeDescription;

    /** @var string */
    private $roundTrip;

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
                } else if($serviceCode == 'APT000919' || $serviceCode == 'APT000955' || $serviceCode == 'APT000956') {
                     $obj[$serviceCode]  = [
                        'amount' => $this->insuranceAmount
                    ];
                } else if($serviceCode == 'APT000947' || $serviceCode == 'APT000948' || $serviceCode == 'APT000949') {
                    $obj[$serviceCode]  = [
                        'node' => $this->officeCode,
                        'name' => $this->officeDescription
                    ];
                } else if($serviceCode == 'APT000929') {
                    $obj[$serviceCode]  = [
                        'roundtrip' => $this->roundTrip
                    ];
                } else {
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

    /**
     * Get the value of officeCode
     */ 
    public function getOfficeCode()
    {
        return $this->officeCode;
    }

    /**
     * Set the value of officeCode
     *
     * @return  self
     */ 
    public function setOfficeCode($officeCode)
    {
        $this->officeCode = $officeCode;

        return $this;
    }

    /**
     * Get the value of officeDescription
     */ 
    public function getOfficeDescription()
    {
        return $this->officeDescription;
    }

    /**
     * Set the value of officeDescription
     *
     * @return  self
     */ 
    public function setOfficeDescription($officeDescription)
    {
        $this->officeDescription = $officeDescription;

        return $this;
    }

    /**
     * Get the value of insuranceAmount
     */ 
    public function getInsuranceAmount()
    {
        return $this->insuranceAmount;
    }

    /**
     * Set the value of insuranceAmount
     *
     * @return  self
     */
    public function setInsuranceAmount($insuranceAmount)
    {
        $this->insuranceAmount = $insuranceAmount;

        return $this;
    }

    /**
     * Get the value of roundTrip
     */
    public function getRoundTrip()
    {
        return $this->roundTrip;
    }

    /**
     * Set the value of roundTrip
     *
     * @return  self
     */
    public function setRoundTrip($roundTrip)
    {
        $this->roundTrip = $roundTrip;

        return $this;
    }
}
