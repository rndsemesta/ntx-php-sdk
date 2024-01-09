# OpenAPI\Client\ServiceGroupsApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**serviceGroupsListPost()**](ServiceGroupsApi.md#serviceGroupsListPost) | **POST** /service_groups/list | List the service groups |
| [**serviceGroupsPost()**](ServiceGroupsApi.md#serviceGroupsPost) | **POST** /service_groups | Create a new service_group |
| [**serviceGroupsUuidDelete()**](ServiceGroupsApi.md#serviceGroupsUuidDelete) | **DELETE** /service_groups/{uuid} | Delete a existing service_group |
| [**serviceGroupsUuidGet()**](ServiceGroupsApi.md#serviceGroupsUuidGet) | **GET** /service_groups/{uuid} | Get a existing service_group |
| [**serviceGroupsUuidPut()**](ServiceGroupsApi.md#serviceGroupsUuidPut) | **PUT** /service_groups/{uuid} | Update a existing service_group |


## `serviceGroupsListPost()`

```php
serviceGroupsListPost($get_entities_request): \OpenAPI\Client\Model\ServiceGroupListResponse
```

List the service groups

List the service groups.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ServiceGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\ServiceGroupListMetadata(); // \OpenAPI\Client\Model\ServiceGroupListMetadata

try {
    $result = $apiInstance->serviceGroupsListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceGroupsApi->serviceGroupsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\ServiceGroupListMetadata**](../Model/ServiceGroupListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ServiceGroupListResponse**](../Model/ServiceGroupListResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `serviceGroupsPost()`

```php
serviceGroupsPost($body): \OpenAPI\Client\Model\ServiceGroupReference
```

Create a new service_group

This operation submits a request to create a new service_group based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ServiceGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ServiceGroup(); // \OpenAPI\Client\Model\ServiceGroup

try {
    $result = $apiInstance->serviceGroupsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceGroupsApi->serviceGroupsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\ServiceGroup**](../Model/ServiceGroup.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ServiceGroupReference**](../Model/ServiceGroupReference.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `serviceGroupsUuidDelete()`

```php
serviceGroupsUuidDelete($uuid)
```

Delete a existing service_group

This operation submits a request to delete a existing service_group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ServiceGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $apiInstance->serviceGroupsUuidDelete($uuid);
} catch (Exception $e) {
    echo 'Exception when calling ServiceGroupsApi->serviceGroupsUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

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

## `serviceGroupsUuidGet()`

```php
serviceGroupsUuidGet($uuid): \OpenAPI\Client\Model\ServiceGroupResponse
```

Get a existing service_group

This operation gets a existing service_group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ServiceGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->serviceGroupsUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServiceGroupsApi->serviceGroupsUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\ServiceGroupResponse**](../Model/ServiceGroupResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `serviceGroupsUuidPut()`

```php
serviceGroupsUuidPut($uuid, $body)
```

Update a existing service_group

This operation submits a request to update a existing service_group based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ServiceGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\ServiceGroup(); // \OpenAPI\Client\Model\ServiceGroup

try {
    $apiInstance->serviceGroupsUuidPut($uuid, $body);
} catch (Exception $e) {
    echo 'Exception when calling ServiceGroupsApi->serviceGroupsUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\ServiceGroup**](../Model/ServiceGroup.md)|  | |

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
