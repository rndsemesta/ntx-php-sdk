# OpenAPI\Client\CellApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cellsListPost()**](CellApi.md#cellsListPost) | **POST** /cells/list | Retrieves all cells |
| [**cellsPost()**](CellApi.md#cellsPost) | **POST** /cells | Create a cell instance |
| [**cellsUuidDelete()**](CellApi.md#cellsUuidDelete) | **DELETE** /cells/{uuid} | Delete specified cell |
| [**cellsUuidGet()**](CellApi.md#cellsUuidGet) | **GET** /cells/{uuid} | Retrieves specified cell |
| [**cellsUuidPut()**](CellApi.md#cellsUuidPut) | **PUT** /cells/{uuid} | Update cell |


## `cellsListPost()`

```php
cellsListPost($body): \OpenAPI\Client\Model\CellListIntentResponse
```

Retrieves all cells

Retrieves all cells

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CellApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\CellListMetadata(); // \OpenAPI\Client\Model\CellListMetadata

try {
    $result = $apiInstance->cellsListPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellApi->cellsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\CellListMetadata**](../Model/CellListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CellListIntentResponse**](../Model/CellListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cellsPost()`

```php
cellsPost($body): \OpenAPI\Client\Model\CellIntentResponse
```

Create a cell instance

Create a cell instance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CellApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\CellIntentInput(); // \OpenAPI\Client\Model\CellIntentInput | Create cell object

try {
    $result = $apiInstance->cellsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellApi->cellsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\CellIntentInput**](../Model/CellIntentInput.md)| Create cell object | |

### Return type

[**\OpenAPI\Client\Model\CellIntentResponse**](../Model/CellIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cellsUuidDelete()`

```php
cellsUuidDelete($uuid): \OpenAPI\Client\Model\CellIntentResponse
```

Delete specified cell

Delete specified cell

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CellApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->cellsUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellApi->cellsUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\CellIntentResponse**](../Model/CellIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cellsUuidGet()`

```php
cellsUuidGet($uuid): \OpenAPI\Client\Model\CellIntentResponse
```

Retrieves specified cell

Retrieves specified cell

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CellApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->cellsUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellApi->cellsUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\CellIntentResponse**](../Model/CellIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cellsUuidPut()`

```php
cellsUuidPut($uuid, $body): \OpenAPI\Client\Model\CellIntentResponse
```

Update cell

Update cell

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CellApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\CellIntentInput(); // \OpenAPI\Client\Model\CellIntentInput | Update cell

try {
    $result = $apiInstance->cellsUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CellApi->cellsUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\CellIntentInput**](../Model/CellIntentInput.md)| Update cell | |

### Return type

[**\OpenAPI\Client\Model\CellIntentResponse**](../Model/CellIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
