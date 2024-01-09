# OpenAPI\Client\AwsMachineTypesApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**awsMachineTypesListPost()**](AwsMachineTypesApi.md#awsMachineTypesListPost) | **POST** /aws/machine_types/list | List all the AWS machine types |


## `awsMachineTypesListPost()`

```php
awsMachineTypesListPost($get_entities_request): \OpenAPI\Client\Model\AwsMachineTypeListIntentResponse
```

List all the AWS machine types

List all the AWS machine types. No filters to be mentioned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AwsMachineTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\AwsMachineTypeListMetadata(); // \OpenAPI\Client\Model\AwsMachineTypeListMetadata

try {
    $result = $apiInstance->awsMachineTypesListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AwsMachineTypesApi->awsMachineTypesListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\AwsMachineTypeListMetadata**](../Model/AwsMachineTypeListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AwsMachineTypeListIntentResponse**](../Model/AwsMachineTypeListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
