# OpenAPI\Client\AwsVolumeTypesApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**awsVolumeTypesListPost()**](AwsVolumeTypesApi.md#awsVolumeTypesListPost) | **POST** /aws/volume_types/list | List all the AWS volume types |


## `awsVolumeTypesListPost()`

```php
awsVolumeTypesListPost($get_entities_request): \OpenAPI\Client\Model\AwsVolumeTypeListIntentResponse
```

List all the AWS volume types

List all the AWS volume types. No filters to be mentioned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AwsVolumeTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\AwsVolumeTypeListMetadata(); // \OpenAPI\Client\Model\AwsVolumeTypeListMetadata

try {
    $result = $apiInstance->awsVolumeTypesListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AwsVolumeTypesApi->awsVolumeTypesListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\AwsVolumeTypeListMetadata**](../Model/AwsVolumeTypeListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AwsVolumeTypeListIntentResponse**](../Model/AwsVolumeTypeListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
