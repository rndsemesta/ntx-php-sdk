# OpenAPI\Client\DirectoryServicesInternalApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**directoryServicesInternalGet()**](DirectoryServicesInternalApi.md#directoryServicesInternalGet) | **GET** /directory_services_internal | Directory service internal API |


## `directoryServicesInternalGet()`

```php
directoryServicesInternalGet(): \OpenAPI\Client\Model\InternalDirectoryServiceResponse
```

Directory service internal API

Directory service internal API

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DirectoryServicesInternalApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->directoryServicesInternalGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryServicesInternalApi->directoryServicesInternalGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\InternalDirectoryServiceResponse**](../Model/InternalDirectoryServiceResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
