<?php

namespace Dinja\PosteDeliveryBusinessSDK\Request;

use Dinja\PosteDeliveryBusinessSDK\Response\NationsResponse;

class NationsRequest extends BaseRequest
{
    protected $method = 'POST';
    protected $endpointTest = 'https://apid.gp.posteitaliane.it/dev/kindergarden/postalandlogistics/parcel/international/nations';
    protected $endpointProd = 'https://apiw.gp.posteitaliane.it/gp/internet/postalandlogistics/parcel/international/nations';

    protected $mandatoryFields = [
    ];

    public function call($debug = FALSE)
    {
        return new NationsResponse(parent::call($debug));
    }

    public function toArray()
    {
        return [[]];
    }

}
