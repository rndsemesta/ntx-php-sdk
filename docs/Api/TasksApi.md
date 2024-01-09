# OpenAPI\Client\TasksApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**tasksListPost()**](TasksApi.md#tasksListPost) | **POST** /tasks/list | Get a list of existing Tasks |
| [**tasksPollPost()**](TasksApi.md#tasksPollPost) | **POST** /tasks/poll | Poll for completion of tasks |
| [**tasksUuidAbortPost()**](TasksApi.md#tasksUuidAbortPost) | **POST** /tasks/{uuid}/abort | Issue abort request on the task |
| [**tasksUuidGet()**](TasksApi.md#tasksUuidGet) | **GET** /tasks/{uuid} | Get a existing Task |


## `tasksListPost()`

```php
tasksListPost($get_entities_request): \OpenAPI\Client\Model\TaskListIntentResponse
```

Get a list of existing Tasks

This operation gets a list of Tasks, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\TaskListMetadata(); // \OpenAPI\Client\Model\TaskListMetadata

try {
    $result = $apiInstance->tasksListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\TaskListMetadata**](../Model/TaskListMetadata.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\TaskListIntentResponse**](../Model/TaskListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tasksPollPost()`

```php
tasksPollPost($body): \OpenAPI\Client\Model\TaskPollResponse
```

Poll for completion of tasks

Poll for completion of tasks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\TaskPollInput(); // \OpenAPI\Client\Model\TaskPollInput

try {
    $result = $apiInstance->tasksPollPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksPollPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\TaskPollInput**](../Model/TaskPollInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\TaskPollResponse**](../Model/TaskPollResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `tasksUuidAbortPost()`

```php
tasksUuidAbortPost($uuid)
```

Issue abort request on the task

Issue abort request on the task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $apiInstance->tasksUuidAbortPost($uuid);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksUuidAbortPost: ', $e->getMessage(), PHP_EOL;
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

## `tasksUuidGet()`

```php
tasksUuidGet($uuid): \OpenAPI\Client\Model\Task
```

Get a existing Task

This operation gets a existing Task.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\TasksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->tasksUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TasksApi->tasksUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\Task**](../Model/Task.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
