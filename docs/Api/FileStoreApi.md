# OpenAPI\Client\FileStoreApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**fileStoreListPost()**](FileStoreApi.md#fileStoreListPost) | **POST** /file_store/list | Get a list of existing file_items |
| [**fileStorePost()**](FileStoreApi.md#fileStorePost) | **POST** /file_store | Create a new file_item |
| [**fileStoreUuidDelete()**](FileStoreApi.md#fileStoreUuidDelete) | **DELETE** /file_store/{uuid} | Delete a existing file_item |
| [**fileStoreUuidFileGet()**](FileStoreApi.md#fileStoreUuidFileGet) | **GET** /file_store/{uuid}/file | Get file item contents |
| [**fileStoreUuidFilePut()**](FileStoreApi.md#fileStoreUuidFilePut) | **PUT** /file_store/{uuid}/file | Upload file item contents |
| [**fileStoreUuidGet()**](FileStoreApi.md#fileStoreUuidGet) | **GET** /file_store/{uuid} | Get a existing file_item |
| [**fileStoreUuidPut()**](FileStoreApi.md#fileStoreUuidPut) | **PUT** /file_store/{uuid} | Update a existing file_item |


## `fileStoreListPost()`

```php
fileStoreListPost($get_entities_request): \OpenAPI\Client\Model\FileItemListIntentResponse
```

Get a list of existing file_items

This operation gets a list of file_items, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\FileStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\FileItemListMetadata(); // \OpenAPI\Client\Model\FileItemListMetadata

try {
    $result = $apiInstance->fileStoreListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileStoreApi->fileStoreListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\FileItemListMetadata**](../Model/FileItemListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\FileItemListIntentResponse**](../Model/FileItemListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fileStorePost()`

```php
fileStorePost($body): \OpenAPI\Client\Model\FileItemIntentResponse
```

Create a new file_item

File items are binaries and unlike images are not limited by the file type (e.g ISOs, or disk images).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\FileStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\FileItemIntentInput(); // \OpenAPI\Client\Model\FileItemIntentInput

try {
    $result = $apiInstance->fileStorePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileStoreApi->fileStorePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\FileItemIntentInput**](../Model/FileItemIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\FileItemIntentResponse**](../Model/FileItemIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fileStoreUuidDelete()`

```php
fileStoreUuidDelete($uuid): \OpenAPI\Client\Model\FileItemIntentResponse
```

Delete a existing file_item

This operation submits a request to delete a existing file_item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\FileStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->fileStoreUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileStoreApi->fileStoreUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\FileItemIntentResponse**](../Model/FileItemIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fileStoreUuidFileGet()`

```php
fileStoreUuidFileGet($uuid): \SplFileObject
```

Get file item contents

Download the raw binary bits associated with a file item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\FileStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->fileStoreUuidFileGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileStoreApi->fileStoreUuidFileGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

**\SplFileObject**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fileStoreUuidFilePut()`

```php
fileStoreUuidFilePut($uuid, $file_item)
```

Upload file item contents

Upload the binary bits for a file item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\FileStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$file_item = array('key' => new \stdClass); // object

try {
    $apiInstance->fileStoreUuidFilePut($uuid, $file_item);
} catch (Exception $e) {
    echo 'Exception when calling FileStoreApi->fileStoreUuidFilePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **file_item** | **object**|  | |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/octet-stream`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fileStoreUuidGet()`

```php
fileStoreUuidGet($uuid): \OpenAPI\Client\Model\FileItemIntentResponse
```

Get a existing file_item

This operation gets a existing file_item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\FileStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->fileStoreUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileStoreApi->fileStoreUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\FileItemIntentResponse**](../Model/FileItemIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fileStoreUuidPut()`

```php
fileStoreUuidPut($uuid, $body): \OpenAPI\Client\Model\FileItemIntentResponse
```

Update a existing file_item

This operation submits a request to update a existing file_item based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\FileStoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\FileItemIntentInput(); // \OpenAPI\Client\Model\FileItemIntentInput

try {
    $result = $apiInstance->fileStoreUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileStoreApi->fileStoreUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\FileItemIntentInput**](../Model/FileItemIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\FileItemIntentResponse**](../Model/FileItemIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
