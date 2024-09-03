<?php

namespace Dinja\PosteDeliveryBusinessSDK\Request;

use Dinja\PosteDeliveryBusinessSDK\Api\LabelParameter;
use Dinja\PosteDeliveryBusinessSDK\Exception\InvalidJsonException;
use Dinja\PosteDeliveryBusinessSDK\Exception\RequestException;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

abstract class BaseRequest implements RequestInterface
{
    protected $accessToken;
    protected $clientId;
    protected $command = '';
    protected $method = 'POST';
    protected $endpointTest = '';
    protected $endpointProd = '';
    protected $apiProperties = [];
    protected $mandatoryFields = [];

    public function __construct($clientId, $secretId, $scope, $debug = FALSE)
    {
        $client = new Client([
            'timeout' => 30.0
        ]);

        $request = array();
        $request['clientId'] = $clientId;
        $request['secretId'] = $secretId;
        $request['scope'] = $scope;
        $request['grantType'] = "client_credentials";

        $response = $client->request($this->method, $debug ? "https://apid.gp.posteitaliane.it/dev/kindergarden/user/sessions" : "https://apiw.gp.posteitaliane.it/gp/internet/user/sessions", ['headers' => ['POSTE_clientID' => $clientId],'body' => json_encode($request)] );
        $body = $response->getBody();
        $body = json_decode($response->getBody());

        if(isset($body->access_token)) {
            $this->accessToken = $body->access_token;
            $this->clientId = $clientId;
        } else {
            throw new InvalidJsonException($body->error_description, $body->error_codes[0]);
        }
    }

    /**
     * Performs http call to PosteDeliveryBusiness API
     *
     * @throws GuzzleException
     * @throws InvalidJsonException|RequestException
     */
    public function call($debug = FALSE)
    {
        $client = new Client([
            'timeout' => 30.0
        ]);

        $response = $client->request($this->method, $debug ? $this->endpointTest : $this->endpointProd, [
            'headers'        => ['POSTE_clientID' => $this->clientId, 'Authorization' => $this->accessToken],
            'json' => $this->createRequestBody()
        ]);

        $response = json_decode($response->getBody());

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new InvalidJsonException(json_last_error_msg(), json_last_error());
        }

        return $response;
    }

    public function toArray()
    {
        return [[]];
    }

    public function createRequestBody()
    {
//        PHP 5.6+ only
//        $emptyMandatory = array_filter($this->toArray(), function ($v, $k) {
//            return in_array($k, $this->mandatoryFields) && (is_null($v) || $v === "");
//        }, 1);
        $arr = $this->toArray();
        $emptyMandatory = [];
        foreach ($arr[0] as $k => $v) {
            if (in_array($k, $this->mandatoryFields) && (is_null($v) || $v === "")) {
                $emptyMandatory[$k] = $v;
            }
        }
        if (count($emptyMandatory) > 0) {
            throw new RequestException(sprintf('Fields %s are mandatory', implode(', ', array_keys($emptyMandatory))));
        }

        return $arr[0];
    }

}