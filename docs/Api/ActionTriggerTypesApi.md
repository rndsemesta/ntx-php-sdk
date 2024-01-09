# OpenAPI\Client\ActionTriggerTypesApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**actionTriggerTypesListPost()**](ActionTriggerTypesApi.md#actionTriggerTypesListPost) | **POST** /action_trigger_types/list | Get a list of existing action_trigger_type |
| [**actionTriggerTypesPost()**](ActionTriggerTypesApi.md#actionTriggerTypesPost) | **POST** /action_trigger_types | Create a new action_trigger_type |
| [**actionTriggerTypesUuidDisplayMetadataGet()**](ActionTriggerTypesApi.md#actionTriggerTypesUuidDisplayMetadataGet) | **GET** /action_trigger_types/{uuid}/display_metadata | Get action trigger type UI display metadata |
| [**actionTriggerTypesUuidGet()**](ActionTriggerTypesApi.md#actionTriggerTypesUuidGet) | **GET** /action_trigger_types/{uuid} | Get a existing action_trigger_type |
| [**actionTriggerTypesUuidPut()**](ActionTriggerTypesApi.md#actionTriggerTypesUuidPut) | **PUT** /action_trigger_types/{uuid} | Update a existing action_trigger_type |


## `actionTriggerTypesListPost()`

```php
actionTriggerTypesListPost($get_entities_request): \OpenAPI\Client\Model\ActionTriggerTypeListIntentResponse
```

Get a list of existing action_trigger_type

This operation gets a list of action_trigger_type, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ActionTriggerTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\ActionTriggerTypeListMetadata(); // \OpenAPI\Client\Model\ActionTriggerTypeListMetadata

try {
    $result = $apiInstance->actionTriggerTypesListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionTriggerTypesApi->actionTriggerTypesListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\ActionTriggerTypeListMetadata**](../Model/ActionTriggerTypeListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ActionTriggerTypeListIntentResponse**](../Model/ActionTriggerTypeListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionTriggerTypesPost()`

```php
actionTriggerTypesPost($body): \OpenAPI\Client\Model\ActionTriggerTypeIntentResponse
```

Create a new action_trigger_type

This operation submits a request to create a new action_trigger_type based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ActionTriggerTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ActionTriggerTypeIntentInput(); // \OpenAPI\Client\Model\ActionTriggerTypeIntentInput

try {
    $result = $apiInstance->actionTriggerTypesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionTriggerTypesApi->actionTriggerTypesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\ActionTriggerTypeIntentInput**](../Model/ActionTriggerTypeIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ActionTriggerTypeIntentResponse**](../Model/ActionTriggerTypeIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionTriggerTypesUuidDisplayMetadataGet()`

```php
actionTriggerTypesUuidDisplayMetadataGet($uuid): \OpenAPI\Client\Model\DisplayMetadata
```

Get action trigger type UI display metadata

This operation gets action trigger type UI display metadata.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ActionTriggerTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->actionTriggerTypesUuidDisplayMetadataGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionTriggerTypesApi->actionTriggerTypesUuidDisplayMetadataGet: ', $e->getMessage(), PHP_EOL;
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

## `actionTriggerTypesUuidGet()`

```php
actionTriggerTypesUuidGet($uuid): \OpenAPI\Client\Model\ActionTriggerTypeIntentResponse
```

Get a existing action_trigger_type

This operation gets a existing action_trigger_type.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ActionTriggerTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->actionTriggerTypesUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionTriggerTypesApi->actionTriggerTypesUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\ActionTriggerTypeIntentResponse**](../Model/ActionTriggerTypeIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionTriggerTypesUuidPut()`

```php
actionTriggerTypesUuidPut($uuid, $body): \OpenAPI\Client\Model\ActionTriggerTypeIntentResponse
```

Update a existing action_trigger_type

This operation submits a request to update a existing action_trigger_type based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ActionTriggerTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\ActionTriggerTypeIntentInput(); // \OpenAPI\Client\Model\ActionTriggerTypeIntentInput

try {
    $result = $apiInstance->actionTriggerTypesUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionTriggerTypesApi->actionTriggerTypesUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\ActionTriggerTypeIntentInput**](../Model/ActionTriggerTypeIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ActionTriggerTypeIntentResponse**](../Model/ActionTriggerTypeIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
