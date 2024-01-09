# OpenAPI\Client\VmwareVmApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**vmwareV6AccountsAccountUuidVmsUuidGet()**](VmwareVmApi.md#vmwareV6AccountsAccountUuidVmsUuidGet) | **GET** /vmware/v6/accounts/{account_uuid}/vms/{uuid} | Get vmware vm |
| [**vmwareV6VmListPost()**](VmwareVmApi.md#vmwareV6VmListPost) | **POST** /vmware/v6/vm/list | List all virtual machines |


## `vmwareV6AccountsAccountUuidVmsUuidGet()`

```php
vmwareV6AccountsAccountUuidVmsUuidGet($uuid, $account_uuid): array<string,mixed>
```

Get vmware vm

Given a UUID, returns a vmware vm

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmwareVmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | uuid of vm
$account_uuid = 'account_uuid_example'; // string | uuid of account

try {
    $result = $apiInstance->vmwareV6AccountsAccountUuidVmsUuidGet($uuid, $account_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmwareVmApi->vmwareV6AccountsAccountUuidVmsUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| uuid of vm | |
| **account_uuid** | **string**| uuid of account | |

### Return type

**array<string,mixed>**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vmwareV6VmListPost()`

```php
vmwareV6VmListPost($get_entities_request): array<string,mixed>
```

List all virtual machines

List all virtual machines. Supported filters are: - account_uuid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmwareVmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\VmwareListMetadata(); // \OpenAPI\Client\Model\VmwareListMetadata | Request body

try {
    $result = $apiInstance->vmwareV6VmListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmwareVmApi->vmwareV6VmListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\VmwareListMetadata**](../Model/VmwareListMetadata.md)| Request body | |

### Return type

**array<string,mixed>**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
