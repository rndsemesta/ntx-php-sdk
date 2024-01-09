# OpenAPI\Client\HostsApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**hostsListPost()**](HostsApi.md#hostsListPost) | **POST** /hosts/list | Get a list of existing Hosts |
| [**hostsUuidDelete()**](HostsApi.md#hostsUuidDelete) | **DELETE** /hosts/{uuid} | Delete a existing Host |
| [**hostsUuidGet()**](HostsApi.md#hostsUuidGet) | **GET** /hosts/{uuid} | Get a existing Host |
| [**hostsUuidPut()**](HostsApi.md#hostsUuidPut) | **PUT** /hosts/{uuid} | Update a existing Host |


## `hostsListPost()`

```php
hostsListPost($get_entities_request): \OpenAPI\Client\Model\HostListIntentResponse
```

Get a list of existing Hosts

This operation gets a list of Hosts, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\HostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\HostListMetadata(); // \OpenAPI\Client\Model\HostListMetadata

try {
    $result = $apiInstance->hostsListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostsApi->hostsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\HostListMetadata**](../Model/HostListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\HostListIntentResponse**](../Model/HostListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hostsUuidDelete()`

```php
hostsUuidDelete($uuid): \OpenAPI\Client\Model\HostIntentResponse
```

Delete a existing Host

This operation submits a request to delete a existing Host.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\HostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->hostsUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostsApi->hostsUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\HostIntentResponse**](../Model/HostIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hostsUuidGet()`

```php
hostsUuidGet($uuid): \OpenAPI\Client\Model\HostIntentResponse
```

Get a existing Host

This operation gets a existing Host.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\HostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->hostsUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostsApi->hostsUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\HostIntentResponse**](../Model/HostIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hostsUuidPut()`

```php
hostsUuidPut($uuid, $body): \OpenAPI\Client\Model\HostIntentResponse
```

Update a existing Host

This operation submits a request to update a existing Host based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\HostsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\HostIntentInput(); // \OpenAPI\Client\Model\HostIntentInput | Intent Spec of Host.

try {
    $result = $apiInstance->hostsUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HostsApi->hostsUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\HostIntentInput**](../Model/HostIntentInput.md)| Intent Spec of Host. | |

### Return type

[**\OpenAPI\Client\Model\HostIntentResponse**](../Model/HostIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
