# OpenAPI\Client\AwsVmsApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**awsVmsListPost()**](AwsVmsApi.md#awsVmsListPost) | **POST** /aws/vms/list | List AWS VMs. |
| [**awsVmsPost()**](AwsVmsApi.md#awsVmsPost) | **POST** /aws/vms | Create an AWS instance(VM) |
| [**awsVmsUuidDelete()**](AwsVmsApi.md#awsVmsUuidDelete) | **DELETE** /aws/vms/{uuid} | Delete an AWS VM. |
| [**awsVmsUuidGet()**](AwsVmsApi.md#awsVmsUuidGet) | **GET** /aws/vms/{uuid} | Get an AWS VM. |
| [**awsVmsUuidPut()**](AwsVmsApi.md#awsVmsUuidPut) | **PUT** /aws/vms/{uuid} | Update an AWS VM. |


## `awsVmsListPost()`

```php
awsVmsListPost($get_entities_request): \OpenAPI\Client\Model\AwsVmListIntentResponse
```

List AWS VMs.

List VMs with associated metadata. Supported filters are: - account_uuid - region - power_state Use the account_uuid filter to get all the VMs on the default region of a particular account. Use account_uuid and region filters together to list all the VMs in a particular region. Set the power_state to running, stopped, and terminated. in the above two cases to list only VMs in the particular power state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AwsVmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\AwsVmListMetadata(); // \OpenAPI\Client\Model\AwsVmListMetadata

try {
    $result = $apiInstance->awsVmsListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AwsVmsApi->awsVmsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\AwsVmListMetadata**](../Model/AwsVmListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AwsVmListIntentResponse**](../Model/AwsVmListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `awsVmsPost()`

```php
awsVmsPost($body): \OpenAPI\Client\Model\AwsVmIntentResponse
```

Create an AWS instance(VM)

A VM is a logical representation of a computer (CPU, memory, storage, and operating system)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AwsVmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\AwsVmIntentInput(); // \OpenAPI\Client\Model\AwsVmIntentInput

try {
    $result = $apiInstance->awsVmsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AwsVmsApi->awsVmsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\AwsVmIntentInput**](../Model/AwsVmIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AwsVmIntentResponse**](../Model/AwsVmIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `awsVmsUuidDelete()`

```php
awsVmsUuidDelete($uuid): \OpenAPI\Client\Model\AwsVmIntentResponse
```

Delete an AWS VM.

Delete an AWS VM given its uuid.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AwsVmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->awsVmsUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AwsVmsApi->awsVmsUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\AwsVmIntentResponse**](../Model/AwsVmIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `awsVmsUuidGet()`

```php
awsVmsUuidGet($uuid): \OpenAPI\Client\Model\AwsVmIntentResponse
```

Get an AWS VM.

Given a UUID, returns an AWS VM definition.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AwsVmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->awsVmsUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AwsVmsApi->awsVmsUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\AwsVmIntentResponse**](../Model/AwsVmIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `awsVmsUuidPut()`

```php
awsVmsUuidPut($uuid, $body): \OpenAPI\Client\Model\AwsVmIntentResponse
```

Update an AWS VM.

Given an intenful spec and VM uuid, update an AWS VM.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AwsVmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\AwsVmIntentInput(); // \OpenAPI\Client\Model\AwsVmIntentInput

try {
    $result = $apiInstance->awsVmsUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AwsVmsApi->awsVmsUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\AwsVmIntentInput**](../Model/AwsVmIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AwsVmIntentResponse**](../Model/AwsVmIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
