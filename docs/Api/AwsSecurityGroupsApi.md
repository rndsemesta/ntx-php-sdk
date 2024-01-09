# OpenAPI\Client\AwsSecurityGroupsApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**awsSecurityGroupsAccountUuidRegionIdGet()**](AwsSecurityGroupsApi.md#awsSecurityGroupsAccountUuidRegionIdGet) | **GET** /aws/security_groups/{account_uuid}/{region}/{id} | Get an AWS security group |
| [**awsSecurityGroupsListPost()**](AwsSecurityGroupsApi.md#awsSecurityGroupsListPost) | **POST** /aws/security_groups/list | List all AWS Security Groups |


## `awsSecurityGroupsAccountUuidRegionIdGet()`

```php
awsSecurityGroupsAccountUuidRegionIdGet($account_uuid, $region, $id): \OpenAPI\Client\Model\AwsSecurityGroupIntentResource
```

Get an AWS security group

Get an AWS security group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AwsSecurityGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = 'account_uuid_example'; // string
$region = 'region_example'; // string
$id = 'id_example'; // string

try {
    $result = $apiInstance->awsSecurityGroupsAccountUuidRegionIdGet($account_uuid, $region, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AwsSecurityGroupsApi->awsSecurityGroupsAccountUuidRegionIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**|  | |
| **region** | **string**|  | |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AwsSecurityGroupIntentResource**](../Model/AwsSecurityGroupIntentResource.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `awsSecurityGroupsListPost()`

```php
awsSecurityGroupsListPost($get_entities_request): \OpenAPI\Client\Model\AwsSecurityGroupListIntentResponse
```

List all AWS Security Groups

List all AWS Security Groups. Supported filters are: - account_uuid - region - vpc_id - include_classic_sg Use account_uuid to list all security groups on the default region of a particular AWS account. Use account_uuid and region filters together to list all security groups in a particular region. Use account_uuid, region and vpc_id filters together to list all security groups in a particular vpc. Set include_classic_sg filter to 'True' to also show EC2 classic security groups in the above three cases.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AwsSecurityGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\AwsSecurityGroupListMetadata(); // \OpenAPI\Client\Model\AwsSecurityGroupListMetadata

try {
    $result = $apiInstance->awsSecurityGroupsListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AwsSecurityGroupsApi->awsSecurityGroupsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\AwsSecurityGroupListMetadata**](../Model/AwsSecurityGroupListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AwsSecurityGroupListIntentResponse**](../Model/AwsSecurityGroupListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
