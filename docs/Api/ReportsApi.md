# OpenAPI\Client\ReportsApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**commonReportConfigsListPost()**](ReportsApi.md#commonReportConfigsListPost) | **POST** /common_report_configs/list | List the common report configs. |
| [**commonReportConfigsPost()**](ReportsApi.md#commonReportConfigsPost) | **POST** /common_report_configs | Create common report config. |
| [**commonReportConfigsUuidDelete()**](ReportsApi.md#commonReportConfigsUuidDelete) | **DELETE** /common_report_configs/{uuid} | Delete common report config. |
| [**commonReportConfigsUuidGet()**](ReportsApi.md#commonReportConfigsUuidGet) | **GET** /common_report_configs/{uuid} | Get common report config information. |
| [**commonReportConfigsUuidPut()**](ReportsApi.md#commonReportConfigsUuidPut) | **PUT** /common_report_configs/{uuid} | Update common report config. |
| [**reportConfigsListPost()**](ReportsApi.md#reportConfigsListPost) | **POST** /report_configs/list | List the report configs. |
| [**reportConfigsPost()**](ReportsApi.md#reportConfigsPost) | **POST** /report_configs | Create report config. |
| [**reportConfigsUuidDelete()**](ReportsApi.md#reportConfigsUuidDelete) | **DELETE** /report_configs/{uuid} | Delete report config. |
| [**reportConfigsUuidGet()**](ReportsApi.md#reportConfigsUuidGet) | **GET** /report_configs/{uuid} | Get report config information. |
| [**reportConfigsUuidPut()**](ReportsApi.md#reportConfigsUuidPut) | **PUT** /report_configs/{uuid} | Update report config. |
| [**reportInstancesListPost()**](ReportsApi.md#reportInstancesListPost) | **POST** /report_instances/list | Get the list of all the Generated report instances. |
| [**reportInstancesPost()**](ReportsApi.md#reportInstancesPost) | **POST** /report_instances | Create a report instance. |
| [**reportInstancesUuidDelete()**](ReportsApi.md#reportInstancesUuidDelete) | **DELETE** /report_instances/{uuid} | Delete the generated report instance. |
| [**reportInstancesUuidGet()**](ReportsApi.md#reportInstancesUuidGet) | **GET** /report_instances/{uuid} | Get the specified report instance. |
| [**reportsDownloadTypeUuidGet()**](ReportsApi.md#reportsDownloadTypeUuidGet) | **GET** /reports/download/{type}/{uuid} | Download a resource. |
| [**reportsNotifyPost()**](ReportsApi.md#reportsNotifyPost) | **POST** /reports/notify | Email the specified generated reports to specified recipients. |
| [**reportsUploadTypePost()**](ReportsApi.md#reportsUploadTypePost) | **POST** /reports/upload/{type} | Upload a file. |


## `commonReportConfigsListPost()`

```php
commonReportConfigsListPost($get_entities_request): \OpenAPI\Client\Model\CommonReportConfigListIntentResponse
```

List the common report configs.

This operation retrieves a list of all the common report configurations with associated metadata.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\CommonReportConfigListMetadata(); // \OpenAPI\Client\Model\CommonReportConfigListMetadata

try {
    $result = $apiInstance->commonReportConfigsListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->commonReportConfigsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\CommonReportConfigListMetadata**](../Model/CommonReportConfigListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CommonReportConfigListIntentResponse**](../Model/CommonReportConfigListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `commonReportConfigsPost()`

```php
commonReportConfigsPost($body): \OpenAPI\Client\Model\CommonReportConfigIntentResponse
```

Create common report config.

This operation submits a request to create a common report configuration with associated metadata based on the intentful spec.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\CommonReportConfigIntentInput(); // \OpenAPI\Client\Model\CommonReportConfigIntentInput

try {
    $result = $apiInstance->commonReportConfigsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->commonReportConfigsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\CommonReportConfigIntentInput**](../Model/CommonReportConfigIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CommonReportConfigIntentResponse**](../Model/CommonReportConfigIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `commonReportConfigsUuidDelete()`

```php
commonReportConfigsUuidDelete($uuid): \OpenAPI\Client\Model\CommonReportConfigIntentResponse
```

Delete common report config.

This operation submits a request to delete a common report configuration based on the UUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->commonReportConfigsUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->commonReportConfigsUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\CommonReportConfigIntentResponse**](../Model/CommonReportConfigIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `commonReportConfigsUuidGet()`

```php
commonReportConfigsUuidGet($uuid): \OpenAPI\Client\Model\CommonReportConfigIntentResponse
```

Get common report config information.

This operation retrieves a common report configuration based on the UUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->commonReportConfigsUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->commonReportConfigsUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\CommonReportConfigIntentResponse**](../Model/CommonReportConfigIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `commonReportConfigsUuidPut()`

```php
commonReportConfigsUuidPut($uuid, $body): \OpenAPI\Client\Model\CommonReportConfigIntentResponse
```

Update common report config.

This operation updates a common report configuration based on the UUID and intentful spec.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\CommonReportConfigIntentInput(); // \OpenAPI\Client\Model\CommonReportConfigIntentInput

try {
    $result = $apiInstance->commonReportConfigsUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->commonReportConfigsUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\CommonReportConfigIntentInput**](../Model/CommonReportConfigIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CommonReportConfigIntentResponse**](../Model/CommonReportConfigIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportConfigsListPost()`

```php
reportConfigsListPost($get_entities_request): \OpenAPI\Client\Model\ReportConfigListIntentResponse
```

List the report configs.

List the report configs with associated metadata.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\ReportConfigListMetadata(); // \OpenAPI\Client\Model\ReportConfigListMetadata

try {
    $result = $apiInstance->reportConfigsListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportConfigsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\ReportConfigListMetadata**](../Model/ReportConfigListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ReportConfigListIntentResponse**](../Model/ReportConfigListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportConfigsPost()`

```php
reportConfigsPost($body): \OpenAPI\Client\Model\ReportConfigIntentResponse
```

Create report config.

Given an intentful spec, creates a report config with specified attributes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ReportConfigIntentInput(); // \OpenAPI\Client\Model\ReportConfigIntentInput

try {
    $result = $apiInstance->reportConfigsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportConfigsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\ReportConfigIntentInput**](../Model/ReportConfigIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ReportConfigIntentResponse**](../Model/ReportConfigIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportConfigsUuidDelete()`

```php
reportConfigsUuidDelete($uuid): \OpenAPI\Client\Model\ReportConfigIntentResponse
```

Delete report config.

Delete a report config given its uuid.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->reportConfigsUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportConfigsUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\ReportConfigIntentResponse**](../Model/ReportConfigIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportConfigsUuidGet()`

```php
reportConfigsUuidGet($uuid): \OpenAPI\Client\Model\ReportConfigIntentResponse
```

Get report config information.

Given a UUID, returns a report config.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->reportConfigsUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportConfigsUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\ReportConfigIntentResponse**](../Model/ReportConfigIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportConfigsUuidPut()`

```php
reportConfigsUuidPut($uuid, $body): \OpenAPI\Client\Model\ReportConfigIntentResponse
```

Update report config.

Given an intenful spec and report config uuid, update report config.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\ReportConfigIntentInput(); // \OpenAPI\Client\Model\ReportConfigIntentInput

try {
    $result = $apiInstance->reportConfigsUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportConfigsUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\ReportConfigIntentInput**](../Model/ReportConfigIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ReportConfigIntentResponse**](../Model/ReportConfigIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportInstancesListPost()`

```php
reportInstancesListPost($get_entities_request): \OpenAPI\Client\Model\ReportInstanceListIntentResponse
```

Get the list of all the Generated report instances.

Get the list of all the generated report instances.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\ReportInstanceListMetadata(); // \OpenAPI\Client\Model\ReportInstanceListMetadata

try {
    $result = $apiInstance->reportInstancesListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportInstancesListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\ReportInstanceListMetadata**](../Model/ReportInstanceListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ReportInstanceListIntentResponse**](../Model/ReportInstanceListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportInstancesPost()`

```php
reportInstancesPost($input_body): \OpenAPI\Client\Model\ReportInstanceIntentResponse
```

Create a report instance.

This will generate the report for a specified report config uuid.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$input_body = new \OpenAPI\Client\Model\ReportInstanceIntentInput(); // \OpenAPI\Client\Model\ReportInstanceIntentInput

try {
    $result = $apiInstance->reportInstancesPost($input_body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportInstancesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **input_body** | [**\OpenAPI\Client\Model\ReportInstanceIntentInput**](../Model/ReportInstanceIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ReportInstanceIntentResponse**](../Model/ReportInstanceIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportInstancesUuidDelete()`

```php
reportInstancesUuidDelete($uuid): \OpenAPI\Client\Model\ReportInstanceIntentResponse
```

Delete the generated report instance.

Delete the generated report instance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->reportInstancesUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportInstancesUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\ReportInstanceIntentResponse**](../Model/ReportInstanceIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportInstancesUuidGet()`

```php
reportInstancesUuidGet($uuid): \OpenAPI\Client\Model\ReportInstanceIntentResponse
```

Get the specified report instance.

Get the specified report instance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->reportInstancesUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportInstancesUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\ReportInstanceIntentResponse**](../Model/ReportInstanceIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportsDownloadTypeUuidGet()`

```php
reportsDownloadTypeUuidGet($type, $uuid): object
```

Download a resource.

Download a resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | Type of resource to be downloaded. Supported types are.   - report_instance   - report_instance_pdf   - report_instance_csv   - logo
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->reportsDownloadTypeUuidGet($type, $uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsDownloadTypeUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| Type of resource to be downloaded. Supported types are.   - report_instance   - report_instance_pdf   - report_instance_csv   - logo | |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

**object**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/zip`, `image/png`, `image/jpeg`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportsNotifyPost()`

```php
reportsNotifyPost($request_body)
```

Email the specified generated reports to specified recipients.

Email the specified generated reports to specified recipients.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = new \OpenAPI\Client\Model\ReportNotificationSpec(); // \OpenAPI\Client\Model\ReportNotificationSpec

try {
    $apiInstance->reportsNotifyPost($request_body);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsNotifyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_body** | [**\OpenAPI\Client\Model\ReportNotificationSpec**](../Model/ReportNotificationSpec.md)|  | |

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

## `reportsUploadTypePost()`

```php
reportsUploadTypePost($type, $file): \OpenAPI\Client\Model\ResourceUploadResponse
```

Upload a file.

This uploads a file and returns the UUID for the same.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = 'type_example'; // string | Type of the file to be uploaded. Supported types are   - logo
$file = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->reportsUploadTypePost($type, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsUploadTypePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | **string**| Type of the file to be uploaded. Supported types are   - logo | |
| **file** | **object**|  | |

### Return type

[**\OpenAPI\Client\Model\ResourceUploadResponse**](../Model/ResourceUploadResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/pdf`, `image/png`, `image/jpeg`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
