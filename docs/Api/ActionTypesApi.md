# OpenAPI\Client\ActionTypesApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**actionTypesListPost()**](ActionTypesApi.md#actionTypesListPost) | **POST** /action_types/list | Get a list of existing action_type |
| [**actionTypesPost()**](ActionTypesApi.md#actionTypesPost) | **POST** /action_types | Create a new action_type |
| [**actionTypesUuidDisplayMetadataGet()**](ActionTypesApi.md#actionTypesUuidDisplayMetadataGet) | **GET** /action_types/{uuid}/display_metadata | Get action type UI display metadata |
| [**actionTypesUuidGet()**](ActionTypesApi.md#actionTypesUuidGet) | **GET** /action_types/{uuid} | Get a existing action_type |
| [**actionTypesUuidPut()**](ActionTypesApi.md#actionTypesUuidPut) | **PUT** /action_types/{uuid} | Update a existing action_type |


## `actionTypesListPost()`

```php
actionTypesListPost($get_entities_request): \OpenAPI\Client\Model\ActionTypeListIntentResponse
```

Get a list of existing action_type

This operation gets a list of action_type, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ActionTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\ActionTypeListMetadata(); // \OpenAPI\Client\Model\ActionTypeListMetadata

try {
    $result = $apiInstance->actionTypesListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionTypesApi->actionTypesListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\ActionTypeListMetadata**](../Model/ActionTypeListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ActionTypeListIntentResponse**](../Model/ActionTypeListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionTypesPost()`

```php
actionTypesPost($body): \OpenAPI\Client\Model\ActionTypeIntentResponse
```

Create a new action_type

This operation submits a request to create a new action_type based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ActionTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ActionTypeIntentInput(); // \OpenAPI\Client\Model\ActionTypeIntentInput

try {
    $result = $apiInstance->actionTypesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionTypesApi->actionTypesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\ActionTypeIntentInput**](../Model/ActionTypeIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ActionTypeIntentResponse**](../Model/ActionTypeIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionTypesUuidDisplayMetadataGet()`

```php
actionTypesUuidDisplayMetadataGet($uuid): \OpenAPI\Client\Model\DisplayMetadata
```

Get action type UI display metadata

This operation gets action type UI display metadata.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ActionTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->actionTypesUuidDisplayMetadataGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionTypesApi->actionTypesUuidDisplayMetadataGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\DisplayMetadata**](../Model/DisplayMetadata.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionTypesUuidGet()`

```php
actionTypesUuidGet($uuid): \OpenAPI\Client\Model\ActionTypeIntentResponse
```

Get a existing action_type

This operation gets a existing action_type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ActionTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->actionTypesUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionTypesApi->actionTypesUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\ActionTypeIntentResponse**](../Model/ActionTypeIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionTypesUuidPut()`

```php
actionTypesUuidPut($uuid, $body): \OpenAPI\Client\Model\ActionTypeIntentResponse
```

Update a existing action_type

This operation submits a request to update a existing action_type based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ActionTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\ActionTypeIntentInput(); // \OpenAPI\Client\Model\ActionTypeIntentInput

try {
    $result = $apiInstance->actionTypesUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionTypesApi->actionTypesUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\ActionTypeIntentInput**](../Model/ActionTypeIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ActionTypeIntentResponse**](../Model/ActionTypeIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
