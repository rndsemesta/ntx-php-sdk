# OpenAPI\Client\MhVmsApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**mhVmsListPost()**](MhVmsApi.md#mhVmsListPost) | **POST** /mh_vms/list | Get a list of existing VMs |
| [**mhVmsPost()**](MhVmsApi.md#mhVmsPost) | **POST** /mh_vms | Create a new VM |
| [**mhVmsUuidGet()**](MhVmsApi.md#mhVmsUuidGet) | **GET** /mh_vms/{uuid} | Get an existing VM |
| [**mhVmsUuidPut()**](MhVmsApi.md#mhVmsUuidPut) | **PUT** /mh_vms/{uuid} | Update an existing VM |
| [**mhVmsUuidRevertPost()**](MhVmsApi.md#mhVmsUuidRevertPost) | **POST** /mh_vms/{uuid}/revert | Revert the VM to the given recovery point. |
| [**mhVmsUuidSnapshotPost()**](MhVmsApi.md#mhVmsUuidSnapshotPost) | **POST** /mh_vms/{uuid}/snapshot | Create a VM recovery point. |


## `mhVmsListPost()`

```php
mhVmsListPost($get_entities_request): \OpenAPI\Client\Model\MhVmListIntentResponse
```

Get a list of existing VMs

This operation gets a list of VMs, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MhVmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\MhVmListMetadata(); // \OpenAPI\Client\Model\MhVmListMetadata

try {
    $result = $apiInstance->mhVmsListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MhVmsApi->mhVmsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\MhVmListMetadata**](../Model/MhVmListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\MhVmListIntentResponse**](../Model/MhVmListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mhVmsPost()`

```php
mhVmsPost($body): \OpenAPI\Client\Model\MhVmIntentResponse
```

Create a new VM

This operation submits a request to create a new VM based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MhVmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\MhVmIntentInput(); // \OpenAPI\Client\Model\MhVmIntentInput

try {
    $result = $apiInstance->mhVmsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MhVmsApi->mhVmsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\MhVmIntentInput**](../Model/MhVmIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\MhVmIntentResponse**](../Model/MhVmIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mhVmsUuidGet()`

```php
mhVmsUuidGet($uuid): \OpenAPI\Client\Model\MhVmIntentResponse
```

Get an existing VM

This operation gets an existing VM.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MhVmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->mhVmsUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MhVmsApi->mhVmsUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\MhVmIntentResponse**](../Model/MhVmIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mhVmsUuidPut()`

```php
mhVmsUuidPut($uuid, $body): \OpenAPI\Client\Model\MhVmIntentResponse
```

Update an existing VM

This operation submits a request to update an existing VM based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MhVmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\MhVmIntentInput(); // \OpenAPI\Client\Model\MhVmIntentInput

try {
    $result = $apiInstance->mhVmsUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MhVmsApi->mhVmsUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\MhVmIntentInput**](../Model/MhVmIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\MhVmIntentResponse**](../Model/MhVmIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `mhVmsUuidRevertPost()`

```php
mhVmsUuidRevertPost($uuid, $body): \OpenAPI\Client\Model\ProceduralResponse
```

Revert the VM to the given recovery point.

Submits a request to create a task handling the VM revert to a recovery point operation, returns a task reference.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MhVmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\MhVmRevertInput(); // \OpenAPI\Client\Model\MhVmRevertInput

try {
    $result = $apiInstance->mhVmsUuidRevertPost($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MhVmsApi->mhVmsUuidRevertPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\MhVmRevertInput**](../Model/MhVmRevertInput.md)|  | |

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

## `mhVmsUuidSnapshotPost()`

```php
mhVmsUuidSnapshotPost($uuid, $body): \OpenAPI\Client\Model\ProceduralResponse
```

Create a VM recovery point.

Submits a request to create a task handling the snapshot operation on the VM, returns a task reference. This creates a point in time recovery point.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MhVmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\MhVmSnapshotInput(); // \OpenAPI\Client\Model\MhVmSnapshotInput

try {
    $result = $apiInstance->mhVmsUuidSnapshotPost($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MhVmsApi->mhVmsUuidSnapshotPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\MhVmSnapshotInput**](../Model/MhVmSnapshotInput.md)|  | [optional] |

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
