# OpenAPI\Client\AwsVpcsApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**awsVpcsAccountUuidRegionIdGet()**](AwsVpcsApi.md#awsVpcsAccountUuidRegionIdGet) | **GET** /aws/vpcs/{account_uuid}/{region}/{id} | Get an AWS VPC |
| [**awsVpcsListPost()**](AwsVpcsApi.md#awsVpcsListPost) | **POST** /aws/vpcs/list | List all AWS VPCs |


## `awsVpcsAccountUuidRegionIdGet()`

```php
awsVpcsAccountUuidRegionIdGet($account_uuid, $region, $id): \OpenAPI\Client\Model\AwsVpcIntentResource
```

Get an AWS VPC

Get an AWS VPC.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AwsVpcsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$account_uuid = 'account_uuid_example'; // string
$region = 'region_example'; // string
$id = 'id_example'; // string

try {
    $result = $apiInstance->awsVpcsAccountUuidRegionIdGet($account_uuid, $region, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AwsVpcsApi->awsVpcsAccountUuidRegionIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **account_uuid** | **string**|  | |
| **region** | **string**|  | |
| **id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\AwsVpcIntentResource**](../Model/AwsVpcIntentResource.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `awsVpcsListPost()`

```php
awsVpcsListPost($get_entities_request): \OpenAPI\Client\Model\AwsVpcListIntentResponse
```

List all AWS VPCs

List all AWS VPCs. Supported filters are: - account_uuid - region Use account_uuid to list all VPCs on the default region of a particular AWS account. Use account_uuid and region filters together to list the VPCs in a particular region.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AwsVpcsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\AwsVpcListMetadata(); // \OpenAPI\Client\Model\AwsVpcListMetadata

try {
    $result = $apiInstance->awsVpcsListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AwsVpcsApi->awsVpcsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\AwsVpcListMetadata**](../Model/AwsVpcListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AwsVpcListIntentResponse**](../Model/AwsVpcListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
