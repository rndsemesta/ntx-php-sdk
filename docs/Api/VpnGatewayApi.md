# OpenAPI\Client\VpnGatewayApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**vpnGatewaysListPost()**](VpnGatewayApi.md#vpnGatewaysListPost) | **POST** /vpn_gateways/list | Get a list of existing vpn_gateways |
| [**vpnGatewaysPost()**](VpnGatewayApi.md#vpnGatewaysPost) | **POST** /vpn_gateways | Create a new vpn_gateway |
| [**vpnGatewaysUuidDelete()**](VpnGatewayApi.md#vpnGatewaysUuidDelete) | **DELETE** /vpn_gateways/{uuid} | Delete a existing vpn_gateway |
| [**vpnGatewaysUuidGet()**](VpnGatewayApi.md#vpnGatewaysUuidGet) | **GET** /vpn_gateways/{uuid} | Get a existing vpn_gateway |
| [**vpnGatewaysUuidPut()**](VpnGatewayApi.md#vpnGatewaysUuidPut) | **PUT** /vpn_gateways/{uuid} | Update a existing vpn_gateway |


## `vpnGatewaysListPost()`

```php
vpnGatewaysListPost($get_entities_request): \OpenAPI\Client\Model\VpnGatewayListIntentResponse
```

Get a list of existing vpn_gateways

This operation gets a list of vpn_gateways, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VpnGatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\VpnGatewayListMetadata(); // \OpenAPI\Client\Model\VpnGatewayListMetadata

try {
    $result = $apiInstance->vpnGatewaysListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VpnGatewayApi->vpnGatewaysListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\VpnGatewayListMetadata**](../Model/VpnGatewayListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VpnGatewayListIntentResponse**](../Model/VpnGatewayListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vpnGatewaysPost()`

```php
vpnGatewaysPost($body): \OpenAPI\Client\Model\VpnGatewayIntentResponse
```

Create a new vpn_gateway

This operation submits a request to create a new vpn_gateway based on the input parameters. A vpn_gateway respresents the virtual               appliance that can peer with a remote gateway instance to               provide VPN functionality.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VpnGatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\VpnGatewayIntentInput(); // \OpenAPI\Client\Model\VpnGatewayIntentInput

try {
    $result = $apiInstance->vpnGatewaysPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VpnGatewayApi->vpnGatewaysPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\VpnGatewayIntentInput**](../Model/VpnGatewayIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VpnGatewayIntentResponse**](../Model/VpnGatewayIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vpnGatewaysUuidDelete()`

```php
vpnGatewaysUuidDelete($uuid): \OpenAPI\Client\Model\VpnGatewayIntentResponse
```

Delete a existing vpn_gateway

This operation submits a request to delete a existing vpn_gateway.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VpnGatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->vpnGatewaysUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VpnGatewayApi->vpnGatewaysUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\VpnGatewayIntentResponse**](../Model/VpnGatewayIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vpnGatewaysUuidGet()`

```php
vpnGatewaysUuidGet($uuid): \OpenAPI\Client\Model\VpnGatewayIntentResponse
```

Get a existing vpn_gateway

This operation gets a existing vpn_gateway.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VpnGatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->vpnGatewaysUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VpnGatewayApi->vpnGatewaysUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\VpnGatewayIntentResponse**](../Model/VpnGatewayIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vpnGatewaysUuidPut()`

```php
vpnGatewaysUuidPut($uuid, $body): \OpenAPI\Client\Model\VpnGatewayIntentResponse
```

Update a existing vpn_gateway

This operation submits a request to update a existing vpn_gateway based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VpnGatewayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\VpnGatewayIntentInput(); // \OpenAPI\Client\Model\VpnGatewayIntentInput

try {
    $result = $apiInstance->vpnGatewaysUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VpnGatewayApi->vpnGatewaysUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\VpnGatewayIntentInput**](../Model/VpnGatewayIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VpnGatewayIntentResponse**](../Model/VpnGatewayIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
