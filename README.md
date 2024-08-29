# Poste Delivery Business PHP SDK

This package is an unofficial simple PHP SDK for Poste Delivery Business Rest API services.

## Installing
Install with composer
```shell
composer require dinja/poste-delivery-business-sdk
```

## Features
### Waybill Services
*   Create Waybill
*   Get Nations

### Tracking
*   Get Shipment Tracking

## Usage
### Create Waybill
```php
$debug = false;
$timestamp = new \DateTime();
$timezone = new \DateTimeZone('Europe/Rome');
$timestamp->setTimezone($timezone);

$waybillDataReceiver = new Dinja\PosteDeliveryBusinessSDK\Api\WaybillDataContact();
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

$waybillDataSender = new Dinja\PosteDeliveryBusinessSDK\Api\WaybillDataContact();
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

$waybillDataServices = new Dinja\PosteDeliveryBusinessSDK\Api\WaybillDataServices();
$dataWrapper = array();
$waybillDataServices->setDataWrapper($dataWrapper);

$declaredArr = array();
$waybillDataDeclared = new Dinja\PosteDeliveryBusinessSDK\Api\WaybillDataDeclared();
$waybillDataDeclared->setWeight("1")
    ->setHeight("1")
    ->setLength("1")
    ->setWidth("1");
array_push($declaredArr, $waybillDataDeclared);

$waybillData = new Dinja\PosteDeliveryBusinessSDK\Api\WaybillData();
$waybillData->setDeclared($declaredArr)
    ->setSender($waybillDataSender)
    ->setServices($waybillDataServices)
    ->setReceiver($waybillDataReceiver)
    ->setContent("Vario");

$waybill = new Dinja\PosteDeliveryBusinessSDK\Api\Waybill();
$waybill->setPrintFormat("ZPL")
    ->setClientReferenceId("1")
    ->setProduct("APT000901")
    ->setData($waybillData);

$request = new Dinja\PosteDeliveryBusinessSDK\Request\WaybillRequest("poste_api_client_id", "poste_api_secret_id", "poste_api_scope", $debug);
$request->setCostCenterCode("poste_api_cost_center_code")
    ->setShipmentDate($timestamp->format(\DateTime::ISO8601))
    ->setWaybill($waybill);

$response = $request->call($debug);

if ($response->hasError()) {
    echo $response->getResult()->getErrorCode();
} else {
    $waybills = $response->getWaybills();
}
```

### Get Nations
```php
$debug = false;

$request = new Dinja\PosteDeliveryBusinessSDK\Request\NationsRequest("poste_api_client_id", "poste_api_secret_id", "poste_api_scope", $debug);

$response = $request->call($debug);

if ($response->hasError()) {
    echo $response->getResult()->getErrorCode();
} else {
    $countries = $response->getCountries();
    foreach ($countries as $country) {
        echo $country->getIso4();
    }
}
```

### Get Shipment Tracking
```php
$shipmentsData = new Dinja\PosteDeliveryBusinessSDK\Api\ShipmentsData();
$shipmentsData->setWaybillNumber($trackingNumber)->setLastTracingState("N");

$request = new Dinja\PosteDeliveryBusinessSDK\Request\TrackingRequest("poste_api_client_id", "poste_api_secret_id", "poste_api_scope", $debug);
$request->setShipmentsData($shipmentsData)->setStatusDescription("E")->setCustomerType("DQ");

$response = $request->call($debug);

if ($response->hasError()) {
    echo $response->getCode();
} else {
    $shipment = $response->getShipment();
}
```

## Credits

- [Dinja Srl][link-author]
- [All Contributors][link-contributors]

## License

This project is licensed under the MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[link-author]: https://github.com/dinja-srl
[link-contributors]: ../../contributors
