# OpenAPI\Client\CloudTenantApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cloudTenantsListPost()**](CloudTenantApi.md#cloudTenantsListPost) | **POST** /cloud_tenants/list | list the cloud_tenants |
| [**cloudTenantsPost()**](CloudTenantApi.md#cloudTenantsPost) | **POST** /cloud_tenants | Register cloud_tenant to PC. |
| [**cloudTenantsUuidDelete()**](CloudTenantApi.md#cloudTenantsUuidDelete) | **DELETE** /cloud_tenants/{uuid} | Delete cloud_tenant |
| [**cloudTenantsUuidGet()**](CloudTenantApi.md#cloudTenantsUuidGet) | **GET** /cloud_tenants/{uuid} | Get cloud_tenant details |
| [**cloudTenantsUuidPut()**](CloudTenantApi.md#cloudTenantsUuidPut) | **PUT** /cloud_tenants/{uuid} | Update cloud_tenant details |


## `cloudTenantsListPost()`

```php
cloudTenantsListPost($get_entities_request): \OpenAPI\Client\Model\CloudTenantListIntentResponse
```

list the cloud_tenants

List all cloud_tenants from PC.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CloudTenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\CloudTenantListMetadata(); // \OpenAPI\Client\Model\CloudTenantListMetadata

try {
    $result = $apiInstance->cloudTenantsListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudTenantApi->cloudTenantsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\CloudTenantListMetadata**](../Model/CloudTenantListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CloudTenantListIntentResponse**](../Model/CloudTenantListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudTenantsPost()`

```php
cloudTenantsPost($body): \OpenAPI\Client\Model\CloudTenantIntentResponse
```

Register cloud_tenant to PC.

On-boarding script uses this API to register new cloud_tenant in PC. It creates xi_cloud_tenant entity in IDF with cloud_tenant ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CloudTenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\CloudTenantIntentInput(); // \OpenAPI\Client\Model\CloudTenantIntentInput

try {
    $result = $apiInstance->cloudTenantsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudTenantApi->cloudTenantsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\CloudTenantIntentInput**](../Model/CloudTenantIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CloudTenantIntentResponse**](../Model/CloudTenantIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudTenantsUuidDelete()`

```php
cloudTenantsUuidDelete($uuid): \OpenAPI\Client\Model\CloudTenantIntentResponse
```

Delete cloud_tenant

Deletes the cloud_tenant specific entities from PC eg; vms, categories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CloudTenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->cloudTenantsUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudTenantApi->cloudTenantsUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\CloudTenantIntentResponse**](../Model/CloudTenantIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudTenantsUuidGet()`

```php
cloudTenantsUuidGet($uuid): \OpenAPI\Client\Model\CloudTenantIntentResponse
```

Get cloud_tenant details

Returns details about specific cloud_tenant.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CloudTenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->cloudTenantsUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudTenantApi->cloudTenantsUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\CloudTenantIntentResponse**](../Model/CloudTenantIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudTenantsUuidPut()`

```php
cloudTenantsUuidPut($uuid, $body): \OpenAPI\Client\Model\CloudTenantIntentResponse
```

Update cloud_tenant details

Update cloud_tenant details, eg :for Suspending cloud_tenant, cloud_tenant status can be updated to \"SUSPENDED\"

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CloudTenantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\CloudTenantIntentInput(); // \OpenAPI\Client\Model\CloudTenantIntentInput

try {
    $result = $apiInstance->cloudTenantsUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudTenantApi->cloudTenantsUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\CloudTenantIntentInput**](../Model/CloudTenantIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CloudTenantIntentResponse**](../Model/CloudTenantIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
