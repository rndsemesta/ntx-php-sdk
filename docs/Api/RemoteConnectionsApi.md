# OpenAPI\Client\RemoteConnectionsApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**azProxyPost()**](RemoteConnectionsApi.md#azProxyPost) | **POST** /az_proxy | Proxies request to remote AZ |
| [**fanoutProxyPost()**](RemoteConnectionsApi.md#fanoutProxyPost) | **POST** /fanout_proxy | Proxies request to remote cluster |
| [**remoteConnectionsListPost()**](RemoteConnectionsApi.md#remoteConnectionsListPost) | **POST** /remote_connections/list | Get list of remote connections |
| [**remoteConnectionsPost()**](RemoteConnectionsApi.md#remoteConnectionsPost) | **POST** /remote_connections | Creates a remote connection |
| [**remoteConnectionsUuidDelete()**](RemoteConnectionsApi.md#remoteConnectionsUuidDelete) | **DELETE** /remote_connections/{uuid} | Delete an existing remote connection |
| [**remoteConnectionsUuidGet()**](RemoteConnectionsApi.md#remoteConnectionsUuidGet) | **GET** /remote_connections/{uuid} | Used to fetch remote connection details |
| [**remoteConnectionsUuidPut()**](RemoteConnectionsApi.md#remoteConnectionsUuidPut) | **PUT** /remote_connections/{uuid} | Used to update remote connection details |
| [**remoteRpcRequestPost()**](RemoteConnectionsApi.md#remoteRpcRequestPost) | **POST** /remote_rpc_request | Execute Remote RPC |


## `azProxyPost()`

```php
azProxyPost($method, $url_path, $az_name, $content_type, $az_proxy_body)
```

Proxies request to remote AZ

Proxies request to remote cluster, uses remote connection to call endpoint on remote cluster

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RemoteConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$method = 'method_example'; // string | HTTP method to call
$url_path = 'url_path_example'; // string | URL path to call on remote cluster
$az_name = 'az_name_example'; // string | Availability Zone Name
$content_type = 'content_type_example'; // string | content type for the call
$az_proxy_body = NULL; // array<string,mixed>

try {
    $apiInstance->azProxyPost($method, $url_path, $az_name, $content_type, $az_proxy_body);
} catch (Exception $e) {
    echo 'Exception when calling RemoteConnectionsApi->azProxyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **method** | **string**| HTTP method to call | |
| **url_path** | **string**| URL path to call on remote cluster | |
| **az_name** | **string**| Availability Zone Name | [optional] |
| **content_type** | **string**| content type for the call | [optional] |
| **az_proxy_body** | [**array<string,mixed>**](../Model/mixed.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fanoutProxyPost()`

```php
fanoutProxyPost($method, $url_path, $az_name, $az_physical_uuid, $remote_cluster_uuid, $content_type, $kind, $entity_uuid, $tenant_uuid, $timeout_ms, $fanout_proxy_body)
```

Proxies request to remote cluster

Proxies request to remote cluster, uses remote connection to call endpoint on remote cluster.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RemoteConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$method = 'method_example'; // string | HTTP method to call
$url_path = 'url_path_example'; // string | URL path to call on remote cluster
$az_name = 'az_name_example'; // string | One of the availability zones name of Xi portal.
$az_physical_uuid = 'az_physical_uuid_example'; // string | One of the availability zones uuid of Xi portal.
$remote_cluster_uuid = 'remote_cluster_uuid_example'; // string | Cluster uuid of remote PC or PE cluster.
$content_type = 'content_type_example'; // string | content type for the call
$kind = 'kind_example'; // string | entity kind e.g. vm, network
$entity_uuid = 'entity_uuid_example'; // string | The UUID of the entity.
$tenant_uuid = 'tenant_uuid_example'; // string | The UUID of the tenant.
$timeout_ms = 56; // int | Additional timeout in milliseconds for fanout calls.
$fanout_proxy_body = NULL; // array<string,mixed>

try {
    $apiInstance->fanoutProxyPost($method, $url_path, $az_name, $az_physical_uuid, $remote_cluster_uuid, $content_type, $kind, $entity_uuid, $tenant_uuid, $timeout_ms, $fanout_proxy_body);
} catch (Exception $e) {
    echo 'Exception when calling RemoteConnectionsApi->fanoutProxyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **method** | **string**| HTTP method to call | |
| **url_path** | **string**| URL path to call on remote cluster | |
| **az_name** | **string**| One of the availability zones name of Xi portal. | [optional] |
| **az_physical_uuid** | **string**| One of the availability zones uuid of Xi portal. | [optional] |
| **remote_cluster_uuid** | **string**| Cluster uuid of remote PC or PE cluster. | [optional] |
| **content_type** | **string**| content type for the call | [optional] |
| **kind** | **string**| entity kind e.g. vm, network | [optional] |
| **entity_uuid** | **string**| The UUID of the entity. | [optional] |
| **tenant_uuid** | **string**| The UUID of the tenant. | [optional] |
| **timeout_ms** | **int**| Additional timeout in milliseconds for fanout calls. | [optional] |
| **fanout_proxy_body** | [**array<string,mixed>**](../Model/mixed.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `remoteConnectionsListPost()`

```php
remoteConnectionsListPost($get_entities_request): \OpenAPI\Client\Model\RemoteConnectionListIntentResponse
```

Get list of remote connections

Retrieve list of remote connections

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RemoteConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\RemoteConnectionListMetadata(); // \OpenAPI\Client\Model\RemoteConnectionListMetadata | A remote connection object

try {
    $result = $apiInstance->remoteConnectionsListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemoteConnectionsApi->remoteConnectionsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\RemoteConnectionListMetadata**](../Model/RemoteConnectionListMetadata.md)| A remote connection object | [optional] |

### Return type

[**\OpenAPI\Client\Model\RemoteConnectionListIntentResponse**](../Model/RemoteConnectionListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `remoteConnectionsPost()`

```php
remoteConnectionsPost($body): \OpenAPI\Client\Model\RemoteConnectionIntentResponse
```

Creates a remote connection

Creates a remote connection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RemoteConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\RemoteConnectionIntentInput(); // \OpenAPI\Client\Model\RemoteConnectionIntentInput | Remote connection details

try {
    $result = $apiInstance->remoteConnectionsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemoteConnectionsApi->remoteConnectionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\RemoteConnectionIntentInput**](../Model/RemoteConnectionIntentInput.md)| Remote connection details | |

### Return type

[**\OpenAPI\Client\Model\RemoteConnectionIntentResponse**](../Model/RemoteConnectionIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `remoteConnectionsUuidDelete()`

```php
remoteConnectionsUuidDelete($uuid): \OpenAPI\Client\Model\RemoteConnectionIntentResponse
```

Delete an existing remote connection

Delete existing remote connection and its information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RemoteConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->remoteConnectionsUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemoteConnectionsApi->remoteConnectionsUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\RemoteConnectionIntentResponse**](../Model/RemoteConnectionIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `remoteConnectionsUuidGet()`

```php
remoteConnectionsUuidGet($uuid): \OpenAPI\Client\Model\RemoteConnectionIntentResponse
```

Used to fetch remote connection details

Get remote connection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RemoteConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->remoteConnectionsUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemoteConnectionsApi->remoteConnectionsUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\RemoteConnectionIntentResponse**](../Model/RemoteConnectionIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `remoteConnectionsUuidPut()`

```php
remoteConnectionsUuidPut($uuid, $body): \OpenAPI\Client\Model\RemoteConnectionIntentResponse
```

Used to update remote connection details

Update remote connection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RemoteConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\RemoteConnectionIntentInput(); // \OpenAPI\Client\Model\RemoteConnectionIntentInput | Remote connection details

try {
    $result = $apiInstance->remoteConnectionsUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemoteConnectionsApi->remoteConnectionsUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\RemoteConnectionIntentInput**](../Model/RemoteConnectionIntentInput.md)| Remote connection details | [optional] |

### Return type

[**\OpenAPI\Client\Model\RemoteConnectionIntentResponse**](../Model/RemoteConnectionIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `remoteRpcRequestPost()`

```php
remoteRpcRequestPost($service_name, $port, $payload, $timeout_ms, $base_url)
```

Execute Remote RPC

Execute Remote RPC

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RemoteConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_name = 'service_name_example'; // string | Name of the service whose RPC needs to be invoked.
$port = 56; // int | Port at which the service is running
$payload = new \OpenAPI\Client\Model\RemoteRpcRequestInput(); // \OpenAPI\Client\Model\RemoteRpcRequestInput | RPC payload.
$timeout_ms = 56; // int | timeout in milliseconds.
$base_url = 'base_url_example'; // string | base url for rpc call.

try {
    $apiInstance->remoteRpcRequestPost($service_name, $port, $payload, $timeout_ms, $base_url);
} catch (Exception $e) {
    echo 'Exception when calling RemoteConnectionsApi->remoteRpcRequestPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_name** | **string**| Name of the service whose RPC needs to be invoked. | |
| **port** | **int**| Port at which the service is running | |
| **payload** | [**\OpenAPI\Client\Model\RemoteRpcRequestInput**](../Model/RemoteRpcRequestInput.md)| RPC payload. | |
| **timeout_ms** | **int**| timeout in milliseconds. | [optional] |
| **base_url** | **string**| base url for rpc call. | [optional] |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/octet-stream`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
