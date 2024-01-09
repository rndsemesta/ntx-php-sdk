# OpenAPI\Client\MigrateApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**migratePost()**](MigrateApi.md#migratePost) | **POST** /migrate | Migrate a set of VMs or Volume Groups. |


## `migratePost()`

```php
migratePost($body): \OpenAPI\Client\Model\ProceduralResponse
```

Migrate a set of VMs or Volume Groups.

Migrate a set of VMs or Volume Groups.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MigrateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\MigrateInput(); // \OpenAPI\Client\Model\MigrateInput

try {
    $result = $apiInstance->migratePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrateApi->migratePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\MigrateInput**](../Model/MigrateInput.md)|  | |

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
