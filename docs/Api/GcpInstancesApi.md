# OpenAPI\Client\GcpInstancesApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**gcpV1AccountsAccountUuidZoneZoneNameInstancesUuidGet()**](GcpInstancesApi.md#gcpV1AccountsAccountUuidZoneZoneNameInstancesUuidGet) | **GET** /gcp/v1/accounts/{account_uuid}/zone/{zone_name}/instances/{uuid} | Get gcp vm |
| [**gcpV1InstancesListPost()**](GcpInstancesApi.md#gcpV1InstancesListPost) | **POST** /gcp/v1/instances/list | Get Google cloud vm instances |


## `gcpV1AccountsAccountUuidZoneZoneNameInstancesUuidGet()`

```php
gcpV1AccountsAccountUuidZoneZoneNameInstancesUuidGet($uuid, $account_uuid, $zone_name): array<string,mixed>
```

Get gcp vm

Given a UUID, returns a gcp vm

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\GcpInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | uuid of gcp instance
$account_uuid = 'account_uuid_example'; // string | uuid of account
$zone_name = 'zone_name_example'; // string | zone name for gcp account

try {
    $result = $apiInstance->gcpV1AccountsAccountUuidZoneZoneNameInstancesUuidGet($uuid, $account_uuid, $zone_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GcpInstancesApi->gcpV1AccountsAccountUuidZoneZoneNameInstancesUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| uuid of gcp instance | |
| **account_uuid** | **string**| uuid of account | |
| **zone_name** | **string**| zone name for gcp account | |

### Return type

**array<string,mixed>**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `gcpV1InstancesListPost()`

```php
gcpV1InstancesListPost($get_entities_request): array<string,mixed>
```

Get Google cloud vm instances

List all VM's present in a zone. Supported filters are: - account_uuid - zone

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\GcpInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\GcpListMetadata(); // \OpenAPI\Client\Model\GcpListMetadata | Request body

try {
    $result = $apiInstance->gcpV1InstancesListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GcpInstancesApi->gcpV1InstancesListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\GcpListMetadata**](../Model/GcpListMetadata.md)| Request body | |

### Return type

**array<string,mixed>**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
