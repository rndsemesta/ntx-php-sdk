# OpenAPI\Client\IpfixExportersApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ipfixExportersPost()**](IpfixExportersApi.md#ipfixExportersPost) | **POST** /ipfix_exporters | Create a new IPFix Exporter |
| [**ipfixExportersUuidDelete()**](IpfixExportersApi.md#ipfixExportersUuidDelete) | **DELETE** /ipfix_exporters/{uuid} | Delete a existing IPFix Exporter |


## `ipfixExportersPost()`

```php
ipfixExportersPost($body): \OpenAPI\Client\Model\IpfixExporterIntentResponse
```

Create a new IPFix Exporter

This operation submits a request to create a new IPFix Exporter based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\IpfixExportersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\IpfixExporterIntentInput(); // \OpenAPI\Client\Model\IpfixExporterIntentInput

try {
    $result = $apiInstance->ipfixExportersPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpfixExportersApi->ipfixExportersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\IpfixExporterIntentInput**](../Model/IpfixExporterIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\IpfixExporterIntentResponse**](../Model/IpfixExporterIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ipfixExportersUuidDelete()`

```php
ipfixExportersUuidDelete($uuid): \OpenAPI\Client\Model\IpfixExporterIntentResponse
```

Delete a existing IPFix Exporter

This operation submits a request to delete a existing IPFix Exporter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\IpfixExportersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->ipfixExportersUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IpfixExportersApi->ipfixExportersUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\IpfixExporterIntentResponse**](../Model/IpfixExporterIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
