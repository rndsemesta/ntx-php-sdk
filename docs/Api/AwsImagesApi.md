# OpenAPI\Client\AwsImagesApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**awsImagesListPost()**](AwsImagesApi.md#awsImagesListPost) | **POST** /aws/images/list | List all AWS AMIs. |


## `awsImagesListPost()`

```php
awsImagesListPost($get_entities_request): \OpenAPI\Client\Model\AwsImageListIntentResponse
```

List all AWS AMIs.

List AWS AMIs . Supported filters are: - account_uuid - region - executable_only - public_images - image_name Use account_uuid to list images on a particular account. Use account_uuid and region filters together to list images belonging to a particular region. Set executable_only to True in either of the above two cases to list only executable images. Set public_images to True if AWS community AMIs also have to be listed Provide image_name to limit the results to those AMI names containing the provided name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AwsImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\AwsImageListMetadata(); // \OpenAPI\Client\Model\AwsImageListMetadata

try {
    $result = $apiInstance->awsImagesListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AwsImagesApi->awsImagesListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\AwsImageListMetadata**](../Model/AwsImageListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AwsImageListIntentResponse**](../Model/AwsImageListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
