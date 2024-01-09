# OpenAPI\Client\DatacenterApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**datacentersListPost()**](DatacenterApi.md#datacentersListPost) | **POST** /datacenters/list | Retrieves all datacenters |
| [**datacentersPost()**](DatacenterApi.md#datacentersPost) | **POST** /datacenters | Create a datacenter instance |
| [**datacentersUuidDelete()**](DatacenterApi.md#datacentersUuidDelete) | **DELETE** /datacenters/{uuid} | Delete specified datacenter |
| [**datacentersUuidGet()**](DatacenterApi.md#datacentersUuidGet) | **GET** /datacenters/{uuid} | Retrieves specified datacenter |
| [**datacentersUuidPut()**](DatacenterApi.md#datacentersUuidPut) | **PUT** /datacenters/{uuid} | Update datacenter |


## `datacentersListPost()`

```php
datacentersListPost($body): \OpenAPI\Client\Model\DatacenterListIntentResponse
```

Retrieves all datacenters

Retrieves all datacenters

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DatacenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\DatacenterListMetadata(); // \OpenAPI\Client\Model\DatacenterListMetadata

try {
    $result = $apiInstance->datacentersListPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatacenterApi->datacentersListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\DatacenterListMetadata**](../Model/DatacenterListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\DatacenterListIntentResponse**](../Model/DatacenterListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `datacentersPost()`

```php
datacentersPost($body): \OpenAPI\Client\Model\DatacenterIntentResponse
```

Create a datacenter instance

Create a datacenter instance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DatacenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\DatacenterIntentInput(); // \OpenAPI\Client\Model\DatacenterIntentInput | Create datacenter object

try {
    $result = $apiInstance->datacentersPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatacenterApi->datacentersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\DatacenterIntentInput**](../Model/DatacenterIntentInput.md)| Create datacenter object | |

### Return type

[**\OpenAPI\Client\Model\DatacenterIntentResponse**](../Model/DatacenterIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `datacentersUuidDelete()`

```php
datacentersUuidDelete($uuid): \OpenAPI\Client\Model\DatacenterIntentResponse
```

Delete specified datacenter

Delete specified datacenter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DatacenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->datacentersUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatacenterApi->datacentersUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\DatacenterIntentResponse**](../Model/DatacenterIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `datacentersUuidGet()`

```php
datacentersUuidGet($uuid): \OpenAPI\Client\Model\DatacenterIntentResponse
```

Retrieves specified datacenter

Retrieves specified datacenter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DatacenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->datacentersUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatacenterApi->datacentersUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\DatacenterIntentResponse**](../Model/DatacenterIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `datacentersUuidPut()`

```php
datacentersUuidPut($uuid, $body): \OpenAPI\Client\Model\DatacenterIntentResponse
```

Update datacenter

Update datacenter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DatacenterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\DatacenterIntentInput(); // \OpenAPI\Client\Model\DatacenterIntentInput | Update datacenter

try {
    $result = $apiInstance->datacentersUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatacenterApi->datacentersUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\DatacenterIntentInput**](../Model/DatacenterIntentInput.md)| Update datacenter | |

### Return type

[**\OpenAPI\Client\Model\DatacenterIntentResponse**](../Model/DatacenterIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
