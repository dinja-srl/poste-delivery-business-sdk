<?php

namespace Dinja\PosteDeliveryBusinessSDK\Response;

class Tracking
{
    /**
     *
     * @var string
     */
    private $data;

    /**
     *
     * @var string
     */
    private $officeDescription;

    /**
     *
     * @var string
     */
    private $StatusDescription;

    /**
     *
     * @var string
     */
    private $appStatusDescription;

    /**
     *
     * @var string
     */
    private $ivrStatusDescription;

    /**
     *
     * @var string
     */
    private $synthesisStatusDescription;

    /**
     *
     * @var string
     */
    private $phase;

    /**
     *
     * @var string
     */
    private $officeId;

    /**
     *
     * @var string
     */
    private $status;


    public function __construct($data, $officeDescription, $statusDescription, $appStatusDescription, $ivrStatusDescription, $synthesisStatusDescription, $phase, $officeId, $status)
    {
        $this->data = $data;
        $this->officeDescription = $officeDescription;
        $this->StatusDescription = $statusDescription;
        $this->appStatusDescription = $appStatusDescription;
        $this->ivrStatusDescription = $ivrStatusDescription;
        $this->synthesisStatusDescription = $synthesisStatusDescription;
        $this->phase = $phase;
        $this->officeId = $officeId;
        $this->status = $status;
    }

    /**
     * Get the value of data
     *
     * @return  string
     */ 
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set the value of data
     *
     * @param  string  $data
     *
     * @return  self
     */ 
    public function setData(string $data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get the value of officeDescription
     *
     * @return  string
     */ 
    public function getOfficeDescription()
    {
        return $this->officeDescription;
    }

    /**
     * Set the value of officeDescription
     *
     * @param  string  $officeDescription
     *
     * @return  self
     */ 
    public function setOfficeDescription(string $officeDescription)
    {
        $this->officeDescription = $officeDescription;

        return $this;
    }

    /**
     * Get the value of statusDescription
     *
     * @return  string
     */ 
    public function getStatusDescription()
    {
        return $this->StatusDescription;
    }

    /**
     * Set the value of statusDescription
     *
     * @param  string  $statusDescription
     *
     * @return  self
     */ 
    public function setStatusDescription(string $statusDescription)
    {
        $this->StatusDescription = $statusDescription;

        return $this;
    }

    /**
     * Get the value of appStatusDescription
     *
     * @return  string
     */ 
    public function getAppStatusDescription()
    {
        return $this->appStatusDescription;
    }

    /**
     * Set the value of appStatusDescription
     *
     * @param  string  $appStatusDescription
     *
     * @return  self
     */ 
    public function setAppStatusDescription(string $appStatusDescription)
    {
        $this->appStatusDescription = $appStatusDescription;

        return $this;
    }

    /**
     * Get the value of ivrStatusDescription
     *
     * @return  string
     */ 
    public function getIvrStatusDescription()
    {
        return $this->ivrStatusDescription;
    }

    /**
     * Set the value of ivrStatusDescription
     *
     * @param  string  $ivrStatusDescription
     *
     * @return  self
     */ 
    public function setIvrStatusDescription(string $ivrStatusDescription)
    {
        $this->ivrStatusDescription = $ivrStatusDescription;

        return $this;
    }

    /**
     * Get the value of synthesisStatusDescription
     *
     * @return  string
     */ 
    public function getSynthesisStatusDescription()
    {
        return $this->synthesisStatusDescription;
    }

    /**
     * Set the value of synthesisStatusDescription
     *
     * @param  string  $synthesisStatusDescription
     *
     * @return  self
     */ 
    public function setSynthesisStatusDescription(string $synthesisStatusDescription)
    {
        $this->synthesisStatusDescription = $synthesisStatusDescription;

        return $this;
    }

    /**
     * Get the value of phase
     *
     * @return  string
     */ 
    public function getPhase()
    {
        return $this->phase;
    }

    /**
     * Set the value of phase
     *
     * @param  string  $phase
     *
     * @return  self
     */ 
    public function setPhase(string $phase)
    {
        $this->phase = $phase;

        return $this;
    }

    /**
     * Get the value of officeId
     *
     * @return  string
     */ 
    public function getOfficeId()
    {
        return $this->officeId;
    }

    /**
     * Set the value of officeId
     *
     * @param  string  $officeId
     *
     * @return  self
     */ 
    public function setOfficeId(string $officeId)
    {
        $this->officeId = $officeId;

        return $this;
    }

    /**
     * Get the value of status
     *
     * @return  string
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @param  string  $status
     *
     * @return  self
     */ 
    public function setStatus(string $status)
    {
        $this->status = $status;

        return $this;
    }
}