# OpenAPI\Client\RackableUnitApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**rackableUnitsListPost()**](RackableUnitApi.md#rackableUnitsListPost) | **POST** /rackable_units/list | Retrieves all rackable units |
| [**rackableUnitsUuidGet()**](RackableUnitApi.md#rackableUnitsUuidGet) | **GET** /rackable_units/{uuid} | Retrieves specified rackable unit |
| [**rackableUnitsUuidPut()**](RackableUnitApi.md#rackableUnitsUuidPut) | **PUT** /rackable_units/{uuid} | Update rackable unit |


## `rackableUnitsListPost()`

```php
rackableUnitsListPost($get_entities_request): \OpenAPI\Client\Model\RackableUnitListIntentResponse
```

Retrieves all rackable units

Retrieves all rackable units

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RackableUnitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\RackableUnitListMetadata(); // \OpenAPI\Client\Model\RackableUnitListMetadata

try {
    $result = $apiInstance->rackableUnitsListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RackableUnitApi->rackableUnitsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\RackableUnitListMetadata**](../Model/RackableUnitListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RackableUnitListIntentResponse**](../Model/RackableUnitListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rackableUnitsUuidGet()`

```php
rackableUnitsUuidGet($uuid): \OpenAPI\Client\Model\RackableUnitIntentResponse
```

Retrieves specified rackable unit

Retrieves specified rackable unit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RackableUnitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->rackableUnitsUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RackableUnitApi->rackableUnitsUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\RackableUnitIntentResponse**](../Model/RackableUnitIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rackableUnitsUuidPut()`

```php
rackableUnitsUuidPut($uuid, $body): \OpenAPI\Client\Model\RackableUnitIntentResponse
```

Update rackable unit

Update rackable unit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RackableUnitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\RackableUnitIntentInput(); // \OpenAPI\Client\Model\RackableUnitIntentInput | Update rackable unit

try {
    $result = $apiInstance->rackableUnitsUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RackableUnitApi->rackableUnitsUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\RackableUnitIntentInput**](../Model/RackableUnitIntentInput.md)| Update rackable unit | |

### Return type

[**\OpenAPI\Client\Model\RackableUnitIntentResponse**](../Model/RackableUnitIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
