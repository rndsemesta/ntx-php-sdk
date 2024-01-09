# OpenAPI\Client\RemoteSyslogModulesApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**remoteSyslogModulesListPost()**](RemoteSyslogModulesApi.md#remoteSyslogModulesListPost) | **POST** /remote_syslog_modules/list | Get a list of existing Remote Syslog modules |
| [**remoteSyslogModulesPost()**](RemoteSyslogModulesApi.md#remoteSyslogModulesPost) | **POST** /remote_syslog_modules | Create a new Remote Syslog modules list |
| [**remoteSyslogModulesUuidDelete()**](RemoteSyslogModulesApi.md#remoteSyslogModulesUuidDelete) | **DELETE** /remote_syslog_modules/{uuid} | Delete a existing Remote Syslog modules list |
| [**remoteSyslogModulesUuidGet()**](RemoteSyslogModulesApi.md#remoteSyslogModulesUuidGet) | **GET** /remote_syslog_modules/{uuid} | Get a existing Remote Syslog modules list |
| [**remoteSyslogModulesUuidPut()**](RemoteSyslogModulesApi.md#remoteSyslogModulesUuidPut) | **PUT** /remote_syslog_modules/{uuid} | Update a existing Remote Syslog modules list |


## `remoteSyslogModulesListPost()`

```php
remoteSyslogModulesListPost($body): \OpenAPI\Client\Model\RemoteSyslogModuleListIntentResponse
```

Get a list of existing Remote Syslog modules

This operation gets a list of Remote Syslog modules, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RemoteSyslogModulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\RemoteSyslogModuleListMetadata(); // \OpenAPI\Client\Model\RemoteSyslogModuleListMetadata

try {
    $result = $apiInstance->remoteSyslogModulesListPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemoteSyslogModulesApi->remoteSyslogModulesListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\RemoteSyslogModuleListMetadata**](../Model/RemoteSyslogModuleListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RemoteSyslogModuleListIntentResponse**](../Model/RemoteSyslogModuleListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `remoteSyslogModulesPost()`

```php
remoteSyslogModulesPost($body): \OpenAPI\Client\Model\RemoteSyslogModuleIntentResponse
```

Create a new Remote Syslog modules list

This operation submits a request to create a new Remote Syslog modules list based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RemoteSyslogModulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\RemoteSyslogModuleIntentInput(); // \OpenAPI\Client\Model\RemoteSyslogModuleIntentInput

try {
    $result = $apiInstance->remoteSyslogModulesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemoteSyslogModulesApi->remoteSyslogModulesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\RemoteSyslogModuleIntentInput**](../Model/RemoteSyslogModuleIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RemoteSyslogModuleIntentResponse**](../Model/RemoteSyslogModuleIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `remoteSyslogModulesUuidDelete()`

```php
remoteSyslogModulesUuidDelete($uuid): \OpenAPI\Client\Model\RemoteSyslogModuleIntentResponse
```

Delete a existing Remote Syslog modules list

This operation submits a request to delete a existing Remote Syslog modules list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RemoteSyslogModulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->remoteSyslogModulesUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemoteSyslogModulesApi->remoteSyslogModulesUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\RemoteSyslogModuleIntentResponse**](../Model/RemoteSyslogModuleIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `remoteSyslogModulesUuidGet()`

```php
remoteSyslogModulesUuidGet($uuid): \OpenAPI\Client\Model\RemoteSyslogModuleIntentResponse
```

Get a existing Remote Syslog modules list

This operation gets a existing Remote Syslog modules list.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RemoteSyslogModulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->remoteSyslogModulesUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemoteSyslogModulesApi->remoteSyslogModulesUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\RemoteSyslogModuleIntentResponse**](../Model/RemoteSyslogModuleIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `remoteSyslogModulesUuidPut()`

```php
remoteSyslogModulesUuidPut($uuid, $body): \OpenAPI\Client\Model\RemoteSyslogModuleIntentResponse
```

Update a existing Remote Syslog modules list

This operation submits a request to update a existing Remote Syslog modules list based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RemoteSyslogModulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\RemoteSyslogModuleIntentInput(); // \OpenAPI\Client\Model\RemoteSyslogModuleIntentInput

try {
    $result = $apiInstance->remoteSyslogModulesUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RemoteSyslogModulesApi->remoteSyslogModulesUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\RemoteSyslogModuleIntentInput**](../Model/RemoteSyslogModuleIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RemoteSyslogModuleIntentResponse**](../Model/RemoteSyslogModuleIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
