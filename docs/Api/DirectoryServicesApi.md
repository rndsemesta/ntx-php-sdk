# OpenAPI\Client\DirectoryServicesApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**directoryServicesListPost()**](DirectoryServicesApi.md#directoryServicesListPost) | **POST** /directory_services/list | Get a list of existing directory service configurations |
| [**directoryServicesPost()**](DirectoryServicesApi.md#directoryServicesPost) | **POST** /directory_services | Create a new directory service configuration |
| [**directoryServicesUuidDelete()**](DirectoryServicesApi.md#directoryServicesUuidDelete) | **DELETE** /directory_services/{uuid} | Delete a existing directory service configuration |
| [**directoryServicesUuidGet()**](DirectoryServicesApi.md#directoryServicesUuidGet) | **GET** /directory_services/{uuid} | Get a existing directory service configuration |
| [**directoryServicesUuidPut()**](DirectoryServicesApi.md#directoryServicesUuidPut) | **PUT** /directory_services/{uuid} | Update a existing directory service configuration |
| [**directoryServicesUuidSearchPost()**](DirectoryServicesApi.md#directoryServicesUuidSearchPost) | **POST** /directory_services/{uuid}/search | Search user or group in the directory service. |


## `directoryServicesListPost()`

```php
directoryServicesListPost($get_entities_request): \OpenAPI\Client\Model\DirectoryServiceListIntentResponse
```

Get a list of existing directory service configurations

This operation gets a list of directory service configurations, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DirectoryServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\DirectoryServiceListMetadata(); // \OpenAPI\Client\Model\DirectoryServiceListMetadata

try {
    $result = $apiInstance->directoryServicesListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryServicesApi->directoryServicesListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\DirectoryServiceListMetadata**](../Model/DirectoryServiceListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\DirectoryServiceListIntentResponse**](../Model/DirectoryServiceListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `directoryServicesPost()`

```php
directoryServicesPost($body): \OpenAPI\Client\Model\DirectoryServiceIntentResponse
```

Create a new directory service configuration

This operation submits a request to create a new directory service configuration based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DirectoryServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\DirectoryServiceIntentInput(); // \OpenAPI\Client\Model\DirectoryServiceIntentInput

try {
    $result = $apiInstance->directoryServicesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryServicesApi->directoryServicesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\DirectoryServiceIntentInput**](../Model/DirectoryServiceIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\DirectoryServiceIntentResponse**](../Model/DirectoryServiceIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `directoryServicesUuidDelete()`

```php
directoryServicesUuidDelete($uuid): \OpenAPI\Client\Model\DirectoryServiceIntentResponse
```

Delete a existing directory service configuration

This operation submits a request to delete a existing directory service configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DirectoryServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->directoryServicesUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryServicesApi->directoryServicesUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\DirectoryServiceIntentResponse**](../Model/DirectoryServiceIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `directoryServicesUuidGet()`

```php
directoryServicesUuidGet($uuid): \OpenAPI\Client\Model\DirectoryServiceIntentResponse
```

Get a existing directory service configuration

This operation gets a existing directory service configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DirectoryServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->directoryServicesUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryServicesApi->directoryServicesUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\DirectoryServiceIntentResponse**](../Model/DirectoryServiceIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `directoryServicesUuidPut()`

```php
directoryServicesUuidPut($uuid, $body): \OpenAPI\Client\Model\DirectoryServiceIntentResponse
```

Update a existing directory service configuration

This operation submits a request to update a existing directory service configuration based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DirectoryServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\DirectoryServiceIntentInput(); // \OpenAPI\Client\Model\DirectoryServiceIntentInput

try {
    $result = $apiInstance->directoryServicesUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryServicesApi->directoryServicesUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\DirectoryServiceIntentInput**](../Model/DirectoryServiceIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\DirectoryServiceIntentResponse**](../Model/DirectoryServiceIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `directoryServicesUuidSearchPost()`

```php
directoryServicesUuidSearchPost($uuid, $body): \OpenAPI\Client\Model\DirectoryServiceSearchResponse
```

Search user or group in the directory service.

Retrieves a user or a group available in the directory service based on the UUID specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DirectoryServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\DirectoryServiceSearchMetadata(); // \OpenAPI\Client\Model\DirectoryServiceSearchMetadata

try {
    $result = $apiInstance->directoryServicesUuidSearchPost($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryServicesApi->directoryServicesUuidSearchPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\DirectoryServiceSearchMetadata**](../Model/DirectoryServiceSearchMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\DirectoryServiceSearchResponse**](../Model/DirectoryServiceSearchResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
