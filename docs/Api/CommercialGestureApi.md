# OpenAPI\Client\CommercialGestureApi

All URIs are relative to https://marketplaceapi.cdiscount.com/OrderManagement.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getOrdersOrdernumberCommercialGestureEligibilities()**](CommercialGestureApi.md#getOrdersOrdernumberCommercialGestureEligibilities) | **GET** /orders/{orderNumber}/commercial-gesture-eligibilities | Gets if an order is eligible to commercial gesture.
[**getOrdersOrdernumberCommercialGestures()**](CommercialGestureApi.md#getOrdersOrdernumberCommercialGestures) | **GET** /orders/{orderNumber}/commercial-gestures | Gets informations relative to commercial gestures on a order.
[**postOrdersOrdernumberCommercialGestures()**](CommercialGestureApi.md#postOrdersOrdernumberCommercialGestures) | **POST** /orders/{orderNumber}/commercial-gestures | Creates a commercial gesture on a order.


## `getOrdersOrdernumberCommercialGestureEligibilities()`

```php
getOrdersOrdernumberCommercialGestureEligibilities($order_number, $seller_id): \OpenAPI\Client\Model\CdsMarketplaceApiModelsCommercialGestureCommercialGestureOrderInformations
```

Gets if an order is eligible to commercial gesture.

Gets if an order is eligible to commercial gesture.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

// Configure API key authorization: apiKeyQuery
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CommercialGestureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_number = 'order_number_example'; // string | Order number (ex scopus_id).
$seller_id = 98979; // int | In production enter the desired SellerId

try {
    $result = $apiInstance->getOrdersOrdernumberCommercialGestureEligibilities($order_number, $seller_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommercialGestureApi->getOrdersOrdernumberCommercialGestureEligibilities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**| Order number (ex scopus_id). |
 **seller_id** | **int**| In production enter the desired SellerId | [optional] [default to 98979]

### Return type

[**\OpenAPI\Client\Model\CdsMarketplaceApiModelsCommercialGestureCommercialGestureOrderInformations**](../Model/CdsMarketplaceApiModelsCommercialGestureCommercialGestureOrderInformations.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrdersOrdernumberCommercialGestures()`

```php
getOrdersOrdernumberCommercialGestures($order_number, $seller_id): \OpenAPI\Client\Model\CdsMarketplaceApiModelsCommercialGestureCommercialGestureOrderInformations
```

Gets informations relative to commercial gestures on a order.

Gets informations relative to commercial gestures on a order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

// Configure API key authorization: apiKeyQuery
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CommercialGestureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_number = 'order_number_example'; // string | Order number (ex scopus_id).
$seller_id = 98979; // int | In production enter the desired SellerId

try {
    $result = $apiInstance->getOrdersOrdernumberCommercialGestures($order_number, $seller_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommercialGestureApi->getOrdersOrdernumberCommercialGestures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**| Order number (ex scopus_id). |
 **seller_id** | **int**| In production enter the desired SellerId | [optional] [default to 98979]

### Return type

[**\OpenAPI\Client\Model\CdsMarketplaceApiModelsCommercialGestureCommercialGestureOrderInformations**](../Model/CdsMarketplaceApiModelsCommercialGestureCommercialGestureOrderInformations.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postOrdersOrdernumberCommercialGestures()`

```php
postOrdersOrdernumberCommercialGestures($order_number, $seller_id, $cds_marketplace_api_models_commercial_gesture_create_commercial_gesture_request)
```

Creates a commercial gesture on a order.

Creates a commercial gesture on a order.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKeyHeader
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Ocp-Apim-Subscription-Key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Ocp-Apim-Subscription-Key', 'Bearer');

// Configure API key authorization: apiKeyQuery
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('subscription-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('subscription-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\CommercialGestureApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_number = 'order_number_example'; // string | Order number (ex scopus_id).
$seller_id = 98979; // int | In production enter the desired SellerId
$cds_marketplace_api_models_commercial_gesture_create_commercial_gesture_request = new \OpenAPI\Client\Model\CdsMarketplaceApiModelsCommercialGestureCreateCommercialGestureRequest(); // \OpenAPI\Client\Model\CdsMarketplaceApiModelsCommercialGestureCreateCommercialGestureRequest | Instance of Cds.MarketplaceApi.Models.CommercialGesture.CreateCommercialGestureRequest.

try {
    $apiInstance->postOrdersOrdernumberCommercialGestures($order_number, $seller_id, $cds_marketplace_api_models_commercial_gesture_create_commercial_gesture_request);
} catch (Exception $e) {
    echo 'Exception when calling CommercialGestureApi->postOrdersOrdernumberCommercialGestures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**| Order number (ex scopus_id). |
 **seller_id** | **int**| In production enter the desired SellerId | [optional] [default to 98979]
 **cds_marketplace_api_models_commercial_gesture_create_commercial_gesture_request** | [**\OpenAPI\Client\Model\CdsMarketplaceApiModelsCommercialGestureCreateCommercialGestureRequest**](../Model/CdsMarketplaceApiModelsCommercialGestureCreateCommercialGestureRequest.md)| Instance of Cds.MarketplaceApi.Models.CommercialGesture.CreateCommercialGestureRequest. | [optional]

### Return type

void (empty response body)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
