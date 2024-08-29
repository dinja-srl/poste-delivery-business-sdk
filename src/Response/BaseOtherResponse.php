<?php

namespace Dinja\PosteDeliveryBusinessSDK\Response;

class BaseOtherResponse
{

     /**
     * @var int
     */
    protected $code;

    /**
     * @var string
     */
    protected $result;

    /**
     * @var string
     */
    protected $outcome;

    /**
     * @var array
     */
    protected $extraProperties;

    public function hasError()
    {
        return $this->getCode() >= 1;
    }

    /**
     * @return array
     */
    public function getExtraProperties()
    {
        return $this->extraProperties;
    }

    /**
     * @param string $name
     * @param mixed $value
     * @return BaseResponse
     */
    public function addExtraProperties($name, $value)
    {
        $this->extraProperties[$name] = $value;
        return $this;
    }

    /**
     * Get the value of result
     *
     * @return  int
     */ 
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set the value of result
     *
     * @param  int  $code
     *
     * @return  self
     */ 
    public function setCode(int $code)
    {
        $this->code = $code;

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
     * Get the value of result
     *
     * @return  string
     */ 
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * Set the value of result
     *
     * @param  string  $outcome
     *
     * @return  self
     */ 
    public function setOutcome(string $outcome)
    {
        $this->outcome = $outcome;

        return $this;
    }

}
