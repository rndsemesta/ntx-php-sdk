# OpenAPI\Client\AwsSubnetsApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**awsSubnetsAccountUuidRegionIdGet()**](AwsSubnetsApi.md#awsSubnetsAccountUuidRegionIdGet) | **GET** /aws/subnets/{account_uuid}/{region}/{id} | Get details for an AWS subnet |
| [**awsSubnetsListPost()**](AwsSubnetsApi.md#awsSubnetsListPost) | **POST** /aws/subnets/list | List all AWS subnets. |


## `awsSubnetsAccountUuidRegionIdGet()`

```php
awsSubnetsAccountUuidRegionIdGet($account_uuid, $region, $id): \OpenAPI\Client\Model\AwsSubnetIntentResource
```

Get details for an AWS subnet

Get details for a subnet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AwsSubnetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = 'account_uuid_example'; // string
$region = 'region_example'; // string
$id = 'id_example'; // string

try {
    $result = $apiInstance->awsSubnetsAccountUuidRegionIdGet($account_uuid, $region, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AwsSubnetsApi->awsSubnetsAccountUuidRegionIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**|  | |
| **region** | **string**|  | |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AwsSubnetIntentResource**](../Model/AwsSubnetIntentResource.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `awsSubnetsListPost()`

```php
awsSubnetsListPost($get_entities_request): \OpenAPI\Client\Model\AwsSubnetListIntentResponse
```

List all AWS subnets.

List all AWS subnets. Supported filters are: - account_uuid - region - vpc_id - availability_zone Use account_uuid filter to list all the subnets on the default region of a particular account. Use account_uuid and region filters together to list the subnets on all VPCs and AZs of a particular region. Use account_uuid, region and vpc_id filter together to list the subnets on a particular VPC. Use account_uuid, region and availability_zone filter together to list the subnets on a particualr AZ.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AwsSubnetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\AwsSubnetListMetadata(); // \OpenAPI\Client\Model\AwsSubnetListMetadata

try {
    $result = $apiInstance->awsSubnetsListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AwsSubnetsApi->awsSubnetsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\AwsSubnetListMetadata**](../Model/AwsSubnetListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AwsSubnetListIntentResponse**](../Model/AwsSubnetListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
