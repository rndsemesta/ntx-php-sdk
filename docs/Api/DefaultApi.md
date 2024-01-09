# OpenAPI\Client\DefaultApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**eventsPost()**](DefaultApi.md#eventsPost) | **POST** /events | Proxies events request to nusights Db API server. |
| [**metricsApiPost()**](DefaultApi.md#metricsApiPost) | **POST** /metrics/{api} | Proxies metrics request to nusights Db API server. |
| [**vmsUuidVmDiskVmDiskUuidDataGet()**](DefaultApi.md#vmsUuidVmDiskVmDiskUuidDataGet) | **GET** /vms/{uuid}/vm_disk/{vm_disk_uuid}/data | Read from a VM disk. |
| [**vmsUuidVmDiskVmDiskUuidDataPut()**](DefaultApi.md#vmsUuidVmDiskVmDiskUuidDataPut) | **PUT** /vms/{uuid}/vm_disk/{vm_disk_uuid}/data | Write to a VM disk. |
| [**xigDnsConfigGet()**](DefaultApi.md#xigDnsConfigGet) | **GET** /xig_dns_config | Get PC&#39;s DNS Config for Xi Intent Gatedway. |


## `eventsPost()`

```php
eventsPost($body): array<string,mixed>
```

Proxies events request to nusights Db API server.

Input data is validated by REST layer in nusights DB server,this is a   passthrough.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = NULL; // array<string,mixed>

try {
    $result = $apiInstance->eventsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->eventsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**array<string,mixed>**](../Model/mixed.md)|  | [optional] |

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

## `metricsApiPost()`

```php
metricsApiPost($api, $body): array<string,mixed>
```

Proxies metrics request to nusights Db API server.

Input data is validated by REST layer in nusights DB server,this is a  passthrough.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$api = 'api_example'; // string | The API type for nusights Db API server
$body = NULL; // array<string,mixed>

try {
    $result = $apiInstance->metricsApiPost($api, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->metricsApiPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **api** | **string**| The API type for nusights Db API server | |
| **body** | [**array<string,mixed>**](../Model/mixed.md)|  | [optional] |

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

## `vmsUuidVmDiskVmDiskUuidDataGet()`

```php
vmsUuidVmDiskVmDiskUuidDataGet($uuid, $vm_disk_uuid, $offset, $length): string
```

Read from a VM disk.

Read from an identity disk attached to a VM from the provided offset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$vm_disk_uuid = 'vm_disk_uuid_example'; // string | VM disk device UUID
$offset = 56; // int | Offset within the disk. Defaults to 0.
$length = 56; // int | Amount to read from disk. By default this will be the max size (16 MB).

try {
    $result = $apiInstance->vmsUuidVmDiskVmDiskUuidDataGet($uuid, $vm_disk_uuid, $offset, $length);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->vmsUuidVmDiskVmDiskUuidDataGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **vm_disk_uuid** | **string**| VM disk device UUID | |
| **offset** | **int**| Offset within the disk. Defaults to 0. | [optional] |
| **length** | **int**| Amount to read from disk. By default this will be the max size (16 MB). | [optional] |

### Return type

**string**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vmsUuidVmDiskVmDiskUuidDataPut()`

```php
vmsUuidVmDiskVmDiskUuidDataPut($uuid, $vm_disk_uuid, $data, $offset): \OpenAPI\Client\Model\VmsUuidVmDiskVmDiskUuidDataPut200Response
```

Write to a VM disk.

Write to an identity disk attached to a VM at the provided offset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$vm_disk_uuid = 'vm_disk_uuid_example'; // string | VM disk device UUID
$data = array('key' => new \stdClass); // object
$offset = 56; // int | Offset within the disk. Defaults to 0.

try {
    $result = $apiInstance->vmsUuidVmDiskVmDiskUuidDataPut($uuid, $vm_disk_uuid, $data, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->vmsUuidVmDiskVmDiskUuidDataPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **vm_disk_uuid** | **string**| VM disk device UUID | |
| **data** | **object**|  | |
| **offset** | **int**| Offset within the disk. Defaults to 0. | [optional] |

### Return type

[**\OpenAPI\Client\Model\VmsUuidVmDiskVmDiskUuidDataPut200Response**](../Model/VmsUuidVmDiskVmDiskUuidDataPut200Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/octet-stream`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `xigDnsConfigGet()`

```php
xigDnsConfigGet(): \OpenAPI\Client\Model\XigDnsConfigResponse
```

Get PC's DNS Config for Xi Intent Gatedway.

PC's DNS configuration for Xi Intent Gateway.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->xigDnsConfigGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->xigDnsConfigGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\XigDnsConfigResponse**](../Model/XigDnsConfigResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
