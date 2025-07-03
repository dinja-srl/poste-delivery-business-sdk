<?php

namespace Dinja\PosteDeliveryBusinessSDK\Response;

class DigipodDownloadResponse extends BaseOtherResponse
{
    /**
     * @var string
     */
    protected $errorCode;

    /**
     * @var string
     */
    protected $errorDescription;

    /**
     * @var string
     */
    protected $filename;

    /**
     * @var string
     */
    protected $attached;

    public function __construct($response)
    {
        foreach ($response as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            } else {
                $this->extraProperties[$key] = $value;
            }
        }
    }

    /**
     * Get the value of filename
     *
     * @return  string
     */ 
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set the value of filename
     *
     * @param  string  $filename
     *
     * @return  self
     */ 
    public function setFilename(string $filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get the value of attached
     *
     * @return  string
     */ 
    public function getAttached()
    {
        return $this->attached;
    }

    /**
     * Set the value of attached
     *
     * @param  string  $attached
     *
     * @return  self
     */ 
    public function setAttached(string $attached)
    {
        $this->attached = $attached;

        return $this;
    }

    /**
     * Get the value of errorCode
     *
     * @return  string
     */ 
    public function getErrorCode()
    {
        return $this->errorCode;
    }

    /**
     * Set the value of errorCode
     *
     * @param  string  $errorCode
     *
     * @return  self
     */ 
    public function setErrorCode(string $errorCode)
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
