<?php

namespace Dinja\PosteDeliveryBusinessSDK\Response;

class Waybill
{
    /**
     *
     * @var string
     */
    private $code;

    /**
     *
     * @var string
     */
    private $internationalCode;

    /**
     *
     * @var string
     */
    private $internationalCode2;

    /**
     *
     * @var string
     */
    private $referralId;

    /**
     *
     * @var string
     */
    private $filepath;

    /**
     *
     * @var string
     */
    private $downloadURL;

    /**
     *
     * @var string
     */
    private $downloadUrlImg;

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


    public function __construct($code, $internationalCode, $internationalCode2, $referralId, $filepath, $downloadURL, $downloadUrlImg, $errorCode, $errorDescription)
    {
        $this->code = $code;
        $this->internationalCode = $internationalCode;
        $this->internationalCode2 = $internationalCode2;
        $this->referralId = $referralId;
        $this->filepath = $filepath;
        $this->downloadURL = $downloadURL;
        $this->downloadUrlImg = $downloadUrlImg;
        $this->errorCode = $errorCode;
        $this->errorDescription = $errorDescription;
    }

    public function hasError()
    {
        return $this->errorCode >= 1;
    }


    /**
     * Get the value of code
     *
     * @return  string
     */ 
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of code
     *
     * @param  string  $code
     *
     * @return  self
     */ 
    public function setCode(string $code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get the value of internationalCode
     *
     * @return  string
     */ 
    public function getInternationalCode()
    {
        return $this->internationalCode;
    }

    /**
     * Set the value of internationalCode
     *
     * @param  string  $internationalCode
     *
     * @return  self
     */ 
    public function setInternationalCode(string $internationalCode)
    {
        $this->internationalCode = $internationalCode;

        return $this;
    }

    /**
     * Get the value of internationalCode2
     *
     * @return  string
     */ 
    public function getInternationalCode2()
    {
        return $this->internationalCode2;
    }

    /**
     * Set the value of internationalCode2
     *
     * @param  string  $internationalCode2
     *
     * @return  self
     */ 
    public function setInternationalCode2(string $internationalCode2)
    {
        $this->internationalCode2 = $internationalCode2;

        return $this;
    }

    /**
     * Get the value of referralId
     *
     * @return  string
     */ 
    public function getReferralId()
    {
        return $this->referralId;
    }

    /**
     * Set the value of referralId
     *
     * @param  string  $referralId
     *
     * @return  self
     */ 
    public function setReferralId(string $referralId)
    {
        $this->referralId = $referralId;

        return $this;
    }

    /**
     * Get the value of filepath
     *
     * @return  string
     */ 
    public function getFilepath()
    {
        return $this->filepath;
    }

    /**
     * Set the value of filepath
     *
     * @param  string  $filepath
     *
     * @return  self
     */ 
    public function setFilepath(string $filepath)
    {
        $this->filepath = $filepath;

        return $this;
    }

    /**
     * Get the value of downloadURL
     *
     * @return  string
     */ 
    public function getDownloadURL()
    {
        return $this->downloadURL;
    }

    /**
     * Set the value of downloadURL
     *
     * @param  string  $downloadURL
     *
     * @return  self
     */ 
    public function setDownloadURL(string $downloadURL)
    {
        $this->downloadURL = $downloadURL;

        return $this;
    }

    /**
     * Get the value of downloadUrlImg
     *
     * @return  string
     */ 
    public function getDownloadUrlImg()
    {
        return $this->downloadUrlImg;
    }

    /**
     * Set the value of downloadUrlImg
     *
     * @param  string  $downloadUrlImg
     *
     * @return  self
     */ 
    public function setDownloadUrlImg(string $downloadUrlImg)
    {
        $this->downloadUrlImg = $downloadUrlImg;

        return $this;
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

}