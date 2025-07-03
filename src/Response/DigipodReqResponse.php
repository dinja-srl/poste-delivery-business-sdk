<?php

namespace Dinja\PosteDeliveryBusinessSDK\Response;

class DigipodReqResponse extends BaseResponse
{
    public function __construct($response)
    {
        foreach ($response as $key => $value) {
            if (property_exists($this, $key)) {
                switch ($key) {
                    case 'result':
                        $result = new Result(
                            $value->item[0]->errorCode,
                            $value->item[0]->errorDescription
                        );
                        $result->setResult($value->item[0]->result);
                        $result->setBarcode($value->item[0]->barcode);
                        $value = $result;
                        break;
                }
                $this->{$key} = $value;
            } else {
                $this->extraProperties[$key] = $value;
            }
        }
    }
}
