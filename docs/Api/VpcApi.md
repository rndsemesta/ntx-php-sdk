# OpenAPI\Client\VpcApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**vpcsUuidRouteTablesGet()**](VpcApi.md#vpcsUuidRouteTablesGet) | **GET** /vpcs/{uuid}/route_tables | Get a existing vpc_route_table |
| [**vpcsUuidRouteTablesPut()**](VpcApi.md#vpcsUuidRouteTablesPut) | **PUT** /vpcs/{uuid}/route_tables | Update a existing vpc_route_table |


## `vpcsUuidRouteTablesGet()`

```php
vpcsUuidRouteTablesGet($uuid): \OpenAPI\Client\Model\VpcRouteTableIntentResponse
```

Get a existing vpc_route_table

This operation gets a existing vpc_route_table.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VpcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->vpcsUuidRouteTablesGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VpcApi->vpcsUuidRouteTablesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\VpcRouteTableIntentResponse**](../Model/VpcRouteTableIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vpcsUuidRouteTablesPut()`

```php
vpcsUuidRouteTablesPut($uuid, $body): \OpenAPI\Client\Model\VpcRouteTableIntentResponse
```

Update a existing vpc_route_table

This operation submits a request to update a existing vpc_route_table based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VpcApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\VpcRouteTableIntentInput(); // \OpenAPI\Client\Model\VpcRouteTableIntentInput

try {
    $result = $apiInstance->vpcsUuidRouteTablesPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VpcApi->vpcsUuidRouteTablesPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\VpcRouteTableIntentInput**](../Model/VpcRouteTableIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VpcRouteTableIntentResponse**](../Model/VpcRouteTableIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
