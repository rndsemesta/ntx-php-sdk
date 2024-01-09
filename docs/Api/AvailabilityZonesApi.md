# OpenAPI\Client\AvailabilityZonesApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**availabilityZonesListPost()**](AvailabilityZonesApi.md#availabilityZonesListPost) | **POST** /availability_zones/list | Get availability zones |
| [**availabilityZonesPost()**](AvailabilityZonesApi.md#availabilityZonesPost) | **POST** /availability_zones | Create an availability zone |
| [**availabilityZonesSyncPost()**](AvailabilityZonesApi.md#availabilityZonesSyncPost) | **POST** /availability_zones/sync | Sync global entities to all connected availability zones. |
| [**availabilityZonesUuidDelete()**](AvailabilityZonesApi.md#availabilityZonesUuidDelete) | **DELETE** /availability_zones/{uuid} | Delete an availability zone |
| [**availabilityZonesUuidGet()**](AvailabilityZonesApi.md#availabilityZonesUuidGet) | **GET** /availability_zones/{uuid} | Get details for an availability zones |
| [**availabilityZonesUuidPut()**](AvailabilityZonesApi.md#availabilityZonesUuidPut) | **PUT** /availability_zones/{uuid} | Modify availability zone |


## `availabilityZonesListPost()`

```php
availabilityZonesListPost($get_entities_request): \OpenAPI\Client\Model\AvailabilityZoneListIntentResponse
```

Get availability zones

Get availability zones

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AvailabilityZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\AvailabilityZoneListMetadata(); // \OpenAPI\Client\Model\AvailabilityZoneListMetadata

try {
    $result = $apiInstance->availabilityZonesListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityZonesApi->availabilityZonesListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\AvailabilityZoneListMetadata**](../Model/AvailabilityZoneListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AvailabilityZoneListIntentResponse**](../Model/AvailabilityZoneListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `availabilityZonesPost()`

```php
availabilityZonesPost($body): \OpenAPI\Client\Model\AvailabilityZoneIntentResponse
```

Create an availability zone

Create an availability zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AvailabilityZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\AvailabilityZoneIntentInput(); // \OpenAPI\Client\Model\AvailabilityZoneIntentInput

try {
    $result = $apiInstance->availabilityZonesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityZonesApi->availabilityZonesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\AvailabilityZoneIntentInput**](../Model/AvailabilityZoneIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AvailabilityZoneIntentResponse**](../Model/AvailabilityZoneIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `availabilityZonesSyncPost()`

```php
availabilityZonesSyncPost($body): \OpenAPI\Client\Model\ProceduralResponse
```

Sync global entities to all connected availability zones.

Sync global entities like protection rules, recovery plans to all connected availability zones.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AvailabilityZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\EntitySyncInput(); // \OpenAPI\Client\Model\EntitySyncInput | Request body

try {
    $result = $apiInstance->availabilityZonesSyncPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityZonesApi->availabilityZonesSyncPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\EntitySyncInput**](../Model/EntitySyncInput.md)| Request body | |

### Return type

[**\OpenAPI\Client\Model\ProceduralResponse**](../Model/ProceduralResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `availabilityZonesUuidDelete()`

```php
availabilityZonesUuidDelete($uuid): \OpenAPI\Client\Model\AvailabilityZoneIntentResponse
```

Delete an availability zone

Delete an availability zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AvailabilityZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->availabilityZonesUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityZonesApi->availabilityZonesUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\AvailabilityZoneIntentResponse**](../Model/AvailabilityZoneIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `availabilityZonesUuidGet()`

```php
availabilityZonesUuidGet($uuid): \OpenAPI\Client\Model\AvailabilityZoneIntentResponse
```

Get details for an availability zones

Get details for an availability zones

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AvailabilityZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->availabilityZonesUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityZonesApi->availabilityZonesUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\AvailabilityZoneIntentResponse**](../Model/AvailabilityZoneIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `availabilityZonesUuidPut()`

```php
availabilityZonesUuidPut($uuid, $body): \OpenAPI\Client\Model\AvailabilityZoneIntentResponse
```

Modify availability zone

Modify availability zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AvailabilityZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\AvailabilityZoneIntentInput(); // \OpenAPI\Client\Model\AvailabilityZoneIntentInput

try {
    $result = $apiInstance->availabilityZonesUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AvailabilityZonesApi->availabilityZonesUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\AvailabilityZoneIntentInput**](../Model/AvailabilityZoneIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AvailabilityZoneIntentResponse**](../Model/AvailabilityZoneIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
