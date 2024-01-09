# OpenAPI\Client\DirectConnectsApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**directConnectsConnectionsListPost()**](DirectConnectsApi.md#directConnectsConnectionsListPost) | **POST** /direct_connects/connections/list | Get a list of existing direct_connects |
| [**directConnectsConnectionsPost()**](DirectConnectsApi.md#directConnectsConnectionsPost) | **POST** /direct_connects/connections | Create a new direct_connect |
| [**directConnectsConnectionsUuidDelete()**](DirectConnectsApi.md#directConnectsConnectionsUuidDelete) | **DELETE** /direct_connects/connections/{uuid} | Delete a existing direct_connect |
| [**directConnectsConnectionsUuidGet()**](DirectConnectsApi.md#directConnectsConnectionsUuidGet) | **GET** /direct_connects/connections/{uuid} | Get a existing direct_connect |
| [**directConnectsConnectionsUuidPut()**](DirectConnectsApi.md#directConnectsConnectionsUuidPut) | **PUT** /direct_connects/connections/{uuid} | Update a existing direct_connect |
| [**directConnectsServiceProvidersListPost()**](DirectConnectsApi.md#directConnectsServiceProvidersListPost) | **POST** /direct_connects/service_providers/list | Get a list of existing direct_connects service providers |


## `directConnectsConnectionsListPost()`

```php
directConnectsConnectionsListPost($get_entities_request): \OpenAPI\Client\Model\DirectConnectListIntentResponse
```

Get a list of existing direct_connects

This operation gets a list of direct_connects, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DirectConnectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\DirectConnectListMetadata(); // \OpenAPI\Client\Model\DirectConnectListMetadata

try {
    $result = $apiInstance->directConnectsConnectionsListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectConnectsApi->directConnectsConnectionsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\DirectConnectListMetadata**](../Model/DirectConnectListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\DirectConnectListIntentResponse**](../Model/DirectConnectListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `directConnectsConnectionsPost()`

```php
directConnectsConnectionsPost($body): \OpenAPI\Client\Model\DirectConnectIntentResponse
```

Create a new direct_connect

This operation submits a request to create a new direct_connect based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DirectConnectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\DirectConnectIntentInput(); // \OpenAPI\Client\Model\DirectConnectIntentInput

try {
    $result = $apiInstance->directConnectsConnectionsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectConnectsApi->directConnectsConnectionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\DirectConnectIntentInput**](../Model/DirectConnectIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\DirectConnectIntentResponse**](../Model/DirectConnectIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `directConnectsConnectionsUuidDelete()`

```php
directConnectsConnectionsUuidDelete($uuid): \OpenAPI\Client\Model\DirectConnectIntentResponse
```

Delete a existing direct_connect

This operation submits a request to delete a existing direct_connect.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DirectConnectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->directConnectsConnectionsUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectConnectsApi->directConnectsConnectionsUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\DirectConnectIntentResponse**](../Model/DirectConnectIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `directConnectsConnectionsUuidGet()`

```php
directConnectsConnectionsUuidGet($uuid): \OpenAPI\Client\Model\DirectConnectIntentResponse
```

Get a existing direct_connect

This operation gets a existing direct_connect.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DirectConnectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->directConnectsConnectionsUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectConnectsApi->directConnectsConnectionsUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\DirectConnectIntentResponse**](../Model/DirectConnectIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `directConnectsConnectionsUuidPut()`

```php
directConnectsConnectionsUuidPut($uuid, $body): \OpenAPI\Client\Model\DirectConnectIntentResponse
```

Update a existing direct_connect

This operation submits a request to update a existing direct_connect based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DirectConnectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\DirectConnectIntentInput(); // \OpenAPI\Client\Model\DirectConnectIntentInput

try {
    $result = $apiInstance->directConnectsConnectionsUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectConnectsApi->directConnectsConnectionsUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\DirectConnectIntentInput**](../Model/DirectConnectIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\DirectConnectIntentResponse**](../Model/DirectConnectIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `directConnectsServiceProvidersListPost()`

```php
directConnectsServiceProvidersListPost($get_entities_request): \OpenAPI\Client\Model\DirectConnectServiceProviderListResponseInner[]
```

Get a list of existing direct_connects service providers

This operation gets a list of direct_connects service providers, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DirectConnectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\DirectConnectListMetadata(); // \OpenAPI\Client\Model\DirectConnectListMetadata

try {
    $result = $apiInstance->directConnectsServiceProvidersListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectConnectsApi->directConnectsServiceProvidersListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\DirectConnectListMetadata**](../Model/DirectConnectListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\DirectConnectServiceProviderListResponseInner[]**](../Model/DirectConnectServiceProviderListResponseInner.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
