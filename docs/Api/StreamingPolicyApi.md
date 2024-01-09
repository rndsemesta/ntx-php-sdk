# OpenAPI\Client\StreamingPolicyApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**streamingPoliciesListPost()**](StreamingPolicyApi.md#streamingPoliciesListPost) | **POST** /streaming_policies/list | Retrieves all Streaming Policies |
| [**streamingPoliciesPost()**](StreamingPolicyApi.md#streamingPoliciesPost) | **POST** /streaming_policies | Create Streaming Policy |
| [**streamingPoliciesUuidDelete()**](StreamingPolicyApi.md#streamingPoliciesUuidDelete) | **DELETE** /streaming_policies/{uuid} | Delete specified Streaming Policy |
| [**streamingPoliciesUuidGet()**](StreamingPolicyApi.md#streamingPoliciesUuidGet) | **GET** /streaming_policies/{uuid} | Retrieves specified Streaming Policy |
| [**streamingPoliciesUuidPut()**](StreamingPolicyApi.md#streamingPoliciesUuidPut) | **PUT** /streaming_policies/{uuid} | Update Streaming Policy entity |


## `streamingPoliciesListPost()`

```php
streamingPoliciesListPost($get_entities_request): \OpenAPI\Client\Model\StreamingPolicyListIntentResponse
```

Retrieves all Streaming Policies

Retrieves all Streaming Policies

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\StreamingPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\StreamingPolicyListMetadata(); // \OpenAPI\Client\Model\StreamingPolicyListMetadata

try {
    $result = $apiInstance->streamingPoliciesListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamingPolicyApi->streamingPoliciesListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\StreamingPolicyListMetadata**](../Model/StreamingPolicyListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\StreamingPolicyListIntentResponse**](../Model/StreamingPolicyListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `streamingPoliciesPost()`

```php
streamingPoliciesPost($body): \OpenAPI\Client\Model\StreamingPolicyIntentResponse
```

Create Streaming Policy

Create Streaming Policy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\StreamingPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\StreamingPolicyIntentInput(); // \OpenAPI\Client\Model\StreamingPolicyIntentInput | Create Streaming Policy object

try {
    $result = $apiInstance->streamingPoliciesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamingPolicyApi->streamingPoliciesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\StreamingPolicyIntentInput**](../Model/StreamingPolicyIntentInput.md)| Create Streaming Policy object | |

### Return type

[**\OpenAPI\Client\Model\StreamingPolicyIntentResponse**](../Model/StreamingPolicyIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `streamingPoliciesUuidDelete()`

```php
streamingPoliciesUuidDelete($uuid): \OpenAPI\Client\Model\StreamingPolicyIntentResponse
```

Delete specified Streaming Policy

Delete specified Streaming Policy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\StreamingPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->streamingPoliciesUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamingPolicyApi->streamingPoliciesUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\StreamingPolicyIntentResponse**](../Model/StreamingPolicyIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `streamingPoliciesUuidGet()`

```php
streamingPoliciesUuidGet($uuid): \OpenAPI\Client\Model\StreamingPolicyIntentResponse
```

Retrieves specified Streaming Policy

Retrieves specified Streaming Policy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\StreamingPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->streamingPoliciesUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamingPolicyApi->streamingPoliciesUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\StreamingPolicyIntentResponse**](../Model/StreamingPolicyIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `streamingPoliciesUuidPut()`

```php
streamingPoliciesUuidPut($uuid, $body): \OpenAPI\Client\Model\StreamingPolicyIntentResponse
```

Update Streaming Policy entity

Update Streaming Policy entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\StreamingPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\StreamingPolicyIntentInput(); // \OpenAPI\Client\Model\StreamingPolicyIntentInput | Update Streaming Policy

try {
    $result = $apiInstance->streamingPoliciesUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StreamingPolicyApi->streamingPoliciesUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\StreamingPolicyIntentInput**](../Model/StreamingPolicyIntentInput.md)| Update Streaming Policy | |

### Return type

[**\OpenAPI\Client\Model\StreamingPolicyIntentResponse**](../Model/StreamingPolicyIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
