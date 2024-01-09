# OpenAPI\Client\AwsRegionsApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**awsRegionsListPost()**](AwsRegionsApi.md#awsRegionsListPost) | **POST** /aws/regions/list | List all the AWS regions |


## `awsRegionsListPost()`

```php
awsRegionsListPost($get_entities_request): \OpenAPI\Client\Model\AwsRegionListIntentResponse
```

List all the AWS regions

List all the AWS regions. No filters to be mentioned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AwsRegionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\AwsRegionListMetadata(); // \OpenAPI\Client\Model\AwsRegionListMetadata

try {
    $result = $apiInstance->awsRegionsListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AwsRegionsApi->awsRegionsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\AwsRegionListMetadata**](../Model/AwsRegionListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AwsRegionListIntentResponse**](../Model/AwsRegionListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
