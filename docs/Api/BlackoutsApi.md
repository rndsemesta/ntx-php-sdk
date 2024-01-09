# OpenAPI\Client\BlackoutsApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**blackoutsListPost()**](BlackoutsApi.md#blackoutsListPost) | **POST** /blackouts/list | Retrieve all blackout objects |
| [**blackoutsPost()**](BlackoutsApi.md#blackoutsPost) | **POST** /blackouts | Create blackout object |
| [**blackoutsUuidDelete()**](BlackoutsApi.md#blackoutsUuidDelete) | **DELETE** /blackouts/{uuid} | Delete specified blackout object |
| [**blackoutsUuidGet()**](BlackoutsApi.md#blackoutsUuidGet) | **GET** /blackouts/{uuid} | Retrieve specified blackout object |
| [**blackoutsUuidPut()**](BlackoutsApi.md#blackoutsUuidPut) | **PUT** /blackouts/{uuid} | Update blackout entity |


## `blackoutsListPost()`

```php
blackoutsListPost($get_entities_request): \OpenAPI\Client\Model\BlackoutListIntentResponse
```

Retrieve all blackout objects

Retrieve all blackout objects

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BlackoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\BlackoutListMetadata(); // \OpenAPI\Client\Model\BlackoutListMetadata

try {
    $result = $apiInstance->blackoutsListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlackoutsApi->blackoutsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\BlackoutListMetadata**](../Model/BlackoutListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\BlackoutListIntentResponse**](../Model/BlackoutListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blackoutsPost()`

```php
blackoutsPost($body): \OpenAPI\Client\Model\BlackoutIntentResponse
```

Create blackout object

Create a blackout object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BlackoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\BlackoutIntentInput(); // \OpenAPI\Client\Model\BlackoutIntentInput | Create blackout object

try {
    $result = $apiInstance->blackoutsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlackoutsApi->blackoutsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\BlackoutIntentInput**](../Model/BlackoutIntentInput.md)| Create blackout object | |

### Return type

[**\OpenAPI\Client\Model\BlackoutIntentResponse**](../Model/BlackoutIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blackoutsUuidDelete()`

```php
blackoutsUuidDelete($uuid): \OpenAPI\Client\Model\BlackoutIntentResponse
```

Delete specified blackout object

Delete specified blackout object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BlackoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->blackoutsUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlackoutsApi->blackoutsUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\BlackoutIntentResponse**](../Model/BlackoutIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blackoutsUuidGet()`

```php
blackoutsUuidGet($uuid): \OpenAPI\Client\Model\BlackoutIntentResponse
```

Retrieve specified blackout object

Retrieve specified blackout object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BlackoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->blackoutsUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlackoutsApi->blackoutsUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\BlackoutIntentResponse**](../Model/BlackoutIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blackoutsUuidPut()`

```php
blackoutsUuidPut($uuid, $body): \OpenAPI\Client\Model\BlackoutIntentResponse
```

Update blackout entity

Update blackout entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BlackoutsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\BlackoutIntentInput(); // \OpenAPI\Client\Model\BlackoutIntentInput | Update blackout

try {
    $result = $apiInstance->blackoutsUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlackoutsApi->blackoutsUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\BlackoutIntentInput**](../Model/BlackoutIntentInput.md)| Update blackout | |

### Return type

[**\OpenAPI\Client\Model\BlackoutIntentResponse**](../Model/BlackoutIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
