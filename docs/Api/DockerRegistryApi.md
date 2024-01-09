# OpenAPI\Client\DockerRegistryApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**dockerRegistriesListPost()**](DockerRegistryApi.md#dockerRegistriesListPost) | **POST** /docker_registries/list | List all docker registries |
| [**dockerRegistriesPost()**](DockerRegistryApi.md#dockerRegistriesPost) | **POST** /docker_registries | Create a docker registry |
| [**dockerRegistriesUuidDelete()**](DockerRegistryApi.md#dockerRegistriesUuidDelete) | **DELETE** /docker_registries/{uuid} | Deletes a Docker registry |
| [**dockerRegistriesUuidGet()**](DockerRegistryApi.md#dockerRegistriesUuidGet) | **GET** /docker_registries/{uuid} | Retrieve a Docker registry |
| [**dockerRegistriesUuidPut()**](DockerRegistryApi.md#dockerRegistriesUuidPut) | **PUT** /docker_registries/{uuid} | Update a docker registry |
| [**dockerRegistriesUuidSearchListPost()**](DockerRegistryApi.md#dockerRegistriesUuidSearchListPost) | **POST** /docker_registries/{uuid}/search/list | Searches docker containers for specified registry |


## `dockerRegistriesListPost()`

```php
dockerRegistriesListPost($get_entities_request): \OpenAPI\Client\Model\DockerRegistryListIntentResponse
```

List all docker registries

List all docker registries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DockerRegistryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\DockerRegistryListMetadata(); // \OpenAPI\Client\Model\DockerRegistryListMetadata

try {
    $result = $apiInstance->dockerRegistriesListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DockerRegistryApi->dockerRegistriesListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\DockerRegistryListMetadata**](../Model/DockerRegistryListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\DockerRegistryListIntentResponse**](../Model/DockerRegistryListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dockerRegistriesPost()`

```php
dockerRegistriesPost($body): \OpenAPI\Client\Model\DockerRegistryIntentResponse
```

Create a docker registry

Create a docker registry

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DockerRegistryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\DockerRegistryIntentInput(); // \OpenAPI\Client\Model\DockerRegistryIntentInput | Docker registry spec

try {
    $result = $apiInstance->dockerRegistriesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DockerRegistryApi->dockerRegistriesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\DockerRegistryIntentInput**](../Model/DockerRegistryIntentInput.md)| Docker registry spec | |

### Return type

[**\OpenAPI\Client\Model\DockerRegistryIntentResponse**](../Model/DockerRegistryIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dockerRegistriesUuidDelete()`

```php
dockerRegistriesUuidDelete($uuid): \OpenAPI\Client\Model\DockerRegistryIntentResponse
```

Deletes a Docker registry

Deletes a Docker registry

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DockerRegistryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->dockerRegistriesUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DockerRegistryApi->dockerRegistriesUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\DockerRegistryIntentResponse**](../Model/DockerRegistryIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dockerRegistriesUuidGet()`

```php
dockerRegistriesUuidGet($uuid): \OpenAPI\Client\Model\DockerRegistryIntentResponse
```

Retrieve a Docker registry

Retrieve a docker registry

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DockerRegistryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->dockerRegistriesUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DockerRegistryApi->dockerRegistriesUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\DockerRegistryIntentResponse**](../Model/DockerRegistryIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dockerRegistriesUuidPut()`

```php
dockerRegistriesUuidPut($uuid, $body): \OpenAPI\Client\Model\DockerRegistryIntentResponse
```

Update a docker registry

Update a docker registry

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DockerRegistryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\DockerRegistryIntentInput(); // \OpenAPI\Client\Model\DockerRegistryIntentInput | Docker registry spec

try {
    $result = $apiInstance->dockerRegistriesUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DockerRegistryApi->dockerRegistriesUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\DockerRegistryIntentInput**](../Model/DockerRegistryIntentInput.md)| Docker registry spec | |

### Return type

[**\OpenAPI\Client\Model\DockerRegistryIntentResponse**](../Model/DockerRegistryIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `dockerRegistriesUuidSearchListPost()`

```php
dockerRegistriesUuidSearchListPost($uuid, $get_entities_request): \OpenAPI\Client\Model\DockerRegistryImageSearchListIntentResponse
```

Searches docker containers for specified registry

Searches docker containers for specified registry

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\DockerRegistryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$get_entities_request = new \OpenAPI\Client\Model\DockerRegistryImageSearchListIntentResponse(); // \OpenAPI\Client\Model\DockerRegistryImageSearchListIntentResponse

try {
    $result = $apiInstance->dockerRegistriesUuidSearchListPost($uuid, $get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DockerRegistryApi->dockerRegistriesUuidSearchListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **get_entities_request** | [**\OpenAPI\Client\Model\DockerRegistryImageSearchListIntentResponse**](../Model/DockerRegistryImageSearchListIntentResponse.md)|  | |

### Return type

[**\OpenAPI\Client\Model\DockerRegistryImageSearchListIntentResponse**](../Model/DockerRegistryImageSearchListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
