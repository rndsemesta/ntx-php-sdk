# OpenAPI\Client\VmwareResourcepoolApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**vmwareV6ResourcepoolListPost()**](VmwareResourcepoolApi.md#vmwareV6ResourcepoolListPost) | **POST** /vmware/v6/resourcepool/list | List resource pool |


## `vmwareV6ResourcepoolListPost()`

```php
vmwareV6ResourcepoolListPost($get_entities_request): array<string,mixed>
```

List resource pool

List all resource pools in a host. Supported filters are: - account_uuid - hostname

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmwareResourcepoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\VmwareListMetadata(); // \OpenAPI\Client\Model\VmwareListMetadata | Request body

try {
    $result = $apiInstance->vmwareV6ResourcepoolListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmwareResourcepoolApi->vmwareV6ResourcepoolListPost: ', $e->getMessage(), PHP_EOL;
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
