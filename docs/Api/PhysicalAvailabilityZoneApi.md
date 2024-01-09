# OpenAPI\Client\PhysicalAvailabilityZoneApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**tenantClustersPhysicalAvailabilityZoneGet()**](PhysicalAvailabilityZoneApi.md#tenantClustersPhysicalAvailabilityZoneGet) | **GET** /tenant_clusters/physical_availability_zone | Physical Availability zone configuration. |
| [**tenantClustersPhysicalAvailabilityZoneKeysGet()**](PhysicalAvailabilityZoneApi.md#tenantClustersPhysicalAvailabilityZoneKeysGet) | **GET** /tenant_clusters/physical_availability_zone/keys | Get Physical Availability Zone&#39;s JWKS |
| [**tenantClustersPhysicalAvailabilityZonePost()**](PhysicalAvailabilityZoneApi.md#tenantClustersPhysicalAvailabilityZonePost) | **POST** /tenant_clusters/physical_availability_zone | Configure a Physical Availability zone. |


## `tenantClustersPhysicalAvailabilityZoneGet()`

```php
tenantClustersPhysicalAvailabilityZoneGet(): \OpenAPI\Client\Model\PhysicalAvailabilityZone
```

Physical Availability zone configuration.

Physical Availability zone configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PhysicalAvailabilityZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->tenantClustersPhysicalAvailabilityZoneGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhysicalAvailabilityZoneApi->tenantClustersPhysicalAvailabilityZoneGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\PhysicalAvailabilityZone**](../Model/PhysicalAvailabilityZone.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tenantClustersPhysicalAvailabilityZoneKeysGet()`

```php
tenantClustersPhysicalAvailabilityZoneKeysGet(): \OpenAPI\Client\Model\KeySetResponse
```

Get Physical Availability Zone's JWKS

JSON Web Key Set (JWKS) that contains public keys. The keys can be used to verify the signatures of tokens issued by the PC, My.Nutanix (IDP), IAM and Okta.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PhysicalAvailabilityZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->tenantClustersPhysicalAvailabilityZoneKeysGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhysicalAvailabilityZoneApi->tenantClustersPhysicalAvailabilityZoneKeysGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\KeySetResponse**](../Model/KeySetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tenantClustersPhysicalAvailabilityZonePost()`

```php
tenantClustersPhysicalAvailabilityZonePost($physical_availability_zone): \OpenAPI\Client\Model\PhysicalAvailabilityZoneStatus
```

Configure a Physical Availability zone.

Configure a Physical Availability zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PhysicalAvailabilityZoneApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$physical_availability_zone = new \OpenAPI\Client\Model\PhysicalAvailabilityZone(); // \OpenAPI\Client\Model\PhysicalAvailabilityZone | Physical Availability Zone Configuration details.

try {
    $result = $apiInstance->tenantClustersPhysicalAvailabilityZonePost($physical_availability_zone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PhysicalAvailabilityZoneApi->tenantClustersPhysicalAvailabilityZonePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **physical_availability_zone** | [**\OpenAPI\Client\Model\PhysicalAvailabilityZone**](../Model/PhysicalAvailabilityZone.md)| Physical Availability Zone Configuration details. | |

### Return type

[**\OpenAPI\Client\Model\PhysicalAvailabilityZoneStatus**](../Model/PhysicalAvailabilityZoneStatus.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
