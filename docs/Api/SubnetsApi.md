# OpenAPI\Client\SubnetsApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**subnetsListPost()**](SubnetsApi.md#subnetsListPost) | **POST** /subnets/list | Get a list of existing subnets |
| [**subnetsPost()**](SubnetsApi.md#subnetsPost) | **POST** /subnets | Create a new subnet |
| [**subnetsUuidDelete()**](SubnetsApi.md#subnetsUuidDelete) | **DELETE** /subnets/{uuid} | Delete a existing subnet |
| [**subnetsUuidGet()**](SubnetsApi.md#subnetsUuidGet) | **GET** /subnets/{uuid} | Get a existing subnet |
| [**subnetsUuidPut()**](SubnetsApi.md#subnetsUuidPut) | **PUT** /subnets/{uuid} | Update a existing subnet |


## `subnetsListPost()`

```php
subnetsListPost($get_entities_request): \OpenAPI\Client\Model\SubnetListIntentResponse
```

Get a list of existing subnets

This operation gets a list of subnets, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SubnetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\SubnetListMetadata(); // \OpenAPI\Client\Model\SubnetListMetadata

try {
    $result = $apiInstance->subnetsListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubnetsApi->subnetsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\SubnetListMetadata**](../Model/SubnetListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SubnetListIntentResponse**](../Model/SubnetListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subnetsPost()`

```php
subnetsPost($body): \OpenAPI\Client\Model\SubnetIntentResponse
```

Create a new subnet

This operation submits a request to create a new subnet based on the input parameters. A subnet is a block of IP addresses.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SubnetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\SubnetIntentInput(); // \OpenAPI\Client\Model\SubnetIntentInput

try {
    $result = $apiInstance->subnetsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubnetsApi->subnetsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\SubnetIntentInput**](../Model/SubnetIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SubnetIntentResponse**](../Model/SubnetIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subnetsUuidDelete()`

```php
subnetsUuidDelete($uuid): \OpenAPI\Client\Model\SubnetIntentResponse
```

Delete a existing subnet

This operation submits a request to delete a existing subnet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SubnetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->subnetsUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubnetsApi->subnetsUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\SubnetIntentResponse**](../Model/SubnetIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subnetsUuidGet()`

```php
subnetsUuidGet($uuid): \OpenAPI\Client\Model\SubnetIntentResponse
```

Get a existing subnet

This operation gets a existing subnet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SubnetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->subnetsUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubnetsApi->subnetsUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\SubnetIntentResponse**](../Model/SubnetIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subnetsUuidPut()`

```php
subnetsUuidPut($uuid, $body): \OpenAPI\Client\Model\SubnetIntentResponse
```

Update a existing subnet

This operation submits a request to update a existing subnet based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SubnetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\SubnetIntentInput(); // \OpenAPI\Client\Model\SubnetIntentInput

try {
    $result = $apiInstance->subnetsUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubnetsApi->subnetsUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\SubnetIntentInput**](../Model/SubnetIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SubnetIntentResponse**](../Model/SubnetIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
