# OpenAPI\Client\NetworkDeviceApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**networkDevicesListPost()**](NetworkDeviceApi.md#networkDevicesListPost) | **POST** /network_devices/list | Retrieves all network devices |
| [**networkDevicesPost()**](NetworkDeviceApi.md#networkDevicesPost) | **POST** /network_devices | Create a network device instance |
| [**networkDevicesUuidDelete()**](NetworkDeviceApi.md#networkDevicesUuidDelete) | **DELETE** /network_devices/{uuid} | Delete specified network device |
| [**networkDevicesUuidGet()**](NetworkDeviceApi.md#networkDevicesUuidGet) | **GET** /network_devices/{uuid} | Retrieves specified network device |
| [**networkDevicesUuidPut()**](NetworkDeviceApi.md#networkDevicesUuidPut) | **PUT** /network_devices/{uuid} | Update network device |


## `networkDevicesListPost()`

```php
networkDevicesListPost($body): \OpenAPI\Client\Model\NetworkDeviceListIntentResponse
```

Retrieves all network devices

Retrieves all network devices

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\NetworkDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\NetworkDeviceListMetadata(); // \OpenAPI\Client\Model\NetworkDeviceListMetadata

try {
    $result = $apiInstance->networkDevicesListPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDeviceApi->networkDevicesListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\NetworkDeviceListMetadata**](../Model/NetworkDeviceListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\NetworkDeviceListIntentResponse**](../Model/NetworkDeviceListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkDevicesPost()`

```php
networkDevicesPost($body): \OpenAPI\Client\Model\NetworkDeviceIntentResponse
```

Create a network device instance

Create a network device instance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\NetworkDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\NetworkDeviceIntentInput(); // \OpenAPI\Client\Model\NetworkDeviceIntentInput | Create network device object

try {
    $result = $apiInstance->networkDevicesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDeviceApi->networkDevicesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\NetworkDeviceIntentInput**](../Model/NetworkDeviceIntentInput.md)| Create network device object | |

### Return type

[**\OpenAPI\Client\Model\NetworkDeviceIntentResponse**](../Model/NetworkDeviceIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkDevicesUuidDelete()`

```php
networkDevicesUuidDelete($uuid): \OpenAPI\Client\Model\NetworkDeviceIntentResponse
```

Delete specified network device

Delete specified network device

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\NetworkDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->networkDevicesUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDeviceApi->networkDevicesUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\NetworkDeviceIntentResponse**](../Model/NetworkDeviceIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkDevicesUuidGet()`

```php
networkDevicesUuidGet($uuid): \OpenAPI\Client\Model\NetworkDeviceIntentResponse
```

Retrieves specified network device

Retrieves specified network device

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\NetworkDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->networkDevicesUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDeviceApi->networkDevicesUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\NetworkDeviceIntentResponse**](../Model/NetworkDeviceIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkDevicesUuidPut()`

```php
networkDevicesUuidPut($uuid, $body): \OpenAPI\Client\Model\NetworkDeviceIntentResponse
```

Update network device

Update a network device

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\NetworkDeviceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\NetworkDeviceIntentInput(); // \OpenAPI\Client\Model\NetworkDeviceIntentInput | Update network device

try {
    $result = $apiInstance->networkDevicesUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkDeviceApi->networkDevicesUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\NetworkDeviceIntentInput**](../Model/NetworkDeviceIntentInput.md)| Update network device | |

### Return type

[**\OpenAPI\Client\Model\NetworkDeviceIntentResponse**](../Model/NetworkDeviceIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
