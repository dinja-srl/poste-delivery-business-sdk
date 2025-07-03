<?php

namespace Dinja\PosteDeliveryBusinessSDK\Request;

use Dinja\PosteDeliveryBusinessSDK\Response\DigipodReqResponse;

class DigipodReqRequest extends BaseRequest
{
    protected $method = 'POST';
    protected $endpointTest = 'https://apid.gp.posteitaliane.it/dev/kindergarden/postalandlogistics/parcel/digipodRequest';
    protected $endpointProd = 'https://apiw.gp.posteitaliane.it/gp/internet/postalandlogistics/parcel/digipodRequest';
    protected $mandatoryFields = [
        'barcode'
    ];

    /**
     * @var string
     */
    private $mail;

    /**
     * @var string
     */
    private $barcode;

    public function call($debug = FALSE)
    {
        return new DigipodReqResponse(parent::call($debug));
    }

    public function toArray()
    {
        return array_filter([
            array_filter([
                'mail' => $this->mail,
                'barcode' => ['item' => [['barcode' => $this->barcode]]]], function ($v) { return !is_null($v); })
        ], function ($v) {
            return !is_null($v);
        });
    }

    /**
     * Get the value of mail
     *
     * @return  string
     */ 
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @param  string  $mail
     *
     * @return  self
     */ 
    public function setMail(string $mail)
    {
        $this->mail = $mail;

        return $this;
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
