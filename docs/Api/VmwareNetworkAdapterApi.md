# OpenAPI\Client\VmwareNetworkAdapterApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**vmwareV6NetworkAdapterListPost()**](VmwareNetworkAdapterApi.md#vmwareV6NetworkAdapterListPost) | **POST** /vmware/v6/network_adapter/list | List all network adapters supported |


## `vmwareV6NetworkAdapterListPost()`

```php
vmwareV6NetworkAdapterListPost($get_entities_request): array<string,mixed>
```

List all network adapters supported

List all network adapter supported by vmware.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmwareNetworkAdapterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\VmwareListMetadata(); // \OpenAPI\Client\Model\VmwareListMetadata | Request body

try {
    $result = $apiInstance->vmwareV6NetworkAdapterListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmwareNetworkAdapterApi->vmwareV6NetworkAdapterListPost: ', $e->getMessage(), PHP_EOL;
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
