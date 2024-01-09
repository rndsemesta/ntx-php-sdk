# OpenAPI\Client\RemoteSyslogServersApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**remoteSyslogServersClusterRsyslogServersGet()**](RemoteSyslogServersApi.md#remoteSyslogServersClusterRsyslogServersGet) | **GET** /remote_syslog_servers/cluster_rsyslog_servers | Remote Syslog servers configured on all PEs registered to PC. |
| [**remoteSyslogServersListPost()**](RemoteSyslogServersApi.md#remoteSyslogServersListPost) | **POST** /remote_syslog_servers/list | Get a list of existing Remote Syslog servers |
| [**remoteSyslogServersPost()**](RemoteSyslogServersApi.md#remoteSyslogServersPost) | **POST** /remote_syslog_servers | Create a new Remote Syslog server |
| [**remoteSyslogServersUuidDelete()**](RemoteSyslogServersApi.md#remoteSyslogServersUuidDelete) | **DELETE** /remote_syslog_servers/{uuid} | Delete a existing Remote Syslog server |
| [**remoteSyslogServersUuidGet()**](RemoteSyslogServersApi.md#remoteSyslogServersUuidGet) | **GET** /remote_syslog_servers/{uuid} | Get a existing Remote Syslog server |
| [**remoteSyslogServersUuidPut()**](RemoteSyslogServersApi.md#remoteSyslogServersUuidPut) | **PUT** /remote_syslog_servers/{uuid} | Update a existing Remote Syslog server |


## `remoteSyslogServersClusterRsyslogServersGet()`

```php
remoteSyslogServersClusterRsyslogServersGet(): \OpenAPI\Client\Model\ClusterSyslogServerList
```

Remote Syslog servers configured on all PEs registered to PC.

Remote Syslog servers configured on all PEs registered to PC.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RemoteSyslogServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->remoteSyslogServersClusterRsyslogServersGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemoteSyslogServersApi->remoteSyslogServersClusterRsyslogServersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\ClusterSyslogServerList**](../Model/ClusterSyslogServerList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `remoteSyslogServersListPost()`

```php
remoteSyslogServersListPost($body): \OpenAPI\Client\Model\RemoteSyslogServerListIntentResponse
```

Get a list of existing Remote Syslog servers

This operation gets a list of Remote Syslog servers, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RemoteSyslogServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\RemoteSyslogServerListMetadata(); // \OpenAPI\Client\Model\RemoteSyslogServerListMetadata

try {
    $result = $apiInstance->remoteSyslogServersListPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemoteSyslogServersApi->remoteSyslogServersListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\RemoteSyslogServerListMetadata**](../Model/RemoteSyslogServerListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RemoteSyslogServerListIntentResponse**](../Model/RemoteSyslogServerListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `remoteSyslogServersPost()`

```php
remoteSyslogServersPost($body): \OpenAPI\Client\Model\RemoteSyslogServerIntentResponse
```

Create a new Remote Syslog server

This operation submits a request to create a new Remote Syslog server based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RemoteSyslogServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\RemoteSyslogServerIntentInput(); // \OpenAPI\Client\Model\RemoteSyslogServerIntentInput

try {
    $result = $apiInstance->remoteSyslogServersPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemoteSyslogServersApi->remoteSyslogServersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\RemoteSyslogServerIntentInput**](../Model/RemoteSyslogServerIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RemoteSyslogServerIntentResponse**](../Model/RemoteSyslogServerIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `remoteSyslogServersUuidDelete()`

```php
remoteSyslogServersUuidDelete($uuid): \OpenAPI\Client\Model\RemoteSyslogServerIntentResponse
```

Delete a existing Remote Syslog server

This operation submits a request to delete a existing Remote Syslog server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RemoteSyslogServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->remoteSyslogServersUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemoteSyslogServersApi->remoteSyslogServersUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\RemoteSyslogServerIntentResponse**](../Model/RemoteSyslogServerIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `remoteSyslogServersUuidGet()`

```php
remoteSyslogServersUuidGet($uuid): \OpenAPI\Client\Model\RemoteSyslogServerIntentResponse
```

Get a existing Remote Syslog server

This operation gets a existing Remote Syslog server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RemoteSyslogServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->remoteSyslogServersUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemoteSyslogServersApi->remoteSyslogServersUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\RemoteSyslogServerIntentResponse**](../Model/RemoteSyslogServerIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `remoteSyslogServersUuidPut()`

```php
remoteSyslogServersUuidPut($uuid, $body): \OpenAPI\Client\Model\RemoteSyslogServerIntentResponse
```

Update a existing Remote Syslog server

This operation submits a request to update a existing Remote Syslog server based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RemoteSyslogServersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\RemoteSyslogServerIntentInput(); // \OpenAPI\Client\Model\RemoteSyslogServerIntentInput

try {
    $result = $apiInstance->remoteSyslogServersUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemoteSyslogServersApi->remoteSyslogServersUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\RemoteSyslogServerIntentInput**](../Model/RemoteSyslogServerIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RemoteSyslogServerIntentResponse**](../Model/RemoteSyslogServerIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
