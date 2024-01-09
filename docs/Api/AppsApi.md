# OpenAPI\Client\AppsApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**appsListPost()**](AppsApi.md#appsListPost) | **POST** /apps/list | List the Application |
| [**appsPost()**](AppsApi.md#appsPost) | **POST** /apps | Create Application |
| [**appsUuidActionsActionUuidRunPost()**](AppsApi.md#appsUuidActionsActionUuidRunPost) | **POST** /apps/{uuid}/actions/{action_uuid}/run | The API to run an action of appplication on provided target. |
| [**appsUuidAppRunlogsListPost()**](AppsApi.md#appsUuidAppRunlogsListPost) | **POST** /apps/{uuid}/app_runlogs/list | List the Runlogs |
| [**appsUuidAppRunlogsRunlogUuidAbortPost()**](AppsApi.md#appsUuidAppRunlogsRunlogUuidAbortPost) | **POST** /apps/{uuid}/app_runlogs/{runlog_uuid}/abort | Abort Runlog |
| [**appsUuidAppRunlogsRunlogUuidGet()**](AppsApi.md#appsUuidAppRunlogsRunlogUuidGet) | **GET** /apps/{uuid}/app_runlogs/{runlog_uuid} | Get Runlog |
| [**appsUuidAppRunlogsRunlogUuidOutputDownloadGet()**](AppsApi.md#appsUuidAppRunlogsRunlogUuidOutputDownloadGet) | **GET** /apps/{uuid}/app_runlogs/{runlog_uuid}/output/download | Returns output file for download |
| [**appsUuidAppRunlogsRunlogUuidOutputGet()**](AppsApi.md#appsUuidAppRunlogsRunlogUuidOutputGet) | **GET** /apps/{uuid}/app_runlogs/{runlog_uuid}/output | Returns last 10 lines of output of runlog |
| [**appsUuidDelete()**](AppsApi.md#appsUuidDelete) | **DELETE** /apps/{uuid} | Delete Application |
| [**appsUuidGet()**](AppsApi.md#appsUuidGet) | **GET** /apps/{uuid} | Get Application |
| [**appsUuidPut()**](AppsApi.md#appsUuidPut) | **PUT** /apps/{uuid} | Update Application |
| [**appsUuidSubstratesSubstrateUuidGet()**](AppsApi.md#appsUuidSubstratesSubstrateUuidGet) | **GET** /apps/{uuid}/substrates/{substrate_uuid} | Get Substrate Element |


## `appsListPost()`

```php
appsListPost($get_entities_request): \OpenAPI\Client\Model\AppListIntentResponse
```

List the Application

List the Application with associated metadata

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\AppListMetadata(); // \OpenAPI\Client\Model\AppListMetadata

try {
    $result = $apiInstance->appsListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\AppListMetadata**](../Model/AppListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AppListIntentResponse**](../Model/AppListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appsPost()`

```php
appsPost($body): \OpenAPI\Client\Model\AppIntentResponse
```

Create Application

Given a spec creates a Application with associated metadata

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\AppCustomIntentInput(); // \OpenAPI\Client\Model\AppCustomIntentInput | Request body

try {
    $result = $apiInstance->appsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\AppCustomIntentInput**](../Model/AppCustomIntentInput.md)| Request body | |

### Return type

[**\OpenAPI\Client\Model\AppIntentResponse**](../Model/AppIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appsUuidActionsActionUuidRunPost()`

```php
appsUuidActionsActionUuidRunPost($uuid, $action_uuid, $body): \OpenAPI\Client\Model\AppActionrunResponse
```

The API to run an action of appplication on provided target.

The API to run an action of appplication on provided target.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$action_uuid = 'action_uuid_example'; // string | uuid of Action in Application to execute
$body = new \OpenAPI\Client\Model\AppActionrunInput(); // \OpenAPI\Client\Model\AppActionrunInput

try {
    $result = $apiInstance->appsUuidActionsActionUuidRunPost($uuid, $action_uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsUuidActionsActionUuidRunPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **action_uuid** | **string**| uuid of Action in Application to execute | |
| **body** | [**\OpenAPI\Client\Model\AppActionrunInput**](../Model/AppActionrunInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AppActionrunResponse**](../Model/AppActionrunResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appsUuidAppRunlogsListPost()`

```php
appsUuidAppRunlogsListPost($uuid, $get_entities_request): \OpenAPI\Client\Model\AppRunlogList
```

List the Runlogs

List the runlog with associated metadata

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$get_entities_request = new \OpenAPI\Client\Model\AppRunlogListMetadata(); // \OpenAPI\Client\Model\AppRunlogListMetadata

try {
    $result = $apiInstance->appsUuidAppRunlogsListPost($uuid, $get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsUuidAppRunlogsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **get_entities_request** | [**\OpenAPI\Client\Model\AppRunlogListMetadata**](../Model/AppRunlogListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AppRunlogList**](../Model/AppRunlogList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appsUuidAppRunlogsRunlogUuidAbortPost()`

```php
appsUuidAppRunlogsRunlogUuidAbortPost($uuid, $runlog_uuid): \OpenAPI\Client\Model\AppRunlogResponse
```

Abort Runlog

Abort the given Runlog

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$runlog_uuid = 'runlog_uuid_example'; // string | Uuid of runlog to abort

try {
    $result = $apiInstance->appsUuidAppRunlogsRunlogUuidAbortPost($uuid, $runlog_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsUuidAppRunlogsRunlogUuidAbortPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **runlog_uuid** | **string**| Uuid of runlog to abort | |

### Return type

[**\OpenAPI\Client\Model\AppRunlogResponse**](../Model/AppRunlogResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appsUuidAppRunlogsRunlogUuidGet()`

```php
appsUuidAppRunlogsRunlogUuidGet($uuid, $runlog_uuid): \OpenAPI\Client\Model\AppRunlogResponse
```

Get Runlog

Given a UUID, returns the runlog

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$runlog_uuid = 'runlog_uuid_example'; // string | Uuid of runlog to get

try {
    $result = $apiInstance->appsUuidAppRunlogsRunlogUuidGet($uuid, $runlog_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsUuidAppRunlogsRunlogUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **runlog_uuid** | **string**| Uuid of runlog to get | |

### Return type

[**\OpenAPI\Client\Model\AppRunlogResponse**](../Model/AppRunlogResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appsUuidAppRunlogsRunlogUuidOutputDownloadGet()`

```php
appsUuidAppRunlogsRunlogUuidOutputDownloadGet($uuid, $runlog_uuid): \SplFileObject
```

Returns output file for download

Returns output file for downlaod

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$runlog_uuid = 'runlog_uuid_example'; // string | Uuid of runlog to get

try {
    $result = $apiInstance->appsUuidAppRunlogsRunlogUuidOutputDownloadGet($uuid, $runlog_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsUuidAppRunlogsRunlogUuidOutputDownloadGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **runlog_uuid** | **string**| Uuid of runlog to get | |

### Return type

**\SplFileObject**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appsUuidAppRunlogsRunlogUuidOutputGet()`

```php
appsUuidAppRunlogsRunlogUuidOutputGet($uuid, $runlog_uuid): \OpenAPI\Client\Model\AppRunlogOutputResponse
```

Returns last 10 lines of output of runlog

Returns last ten lines of output

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$runlog_uuid = 'runlog_uuid_example'; // string | Uuid of runlog to get

try {
    $result = $apiInstance->appsUuidAppRunlogsRunlogUuidOutputGet($uuid, $runlog_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsUuidAppRunlogsRunlogUuidOutputGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **runlog_uuid** | **string**| Uuid of runlog to get | |

### Return type

[**\OpenAPI\Client\Model\AppRunlogOutputResponse**](../Model/AppRunlogOutputResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appsUuidDelete()`

```php
appsUuidDelete($uuid)
```

Delete Application

Delete a Application given its UUID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $apiInstance->appsUuidDelete($uuid);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsUuidDelete: ', $e->getMessage(), PHP_EOL;
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

## `appsUuidGet()`

```php
appsUuidGet($uuid): \OpenAPI\Client\Model\AppIntentResponse
```

Get Application

Given a UUID, returns a Application definition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->appsUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\AppIntentResponse**](../Model/AppIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appsUuidPut()`

```php
appsUuidPut($uuid, $body): \OpenAPI\Client\Model\AppIntentResponse
```

Update Application

Given a spec and Application UUID, update Application

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\AppIntentInput(); // \OpenAPI\Client\Model\AppIntentInput

try {
    $result = $apiInstance->appsUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\AppIntentInput**](../Model/AppIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AppIntentResponse**](../Model/AppIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `appsUuidSubstratesSubstrateUuidGet()`

```php
appsUuidSubstratesSubstrateUuidGet($uuid, $substrate_uuid): \OpenAPI\Client\Model\AppSubstrateResponse
```

Get Substrate Element

Given a UUID, returns the substrate element

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$substrate_uuid = 'substrate_uuid_example'; // string | Uuid of substrate element to get

try {
    $result = $apiInstance->appsUuidSubstratesSubstrateUuidGet($uuid, $substrate_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appsUuidSubstratesSubstrateUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **substrate_uuid** | **string**| Uuid of substrate element to get | |

### Return type

[**\OpenAPI\Client\Model\AppSubstrateResponse**](../Model/AppSubstrateResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
