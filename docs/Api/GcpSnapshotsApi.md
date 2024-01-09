# OpenAPI\Client\GcpSnapshotsApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**gcpV1SnapshotsListPost()**](GcpSnapshotsApi.md#gcpV1SnapshotsListPost) | **POST** /gcp/v1/snapshots/list | Get Google cloud snapshots |


## `gcpV1SnapshotsListPost()`

```php
gcpV1SnapshotsListPost($get_entities_request): array<string,mixed>
```

Get Google cloud snapshots

List all snapshots available for a GCP account. Supported filters are: - account_uuid - zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\GcpSnapshotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\GcpListMetadata(); // \OpenAPI\Client\Model\GcpListMetadata | Request body

try {
    $result = $apiInstance->gcpV1SnapshotsListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GcpSnapshotsApi->gcpV1SnapshotsListPost: ', $e->getMessage(), PHP_EOL;
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
