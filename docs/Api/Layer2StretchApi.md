# OpenAPI\Client\Layer2StretchApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**layer2StretchesListPost()**](Layer2StretchApi.md#layer2StretchesListPost) | **POST** /layer2_stretches/list | Get a list of existing layer2_stretches |
| [**layer2StretchesPost()**](Layer2StretchApi.md#layer2StretchesPost) | **POST** /layer2_stretches | Create a new layer2_stretch |
| [**layer2StretchesRelatedEntitiesUuidGet()**](Layer2StretchApi.md#layer2StretchesRelatedEntitiesUuidGet) | **GET** /layer2_stretches/related_entities/{uuid} | Get a existing layer2_stretch related entities |
| [**layer2StretchesUuidDelete()**](Layer2StretchApi.md#layer2StretchesUuidDelete) | **DELETE** /layer2_stretches/{uuid} | Delete a existing layer2_stretch |
| [**layer2StretchesUuidGet()**](Layer2StretchApi.md#layer2StretchesUuidGet) | **GET** /layer2_stretches/{uuid} | Get a existing layer2_stretch |


## `layer2StretchesListPost()`

```php
layer2StretchesListPost($get_entities_request): \OpenAPI\Client\Model\Layer2StretchListIntentResponse
```

Get a list of existing layer2_stretches

This operation gets a list of layer2_stretches, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\Layer2StretchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\Layer2StretchListMetadata(); // \OpenAPI\Client\Model\Layer2StretchListMetadata

try {
    $result = $apiInstance->layer2StretchesListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Layer2StretchApi->layer2StretchesListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\Layer2StretchListMetadata**](../Model/Layer2StretchListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Layer2StretchListIntentResponse**](../Model/Layer2StretchListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `layer2StretchesPost()`

```php
layer2StretchesPost($body): \OpenAPI\Client\Model\Layer2StretchIntentResponse
```

Create a new layer2_stretch

This operation submits a request to create a new layer2_stretch based on the input parameters. Configuration to extend a Layer 2 network               between two sites.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\Layer2StretchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\Layer2StretchIntentInput(); // \OpenAPI\Client\Model\Layer2StretchIntentInput

try {
    $result = $apiInstance->layer2StretchesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Layer2StretchApi->layer2StretchesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\Layer2StretchIntentInput**](../Model/Layer2StretchIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Layer2StretchIntentResponse**](../Model/Layer2StretchIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `layer2StretchesRelatedEntitiesUuidGet()`

```php
layer2StretchesRelatedEntitiesUuidGet($uuid): \OpenAPI\Client\Model\Layer2StretchRelatedEntities
```

Get a existing layer2_stretch related entities

This operation gets a existing layer2_stretch related entities.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\Layer2StretchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->layer2StretchesRelatedEntitiesUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Layer2StretchApi->layer2StretchesRelatedEntitiesUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\Layer2StretchRelatedEntities**](../Model/Layer2StretchRelatedEntities.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `layer2StretchesUuidDelete()`

```php
layer2StretchesUuidDelete($uuid): \OpenAPI\Client\Model\Layer2StretchIntentResponse
```

Delete a existing layer2_stretch

This operation submits a request to delete a existing layer2_stretch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\Layer2StretchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->layer2StretchesUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Layer2StretchApi->layer2StretchesUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\Layer2StretchIntentResponse**](../Model/Layer2StretchIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `layer2StretchesUuidGet()`

```php
layer2StretchesUuidGet($uuid): \OpenAPI\Client\Model\Layer2StretchIntentResponse
```

Get a existing layer2_stretch

This operation gets a existing layer2_stretch.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\Layer2StretchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->layer2StretchesUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Layer2StretchApi->layer2StretchesUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\Layer2StretchIntentResponse**](../Model/Layer2StretchIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
