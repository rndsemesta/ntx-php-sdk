# OpenAPI\Client\AwsKeyPairsApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**awsKeyPairsListPost()**](AwsKeyPairsApi.md#awsKeyPairsListPost) | **POST** /aws/key_pairs/list | List all the AWS key pairs |


## `awsKeyPairsListPost()`

```php
awsKeyPairsListPost($get_entities_request): \OpenAPI\Client\Model\AwsKeyPairListIntentResponse
```

List all the AWS key pairs

List all the AWS key pairs. Supported filters are: - account_uuid - region Use account_uuid filter to list all the key pairs on the default region of a particular AWS account. Use account_uuid and region filters together to list the key pairs on a particular region of an AWS account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AwsKeyPairsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\AwsKeyPairListMetadata(); // \OpenAPI\Client\Model\AwsKeyPairListMetadata

try {
    $result = $apiInstance->awsKeyPairsListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AwsKeyPairsApi->awsKeyPairsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\AwsKeyPairListMetadata**](../Model/AwsKeyPairListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AwsKeyPairListIntentResponse**](../Model/AwsKeyPairListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
