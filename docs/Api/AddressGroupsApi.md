# OpenAPI\Client\AddressGroupsApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addressGroupsListPost()**](AddressGroupsApi.md#addressGroupsListPost) | **POST** /address_groups/list | Address groups lists |
| [**addressGroupsPost()**](AddressGroupsApi.md#addressGroupsPost) | **POST** /address_groups | Create a new address_group |
| [**addressGroupsUuidDelete()**](AddressGroupsApi.md#addressGroupsUuidDelete) | **DELETE** /address_groups/{uuid} | Delete a existing address_group |
| [**addressGroupsUuidGet()**](AddressGroupsApi.md#addressGroupsUuidGet) | **GET** /address_groups/{uuid} | Get a existing address_group |
| [**addressGroupsUuidPut()**](AddressGroupsApi.md#addressGroupsUuidPut) | **PUT** /address_groups/{uuid} | Update a existing address_group |


## `addressGroupsListPost()`

```php
addressGroupsListPost($get_entities_request): \OpenAPI\Client\Model\AddressGroupListResponse
```

Address groups lists

List the address groups.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AddressGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\AddressGroupListMetadata(); // \OpenAPI\Client\Model\AddressGroupListMetadata

try {
    $result = $apiInstance->addressGroupsListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressGroupsApi->addressGroupsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\AddressGroupListMetadata**](../Model/AddressGroupListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AddressGroupListResponse**](../Model/AddressGroupListResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addressGroupsPost()`

```php
addressGroupsPost($body): \OpenAPI\Client\Model\AddressGroupReference
```

Create a new address_group

This operation submits a request to create a new address_group based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AddressGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\AddressGroup(); // \OpenAPI\Client\Model\AddressGroup

try {
    $result = $apiInstance->addressGroupsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressGroupsApi->addressGroupsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\AddressGroup**](../Model/AddressGroup.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AddressGroupReference**](../Model/AddressGroupReference.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addressGroupsUuidDelete()`

```php
addressGroupsUuidDelete($uuid)
```

Delete a existing address_group

This operation submits a request to delete a existing address_group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AddressGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $apiInstance->addressGroupsUuidDelete($uuid);
} catch (Exception $e) {
    echo 'Exception when calling AddressGroupsApi->addressGroupsUuidDelete: ', $e->getMessage(), PHP_EOL;
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

## `addressGroupsUuidGet()`

```php
addressGroupsUuidGet($uuid): \OpenAPI\Client\Model\AddressGroupResponse
```

Get a existing address_group

This operation gets a existing address_group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AddressGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->addressGroupsUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressGroupsApi->addressGroupsUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\AddressGroupResponse**](../Model/AddressGroupResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addressGroupsUuidPut()`

```php
addressGroupsUuidPut($uuid, $body): \OpenAPI\Client\Model\AddressGroup
```

Update a existing address_group

This operation submits a request to update a existing address_group based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AddressGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\AddressGroup(); // \OpenAPI\Client\Model\AddressGroup

try {
    $result = $apiInstance->addressGroupsUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddressGroupsApi->addressGroupsUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\AddressGroup**](../Model/AddressGroup.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AddressGroup**](../Model/AddressGroup.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
