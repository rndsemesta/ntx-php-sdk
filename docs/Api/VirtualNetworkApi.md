# OpenAPI\Client\VirtualNetworkApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**virtualNetworksListPost()**](VirtualNetworkApi.md#virtualNetworksListPost) | **POST** /virtual_networks/list | Get a list of existing virtual networks |
| [**virtualNetworksPost()**](VirtualNetworkApi.md#virtualNetworksPost) | **POST** /virtual_networks | Create a new virtual network |
| [**virtualNetworksUuidDelete()**](VirtualNetworkApi.md#virtualNetworksUuidDelete) | **DELETE** /virtual_networks/{uuid} | Delete a existing virtual network |
| [**virtualNetworksUuidGet()**](VirtualNetworkApi.md#virtualNetworksUuidGet) | **GET** /virtual_networks/{uuid} | Get a existing virtual network |
| [**virtualNetworksUuidPut()**](VirtualNetworkApi.md#virtualNetworksUuidPut) | **PUT** /virtual_networks/{uuid} | Update a existing virtual network |
| [**vpcsListPost()**](VirtualNetworkApi.md#vpcsListPost) | **POST** /vpcs/list | Get a list of existing VPCs |
| [**vpcsPost()**](VirtualNetworkApi.md#vpcsPost) | **POST** /vpcs | Create a new VPC |
| [**vpcsUuidDelete()**](VirtualNetworkApi.md#vpcsUuidDelete) | **DELETE** /vpcs/{uuid} | Delete a existing VPC |
| [**vpcsUuidGet()**](VirtualNetworkApi.md#vpcsUuidGet) | **GET** /vpcs/{uuid} | Get a existing VPC |
| [**vpcsUuidPacketTracePost()**](VirtualNetworkApi.md#vpcsUuidPacketTracePost) | **POST** /vpcs/{uuid}/packet_trace | Logical Packet Trace |
| [**vpcsUuidPut()**](VirtualNetworkApi.md#vpcsUuidPut) | **PUT** /vpcs/{uuid} | Update a existing VPC |


## `virtualNetworksListPost()`

```php
virtualNetworksListPost($get_entities_request): \OpenAPI\Client\Model\VirtualNetworkListIntentResponse
```

Get a list of existing virtual networks

This operation gets a list of virtual networks, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VirtualNetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\VirtualNetworkListMetadata(); // \OpenAPI\Client\Model\VirtualNetworkListMetadata

try {
    $result = $apiInstance->virtualNetworksListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualNetworkApi->virtualNetworksListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\VirtualNetworkListMetadata**](../Model/VirtualNetworkListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VirtualNetworkListIntentResponse**](../Model/VirtualNetworkListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `virtualNetworksPost()`

```php
virtualNetworksPost($body): \OpenAPI\Client\Model\VirtualNetworkIntentResponse
```

Create a new virtual network

This operation submits a request to create a new virtual network based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VirtualNetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\VirtualNetworkIntentInput(); // \OpenAPI\Client\Model\VirtualNetworkIntentInput

try {
    $result = $apiInstance->virtualNetworksPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualNetworkApi->virtualNetworksPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\VirtualNetworkIntentInput**](../Model/VirtualNetworkIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VirtualNetworkIntentResponse**](../Model/VirtualNetworkIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `virtualNetworksUuidDelete()`

```php
virtualNetworksUuidDelete($uuid): \OpenAPI\Client\Model\VirtualNetworkIntentResponse
```

Delete a existing virtual network

This operation submits a request to delete a existing virtual network.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VirtualNetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->virtualNetworksUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualNetworkApi->virtualNetworksUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\VirtualNetworkIntentResponse**](../Model/VirtualNetworkIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `virtualNetworksUuidGet()`

```php
virtualNetworksUuidGet($uuid): \OpenAPI\Client\Model\VirtualNetworkIntentResponse
```

Get a existing virtual network

This operation gets a existing virtual network.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VirtualNetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->virtualNetworksUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualNetworkApi->virtualNetworksUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\VirtualNetworkIntentResponse**](../Model/VirtualNetworkIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `virtualNetworksUuidPut()`

```php
virtualNetworksUuidPut($uuid, $body): \OpenAPI\Client\Model\VirtualNetworkIntentResponse
```

Update a existing virtual network

This operation submits a request to update a existing virtual network based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VirtualNetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\VirtualNetworkIntentInput(); // \OpenAPI\Client\Model\VirtualNetworkIntentInput

try {
    $result = $apiInstance->virtualNetworksUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualNetworkApi->virtualNetworksUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\VirtualNetworkIntentInput**](../Model/VirtualNetworkIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VirtualNetworkIntentResponse**](../Model/VirtualNetworkIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vpcsListPost()`

```php
vpcsListPost($get_entities_request): \OpenAPI\Client\Model\VpcListIntentResponse
```

Get a list of existing VPCs

This operation gets a list of VPCs, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VirtualNetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\VpcListMetadata(); // \OpenAPI\Client\Model\VpcListMetadata

try {
    $result = $apiInstance->vpcsListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualNetworkApi->vpcsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\VpcListMetadata**](../Model/VpcListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VpcListIntentResponse**](../Model/VpcListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vpcsPost()`

```php
vpcsPost($body): \OpenAPI\Client\Model\VpcIntentResponse
```

Create a new VPC

This operation submits a request to create a new VPC based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VirtualNetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\VpcIntentInput(); // \OpenAPI\Client\Model\VpcIntentInput

try {
    $result = $apiInstance->vpcsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualNetworkApi->vpcsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\VpcIntentInput**](../Model/VpcIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VpcIntentResponse**](../Model/VpcIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vpcsUuidDelete()`

```php
vpcsUuidDelete($uuid): \OpenAPI\Client\Model\VpcIntentResponse
```

Delete a existing VPC

This operation submits a request to delete a existing VPC.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VirtualNetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->vpcsUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualNetworkApi->vpcsUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\VpcIntentResponse**](../Model/VpcIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vpcsUuidGet()`

```php
vpcsUuidGet($uuid): \OpenAPI\Client\Model\VpcIntentResponse
```

Get a existing VPC

This operation gets a existing VPC.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VirtualNetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->vpcsUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualNetworkApi->vpcsUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\VpcIntentResponse**](../Model/VpcIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vpcsUuidPacketTracePost()`

```php
vpcsUuidPacketTracePost($uuid, $body): \OpenAPI\Client\Model\PacketTrace
```

Logical Packet Trace

Performs a logical packet trace in the specified virtual network. Returns a list of user-configured flows that the packet matched, and the action at each of these flows - if the packet was dropped, forwarded or rerouted to a service VM.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VirtualNetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\PacketTraceInput(); // \OpenAPI\Client\Model\PacketTraceInput

try {
    $result = $apiInstance->vpcsUuidPacketTracePost($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualNetworkApi->vpcsUuidPacketTracePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\PacketTraceInput**](../Model/PacketTraceInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PacketTrace**](../Model/PacketTrace.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vpcsUuidPut()`

```php
vpcsUuidPut($uuid, $body): \OpenAPI\Client\Model\VpcIntentResponse
```

Update a existing VPC

This operation submits a request to update a existing VPC based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VirtualNetworkApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\VpcIntentInput(); // \OpenAPI\Client\Model\VpcIntentInput

try {
    $result = $apiInstance->vpcsUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VirtualNetworkApi->vpcsUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\VpcIntentInput**](../Model/VpcIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VpcIntentResponse**](../Model/VpcIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
