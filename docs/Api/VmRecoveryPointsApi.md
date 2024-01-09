# OpenAPI\Client\VmRecoveryPointsApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**vmRecoveryPointsClonePost()**](VmRecoveryPointsApi.md#vmRecoveryPointsClonePost) | **POST** /vm_recovery_points/clone | Clone a vm recovery point for the given time point. |
| [**vmRecoveryPointsListPost()**](VmRecoveryPointsApi.md#vmRecoveryPointsListPost) | **POST** /vm_recovery_points/list | Get a list of existing vm recovery point |
| [**vmRecoveryPointsPost()**](VmRecoveryPointsApi.md#vmRecoveryPointsPost) | **POST** /vm_recovery_points | Create a new vm recovery point |
| [**vmRecoveryPointsRestorePost()**](VmRecoveryPointsApi.md#vmRecoveryPointsRestorePost) | **POST** /vm_recovery_points/restore | Restore a vm recovery point for the given time point. |
| [**vmRecoveryPointsUuidClonePost()**](VmRecoveryPointsApi.md#vmRecoveryPointsUuidClonePost) | **POST** /vm_recovery_points/{uuid}/clone | Clone a vm_recovery_point. |
| [**vmRecoveryPointsUuidDelete()**](VmRecoveryPointsApi.md#vmRecoveryPointsUuidDelete) | **DELETE** /vm_recovery_points/{uuid} | Delete a existing vm recovery point |
| [**vmRecoveryPointsUuidGet()**](VmRecoveryPointsApi.md#vmRecoveryPointsUuidGet) | **GET** /vm_recovery_points/{uuid} | Get a existing vm recovery point |
| [**vmRecoveryPointsUuidPromotePost()**](VmRecoveryPointsApi.md#vmRecoveryPointsUuidPromotePost) | **POST** /vm_recovery_points/{uuid}/promote | Promote a vm recovery point. |
| [**vmRecoveryPointsUuidPut()**](VmRecoveryPointsApi.md#vmRecoveryPointsUuidPut) | **PUT** /vm_recovery_points/{uuid} | Update a existing vm recovery point |
| [**vmRecoveryPointsUuidRestorePost()**](VmRecoveryPointsApi.md#vmRecoveryPointsUuidRestorePost) | **POST** /vm_recovery_points/{uuid}/restore | Restore a vm recovery point. |
| [**vmRecoveryPointsUuidValidateRestorePost()**](VmRecoveryPointsApi.md#vmRecoveryPointsUuidValidateRestorePost) | **POST** /vm_recovery_points/{uuid}/validate_restore | Validates the feasibility of vm restoration from the vm recovery point. |


## `vmRecoveryPointsClonePost()`

```php
vmRecoveryPointsClonePost($body): \OpenAPI\Client\Model\ProceduralResponse
```

Clone a vm recovery point for the given time point.

Submits a request to create a task handling the clone of a vm recovery point given a timestamp, returns the task reference. This operation is used to replicate a backend selected vm recovery point that is around the desired time point to a target AZ.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmRecoveryPointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\VmRecoveryPointsRealizeCloneInput(); // \OpenAPI\Client\Model\VmRecoveryPointsRealizeCloneInput

try {
    $result = $apiInstance->vmRecoveryPointsClonePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmRecoveryPointsApi->vmRecoveryPointsClonePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\VmRecoveryPointsRealizeCloneInput**](../Model/VmRecoveryPointsRealizeCloneInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProceduralResponse**](../Model/ProceduralResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vmRecoveryPointsListPost()`

```php
vmRecoveryPointsListPost($get_entities_request): \OpenAPI\Client\Model\VmRecoveryPointListIntentResponse
```

Get a list of existing vm recovery point

This operation gets a list of vm recovery point, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmRecoveryPointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\VmRecoveryPointListMetadata(); // \OpenAPI\Client\Model\VmRecoveryPointListMetadata

try {
    $result = $apiInstance->vmRecoveryPointsListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmRecoveryPointsApi->vmRecoveryPointsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\VmRecoveryPointListMetadata**](../Model/VmRecoveryPointListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VmRecoveryPointListIntentResponse**](../Model/VmRecoveryPointListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vmRecoveryPointsPost()`

```php
vmRecoveryPointsPost($body): \OpenAPI\Client\Model\VmRecoveryPointIntentResponse
```

Create a new vm recovery point

This operation submits a request to create a new vm recovery point based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmRecoveryPointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\VmRecoveryPointIntentInput(); // \OpenAPI\Client\Model\VmRecoveryPointIntentInput

try {
    $result = $apiInstance->vmRecoveryPointsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmRecoveryPointsApi->vmRecoveryPointsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\VmRecoveryPointIntentInput**](../Model/VmRecoveryPointIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VmRecoveryPointIntentResponse**](../Model/VmRecoveryPointIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vmRecoveryPointsRestorePost()`

```php
vmRecoveryPointsRestorePost($body): \OpenAPI\Client\Model\ProceduralResponse
```

Restore a vm recovery point for the given time point.

Submits a request to create a task handling the restore of a vm recovery point given a timestamp to recover to, returns the task reference. This operation is used to create a vm out of a backend selected vm recovery point that is around the desired time point. Follow the task to get the reference of the created vm.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmRecoveryPointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\VmRecoveryPointRealizeRestoreInput(); // \OpenAPI\Client\Model\VmRecoveryPointRealizeRestoreInput

try {
    $result = $apiInstance->vmRecoveryPointsRestorePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmRecoveryPointsApi->vmRecoveryPointsRestorePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\VmRecoveryPointRealizeRestoreInput**](../Model/VmRecoveryPointRealizeRestoreInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProceduralResponse**](../Model/ProceduralResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vmRecoveryPointsUuidClonePost()`

```php
vmRecoveryPointsUuidClonePost($uuid, $body): \OpenAPI\Client\Model\ProceduralResponse
```

Clone a vm_recovery_point.

Submits a request to create a task handling vm_recovery_point clone operation, returns a task reference. This replicates the vm_recovery_point to target availability zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmRecoveryPointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\VmRecoveryPointsCloneInput(); // \OpenAPI\Client\Model\VmRecoveryPointsCloneInput

try {
    $result = $apiInstance->vmRecoveryPointsUuidClonePost($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmRecoveryPointsApi->vmRecoveryPointsUuidClonePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\VmRecoveryPointsCloneInput**](../Model/VmRecoveryPointsCloneInput.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProceduralResponse**](../Model/ProceduralResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vmRecoveryPointsUuidDelete()`

```php
vmRecoveryPointsUuidDelete($uuid): \OpenAPI\Client\Model\VmRecoveryPointIntentResponse
```

Delete a existing vm recovery point

This operation submits a request to delete a existing vm recovery point.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmRecoveryPointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->vmRecoveryPointsUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmRecoveryPointsApi->vmRecoveryPointsUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\VmRecoveryPointIntentResponse**](../Model/VmRecoveryPointIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vmRecoveryPointsUuidGet()`

```php
vmRecoveryPointsUuidGet($uuid): \OpenAPI\Client\Model\VmRecoveryPointIntentResponse
```

Get a existing vm recovery point

This operation gets a existing vm recovery point.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmRecoveryPointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->vmRecoveryPointsUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmRecoveryPointsApi->vmRecoveryPointsUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\VmRecoveryPointIntentResponse**](../Model/VmRecoveryPointIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vmRecoveryPointsUuidPromotePost()`

```php
vmRecoveryPointsUuidPromotePost($uuid, $body): \OpenAPI\Client\Model\ProceduralResponse
```

Promote a vm recovery point.

Submits a request to create a task handling the promote of Live vm recovery point, returns the task reference. This operation is used to create a vm out of the Live vm recovery point. Follow the task to get the reference of the created vm.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmRecoveryPointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\VmRecoveryPointRestoreInput(); // \OpenAPI\Client\Model\VmRecoveryPointRestoreInput

try {
    $result = $apiInstance->vmRecoveryPointsUuidPromotePost($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmRecoveryPointsApi->vmRecoveryPointsUuidPromotePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\VmRecoveryPointRestoreInput**](../Model/VmRecoveryPointRestoreInput.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProceduralResponse**](../Model/ProceduralResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vmRecoveryPointsUuidPut()`

```php
vmRecoveryPointsUuidPut($uuid, $body): \OpenAPI\Client\Model\VmRecoveryPointIntentResponse
```

Update a existing vm recovery point

This operation submits a request to update a existing vm recovery point based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmRecoveryPointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\VmRecoveryPointIntentInput(); // \OpenAPI\Client\Model\VmRecoveryPointIntentInput

try {
    $result = $apiInstance->vmRecoveryPointsUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmRecoveryPointsApi->vmRecoveryPointsUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\VmRecoveryPointIntentInput**](../Model/VmRecoveryPointIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VmRecoveryPointIntentResponse**](../Model/VmRecoveryPointIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vmRecoveryPointsUuidRestorePost()`

```php
vmRecoveryPointsUuidRestorePost($uuid, $body): \OpenAPI\Client\Model\ProceduralResponse
```

Restore a vm recovery point.

Submits a request to create a task handling the restore of vm recovery point, returns the task reference. This operation is used to create a vm out of the vm recovery point. Follow the task to get the reference of the created vm.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmRecoveryPointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\VmRecoveryPointRestoreInput(); // \OpenAPI\Client\Model\VmRecoveryPointRestoreInput

try {
    $result = $apiInstance->vmRecoveryPointsUuidRestorePost($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmRecoveryPointsApi->vmRecoveryPointsUuidRestorePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\VmRecoveryPointRestoreInput**](../Model/VmRecoveryPointRestoreInput.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProceduralResponse**](../Model/ProceduralResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vmRecoveryPointsUuidValidateRestorePost()`

```php
vmRecoveryPointsUuidValidateRestorePost($uuid): \OpenAPI\Client\Model\VmValidateRestoreOutputInner[]
```

Validates the feasibility of vm restoration from the vm recovery point.

Validates the feasibility of vm restoration from the vm recovery point, if not feasible return the reason behind it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmRecoveryPointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->vmRecoveryPointsUuidValidateRestorePost($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmRecoveryPointsApi->vmRecoveryPointsUuidValidateRestorePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\VmValidateRestoreOutputInner[]**](../Model/VmValidateRestoreOutputInner.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
