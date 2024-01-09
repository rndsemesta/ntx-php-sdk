# OpenAPI\Client\StoragePoliciesApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**storagePoliciesGetInfoEntityTypeUuidGet()**](StoragePoliciesApi.md#storagePoliciesGetInfoEntityTypeUuidGet) | **GET** /storage_policies/get_info/{entity_type}/{uuid} | Get effective storage configuration on an entity |
| [**storagePoliciesListPost()**](StoragePoliciesApi.md#storagePoliciesListPost) | **POST** /storage_policies/list | Get a list of existing storage_policies |
| [**storagePoliciesPost()**](StoragePoliciesApi.md#storagePoliciesPost) | **POST** /storage_policies | Create a new storage_policy |
| [**storagePoliciesUuidDelete()**](StoragePoliciesApi.md#storagePoliciesUuidDelete) | **DELETE** /storage_policies/{uuid} | Delete a existing storage_policy |
| [**storagePoliciesUuidGet()**](StoragePoliciesApi.md#storagePoliciesUuidGet) | **GET** /storage_policies/{uuid} | Get a existing storage_policy |
| [**storagePoliciesUuidGetComplianceCountGet()**](StoragePoliciesApi.md#storagePoliciesUuidGetComplianceCountGet) | **GET** /storage_policies/{uuid}/get_compliance_count | Get compliance count per storage policy |
| [**storagePoliciesUuidPut()**](StoragePoliciesApi.md#storagePoliciesUuidPut) | **PUT** /storage_policies/{uuid} | Update a existing storage_policy |


## `storagePoliciesGetInfoEntityTypeUuidGet()`

```php
storagePoliciesGetInfoEntityTypeUuidGet($entity_type, $uuid): \OpenAPI\Client\Model\GetInfo
```

Get effective storage configuration on an entity

Get effective storage configuration on an entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\StoragePoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$entity_type = 'entity_type_example'; // string | The entity type.
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->storagePoliciesGetInfoEntityTypeUuidGet($entity_type, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoragePoliciesApi->storagePoliciesGetInfoEntityTypeUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **entity_type** | **string**| The entity type. | |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\GetInfo**](../Model/GetInfo.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storagePoliciesListPost()`

```php
storagePoliciesListPost($get_entities_request): \OpenAPI\Client\Model\StoragePolicyListIntentResponse
```

Get a list of existing storage_policies

This operation gets a list of storage_policies, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\StoragePoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\StoragePolicyListMetadata(); // \OpenAPI\Client\Model\StoragePolicyListMetadata

try {
    $result = $apiInstance->storagePoliciesListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoragePoliciesApi->storagePoliciesListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\StoragePolicyListMetadata**](../Model/StoragePolicyListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\StoragePolicyListIntentResponse**](../Model/StoragePolicyListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storagePoliciesPost()`

```php
storagePoliciesPost($body): \OpenAPI\Client\Model\StoragePolicyIntentResponse
```

Create a new storage_policy

This operation submits a request to create a new storage_policy based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\StoragePoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\StoragePolicyIntentInput(); // \OpenAPI\Client\Model\StoragePolicyIntentInput

try {
    $result = $apiInstance->storagePoliciesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoragePoliciesApi->storagePoliciesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\StoragePolicyIntentInput**](../Model/StoragePolicyIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\StoragePolicyIntentResponse**](../Model/StoragePolicyIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storagePoliciesUuidDelete()`

```php
storagePoliciesUuidDelete($uuid): \OpenAPI\Client\Model\StoragePolicyIntentResponse
```

Delete a existing storage_policy

This operation submits a request to delete a existing storage_policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\StoragePoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->storagePoliciesUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoragePoliciesApi->storagePoliciesUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\StoragePolicyIntentResponse**](../Model/StoragePolicyIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storagePoliciesUuidGet()`

```php
storagePoliciesUuidGet($uuid): \OpenAPI\Client\Model\StoragePolicyIntentResponse
```

Get a existing storage_policy

This operation gets a existing storage_policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\StoragePoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->storagePoliciesUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoragePoliciesApi->storagePoliciesUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\StoragePolicyIntentResponse**](../Model/StoragePolicyIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storagePoliciesUuidGetComplianceCountGet()`

```php
storagePoliciesUuidGetComplianceCountGet($uuid): \OpenAPI\Client\Model\StoragePolicyComplianceCount
```

Get compliance count per storage policy

Get compliance count

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\StoragePoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->storagePoliciesUuidGetComplianceCountGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoragePoliciesApi->storagePoliciesUuidGetComplianceCountGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\StoragePolicyComplianceCount**](../Model/StoragePolicyComplianceCount.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `storagePoliciesUuidPut()`

```php
storagePoliciesUuidPut($uuid, $body): \OpenAPI\Client\Model\StoragePolicyIntentResponse
```

Update a existing storage_policy

This operation submits a request to update a existing storage_policy based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\StoragePoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\StoragePolicyIntentInput(); // \OpenAPI\Client\Model\StoragePolicyIntentInput

try {
    $result = $apiInstance->storagePoliciesUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoragePoliciesApi->storagePoliciesUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\StoragePolicyIntentInput**](../Model/StoragePolicyIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\StoragePolicyIntentResponse**](../Model/StoragePolicyIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
