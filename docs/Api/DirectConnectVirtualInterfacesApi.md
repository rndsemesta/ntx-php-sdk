# OpenAPI\Client\DirectConnectVirtualInterfacesApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**directConnectsVirtualInterfacesListPost()**](DirectConnectVirtualInterfacesApi.md#directConnectsVirtualInterfacesListPost) | **POST** /direct_connects/virtual_interfaces/list | Get a list of existing direct_connect_virtual_interfaces |
| [**directConnectsVirtualInterfacesPost()**](DirectConnectVirtualInterfacesApi.md#directConnectsVirtualInterfacesPost) | **POST** /direct_connects/virtual_interfaces | Create a new direct_connect_virtual_interface |
| [**directConnectsVirtualInterfacesUuidDelete()**](DirectConnectVirtualInterfacesApi.md#directConnectsVirtualInterfacesUuidDelete) | **DELETE** /direct_connects/virtual_interfaces/{uuid} | Delete a existing direct_connect_virtual_interface |
| [**directConnectsVirtualInterfacesUuidGet()**](DirectConnectVirtualInterfacesApi.md#directConnectsVirtualInterfacesUuidGet) | **GET** /direct_connects/virtual_interfaces/{uuid} | Get a existing direct_connect_virtual_interface |
| [**directConnectsVirtualInterfacesUuidPut()**](DirectConnectVirtualInterfacesApi.md#directConnectsVirtualInterfacesUuidPut) | **PUT** /direct_connects/virtual_interfaces/{uuid} | Update a existing direct_connect_virtual_interface |


## `directConnectsVirtualInterfacesListPost()`

```php
directConnectsVirtualInterfacesListPost($get_entities_request): \OpenAPI\Client\Model\DirectConnectVirtualInterfaceListIntentResponse
```

Get a list of existing direct_connect_virtual_interfaces

This operation gets a list of direct_connect_virtual_interfaces, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DirectConnectVirtualInterfacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\DirectConnectVirtualInterfaceListMetadata(); // \OpenAPI\Client\Model\DirectConnectVirtualInterfaceListMetadata

try {
    $result = $apiInstance->directConnectsVirtualInterfacesListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectConnectVirtualInterfacesApi->directConnectsVirtualInterfacesListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\DirectConnectVirtualInterfaceListMetadata**](../Model/DirectConnectVirtualInterfaceListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\DirectConnectVirtualInterfaceListIntentResponse**](../Model/DirectConnectVirtualInterfaceListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `directConnectsVirtualInterfacesPost()`

```php
directConnectsVirtualInterfacesPost($body): \OpenAPI\Client\Model\DirectConnectVirtualInterfaceIntentResponse
```

Create a new direct_connect_virtual_interface

This operation submits a request to create a new direct_connect_virtual_interface based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DirectConnectVirtualInterfacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\DirectConnectVirtualInterfaceIntentInput(); // \OpenAPI\Client\Model\DirectConnectVirtualInterfaceIntentInput

try {
    $result = $apiInstance->directConnectsVirtualInterfacesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectConnectVirtualInterfacesApi->directConnectsVirtualInterfacesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\DirectConnectVirtualInterfaceIntentInput**](../Model/DirectConnectVirtualInterfaceIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\DirectConnectVirtualInterfaceIntentResponse**](../Model/DirectConnectVirtualInterfaceIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `directConnectsVirtualInterfacesUuidDelete()`

```php
directConnectsVirtualInterfacesUuidDelete($uuid): \OpenAPI\Client\Model\DirectConnectVirtualInterfaceIntentResponse
```

Delete a existing direct_connect_virtual_interface

This operation submits a request to delete a existing direct_connect_virtual_interface.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DirectConnectVirtualInterfacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->directConnectsVirtualInterfacesUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectConnectVirtualInterfacesApi->directConnectsVirtualInterfacesUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\DirectConnectVirtualInterfaceIntentResponse**](../Model/DirectConnectVirtualInterfaceIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `directConnectsVirtualInterfacesUuidGet()`

```php
directConnectsVirtualInterfacesUuidGet($uuid): \OpenAPI\Client\Model\DirectConnectVirtualInterfaceIntentResponse
```

Get a existing direct_connect_virtual_interface

This operation gets a existing direct_connect_virtual_interface.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DirectConnectVirtualInterfacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->directConnectsVirtualInterfacesUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectConnectVirtualInterfacesApi->directConnectsVirtualInterfacesUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\DirectConnectVirtualInterfaceIntentResponse**](../Model/DirectConnectVirtualInterfaceIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `directConnectsVirtualInterfacesUuidPut()`

```php
directConnectsVirtualInterfacesUuidPut($uuid, $body): \OpenAPI\Client\Model\DirectConnectVirtualInterfaceIntentResponse
```

Update a existing direct_connect_virtual_interface

This operation submits a request to update a existing direct_connect_virtual_interface based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DirectConnectVirtualInterfacesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\DirectConnectVirtualInterfaceIntentInput(); // \OpenAPI\Client\Model\DirectConnectVirtualInterfaceIntentInput

try {
    $result = $apiInstance->directConnectsVirtualInterfacesUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectConnectVirtualInterfacesApi->directConnectsVirtualInterfacesUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\DirectConnectVirtualInterfaceIntentInput**](../Model/DirectConnectVirtualInterfaceIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\DirectConnectVirtualInterfaceIntentResponse**](../Model/DirectConnectVirtualInterfaceIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
