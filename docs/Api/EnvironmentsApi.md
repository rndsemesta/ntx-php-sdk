# OpenAPI\Client\EnvironmentsApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**environmentsListPost()**](EnvironmentsApi.md#environmentsListPost) | **POST** /environments/list | List the Environment |
| [**environmentsPost()**](EnvironmentsApi.md#environmentsPost) | **POST** /environments | Create Environment |
| [**environmentsUuidDelete()**](EnvironmentsApi.md#environmentsUuidDelete) | **DELETE** /environments/{uuid} | Delete Environment |
| [**environmentsUuidGet()**](EnvironmentsApi.md#environmentsUuidGet) | **GET** /environments/{uuid} | Get Environment |
| [**environmentsUuidPut()**](EnvironmentsApi.md#environmentsUuidPut) | **PUT** /environments/{uuid} | Update Environment |


## `environmentsListPost()`

```php
environmentsListPost($get_entities_request): \OpenAPI\Client\Model\EnvironmentListIntentResponse
```

List the Environment

List the Environment with associated metadata

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\EnvironmentListMetadata(); // \OpenAPI\Client\Model\EnvironmentListMetadata

try {
    $result = $apiInstance->environmentsListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->environmentsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\EnvironmentListMetadata**](../Model/EnvironmentListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EnvironmentListIntentResponse**](../Model/EnvironmentListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentsPost()`

```php
environmentsPost($body): \OpenAPI\Client\Model\EnvironmentIntentResponse
```

Create Environment

Given a spec creates a Environment with associated metadata

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\EnvironmentIntentInput(); // \OpenAPI\Client\Model\EnvironmentIntentInput | Request body

try {
    $result = $apiInstance->environmentsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->environmentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\EnvironmentIntentInput**](../Model/EnvironmentIntentInput.md)| Request body | |

### Return type

[**\OpenAPI\Client\Model\EnvironmentIntentResponse**](../Model/EnvironmentIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentsUuidDelete()`

```php
environmentsUuidDelete($uuid): \OpenAPI\Client\Model\EnvironmentIntentResponse
```

Delete Environment

Delete a Environment given its UUID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | uuid of the environment to be deleted

try {
    $result = $apiInstance->environmentsUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->environmentsUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| uuid of the environment to be deleted | |

### Return type

[**\OpenAPI\Client\Model\EnvironmentIntentResponse**](../Model/EnvironmentIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentsUuidGet()`

```php
environmentsUuidGet($uuid): \OpenAPI\Client\Model\EnvironmentIntentResponse
```

Get Environment

Given a UUID, returns a Environment definition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | uuid of Environment to get

try {
    $result = $apiInstance->environmentsUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->environmentsUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| uuid of Environment to get | |

### Return type

[**\OpenAPI\Client\Model\EnvironmentIntentResponse**](../Model/EnvironmentIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `environmentsUuidPut()`

```php
environmentsUuidPut($uuid, $body): \OpenAPI\Client\Model\EnvironmentIntentResponse
```

Update Environment

Given a spec and Environment UUID, update Environment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | uuid of environment to be updated
$body = new \OpenAPI\Client\Model\EnvironmentIntentInput(); // \OpenAPI\Client\Model\EnvironmentIntentInput

try {
    $result = $apiInstance->environmentsUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->environmentsUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| uuid of environment to be updated | |
| **body** | [**\OpenAPI\Client\Model\EnvironmentIntentInput**](../Model/EnvironmentIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EnvironmentIntentResponse**](../Model/EnvironmentIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
