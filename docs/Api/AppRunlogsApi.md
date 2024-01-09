# OpenAPI\Client\AppRunlogsApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**appRunlogsArchivalPolicyListPost()**](AppRunlogsApi.md#appRunlogsArchivalPolicyListPost) | **POST** /app_runlogs/archival_policy/list | Returns archive information of the runlogs |
| [**appRunlogsArchivalPolicyUuidGet()**](AppRunlogsApi.md#appRunlogsArchivalPolicyUuidGet) | **GET** /app_runlogs/archival_policy/{uuid} | Returns archive information of the runlogs |
| [**appRunlogsArchiveFileUuidDownloadGet()**](AppRunlogsApi.md#appRunlogsArchiveFileUuidDownloadGet) | **GET** /app_runlogs/archive_file/{uuid}/download | Returns archive containing script and output file for download |


## `appRunlogsArchivalPolicyListPost()`

```php
appRunlogsArchivalPolicyListPost($get_entities_request): \OpenAPI\Client\Model\AppRunlogArchiveListResponse
```

Returns archive information of the runlogs

Returns archive information of the runlogs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AppRunlogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\AppRunlogListMetadata(); // \OpenAPI\Client\Model\AppRunlogListMetadata

try {
    $result = $apiInstance->appRunlogsArchivalPolicyListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppRunlogsApi->appRunlogsArchivalPolicyListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\AppRunlogListMetadata**](../Model/AppRunlogListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AppRunlogArchiveListResponse**](../Model/AppRunlogArchiveListResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appRunlogsArchivalPolicyUuidGet()`

```php
appRunlogsArchivalPolicyUuidGet($uuid): \OpenAPI\Client\Model\AppRunlogArchiveResponse
```

Returns archive information of the runlogs

Returns archive information of the runlogs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AppRunlogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->appRunlogsArchivalPolicyUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppRunlogsApi->appRunlogsArchivalPolicyUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\AppRunlogArchiveResponse**](../Model/AppRunlogArchiveResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appRunlogsArchiveFileUuidDownloadGet()`

```php
appRunlogsArchiveFileUuidDownloadGet($uuid): \SplFileObject
```

Returns archive containing script and output file for download

Returns archive containing script and output file for download

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AppRunlogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->appRunlogsArchiveFileUuidDownloadGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppRunlogsApi->appRunlogsArchiveFileUuidDownloadGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

**\SplFileObject**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
