# OpenAPI\Client\ProjectApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**projectsInternalPost()**](ProjectApi.md#projectsInternalPost) | **POST** /projects_internal | Create a new Project |
| [**projectsInternalUuidGet()**](ProjectApi.md#projectsInternalUuidGet) | **GET** /projects_internal/{uuid} | Get a existing Project |
| [**projectsInternalUuidPut()**](ProjectApi.md#projectsInternalUuidPut) | **PUT** /projects_internal/{uuid} | Update a existing Project |


## `projectsInternalPost()`

```php
projectsInternalPost($body): \OpenAPI\Client\Model\ProjectInternalIntentResponse
```

Create a new Project

This operation submits a request to create a new Project based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProjectInternalIntentInput(); // \OpenAPI\Client\Model\ProjectInternalIntentInput | The entity to create or modify a project.

try {
    $result = $apiInstance->projectsInternalPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectsInternalPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\ProjectInternalIntentInput**](../Model/ProjectInternalIntentInput.md)| The entity to create or modify a project. | |

### Return type

[**\OpenAPI\Client\Model\ProjectInternalIntentResponse**](../Model/ProjectInternalIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsInternalUuidGet()`

```php
projectsInternalUuidGet($uuid): \OpenAPI\Client\Model\ProjectInternalIntentResponse
```

Get a existing Project

This operation gets a existing Project.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->projectsInternalUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectsInternalUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\ProjectInternalIntentResponse**](../Model/ProjectInternalIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsInternalUuidPut()`

```php
projectsInternalUuidPut($uuid, $body): \OpenAPI\Client\Model\ProjectInternalIntentResponse
```

Update a existing Project

This operation submits a request to update a existing Project based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\ProjectInternalIntentInput(); // \OpenAPI\Client\Model\ProjectInternalIntentInput | The entity used to create or modify a project.

try {
    $result = $apiInstance->projectsInternalUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectsInternalUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\ProjectInternalIntentInput**](../Model/ProjectInternalIntentInput.md)| The entity used to create or modify a project. | |

### Return type

[**\OpenAPI\Client\Model\ProjectInternalIntentResponse**](../Model/ProjectInternalIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
