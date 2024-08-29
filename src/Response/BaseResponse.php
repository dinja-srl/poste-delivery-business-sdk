<?php

namespace Dinja\PosteDeliveryBusinessSDK\Response;

class BaseResponse
{

    /**
     * @var String
     */
    protected $channel;

    /**
     * @var String
     */
    protected $contractCode;

    /**
     * @var Result
     */
    protected $result;

    /**
     * @var array
     */
    protected $extraProperties;

    public function __construct($response)
    {
        foreach ($response as $key => $value) {
            if (property_exists($this, $key)) {
                switch ($key) {
                    case 'result':
                        $value = new Result(
                            $value->errorCode,
                            $value->errorDescription
                        );
                        break;
                }
                $this->{$key} = $value;
            } else {
                $this->extraProperties[$key] = $value;
            }
        }
    }

    public function hasError()
    {
        return $this->result->getErrorCode() >= 1;
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
     * Get the value of channel
     *
     * @return  String
     */ 
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Set the value of channel
     *
     * @param  String  $channel
     *
     * @return  self
     */ 
    public function setChannel(String $channel)
    {
        $this->channel = $channel;

        return $this;
    }

    /**
     * Get the value of contractCode
     *
     * @return  String
     */ 
    public function getContractCode()
    {
        return $this->contractCode;
    }

    /**
     * Set the value of contractCode
     *
     * @param  String  $contractCode
     *
     * @return  self
     */ 
    public function setContractCode(String $contractCode)
    {
        $this->contractCode = $contractCode;

        return $this;
    }

    /**
     * Get the value of result
     *
     * @return  Result
     */ 
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Set the value of result
     *
     * @param  Result  $result
     *
     * @return  self
     */ 
    public function setResult(Result $result)
    {
        $this->result = $result;

        return $this;
    }

}
