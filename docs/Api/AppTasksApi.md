# OpenAPI\Client\AppTasksApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**appTasksListPost()**](AppTasksApi.md#appTasksListPost) | **POST** /app_tasks/list | Get a list of existing app_tasks |
| [**appTasksPost()**](AppTasksApi.md#appTasksPost) | **POST** /app_tasks | Create a new app_task |
| [**appTasksUuidDelete()**](AppTasksApi.md#appTasksUuidDelete) | **DELETE** /app_tasks/{uuid} | Delete a existing app_task |
| [**appTasksUuidGet()**](AppTasksApi.md#appTasksUuidGet) | **GET** /app_tasks/{uuid} | Get a existing app_task |
| [**appTasksUuidPut()**](AppTasksApi.md#appTasksUuidPut) | **PUT** /app_tasks/{uuid} | Update a existing app_task |
| [**appTasksUuidSharePut()**](AppTasksApi.md#appTasksUuidSharePut) | **PUT** /app_tasks/{uuid}/share | Update a existing app_task |


## `appTasksListPost()`

```php
appTasksListPost($get_entities_request): \OpenAPI\Client\Model\AppTaskListIntentResponse
```

Get a list of existing app_tasks

This operation gets a list of app_tasks, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AppTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\AppTaskListMetadata(); // \OpenAPI\Client\Model\AppTaskListMetadata

try {
    $result = $apiInstance->appTasksListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppTasksApi->appTasksListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\AppTaskListMetadata**](../Model/AppTaskListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AppTaskListIntentResponse**](../Model/AppTaskListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appTasksPost()`

```php
appTasksPost($body): \OpenAPI\Client\Model\AppTaskIntentResponse
```

Create a new app_task

This operation submits a request to create a new app_task based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AppTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\AppTaskIntentInput(); // \OpenAPI\Client\Model\AppTaskIntentInput | Request body

try {
    $result = $apiInstance->appTasksPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppTasksApi->appTasksPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\AppTaskIntentInput**](../Model/AppTaskIntentInput.md)| Request body | |

### Return type

[**\OpenAPI\Client\Model\AppTaskIntentResponse**](../Model/AppTaskIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appTasksUuidDelete()`

```php
appTasksUuidDelete($uuid)
```

Delete a existing app_task

This operation submits a request to delete a existing app_task.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AppTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $apiInstance->appTasksUuidDelete($uuid);
} catch (Exception $e) {
    echo 'Exception when calling AppTasksApi->appTasksUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

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

## `appTasksUuidGet()`

```php
appTasksUuidGet($uuid): \OpenAPI\Client\Model\AppTaskIntentResponse
```

Get a existing app_task

This operation gets a existing app_task.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AppTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->appTasksUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppTasksApi->appTasksUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\AppTaskIntentResponse**](../Model/AppTaskIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appTasksUuidPut()`

```php
appTasksUuidPut($uuid, $body): \OpenAPI\Client\Model\AppTaskIntentResponse
```

Update a existing app_task

This operation submits a request to update a existing app_task based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AppTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\AppTaskIntentInput(); // \OpenAPI\Client\Model\AppTaskIntentInput

try {
    $result = $apiInstance->appTasksUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppTasksApi->appTasksUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\AppTaskIntentInput**](../Model/AppTaskIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AppTaskIntentResponse**](../Model/AppTaskIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appTasksUuidSharePut()`

```php
appTasksUuidSharePut($uuid, $body): \OpenAPI\Client\Model\AppTaskIntentResponse
```

Update a existing app_task

Share the library task between projects.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AppTasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\AppTaskShareIntentInput(); // \OpenAPI\Client\Model\AppTaskShareIntentInput

try {
    $result = $apiInstance->appTasksUuidSharePut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppTasksApi->appTasksUuidSharePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\AppTaskShareIntentInput**](../Model/AppTaskShareIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AppTaskIntentResponse**](../Model/AppTaskIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
