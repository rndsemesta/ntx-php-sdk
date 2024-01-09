# OpenAPI\Client\AwsRolesApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**awsRolesListPost()**](AwsRolesApi.md#awsRolesListPost) | **POST** /aws/roles/list | List all the AWS roles |


## `awsRolesListPost()`

```php
awsRolesListPost($get_entities_request): \OpenAPI\Client\Model\AwsRoleListIntentResponse
```

List all the AWS roles

List all the AWS roles. Supported filters are: - account_uuid - region Use account_uuid filter to list all the roles on the default region of a particular AWS account. Use account_uuid and region filter together to list all the roles on a particular region of an aws_account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AwsRolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\AwsRoleListMetadata(); // \OpenAPI\Client\Model\AwsRoleListMetadata

try {
    $result = $apiInstance->awsRolesListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AwsRolesApi->awsRolesListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\AwsRoleListMetadata**](../Model/AwsRoleListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AwsRoleListIntentResponse**](../Model/AwsRoleListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
