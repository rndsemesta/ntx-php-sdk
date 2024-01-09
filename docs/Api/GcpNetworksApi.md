# OpenAPI\Client\GcpNetworksApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**gcpV1NetworksListPost()**](GcpNetworksApi.md#gcpV1NetworksListPost) | **POST** /gcp/v1/networks/list | Get Google cloud networks |


## `gcpV1NetworksListPost()`

```php
gcpV1NetworksListPost($get_entities_request): array<string,mixed>
```

Get Google cloud networks

List all network interfaces present in a zone. Supported filters are: - account_uuid - zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\GcpNetworksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\GcpListMetadata(); // \OpenAPI\Client\Model\GcpListMetadata | Request body

try {
    $result = $apiInstance->gcpV1NetworksListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GcpNetworksApi->gcpV1NetworksListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\GcpListMetadata**](../Model/GcpListMetadata.md)| Request body | |

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
