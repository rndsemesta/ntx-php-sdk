# OpenAPI\Client\PortalServicesApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**portalServicesSoftwareSoftwareTypeListPost()**](PortalServicesApi.md#portalServicesSoftwareSoftwareTypeListPost) | **POST** /portal_services/software/{software_type}/list | Get all available software on Nutanix Portal |
| [**portalServicesSoftwareSoftwareTypeVersionGet()**](PortalServicesApi.md#portalServicesSoftwareSoftwareTypeVersionGet) | **GET** /portal_services/software/{software_type}/{version} | Get specified software information |
| [**portalServicesSupportCasesCaseIdGet()**](PortalServicesApi.md#portalServicesSupportCasesCaseIdGet) | **GET** /portal_services/support_cases/{case_id} | Get specified support case. |
| [**portalServicesSupportCasesListPost()**](PortalServicesApi.md#portalServicesSupportCasesListPost) | **POST** /portal_services/support_cases/list | List support cases. |
| [**portalServicesSupportCasesPost()**](PortalServicesApi.md#portalServicesSupportCasesPost) | **POST** /portal_services/support_cases | Create support case. |
| [**portalServicesSupportCasesTemplateTemplateIdGet()**](PortalServicesApi.md#portalServicesSupportCasesTemplateTemplateIdGet) | **GET** /portal_services/support_cases/template/{template_id} | Get screen template from portal. |
| [**portalServicesSupportCasesUploadPost()**](PortalServicesApi.md#portalServicesSupportCasesUploadPost) | **POST** /portal_services/support_cases/upload | Upload attachements for a specific support case. |


## `portalServicesSoftwareSoftwareTypeListPost()`

```php
portalServicesSoftwareSoftwareTypeListPost($software_type, $get_entities_request): \OpenAPI\Client\Model\SoftwareListIntentResponse
```

Get all available software on Nutanix Portal

Get a list of portal software with specified type

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PortalServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$software_type = 'software_type_example'; // string | Software type
$get_entities_request = new \OpenAPI\Client\Model\SoftwareListMetadata(); // \OpenAPI\Client\Model\SoftwareListMetadata

try {
    $result = $apiInstance->portalServicesSoftwareSoftwareTypeListPost($software_type, $get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalServicesApi->portalServicesSoftwareSoftwareTypeListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **software_type** | **string**| Software type | |
| **get_entities_request** | [**\OpenAPI\Client\Model\SoftwareListMetadata**](../Model/SoftwareListMetadata.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SoftwareListIntentResponse**](../Model/SoftwareListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `portalServicesSoftwareSoftwareTypeVersionGet()`

```php
portalServicesSoftwareSoftwareTypeVersionGet($software_type, $version): \OpenAPI\Client\Model\PortalSoftware
```

Get specified software information

Get the software info with specified type and version

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PortalServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$software_type = 'software_type_example'; // string | Software type
$version = 'version_example'; // string | Software version

try {
    $result = $apiInstance->portalServicesSoftwareSoftwareTypeVersionGet($software_type, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalServicesApi->portalServicesSoftwareSoftwareTypeVersionGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **software_type** | **string**| Software type | |
| **version** | **string**| Software version | |

### Return type

[**\OpenAPI\Client\Model\PortalSoftware**](../Model/PortalSoftware.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `portalServicesSupportCasesCaseIdGet()`

```php
portalServicesSupportCasesCaseIdGet($case_id): \OpenAPI\Client\Model\SupportCaseIntentResponse
```

Get specified support case.

Returns the support case details for a given support case ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PortalServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$case_id = 'case_id_example'; // string | ID of the support case.

try {
    $result = $apiInstance->portalServicesSupportCasesCaseIdGet($case_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalServicesApi->portalServicesSupportCasesCaseIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **case_id** | **string**| ID of the support case. | |

### Return type

[**\OpenAPI\Client\Model\SupportCaseIntentResponse**](../Model/SupportCaseIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `portalServicesSupportCasesListPost()`

```php
portalServicesSupportCasesListPost($get_entities_request): \OpenAPI\Client\Model\SupportCaseListIntentResponse
```

List support cases.

List of support cases. Supported filters are - - cluster_reference - serial_number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PortalServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\SupportCaseListMetadata(); // \OpenAPI\Client\Model\SupportCaseListMetadata

try {
    $result = $apiInstance->portalServicesSupportCasesListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalServicesApi->portalServicesSupportCasesListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\SupportCaseListMetadata**](../Model/SupportCaseListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SupportCaseListIntentResponse**](../Model/SupportCaseListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `portalServicesSupportCasesPost()`

```php
portalServicesSupportCasesPost($body): \OpenAPI\Client\Model\SupportCaseIntentResponse
```

Create support case.

Given a spec, creates a support case with associated metadata.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PortalServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\SupportCaseIntentInput(); // \OpenAPI\Client\Model\SupportCaseIntentInput

try {
    $result = $apiInstance->portalServicesSupportCasesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalServicesApi->portalServicesSupportCasesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\SupportCaseIntentInput**](../Model/SupportCaseIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SupportCaseIntentResponse**](../Model/SupportCaseIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `portalServicesSupportCasesTemplateTemplateIdGet()`

```php
portalServicesSupportCasesTemplateTemplateIdGet($template_id): \OpenAPI\Client\Model\SupportCaseTemplateResponse
```

Get screen template from portal.

Given a template ID it fetches that template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PortalServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template_id = 'template_id_example'; // string | ID of the screen for which it needs template.

try {
    $result = $apiInstance->portalServicesSupportCasesTemplateTemplateIdGet($template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalServicesApi->portalServicesSupportCasesTemplateTemplateIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **template_id** | **string**| ID of the screen for which it needs template. | |

### Return type

[**\OpenAPI\Client\Model\SupportCaseTemplateResponse**](../Model/SupportCaseTemplateResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `portalServicesSupportCasesUploadPost()`

```php
portalServicesSupportCasesUploadPost($body): \OpenAPI\Client\Model\SupportCaseUploadIntentResponse
```

Upload attachements for a specific support case.

Given an intentful spec, trigger ncc health check and log uploads for a specified support case.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PortalServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\SupportCaseUploadIntentInput(); // \OpenAPI\Client\Model\SupportCaseUploadIntentInput

try {
    $result = $apiInstance->portalServicesSupportCasesUploadPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PortalServicesApi->portalServicesSupportCasesUploadPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\SupportCaseUploadIntentInput**](../Model/SupportCaseUploadIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SupportCaseUploadIntentResponse**](../Model/SupportCaseUploadIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
