<?php

namespace Dinja\PosteDeliveryBusinessSDK\Response;

class NationsResponse extends BaseResponse
{

    /**
     * @var array
     */
    protected $countries;

    public function __construct($response)
    {
        foreach ($response as $key => $value) {
            if (property_exists($this, $key)) {
                switch ($key) {
                    case 'countries':
                        foreach($value as $arrvalue) {
                            $value = array();

                            $country = new Country(
                                $arrvalue->iso4,
                                $arrvalue->iso2,
                                $arrvalue->active,
                                $arrvalue->name,
                                isset($arrvalue->intName)?$arrvalue->intName:null,
                                $arrvalue->extraue,
                                $arrvalue->states,
                                isset($arrvalue->news)?$arrvalue->news:null,
                                $arrvalue->products
                            );
                            array_push($value, $country);
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
     * Get the value of countries
     *
     * @return  array
     */ 
    public function getCountries()
    {
        return $this->countries;
    }

    /**
     * Set the value of countries
     *
     * @param  array  $countries
     *
     * @return  self
     */ 
    public function setCountries(array $countries)
    {
        $this->countries = $countries;

        return $this;
    }

}
