# OpenAPI\Client\VpnConnectionApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**vpnConnectionsListPost()**](VpnConnectionApi.md#vpnConnectionsListPost) | **POST** /vpn_connections/list | Get a list of existing vpn_connections |
| [**vpnConnectionsPost()**](VpnConnectionApi.md#vpnConnectionsPost) | **POST** /vpn_connections | Create a new vpn_connection |
| [**vpnConnectionsUuidDelete()**](VpnConnectionApi.md#vpnConnectionsUuidDelete) | **DELETE** /vpn_connections/{uuid} | Delete a existing vpn_connection |
| [**vpnConnectionsUuidGet()**](VpnConnectionApi.md#vpnConnectionsUuidGet) | **GET** /vpn_connections/{uuid} | Get a existing vpn_connection |
| [**vpnConnectionsUuidPut()**](VpnConnectionApi.md#vpnConnectionsUuidPut) | **PUT** /vpn_connections/{uuid} | Update a existing vpn_connection |
| [**vpnConnectionsUuidVendorConfigGet()**](VpnConnectionApi.md#vpnConnectionsUuidVendorConfigGet) | **GET** /vpn_connections/{uuid}/vendor_config | Vendor devices for which configuration steps can be downloaded. |
| [**vpnConnectionsUuidVendorConfigNameGet()**](VpnConnectionApi.md#vpnConnectionsUuidVendorConfigNameGet) | **GET** /vpn_connections/{uuid}/vendor_config/{name} | Download vendor device configuration steps. |
| [**vpnConnectionsUuidVendorConfigNameVersionGet()**](VpnConnectionApi.md#vpnConnectionsUuidVendorConfigNameVersionGet) | **GET** /vpn_connections/{uuid}/vendor_config/{name}/{version} | Download vendor device configuration steps. |


## `vpnConnectionsListPost()`

```php
vpnConnectionsListPost($get_entities_request): \OpenAPI\Client\Model\VpnConnectionListIntentResponse
```

Get a list of existing vpn_connections

This operation gets a list of vpn_connections, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VpnConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\VpnConnectionListMetadata(); // \OpenAPI\Client\Model\VpnConnectionListMetadata

try {
    $result = $apiInstance->vpnConnectionsListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VpnConnectionApi->vpnConnectionsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\VpnConnectionListMetadata**](../Model/VpnConnectionListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VpnConnectionListIntentResponse**](../Model/VpnConnectionListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vpnConnectionsPost()`

```php
vpnConnectionsPost($body): \OpenAPI\Client\Model\VpnConnectionIntentResponse
```

Create a new vpn_connection

This operation submits a request to create a new vpn_connection based on the input parameters. A vpn_connection respresents the configuration               needed to establish an IPSEC vpn tunnel between the local               and remote vpn gateways. The vpn_gateway objects must be               created first.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VpnConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\VpnConnectionIntentInput(); // \OpenAPI\Client\Model\VpnConnectionIntentInput

try {
    $result = $apiInstance->vpnConnectionsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VpnConnectionApi->vpnConnectionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\VpnConnectionIntentInput**](../Model/VpnConnectionIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VpnConnectionIntentResponse**](../Model/VpnConnectionIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vpnConnectionsUuidDelete()`

```php
vpnConnectionsUuidDelete($uuid): \OpenAPI\Client\Model\VpnConnectionIntentResponse
```

Delete a existing vpn_connection

This operation submits a request to delete a existing vpn_connection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VpnConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->vpnConnectionsUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VpnConnectionApi->vpnConnectionsUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\VpnConnectionIntentResponse**](../Model/VpnConnectionIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vpnConnectionsUuidGet()`

```php
vpnConnectionsUuidGet($uuid): \OpenAPI\Client\Model\VpnConnectionIntentResponse
```

Get a existing vpn_connection

This operation gets a existing vpn_connection.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VpnConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->vpnConnectionsUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VpnConnectionApi->vpnConnectionsUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\VpnConnectionIntentResponse**](../Model/VpnConnectionIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vpnConnectionsUuidPut()`

```php
vpnConnectionsUuidPut($uuid, $body): \OpenAPI\Client\Model\VpnConnectionIntentResponse
```

Update a existing vpn_connection

This operation submits a request to update a existing vpn_connection based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VpnConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\VpnConnectionIntentInput(); // \OpenAPI\Client\Model\VpnConnectionIntentInput

try {
    $result = $apiInstance->vpnConnectionsUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VpnConnectionApi->vpnConnectionsUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\VpnConnectionIntentInput**](../Model/VpnConnectionIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VpnConnectionIntentResponse**](../Model/VpnConnectionIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vpnConnectionsUuidVendorConfigGet()`

```php
vpnConnectionsUuidVendorConfigGet($uuid): \OpenAPI\Client\Model\VendorConfigListResponse
```

Vendor devices for which configuration steps can be downloaded.

Get list of vendor devices for which configuration steps can be downloaded.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VpnConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->vpnConnectionsUuidVendorConfigGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VpnConnectionApi->vpnConnectionsUuidVendorConfigGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\VendorConfigListResponse**](../Model/VendorConfigListResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vpnConnectionsUuidVendorConfigNameGet()`

```php
vpnConnectionsUuidVendorConfigNameGet($uuid, $name)
```

Download vendor device configuration steps.

Download the configuration steps for the given vendor device's latest version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VpnConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$name = 'name_example'; // string | Vendor device name.

try {
    $apiInstance->vpnConnectionsUuidVendorConfigNameGet($uuid, $name);
} catch (Exception $e) {
    echo 'Exception when calling VpnConnectionApi->vpnConnectionsUuidVendorConfigNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **name** | **string**| Vendor device name. | |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vpnConnectionsUuidVendorConfigNameVersionGet()`

```php
vpnConnectionsUuidVendorConfigNameVersionGet($uuid, $name, $version)
```

Download vendor device configuration steps.

Download the configuration steps for the given vendor device and version.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VpnConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$name = 'name_example'; // string | Vendor device name.
$version = 'version_example'; // string | Vendor device version.

try {
    $apiInstance->vpnConnectionsUuidVendorConfigNameVersionGet($uuid, $name, $version);
} catch (Exception $e) {
    echo 'Exception when calling VpnConnectionApi->vpnConnectionsUuidVendorConfigNameVersionGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **name** | **string**| Vendor device name. | |
| **version** | **string**| Vendor device version. | |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
