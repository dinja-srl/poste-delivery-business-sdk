<?php

namespace Dinja\PosteDeliveryBusinessSDK\Request;

use Dinja\PosteDeliveryBusinessSDK\Response\DigipodDownloadResponse;

class DigipodDownloadRequest extends BaseRequest
{
    protected $method = 'POST';
    protected $endpointTest = 'https://apid.gp.posteitaliane.it/dev/kindergarden/postalandlogistics/parcel/digipodDownload';
    protected $endpointProd = 'https://apiw.gp.posteitaliane.it/gp/internet/postalandlogistics/parcel/digipodDownload';
    protected $mandatoryFields = [
        'barcode'
    ];

    /**
     * @var string
     */
    private $barcode;

    public function call($debug = FALSE)
    {
        return new DigipodDownloadResponse(parent::call($debug));
    }

    public function toArray()
    {
        return array_filter([
            array_filter([
                'barcode' => $this->barcode], function ($v) { return !is_null($v); })
        ], function ($v) {
            return !is_null($v);
        });
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
