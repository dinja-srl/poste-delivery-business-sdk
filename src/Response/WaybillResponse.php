<?php

namespace Dinja\PosteDeliveryBusinessSDK\Response;

class WaybillResponse extends BaseResponse
{

    /**
     * @var String
     */
    protected $costCenterCode;

    /**
     * @var boolean
     */
    protected $paperless;

    /**
     * @var array
     */
    protected $waybills;


    public function __construct($response)
    {
        foreach ($response as $key => $value) {
            if (property_exists($this, $key)) {
                switch ($key) {
                    case 'waybills':
                        $waybills = $value;
                        $value = array();
                        foreach($waybills as $arrvalue) {
                            $waybill = new Waybill(
                                $arrvalue->code,
                                $arrvalue->internationalCode,
                                $arrvalue->internationalCode2,
                                $arrvalue->referralId,
                                $arrvalue->filepath,
                                $arrvalue->downloadURL,
                                $arrvalue->downloadUrlImg,
                                $arrvalue->errorCode,
                                $arrvalue->errorDescription
                            );
                            array_push($value, $waybill);
                        }
                        break;
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

    /**
     * Get the value of costCenterCode
     *
     * @return  String
     */ 
    public function getCostCenterCode()
    {
        return $this->costCenterCode;
    }

    /**
     * Set the value of costCenterCode
     *
     * @param  String  $costCenterCode
     *
     * @return  self
     */ 
    public function setCostCenterCode(String $costCenterCode)
    {
        $this->costCenterCode = $costCenterCode;

        return $this;
    }

    /**
     * Get the value of paperless
     *
     * @return  boolean
     */ 
    public function getPaperless()
    {
        return $this->paperless;
    }

    /**
     * Set the value of paperless
     *
     * @param  boolean  $paperless
     *
     * @return  self
     */ 
    public function setPaperless(bool $paperless)
    {
        $this->paperless = $paperless;

        return $this;
    }

     /**
     * Get the value of waybills
     *
     * @return  array
     */ 
    public function getWaybills()
    {
        return $this->waybills;
    }

    /**
     * Set the value of waybills
     *
     * @param  array  $waybills
     *
     * @return  self
     */ 
    public function setWaybills(array $waybills)
    {
        $this->waybills = $waybills;

        return $this;
    }

}
