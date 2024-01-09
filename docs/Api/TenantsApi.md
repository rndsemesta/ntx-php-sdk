# OpenAPI\Client\TenantsApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**tenantClustersAccountTerminatePost()**](TenantsApi.md#tenantClustersAccountTerminatePost) | **POST** /tenant_clusters/account/terminate | Terminate a tenant account |
| [**tenantClustersConfigTenantsPost()**](TenantsApi.md#tenantClustersConfigTenantsPost) | **POST** /tenant_clusters/config/tenants | Create a new Tenant |


## `tenantClustersAccountTerminatePost()`

```php
tenantClustersAccountTerminatePost(): \OpenAPI\Client\Model\ProceduralResponse
```

Terminate a tenant account

Terminate a tenant account by stopping the tenant user vms in the cloud and unpairing from the trusted onprem cloud. This request is supported only on XI Prism Central.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->tenantClustersAccountTerminatePost();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->tenantClustersAccountTerminatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ProceduralResponse**](../Model/ProceduralResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tenantClustersConfigTenantsPost()`

```php
tenantClustersConfigTenantsPost($body): \OpenAPI\Client\Model\TenantStatus
```

Create a new Tenant

This operation submits a request to create a new Tenant based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TenantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\Tenant(); // \OpenAPI\Client\Model\Tenant

try {
    $result = $apiInstance->tenantClustersConfigTenantsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TenantsApi->tenantClustersConfigTenantsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\Tenant**](../Model/Tenant.md)|  | |

### Return type

[**\OpenAPI\Client\Model\TenantStatus**](../Model/TenantStatus.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
