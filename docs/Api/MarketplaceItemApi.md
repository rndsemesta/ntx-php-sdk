# OpenAPI\Client\MarketplaceItemApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**marketplaceItemsConfigGet()**](MarketplaceItemApi.md#marketplaceItemsConfigGet) | **GET** /marketplace_items/config | Retrieve configuration for Nutanix apps |
| [**marketplaceItemsConfigPost()**](MarketplaceItemApi.md#marketplaceItemsConfigPost) | **POST** /marketplace_items/config | Enable or disable the Nutanix apps in the marketplace |
| [**marketplaceItemsListPost()**](MarketplaceItemApi.md#marketplaceItemsListPost) | **POST** /marketplace_items/list | Get a list of existing marketplace items |
| [**marketplaceItemsPost()**](MarketplaceItemApi.md#marketplaceItemsPost) | **POST** /marketplace_items | Create a new marketplace item |
| [**marketplaceItemsRenderPost()**](MarketplaceItemApi.md#marketplaceItemsRenderPost) | **POST** /marketplace_items/render | Create a Marketplace item from the given input. |
| [**marketplaceItemsUuidDelete()**](MarketplaceItemApi.md#marketplaceItemsUuidDelete) | **DELETE** /marketplace_items/{uuid} | Delete a existing marketplace item |
| [**marketplaceItemsUuidGet()**](MarketplaceItemApi.md#marketplaceItemsUuidGet) | **GET** /marketplace_items/{uuid} | Get a existing marketplace item |
| [**marketplaceItemsUuidPut()**](MarketplaceItemApi.md#marketplaceItemsUuidPut) | **PUT** /marketplace_items/{uuid} | Update a existing marketplace item |


## `marketplaceItemsConfigGet()`

```php
marketplaceItemsConfigGet(): \OpenAPI\Client\Model\MarketplaceItemConfig
```

Retrieve configuration for Nutanix apps

Retrieve configuration for whether Nutanix apps have been enabled or disabled

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MarketplaceItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->marketplaceItemsConfigGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceItemApi->marketplaceItemsConfigGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\MarketplaceItemConfig**](../Model/MarketplaceItemConfig.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marketplaceItemsConfigPost()`

```php
marketplaceItemsConfigPost($body)
```

Enable or disable the Nutanix apps in the marketplace

Enable or disable the Nutanix apps in the marketplace

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MarketplaceItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\MarketplaceItemConfig(); // \OpenAPI\Client\Model\MarketplaceItemConfig

try {
    $apiInstance->marketplaceItemsConfigPost($body);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceItemApi->marketplaceItemsConfigPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\MarketplaceItemConfig**](../Model/MarketplaceItemConfig.md)|  | |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marketplaceItemsListPost()`

```php
marketplaceItemsListPost($get_entities_request): \OpenAPI\Client\Model\MarketplaceItemListIntentResponse
```

Get a list of existing marketplace items

This operation gets a list of marketplace items, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MarketplaceItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\MarketplaceItemListMetadata(); // \OpenAPI\Client\Model\MarketplaceItemListMetadata

try {
    $result = $apiInstance->marketplaceItemsListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceItemApi->marketplaceItemsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\MarketplaceItemListMetadata**](../Model/MarketplaceItemListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\MarketplaceItemListIntentResponse**](../Model/MarketplaceItemListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marketplaceItemsPost()`

```php
marketplaceItemsPost($body): \OpenAPI\Client\Model\MarketplaceItemIntentResponse
```

Create a new marketplace item

This operation submits a request to create a new marketplace item based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MarketplaceItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\MarketplaceItemIntentInput(); // \OpenAPI\Client\Model\MarketplaceItemIntentInput

try {
    $result = $apiInstance->marketplaceItemsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceItemApi->marketplaceItemsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\MarketplaceItemIntentInput**](../Model/MarketplaceItemIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\MarketplaceItemIntentResponse**](../Model/MarketplaceItemIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marketplaceItemsRenderPost()`

```php
marketplaceItemsRenderPost($body): \OpenAPI\Client\Model\MarketplaceItemRenderOutput
```

Create a Marketplace item from the given input.

Helper that translates the given input spec into the equivalent Marketplace item. This is then persisted in the system. NOTE, the result of this operation is the uuid of the created marketplace item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MarketplaceItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\MarketplaceItemRenderInput(); // \OpenAPI\Client\Model\MarketplaceItemRenderInput

try {
    $result = $apiInstance->marketplaceItemsRenderPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceItemApi->marketplaceItemsRenderPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\MarketplaceItemRenderInput**](../Model/MarketplaceItemRenderInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\MarketplaceItemRenderOutput**](../Model/MarketplaceItemRenderOutput.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marketplaceItemsUuidDelete()`

```php
marketplaceItemsUuidDelete($uuid): \OpenAPI\Client\Model\MarketplaceItemIntentResponse
```

Delete a existing marketplace item

This operation submits a request to delete a existing marketplace item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MarketplaceItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->marketplaceItemsUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceItemApi->marketplaceItemsUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\MarketplaceItemIntentResponse**](../Model/MarketplaceItemIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marketplaceItemsUuidGet()`

```php
marketplaceItemsUuidGet($uuid): \OpenAPI\Client\Model\MarketplaceItemIntentResponse
```

Get a existing marketplace item

This operation gets a existing marketplace item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MarketplaceItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->marketplaceItemsUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceItemApi->marketplaceItemsUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\MarketplaceItemIntentResponse**](../Model/MarketplaceItemIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `marketplaceItemsUuidPut()`

```php
marketplaceItemsUuidPut($uuid, $body): \OpenAPI\Client\Model\MarketplaceItemIntentResponse
```

Update a existing marketplace item

This operation submits a request to update a existing marketplace item based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MarketplaceItemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\MarketplaceItemIntentInput(); // \OpenAPI\Client\Model\MarketplaceItemIntentInput

try {
    $result = $apiInstance->marketplaceItemsUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MarketplaceItemApi->marketplaceItemsUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\MarketplaceItemIntentInput**](../Model/MarketplaceItemIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\MarketplaceItemIntentResponse**](../Model/MarketplaceItemIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
