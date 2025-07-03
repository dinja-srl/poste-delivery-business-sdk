<?php

namespace Dinja\PosteDeliveryBusinessSDK\Response;

class Result
{
    /**
     *
     * @var int
     */
    private $errorCode;

    /**
     *
     * @var string
     */
    private $errorDescription;

    /**
     *
     * @var string
     */
    private $result;

     /**
     *
     * @var string
     */
    private $barcode;

    public function __construct($errorCode, $errorDescription)
    {
        $this->errorCode = $errorCode;
        $this->errorDescription = $errorDescription;
    }

    /**
     * Get the value of errorCode
     *
     * @return  int
     */ 
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * Set the value of errorCode
     *
     * @param  int  $errorCode
     *
     * @return  self
     */ 
    public function setErrorCode(int $errorCode)
    {
        $this->errorCode = $errorCode;

        return $this;
    }

    /**
     * Get the value of errorDescription
     *
     * @return  string
     */ 
    public function getErrorDescription()
    {
        return $this->errorDescription;
    }

    /**
     * Set the value of errorDescription
     *
     * @param  string  $errorDescription
     *
     * @return  self
     */ 
    public function setErrorDescription(string $errorDescription)
    {
        $this->errorDescription = $errorDescription;

        return $this;
    }

    /**
     * Get the value of result
     *
     * @return  string
     */ 
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Set the value of result
     *
     * @param  string  $result
     *
     * @return  self
     */ 
    public function setResult(string $result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get the value of barcode
     *
     * @return  string
     */ 
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * Set the value of barcode
     *
     * @param  string  $barcode
     *
     * @return  self
     */ 
    public function setBarcode(string $barcode)
    {
        $this->barcode = $barcode;

        return $this;
    }
}