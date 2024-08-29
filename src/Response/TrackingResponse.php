<?php

namespace Dinja\PosteDeliveryBusinessSDK\Response;

class TrackingResponse extends BaseOtherResponse
{

     /**
     * @var array
     */
    protected $shipment;

    public function __construct($response)
    {
        foreach ($response->return as $key => $value) {
            if (property_exists($this, $key)) {
                switch ($key) {
                    case 'shipment':
                        foreach($value as $arrvalue) {
                            $mapping = array();
                            $tracking = array();
                            if(count($arrvalue->tracking) > 0) {
                                foreach($arrvalue->tracking as $trackingvalue) {
                                    $trackingObj = new Tracking(
                                        $trackingvalue->data,
                                        $trackingvalue->officeDescription,
                                        $trackingvalue->StatusDescription,
                                        $trackingvalue->appStatusDescription,
                                        $trackingvalue->ivrStatusDescription,
                                        $trackingvalue->synthesisStatusDescription,
                                        $trackingvalue->phase,
                                        $trackingvalue->officeId,
                                        $trackingvalue->status
                                    );
                                    array_push($tracking, $trackingObj);
                                }
                            }

                            $waybillNumber = null;
                            $product = null;
                            $NotificationFlag = null;
                            $returnFlag = null;
                            if(property_exists($arrvalue,'waybillNumber')) {
                                $waybillNumber = $arrvalue->waybillNumber;
                            }
                            if(property_exists($arrvalue,'product')) {
                                $product = $arrvalue->product;
                            }
                            if(property_exists($arrvalue,'NotificationFlag')) {
                                $NotificationFlag = $arrvalue->NotificationFlag;
                            }
                            if(property_exists($arrvalue,'returnFlag')) {
                                $returnFlag = $arrvalue->returnFlag;
                            }
                            $shipment = new Shipment(
                                $waybillNumber,
                                $product,
                                $NotificationFlag,
                                $returnFlag,
                                $arrvalue->shipment,
                                $tracking
                            );

                            array_push($mapping, $shipment);
                        }
                        break;
                }
                $this->{$key} = $value;
            } else {
                $this->extraProperties[$key] = $value;
            }
        }
    }

    /**
     * Get the value of shipment
     *
     * @return  array
     */ 
    public function getShipment()
    {
        return $this->shipment;
    }

    /**
     * Set the value of shipment
     *
     * @param  array  $shipment
     *
     * @return  self
     */ 
    public function setShipment(array $shipment)
    {
        $this->shipment = $shipment;

        return $this;
    }
}