<?php

namespace Tests;

use Dinja\PosteDeliveryBusinessSDK\Request\WaybillRequest;

use Dinja\PosteDeliveryBusinessSDK\Api\Waybill;
use Dinja\PosteDeliveryBusinessSDK\Api\WaybillData;
use Dinja\PosteDeliveryBusinessSDK\Api\WaybillDataDeclared;
use Dinja\PosteDeliveryBusinessSDK\Api\WaybillDataContact;
use Dinja\PosteDeliveryBusinessSDK\Api\WaybillDataServices;

use Dinja\PosteDeliveryBusinessSDK\Exception\RequestException;

use PHPUnit\Framework\TestCase;

class RequestsTest extends TestCase
{
    const poste_api_client_id = "TBD";
    const poste_api_secret_id = "TBD";
    const poste_api_cost_center_code = "TBD";
    const poste_api_scope = "https://postemarketplace.onmicrosoft.com/d6a78063-5570-4a87-bbd7-07326e6855d1/.default";
    const debug = true;

    public function testHasCorrectStructure()
    {
        $request = $this->buildRequest();

        $body = $request->createRequestBody();

        $this->assertArrayHasKey('waybills', $body);
    }

    private function buildRequest()
    {
        $timestamp = new \DateTime();
		$timezone = new \DateTimeZone('Europe/Rome');
		$timestamp->setTimezone($timezone);

        $waybillDataReceiver = new WaybillDataContact();
		$waybillDataReceiver->setNameSurname("Mario Rossi")->setContactName("Dinja Srl")
			->setAddressId("")
			->setAddress("Via Roma 1")
			->setZipCode("70044")
			->setCity("Polignano a Mare")
			->setCountry("ITA1")
			->setProvince("BA")
			->setCountryName("Italia")
			->setPhone("")
			->setCellphone("")
            ->setEmail("info@sellengine.it");

        $waybillDataSender = new WaybillDataContact();
        $waybillDataSender->setZipCode("70044")
            ->setStreetNumber("")
            ->setPhone("")
            ->setEmail("info@sellengine.it")
            ->setCity("Polignano a Mare")
            ->setAddressId("")
            ->setAddress("Via Leonardo da Vinci 22")
            ->setProvince("BA")
            ->setCountry("ITA1")
            ->setCountryName("Italia")
            ->setNameSurname("Dinja Srl")
            ->setNote1("TEST");

        $waybillDataServices = new WaybillDataServices();
        $dataWrapper = array();
        $waybillDataServices->setDataWrapper($dataWrapper);

        $declaredArr = array();
        $waybillDataDeclared = new WaybillDataDeclared();
        $waybillDataDeclared->setWeight("1")
            ->setHeight("1")
            ->setLength("1")
            ->setWidth("1");
        array_push($declaredArr, $waybillDataDeclared);

        $waybillData = new WaybillData();
        $waybillData->setDeclared($declaredArr)
            ->setSender($waybillDataSender)
            ->setServices($waybillDataServices)
            ->setReceiver($waybillDataReceiver)
            ->setContent("Vario");

        $waybill = new Waybill();
		$waybill->setPrintFormat("ZPL")
			->setClientReferenceId("1")
			->setProduct("APT000901")
			->setData($waybillData);

        $request = new WaybillRequest(self::poste_api_client_id, self::poste_api_secret_id, self::poste_api_scope, self::debug);
        $request->setCostCenterCode(self::poste_api_cost_center_code)
            ->setShipmentDate($timestamp->format(\DateTime::ISO8601))
            ->setWaybill($waybill);

        return $request;
    }

    public function testHasNotMandatoryFields()
    {
        $request = $this->buildRequest();

        $request->setCostCenterCode('');

        $this->expectException(RequestException::class);
        $request->call(self::debug);
    }

    public function testCreateResponseSuccessful()
    {
        $request = $this->buildRequest();

        $response = $request->call(self::debug);

        $this->assertInstanceOf('Dinja\PosteDeliveryBusinessSDK\Response\WaybillResponse', $response);
        $this->assertTrue(count($response->getWaybills()) > 0);
        $this->assertFalse($response->getWaybills()[0]->hasError());

        return $response;
    }

}