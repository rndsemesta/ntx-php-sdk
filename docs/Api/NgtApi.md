# OpenAPI\Client\NgtApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ngtListPost()**](NgtApi.md#ngtListPost) | **POST** /ngt/list | Get a list of existing vms |
| [**ngtUuidGet()**](NgtApi.md#ngtUuidGet) | **GET** /ngt/{uuid} | Get a existing ngt |
| [**vmsUuidNgtGet()**](NgtApi.md#vmsUuidNgtGet) | **GET** /vms/{uuid}/ngt | Get a existing ngt |


## `ngtListPost()`

```php
ngtListPost($get_entities_request): \OpenAPI\Client\Model\NgtListResponse
```

Get a list of existing vms

This operation gets a list of vms, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\NgtApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\NgtListMetadata(); // \OpenAPI\Client\Model\NgtListMetadata

try {
    $result = $apiInstance->ngtListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NgtApi->ngtListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\NgtListMetadata**](../Model/NgtListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\NgtListResponse**](../Model/NgtListResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ngtUuidGet()`

```php
ngtUuidGet($uuid): \OpenAPI\Client\Model\NgtResponse
```

Get a existing ngt

This operation gets a existing ngt.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\NgtApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->ngtUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NgtApi->ngtUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\NgtResponse**](../Model/NgtResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vmsUuidNgtGet()`

```php
vmsUuidNgtGet($uuid): \OpenAPI\Client\Model\NgtResponse
```

Get a existing ngt

This operation gets a existing ngt.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\NgtApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->vmsUuidNgtGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NgtApi->vmsUuidNgtGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\NgtResponse**](../Model/NgtResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
