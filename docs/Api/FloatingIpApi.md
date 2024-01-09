# OpenAPI\Client\FloatingIpApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**floatingIpsListPost()**](FloatingIpApi.md#floatingIpsListPost) | **POST** /floating_ips/list | Get a list of existing Floating IPs |
| [**floatingIpsPost()**](FloatingIpApi.md#floatingIpsPost) | **POST** /floating_ips | Create a new Floating IP |
| [**floatingIpsUuidDelete()**](FloatingIpApi.md#floatingIpsUuidDelete) | **DELETE** /floating_ips/{uuid} | Delete a existing Floating IP |
| [**floatingIpsUuidGet()**](FloatingIpApi.md#floatingIpsUuidGet) | **GET** /floating_ips/{uuid} | Get a existing Floating IP |
| [**floatingIpsUuidPut()**](FloatingIpApi.md#floatingIpsUuidPut) | **PUT** /floating_ips/{uuid} | Update a existing Floating IP |


## `floatingIpsListPost()`

```php
floatingIpsListPost($get_entities_request): \OpenAPI\Client\Model\FloatingIpListIntentResponse
```

Get a list of existing Floating IPs

This operation gets a list of Floating IPs, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\FloatingIpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\FloatingIpListMetadata(); // \OpenAPI\Client\Model\FloatingIpListMetadata

try {
    $result = $apiInstance->floatingIpsListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FloatingIpApi->floatingIpsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\FloatingIpListMetadata**](../Model/FloatingIpListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\FloatingIpListIntentResponse**](../Model/FloatingIpListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `floatingIpsPost()`

```php
floatingIpsPost($body): \OpenAPI\Client\Model\FloatingIpIntentResponse
```

Create a new Floating IP

This operation submits a request to create a new Floating IP based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\FloatingIpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\FloatingIpIntentInput(); // \OpenAPI\Client\Model\FloatingIpIntentInput

try {
    $result = $apiInstance->floatingIpsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FloatingIpApi->floatingIpsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\FloatingIpIntentInput**](../Model/FloatingIpIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\FloatingIpIntentResponse**](../Model/FloatingIpIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `floatingIpsUuidDelete()`

```php
floatingIpsUuidDelete($uuid): \OpenAPI\Client\Model\FloatingIpIntentResponse
```

Delete a existing Floating IP

This operation submits a request to delete a existing Floating IP.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\FloatingIpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->floatingIpsUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FloatingIpApi->floatingIpsUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\FloatingIpIntentResponse**](../Model/FloatingIpIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `floatingIpsUuidGet()`

```php
floatingIpsUuidGet($uuid): \OpenAPI\Client\Model\FloatingIpIntentResponse
```

Get a existing Floating IP

This operation gets a existing Floating IP.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\FloatingIpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->floatingIpsUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FloatingIpApi->floatingIpsUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\FloatingIpIntentResponse**](../Model/FloatingIpIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `floatingIpsUuidPut()`

```php
floatingIpsUuidPut($uuid, $body): \OpenAPI\Client\Model\FloatingIpIntentResponse
```

Update a existing Floating IP

This operation submits a request to update a existing Floating IP based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\FloatingIpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\FloatingIpIntentInput(); // \OpenAPI\Client\Model\FloatingIpIntentInput

try {
    $result = $apiInstance->floatingIpsUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FloatingIpApi->floatingIpsUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\FloatingIpIntentInput**](../Model/FloatingIpIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\FloatingIpIntentResponse**](../Model/FloatingIpIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
