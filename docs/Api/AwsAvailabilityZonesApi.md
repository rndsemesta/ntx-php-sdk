# OpenAPI\Client\AwsAvailabilityZonesApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**awsAvailabilityZonesListPost()**](AwsAvailabilityZonesApi.md#awsAvailabilityZonesListPost) | **POST** /aws/availability_zones/list | List all the AWS availability zones |


## `awsAvailabilityZonesListPost()`

```php
awsAvailabilityZonesListPost($get_entities_request): \OpenAPI\Client\Model\AwsAvailabilityZoneListIntentResponse
```

List all the AWS availability zones

List all the AWS roles. Supported filters are: - account_uuid - region Use account_uuid filter to list all the availability zones on a particular AWS account. Use the account_uuid and region filters together to list all the availability zones on a particular region of an AWS account .

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AwsAvailabilityZonesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\AwsAvailabilityZoneListMetadata(); // \OpenAPI\Client\Model\AwsAvailabilityZoneListMetadata

try {
    $result = $apiInstance->awsAvailabilityZonesListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AwsAvailabilityZonesApi->awsAvailabilityZonesListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\AwsAvailabilityZoneListMetadata**](../Model/AwsAvailabilityZoneListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AwsAvailabilityZoneListIntentResponse**](../Model/AwsAvailabilityZoneListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
