# OpenAPI\Client\NetworkFunctionChainsApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**networkFunctionChainsListPost()**](NetworkFunctionChainsApi.md#networkFunctionChainsListPost) | **POST** /network_function_chains/list | Get a list of existing Network Function Chains |
| [**networkFunctionChainsPost()**](NetworkFunctionChainsApi.md#networkFunctionChainsPost) | **POST** /network_function_chains | Create a new Network Function Chain |
| [**networkFunctionChainsUuidDelete()**](NetworkFunctionChainsApi.md#networkFunctionChainsUuidDelete) | **DELETE** /network_function_chains/{uuid} | Delete a existing Network Function Chain |
| [**networkFunctionChainsUuidGet()**](NetworkFunctionChainsApi.md#networkFunctionChainsUuidGet) | **GET** /network_function_chains/{uuid} | Get a existing Network Function Chain |
| [**networkFunctionChainsUuidPut()**](NetworkFunctionChainsApi.md#networkFunctionChainsUuidPut) | **PUT** /network_function_chains/{uuid} | Update a existing Network Function Chain |


## `networkFunctionChainsListPost()`

```php
networkFunctionChainsListPost($get_entities_request): \OpenAPI\Client\Model\NetworkFunctionChainListIntentResponse
```

Get a list of existing Network Function Chains

This operation gets a list of Network Function Chains, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\NetworkFunctionChainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\NetworkFunctionChainListMetadata(); // \OpenAPI\Client\Model\NetworkFunctionChainListMetadata

try {
    $result = $apiInstance->networkFunctionChainsListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkFunctionChainsApi->networkFunctionChainsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\NetworkFunctionChainListMetadata**](../Model/NetworkFunctionChainListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\NetworkFunctionChainListIntentResponse**](../Model/NetworkFunctionChainListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkFunctionChainsPost()`

```php
networkFunctionChainsPost($body): \OpenAPI\Client\Model\NetworkFunctionChainIntentResponse
```

Create a new Network Function Chain

Given an intentful spec, creates a network function chain with associated metadata.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\NetworkFunctionChainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\NetworkFunctionChainIntentInput(); // \OpenAPI\Client\Model\NetworkFunctionChainIntentInput

try {
    $result = $apiInstance->networkFunctionChainsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkFunctionChainsApi->networkFunctionChainsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\NetworkFunctionChainIntentInput**](../Model/NetworkFunctionChainIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\NetworkFunctionChainIntentResponse**](../Model/NetworkFunctionChainIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkFunctionChainsUuidDelete()`

```php
networkFunctionChainsUuidDelete($uuid): \OpenAPI\Client\Model\NetworkFunctionChainIntentResponse
```

Delete a existing Network Function Chain

Delete a network function chain given its uuid.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\NetworkFunctionChainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->networkFunctionChainsUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkFunctionChainsApi->networkFunctionChainsUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\NetworkFunctionChainIntentResponse**](../Model/NetworkFunctionChainIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkFunctionChainsUuidGet()`

```php
networkFunctionChainsUuidGet($uuid): \OpenAPI\Client\Model\NetworkFunctionChainIntentResponse
```

Get a existing Network Function Chain

Given a UUID, returns a network_function_chain definition.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\NetworkFunctionChainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->networkFunctionChainsUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkFunctionChainsApi->networkFunctionChainsUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\NetworkFunctionChainIntentResponse**](../Model/NetworkFunctionChainIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkFunctionChainsUuidPut()`

```php
networkFunctionChainsUuidPut($uuid, $body): \OpenAPI\Client\Model\NetworkFunctionChainIntentResponse
```

Update a existing Network Function Chain

Given an intenful spec and uuid, update network function chain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\NetworkFunctionChainsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\NetworkFunctionChainIntentInput(); // \OpenAPI\Client\Model\NetworkFunctionChainIntentInput

try {
    $result = $apiInstance->networkFunctionChainsUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkFunctionChainsApi->networkFunctionChainsUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\NetworkFunctionChainIntentInput**](../Model/NetworkFunctionChainIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\NetworkFunctionChainIntentResponse**](../Model/NetworkFunctionChainIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
