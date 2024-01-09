# OpenAPI\Client\AwsElasticIpsApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**awsElasticIpsListPost()**](AwsElasticIpsApi.md#awsElasticIpsListPost) | **POST** /aws/elastic_ips/list | List AWS elastic IPs. |


## `awsElasticIpsListPost()`

```php
awsElasticIpsListPost($get_entities_request): \OpenAPI\Client\Model\AwsElasticIpListIntentResponse
```

List AWS elastic IPs.

List all AWS elastic IPs. Supported filters are: - account_uuid - region - free_public_ip_address_only - eip_type Use account_uuid filter to list all the elastic IPs on the default region of a particular account. Use account_uuid and region filters together to list the elastic IPs on an AWS account in the particular region. Set the free_public_ip_address_only filter to True to return only free public IPs in the above two cases. Set eip_type filter to either 'standard' or 'vpc' when only_free_public_ips is set to True.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AwsElasticIpsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\AwsElasticIpListMetadata(); // \OpenAPI\Client\Model\AwsElasticIpListMetadata

try {
    $result = $apiInstance->awsElasticIpsListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AwsElasticIpsApi->awsElasticIpsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\AwsElasticIpListMetadata**](../Model/AwsElasticIpListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AwsElasticIpListIntentResponse**](../Model/AwsElasticIpListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
