# OpenAPI\Client\ServicesApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**servicesDisasterRecoveryPost()**](ServicesApi.md#servicesDisasterRecoveryPost) | **POST** /services/disaster_recovery | Manage Disaster Recovery service. |
| [**servicesFilesManagerPost()**](ServicesApi.md#servicesFilesManagerPost) | **POST** /services/files_manager | Manage Files Manager service. |
| [**servicesFlowSecurityPlanningClusterCapabilityGet()**](ServicesApi.md#servicesFlowSecurityPlanningClusterCapabilityGet) | **GET** /services/flow/security_planning/cluster_capability | Cluster feature status. |
| [**servicesFlowSecurityPlanningDataCollectorUpgradeGet()**](ServicesApi.md#servicesFlowSecurityPlanningDataCollectorUpgradeGet) | **GET** /services/flow/security_planning/data_collector/upgrade | Data Collector Upgrade Status. |
| [**servicesFlowSecurityPlanningDataCollectorUpgradePost()**](ServicesApi.md#servicesFlowSecurityPlanningDataCollectorUpgradePost) | **POST** /services/flow/security_planning/data_collector/upgrade | Security Planning Data Collector Upgrade. |
| [**servicesFlowSecurityPlanningPost()**](ServicesApi.md#servicesFlowSecurityPlanningPost) | **POST** /services/flow/security_planning | Security Planning Configuration. |
| [**servicesFlowSecurityPlanningStatusGet()**](ServicesApi.md#servicesFlowSecurityPlanningStatusGet) | **GET** /services/flow/security_planning/status | Service status. |
| [**servicesMicrosegPost()**](ServicesApi.md#servicesMicrosegPost) | **POST** /services/microseg | Manage Microsegmentation. |
| [**servicesNucalmPost()**](ServicesApi.md#servicesNucalmPost) | **POST** /services/nucalm | Manage NuCalm service. |
| [**servicesOssPost()**](ServicesApi.md#servicesOssPost) | **POST** /services/oss | Manage Bucket Service Manager service. |
| [**servicesServiceNameClusterCapabilityGet()**](ServicesApi.md#servicesServiceNameClusterCapabilityGet) | **GET** /services/{service_name}/cluster_capability | Cluster feature status. |
| [**servicesServiceNameStatusGet()**](ServicesApi.md#servicesServiceNameStatusGet) | **GET** /services/{service_name}/status | Service status. |
| [**servicesXfitPost()**](ServicesApi.md#servicesXfitPost) | **POST** /services/xfit | Manage xfit service. |


## `servicesDisasterRecoveryPost()`

```php
servicesDisasterRecoveryPost($body): \OpenAPI\Client\Model\ServiceResponse
```

Manage Disaster Recovery service.

Manage Disaster Recovery service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\DisasterRecoveryServiceConfigInput(); // \OpenAPI\Client\Model\DisasterRecoveryServiceConfigInput

try {
    $result = $apiInstance->servicesDisasterRecoveryPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->servicesDisasterRecoveryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\DisasterRecoveryServiceConfigInput**](../Model/DisasterRecoveryServiceConfigInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ServiceResponse**](../Model/ServiceResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `servicesFilesManagerPost()`

```php
servicesFilesManagerPost($body): \OpenAPI\Client\Model\ServiceResponse
```

Manage Files Manager service.

Manage Files Manager service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\FilesManagerServiceConfigInput(); // \OpenAPI\Client\Model\FilesManagerServiceConfigInput

try {
    $result = $apiInstance->servicesFilesManagerPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->servicesFilesManagerPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\FilesManagerServiceConfigInput**](../Model/FilesManagerServiceConfigInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ServiceResponse**](../Model/ServiceResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `servicesFlowSecurityPlanningClusterCapabilityGet()`

```php
servicesFlowSecurityPlanningClusterCapabilityGet(): \OpenAPI\Client\Model\SecurityPlanningClusterCapabilityStatus
```

Cluster feature status.

Cluster feature capability status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->servicesFlowSecurityPlanningClusterCapabilityGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->servicesFlowSecurityPlanningClusterCapabilityGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\SecurityPlanningClusterCapabilityStatus**](../Model/SecurityPlanningClusterCapabilityStatus.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `servicesFlowSecurityPlanningDataCollectorUpgradeGet()`

```php
servicesFlowSecurityPlanningDataCollectorUpgradeGet(): \OpenAPI\Client\Model\SecurityPlanningDataCollectorUpgradeStatus
```

Data Collector Upgrade Status.

Data Collector Upgrade Status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->servicesFlowSecurityPlanningDataCollectorUpgradeGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->servicesFlowSecurityPlanningDataCollectorUpgradeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\SecurityPlanningDataCollectorUpgradeStatus**](../Model/SecurityPlanningDataCollectorUpgradeStatus.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `servicesFlowSecurityPlanningDataCollectorUpgradePost()`

```php
servicesFlowSecurityPlanningDataCollectorUpgradePost($body): \OpenAPI\Client\Model\ServiceConfigStatus
```

Security Planning Data Collector Upgrade.

Security Planning Data Collector Upgrade.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\SecurityPlanningDataCollectorUpgradeConfigInput(); // \OpenAPI\Client\Model\SecurityPlanningDataCollectorUpgradeConfigInput

try {
    $result = $apiInstance->servicesFlowSecurityPlanningDataCollectorUpgradePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->servicesFlowSecurityPlanningDataCollectorUpgradePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\SecurityPlanningDataCollectorUpgradeConfigInput**](../Model/SecurityPlanningDataCollectorUpgradeConfigInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ServiceConfigStatus**](../Model/ServiceConfigStatus.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `servicesFlowSecurityPlanningPost()`

```php
servicesFlowSecurityPlanningPost($body): \OpenAPI\Client\Model\ServiceConfigStatus
```

Security Planning Configuration.

Security Planning Configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\FlowSecurityPlanningConfigInput(); // \OpenAPI\Client\Model\FlowSecurityPlanningConfigInput

try {
    $result = $apiInstance->servicesFlowSecurityPlanningPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->servicesFlowSecurityPlanningPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\FlowSecurityPlanningConfigInput**](../Model/FlowSecurityPlanningConfigInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ServiceConfigStatus**](../Model/ServiceConfigStatus.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `servicesFlowSecurityPlanningStatusGet()`

```php
servicesFlowSecurityPlanningStatusGet($include_capabilities): \OpenAPI\Client\Model\ServiceEnablementStatus
```

Service status.

Service status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$include_capabilities = True; // bool | Whether or not to include the capabilities of this service in the response. Capabilities for service include if it can be enabled/disabled or not.

try {
    $result = $apiInstance->servicesFlowSecurityPlanningStatusGet($include_capabilities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->servicesFlowSecurityPlanningStatusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **include_capabilities** | **bool**| Whether or not to include the capabilities of this service in the response. Capabilities for service include if it can be enabled/disabled or not. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ServiceEnablementStatus**](../Model/ServiceEnablementStatus.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `servicesMicrosegPost()`

```php
servicesMicrosegPost($body): \OpenAPI\Client\Model\ServiceConfigStatus
```

Manage Microsegmentation.

Manage Microsegmentation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\MicrosegServiceConfigInput(); // \OpenAPI\Client\Model\MicrosegServiceConfigInput

try {
    $result = $apiInstance->servicesMicrosegPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->servicesMicrosegPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\MicrosegServiceConfigInput**](../Model/MicrosegServiceConfigInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ServiceConfigStatus**](../Model/ServiceConfigStatus.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `servicesNucalmPost()`

```php
servicesNucalmPost($body): \OpenAPI\Client\Model\ServiceConfigStatus
```

Manage NuCalm service.

Manage NuCalm service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\NucalmServiceConfigInput(); // \OpenAPI\Client\Model\NucalmServiceConfigInput

try {
    $result = $apiInstance->servicesNucalmPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->servicesNucalmPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\NucalmServiceConfigInput**](../Model/NucalmServiceConfigInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ServiceConfigStatus**](../Model/ServiceConfigStatus.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `servicesOssPost()`

```php
servicesOssPost($body): \OpenAPI\Client\Model\ServiceResponse
```

Manage Bucket Service Manager service.

Manage Bucket Service Manager service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OssServiceConfigInput(); // \OpenAPI\Client\Model\OssServiceConfigInput

try {
    $result = $apiInstance->servicesOssPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->servicesOssPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\OssServiceConfigInput**](../Model/OssServiceConfigInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ServiceResponse**](../Model/ServiceResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `servicesServiceNameClusterCapabilityGet()`

```php
servicesServiceNameClusterCapabilityGet($service_name): \OpenAPI\Client\Model\ClusterCapabilityStatus
```

Cluster feature status.

Cluster feature capability status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_name = 'service_name_example'; // string | The service name.

try {
    $result = $apiInstance->servicesServiceNameClusterCapabilityGet($service_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->servicesServiceNameClusterCapabilityGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_name** | **string**| The service name. | |

### Return type

[**\OpenAPI\Client\Model\ClusterCapabilityStatus**](../Model/ClusterCapabilityStatus.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `servicesServiceNameStatusGet()`

```php
servicesServiceNameStatusGet($service_name, $include_capabilities): \OpenAPI\Client\Model\ServiceEnablementStatus
```

Service status.

Service status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$service_name = 'service_name_example'; // string | The service name.
$include_capabilities = True; // bool | Whether or not to include the capabilities of this service in the response. Capabilities for service include if it can be enabled/disabled or not.

try {
    $result = $apiInstance->servicesServiceNameStatusGet($service_name, $include_capabilities);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->servicesServiceNameStatusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_name** | **string**| The service name. | |
| **include_capabilities** | **bool**| Whether or not to include the capabilities of this service in the response. Capabilities for service include if it can be enabled/disabled or not. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ServiceEnablementStatus**](../Model/ServiceEnablementStatus.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `servicesXfitPost()`

```php
servicesXfitPost($body): \OpenAPI\Client\Model\ServiceConfigStatus
```

Manage xfit service.

Manage xfit service, including enabling the service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\XfitServiceInput(); // \OpenAPI\Client\Model\XfitServiceInput

try {
    $result = $apiInstance->servicesXfitPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->servicesXfitPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\XfitServiceInput**](../Model/XfitServiceInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ServiceConfigStatus**](../Model/ServiceConfigStatus.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
