# OpenAPI\Client\BlueprintApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**blueprintsBrownfieldImportVmsListPost()**](BlueprintApi.md#blueprintsBrownfieldImportVmsListPost) | **POST** /blueprints/brownfield_import/vms/list | List the vms available for import |
| [**blueprintsImportFilePost()**](BlueprintApi.md#blueprintsImportFilePost) | **POST** /blueprints/import_file | Create Blueprint from file |
| [**blueprintsImportJsonPost()**](BlueprintApi.md#blueprintsImportJsonPost) | **POST** /blueprints/import_json | Create Blueprint using json |
| [**blueprintsListPost()**](BlueprintApi.md#blueprintsListPost) | **POST** /blueprints/list | List the Blueprint |
| [**blueprintsMarketplaceLaunchPost()**](BlueprintApi.md#blueprintsMarketplaceLaunchPost) | **POST** /blueprints/marketplace_launch | Launch the marketplace item |
| [**blueprintsPendingLaunchesListPost()**](BlueprintApi.md#blueprintsPendingLaunchesListPost) | **POST** /blueprints/pending_launches/list | List the pending Blueprint launches |
| [**blueprintsPost()**](BlueprintApi.md#blueprintsPost) | **POST** /blueprints | Create Blueprint |
| [**blueprintsUuidClonePost()**](BlueprintApi.md#blueprintsUuidClonePost) | **POST** /blueprints/{uuid}/clone | Clone the blueprint |
| [**blueprintsUuidDelete()**](BlueprintApi.md#blueprintsUuidDelete) | **DELETE** /blueprints/{uuid} | Delete Blueprint |
| [**blueprintsUuidExportFileGet()**](BlueprintApi.md#blueprintsUuidExportFileGet) | **GET** /blueprints/{uuid}/export_file | Download blueprint file |
| [**blueprintsUuidExportJsonGet()**](BlueprintApi.md#blueprintsUuidExportJsonGet) | **GET** /blueprints/{uuid}/export_json | Get Blueprint in json format |
| [**blueprintsUuidGet()**](BlueprintApi.md#blueprintsUuidGet) | **GET** /blueprints/{uuid} | Get Blueprint |
| [**blueprintsUuidLaunchPost()**](BlueprintApi.md#blueprintsUuidLaunchPost) | **POST** /blueprints/{uuid}/launch | Launch the blueprint |
| [**blueprintsUuidPendingLaunchesLaunchedUuidGet()**](BlueprintApi.md#blueprintsUuidPendingLaunchesLaunchedUuidGet) | **GET** /blueprints/{uuid}/pending_launches/{launched_uuid} | Get the pending launch details |
| [**blueprintsUuidPut()**](BlueprintApi.md#blueprintsUuidPut) | **PUT** /blueprints/{uuid} | Update Blueprint |


## `blueprintsBrownfieldImportVmsListPost()`

```php
blueprintsBrownfieldImportVmsListPost($body): array<string,mixed>
```

List the vms available for import

List the blueprint launch pending request with the filters - platform_type - account_uuid - platform_filters

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BlueprintApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\BlueprintListMetadata(); // \OpenAPI\Client\Model\BlueprintListMetadata | Request body

try {
    $result = $apiInstance->blueprintsBrownfieldImportVmsListPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlueprintApi->blueprintsBrownfieldImportVmsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\BlueprintListMetadata**](../Model/BlueprintListMetadata.md)| Request body | |

### Return type

**array<string,mixed>**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blueprintsImportFilePost()`

```php
blueprintsImportFilePost($body): \OpenAPI\Client\Model\BlueprintUploadOutput
```

Create Blueprint from file

Creates a blueprint from uploaded file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BlueprintApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array('key' => new \stdClass); // object | blueprint_file

try {
    $result = $apiInstance->blueprintsImportFilePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlueprintApi->blueprintsImportFilePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | **object**| blueprint_file | |

### Return type

[**\OpenAPI\Client\Model\BlueprintUploadOutput**](../Model/BlueprintUploadOutput.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/octet-stream`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blueprintsImportJsonPost()`

```php
blueprintsImportJsonPost($body): \OpenAPI\Client\Model\BlueprintUploadOutput
```

Create Blueprint using json

Given a spec creates a Blueprint with associated metadata

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BlueprintApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\BlueprintUploadCustomIntentInput(); // \OpenAPI\Client\Model\BlueprintUploadCustomIntentInput | Request body

try {
    $result = $apiInstance->blueprintsImportJsonPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlueprintApi->blueprintsImportJsonPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\BlueprintUploadCustomIntentInput**](../Model/BlueprintUploadCustomIntentInput.md)| Request body | |

### Return type

[**\OpenAPI\Client\Model\BlueprintUploadOutput**](../Model/BlueprintUploadOutput.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blueprintsListPost()`

```php
blueprintsListPost($get_entities_request): \OpenAPI\Client\Model\BlueprintListIntentResponse
```

List the Blueprint

List the Blueprint with associated metadata

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BlueprintApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\BlueprintListMetadata(); // \OpenAPI\Client\Model\BlueprintListMetadata

try {
    $result = $apiInstance->blueprintsListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlueprintApi->blueprintsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\BlueprintListMetadata**](../Model/BlueprintListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\BlueprintListIntentResponse**](../Model/BlueprintListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blueprintsMarketplaceLaunchPost()`

```php
blueprintsMarketplaceLaunchPost($body): \OpenAPI\Client\Model\BlueprintMarketplaceLaunchResponse
```

Launch the marketplace item

Launch the given marketplace item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BlueprintApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\BlueprintMarketplaceLaunchInput(); // \OpenAPI\Client\Model\BlueprintMarketplaceLaunchInput

try {
    $result = $apiInstance->blueprintsMarketplaceLaunchPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlueprintApi->blueprintsMarketplaceLaunchPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\BlueprintMarketplaceLaunchInput**](../Model/BlueprintMarketplaceLaunchInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\BlueprintMarketplaceLaunchResponse**](../Model/BlueprintMarketplaceLaunchResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blueprintsPendingLaunchesListPost()`

```php
blueprintsPendingLaunchesListPost($get_entities_request): \OpenAPI\Client\Model\BlueprintPendingLaunchesListResponse
```

List the pending Blueprint launches

List the blueprint launch pending requests

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BlueprintApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\BlueprintListMetadata(); // \OpenAPI\Client\Model\BlueprintListMetadata

try {
    $result = $apiInstance->blueprintsPendingLaunchesListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlueprintApi->blueprintsPendingLaunchesListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\BlueprintListMetadata**](../Model/BlueprintListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\BlueprintPendingLaunchesListResponse**](../Model/BlueprintPendingLaunchesListResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blueprintsPost()`

```php
blueprintsPost($body): \OpenAPI\Client\Model\BlueprintIntentResponse
```

Create Blueprint

Given a spec creates a Blueprint with associated metadata

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BlueprintApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\BlueprintCustomIntentInput(); // \OpenAPI\Client\Model\BlueprintCustomIntentInput | Request body

try {
    $result = $apiInstance->blueprintsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlueprintApi->blueprintsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\BlueprintCustomIntentInput**](../Model/BlueprintCustomIntentInput.md)| Request body | |

### Return type

[**\OpenAPI\Client\Model\BlueprintIntentResponse**](../Model/BlueprintIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blueprintsUuidClonePost()`

```php
blueprintsUuidClonePost($uuid, $body): \OpenAPI\Client\Model\BlueprintCloneResponse
```

Clone the blueprint

Clone the given blueprint

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BlueprintApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | Uuid of blueprint to be cloned
$body = new \OpenAPI\Client\Model\BlueprintCloneInput(); // \OpenAPI\Client\Model\BlueprintCloneInput

try {
    $result = $apiInstance->blueprintsUuidClonePost($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlueprintApi->blueprintsUuidClonePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Uuid of blueprint to be cloned | |
| **body** | [**\OpenAPI\Client\Model\BlueprintCloneInput**](../Model/BlueprintCloneInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\BlueprintCloneResponse**](../Model/BlueprintCloneResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blueprintsUuidDelete()`

```php
blueprintsUuidDelete($uuid): \OpenAPI\Client\Model\BlueprintIntentResponse
```

Delete Blueprint

Delete a Blueprint given its UUID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BlueprintApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | uuid of the blueprint to be deleted

try {
    $result = $apiInstance->blueprintsUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlueprintApi->blueprintsUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| uuid of the blueprint to be deleted | |

### Return type

[**\OpenAPI\Client\Model\BlueprintIntentResponse**](../Model/BlueprintIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blueprintsUuidExportFileGet()`

```php
blueprintsUuidExportFileGet($uuid): object
```

Download blueprint file

Given a UUID, returns a Blueprint file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BlueprintApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | uuid of Blueprint to get

try {
    $result = $apiInstance->blueprintsUuidExportFileGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlueprintApi->blueprintsUuidExportFileGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| uuid of Blueprint to get | |

### Return type

**object**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blueprintsUuidExportJsonGet()`

```php
blueprintsUuidExportJsonGet($uuid): \OpenAPI\Client\Model\BlueprintDownloadIntentResponse
```

Get Blueprint in json format

Given a UUID, returns a Blueprint definition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BlueprintApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | uuid of Blueprint to get

try {
    $result = $apiInstance->blueprintsUuidExportJsonGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlueprintApi->blueprintsUuidExportJsonGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| uuid of Blueprint to get | |

### Return type

[**\OpenAPI\Client\Model\BlueprintDownloadIntentResponse**](../Model/BlueprintDownloadIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blueprintsUuidGet()`

```php
blueprintsUuidGet($uuid): \OpenAPI\Client\Model\BlueprintIntentResponse
```

Get Blueprint

Given a UUID, returns a Blueprint definition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BlueprintApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | uuid of Blueprint to get

try {
    $result = $apiInstance->blueprintsUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlueprintApi->blueprintsUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| uuid of Blueprint to get | |

### Return type

[**\OpenAPI\Client\Model\BlueprintIntentResponse**](../Model/BlueprintIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blueprintsUuidLaunchPost()`

```php
blueprintsUuidLaunchPost($uuid, $body): \OpenAPI\Client\Model\BlueprintLaunchResponse
```

Launch the blueprint

Launch the given blueprint

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BlueprintApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | Uuid of blueprint to be launched
$body = new \OpenAPI\Client\Model\BlueprintLaunchInput(); // \OpenAPI\Client\Model\BlueprintLaunchInput

try {
    $result = $apiInstance->blueprintsUuidLaunchPost($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlueprintApi->blueprintsUuidLaunchPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| Uuid of blueprint to be launched | |
| **body** | [**\OpenAPI\Client\Model\BlueprintLaunchInput**](../Model/BlueprintLaunchInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\BlueprintLaunchResponse**](../Model/BlueprintLaunchResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blueprintsUuidPendingLaunchesLaunchedUuidGet()`

```php
blueprintsUuidPendingLaunchesLaunchedUuidGet($uuid, $launched_uuid): \OpenAPI\Client\Model\BlueprintPendingLaunchesResource
```

Get the pending launch details

Get the details of the pending launch with the given uuid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BlueprintApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | uuid of Blueprint to get
$launched_uuid = 'launched_uuid_example'; // string | Launched uuid of blueprint

try {
    $result = $apiInstance->blueprintsUuidPendingLaunchesLaunchedUuidGet($uuid, $launched_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlueprintApi->blueprintsUuidPendingLaunchesLaunchedUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| uuid of Blueprint to get | |
| **launched_uuid** | **string**| Launched uuid of blueprint | |

### Return type

[**\OpenAPI\Client\Model\BlueprintPendingLaunchesResource**](../Model/BlueprintPendingLaunchesResource.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `blueprintsUuidPut()`

```php
blueprintsUuidPut($uuid, $body): \OpenAPI\Client\Model\BlueprintIntentResponse
```

Update Blueprint

Given a spec and Blueprint UUID, update Blueprint

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BlueprintApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | uuid of blueprint to be updated
$body = new \OpenAPI\Client\Model\BlueprintCustomIntentInput(); // \OpenAPI\Client\Model\BlueprintCustomIntentInput

try {
    $result = $apiInstance->blueprintsUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlueprintApi->blueprintsUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| uuid of blueprint to be updated | |
| **body** | [**\OpenAPI\Client\Model\BlueprintCustomIntentInput**](../Model/BlueprintCustomIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\BlueprintIntentResponse**](../Model/BlueprintIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
