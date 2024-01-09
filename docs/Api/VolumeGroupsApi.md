# OpenAPI\Client\VolumeGroupsApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**volumeGroupsListPost()**](VolumeGroupsApi.md#volumeGroupsListPost) | **POST** /volume_groups/list | Get a list of existing volume_groups |
| [**volumeGroupsPost()**](VolumeGroupsApi.md#volumeGroupsPost) | **POST** /volume_groups | Create a new volume_group |
| [**volumeGroupsUuidDelete()**](VolumeGroupsApi.md#volumeGroupsUuidDelete) | **DELETE** /volume_groups/{uuid} | Delete a existing volume_group |
| [**volumeGroupsUuidGet()**](VolumeGroupsApi.md#volumeGroupsUuidGet) | **GET** /volume_groups/{uuid} | Get a existing volume_group |
| [**volumeGroupsUuidPut()**](VolumeGroupsApi.md#volumeGroupsUuidPut) | **PUT** /volume_groups/{uuid} | Update a existing volume_group |


## `volumeGroupsListPost()`

```php
volumeGroupsListPost($get_entities_request): \OpenAPI\Client\Model\VolumeGroupListIntentResponse
```

Get a list of existing volume_groups

This operation gets a list of volume_groups, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VolumeGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\VolumeGroupListMetadata(); // \OpenAPI\Client\Model\VolumeGroupListMetadata

try {
    $result = $apiInstance->volumeGroupsListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VolumeGroupsApi->volumeGroupsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\VolumeGroupListMetadata**](../Model/VolumeGroupListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VolumeGroupListIntentResponse**](../Model/VolumeGroupListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `volumeGroupsPost()`

```php
volumeGroupsPost($body): \OpenAPI\Client\Model\VolumeGroupIntentResponse
```

Create a new volume_group

This operation submits a request to create a new volume_group based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VolumeGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\VolumeGroupIntentInput(); // \OpenAPI\Client\Model\VolumeGroupIntentInput | Volume group object.

try {
    $result = $apiInstance->volumeGroupsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VolumeGroupsApi->volumeGroupsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\VolumeGroupIntentInput**](../Model/VolumeGroupIntentInput.md)| Volume group object. | |

### Return type

[**\OpenAPI\Client\Model\VolumeGroupIntentResponse**](../Model/VolumeGroupIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `volumeGroupsUuidDelete()`

```php
volumeGroupsUuidDelete($uuid): \OpenAPI\Client\Model\VolumeGroupIntentResponse
```

Delete a existing volume_group

This operation submits a request to delete a existing volume_group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VolumeGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->volumeGroupsUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VolumeGroupsApi->volumeGroupsUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\VolumeGroupIntentResponse**](../Model/VolumeGroupIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `volumeGroupsUuidGet()`

```php
volumeGroupsUuidGet($uuid): \OpenAPI\Client\Model\VolumeGroupIntentResponse
```

Get a existing volume_group

This operation gets a existing volume_group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VolumeGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->volumeGroupsUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VolumeGroupsApi->volumeGroupsUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\VolumeGroupIntentResponse**](../Model/VolumeGroupIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `volumeGroupsUuidPut()`

```php
volumeGroupsUuidPut($uuid, $body): \OpenAPI\Client\Model\VolumeGroupIntentResponse
```

Update a existing volume_group

This operation submits a request to update a existing volume_group based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VolumeGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\VolumeGroupIntentInput(); // \OpenAPI\Client\Model\VolumeGroupIntentInput | Volume group object.

try {
    $result = $apiInstance->volumeGroupsUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VolumeGroupsApi->volumeGroupsUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\VolumeGroupIntentInput**](../Model/VolumeGroupIntentInput.md)| Volume group object. | |

### Return type

[**\OpenAPI\Client\Model\VolumeGroupIntentResponse**](../Model/VolumeGroupIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
