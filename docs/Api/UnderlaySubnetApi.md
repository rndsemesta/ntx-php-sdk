# OpenAPI\Client\UnderlaySubnetApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**underlaySubnetsListPost()**](UnderlaySubnetApi.md#underlaySubnetsListPost) | **POST** /underlay_subnets/list | Retrieves all underlay subnets |
| [**underlaySubnetsPost()**](UnderlaySubnetApi.md#underlaySubnetsPost) | **POST** /underlay_subnets | Create a underlay subnet instance |
| [**underlaySubnetsUuidDelete()**](UnderlaySubnetApi.md#underlaySubnetsUuidDelete) | **DELETE** /underlay_subnets/{uuid} | Delete specified underlay subnet |
| [**underlaySubnetsUuidGet()**](UnderlaySubnetApi.md#underlaySubnetsUuidGet) | **GET** /underlay_subnets/{uuid} | Retrieves specified underlay subnet |
| [**underlaySubnetsUuidPut()**](UnderlaySubnetApi.md#underlaySubnetsUuidPut) | **PUT** /underlay_subnets/{uuid} | Update underlay subnet |


## `underlaySubnetsListPost()`

```php
underlaySubnetsListPost($body): \OpenAPI\Client\Model\UnderlaySubnetListIntentResponse
```

Retrieves all underlay subnets

Retrieves all underlay subnets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UnderlaySubnetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\UnderlaySubnetListMetadata(); // \OpenAPI\Client\Model\UnderlaySubnetListMetadata

try {
    $result = $apiInstance->underlaySubnetsListPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnderlaySubnetApi->underlaySubnetsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\UnderlaySubnetListMetadata**](../Model/UnderlaySubnetListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\UnderlaySubnetListIntentResponse**](../Model/UnderlaySubnetListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `underlaySubnetsPost()`

```php
underlaySubnetsPost($body): \OpenAPI\Client\Model\UnderlaySubnetIntentResponse
```

Create a underlay subnet instance

Create a underlay subnet instance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UnderlaySubnetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\UnderlaySubnetIntentInput(); // \OpenAPI\Client\Model\UnderlaySubnetIntentInput | Create underlay subnet object

try {
    $result = $apiInstance->underlaySubnetsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnderlaySubnetApi->underlaySubnetsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\UnderlaySubnetIntentInput**](../Model/UnderlaySubnetIntentInput.md)| Create underlay subnet object | |

### Return type

[**\OpenAPI\Client\Model\UnderlaySubnetIntentResponse**](../Model/UnderlaySubnetIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `underlaySubnetsUuidDelete()`

```php
underlaySubnetsUuidDelete($uuid): \OpenAPI\Client\Model\UnderlaySubnetIntentResponse
```

Delete specified underlay subnet

Delete specified underlay subnet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UnderlaySubnetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->underlaySubnetsUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnderlaySubnetApi->underlaySubnetsUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\UnderlaySubnetIntentResponse**](../Model/UnderlaySubnetIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `underlaySubnetsUuidGet()`

```php
underlaySubnetsUuidGet($uuid): \OpenAPI\Client\Model\UnderlaySubnetIntentResponse
```

Retrieves specified underlay subnet

Retrieves specified underlay subnet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UnderlaySubnetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->underlaySubnetsUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnderlaySubnetApi->underlaySubnetsUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\UnderlaySubnetIntentResponse**](../Model/UnderlaySubnetIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `underlaySubnetsUuidPut()`

```php
underlaySubnetsUuidPut($uuid, $body): \OpenAPI\Client\Model\UnderlaySubnetIntentResponse
```

Update underlay subnet

Update underlay subnet

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UnderlaySubnetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\UnderlaySubnetIntentInput(); // \OpenAPI\Client\Model\UnderlaySubnetIntentInput | Update underlay subnet

try {
    $result = $apiInstance->underlaySubnetsUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnderlaySubnetApi->underlaySubnetsUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\UnderlaySubnetIntentInput**](../Model/UnderlaySubnetIntentInput.md)| Update underlay subnet | |

### Return type

[**\OpenAPI\Client\Model\UnderlaySubnetIntentResponse**](../Model/UnderlaySubnetIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
