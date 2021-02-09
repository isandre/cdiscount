# OpenAPI\Client\OrderApi

All URIs are relative to https://marketplaceapi.cdiscount.com/OrderManagement.

Method | HTTP request | Description
------------- | ------------- | -------------
[**patchOrdersOrdernumberValidate()**](OrderApi.md#patchOrdersOrdernumberValidate) | **PATCH** /orders/{orderNumber}/validate | Validates an order.
[**postOrdersSearch()**](OrderApi.md#postOrdersSearch) | **POST** /orders/search | Searches orders by criteria.


## `patchOrdersOrdernumberValidate()`

```php
patchOrdersOrdernumberValidate($order_number, $seller_id, $cds_marketplace_api_models_order_order_validate_request): \OpenAPI\Client\Model\CdsMarketplaceApiModelsOrderOrderValidateResult
```

Validates an order.

Validates an order.

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_number = 'order_number_example'; // string | Order number.
$seller_id = 98979; // int | In production enter the desired SellerId
$cds_marketplace_api_models_order_order_validate_request = new \OpenAPI\Client\Model\CdsMarketplaceApiModelsOrderOrderValidateRequest(); // \OpenAPI\Client\Model\CdsMarketplaceApiModelsOrderOrderValidateRequest | Update request.

try {
    $result = $apiInstance->patchOrdersOrdernumberValidate($order_number, $seller_id, $cds_marketplace_api_models_order_order_validate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->patchOrdersOrdernumberValidate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_number** | **string**| Order number. |
 **seller_id** | **int**| In production enter the desired SellerId | [optional] [default to 98979]
 **cds_marketplace_api_models_order_order_validate_request** | [**\OpenAPI\Client\Model\CdsMarketplaceApiModelsOrderOrderValidateRequest**](../Model/CdsMarketplaceApiModelsOrderOrderValidateRequest.md)| Update request. | [optional]

### Return type

[**\OpenAPI\Client\Model\CdsMarketplaceApiModelsOrderOrderValidateResult**](../Model/CdsMarketplaceApiModelsOrderOrderValidateResult.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postOrdersSearch()`

```php
postOrdersSearch($seller_id, $cds_marketplace_api_models_order_search_order_request): \OpenAPI\Client\Model\CdsMarketplaceApiModelsOrderOrder[]
```

Searches orders by criteria.

Searches orders by criteria.

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


$apiInstance = new OpenAPI\Client\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$seller_id = 98979; // int | In production enter the desired SellerId
$cds_marketplace_api_models_order_search_order_request = new \OpenAPI\Client\Model\CdsMarketplaceApiModelsOrderSearchOrderRequest(); // \OpenAPI\Client\Model\CdsMarketplaceApiModelsOrderSearchOrderRequest | Criteria request.

try {
    $result = $apiInstance->postOrdersSearch($seller_id, $cds_marketplace_api_models_order_search_order_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->postOrdersSearch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_id** | **int**| In production enter the desired SellerId | [optional] [default to 98979]
 **cds_marketplace_api_models_order_search_order_request** | [**\OpenAPI\Client\Model\CdsMarketplaceApiModelsOrderSearchOrderRequest**](../Model/CdsMarketplaceApiModelsOrderSearchOrderRequest.md)| Criteria request. | [optional]

### Return type

[**\OpenAPI\Client\Model\CdsMarketplaceApiModelsOrderOrder[]**](../Model/CdsMarketplaceApiModelsOrderOrder.md)

### Authorization

[apiKeyHeader](../../README.md#apiKeyHeader), [apiKeyQuery](../../README.md#apiKeyQuery)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
