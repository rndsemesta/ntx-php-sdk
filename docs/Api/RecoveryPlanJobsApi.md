# OpenAPI\Client\RecoveryPlanJobsApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**recoveryPlanJobsListPost()**](RecoveryPlanJobsApi.md#recoveryPlanJobsListPost) | **POST** /recovery_plan_jobs/list | List the Recovery Plan Jobs |
| [**recoveryPlanJobsPost()**](RecoveryPlanJobsApi.md#recoveryPlanJobsPost) | **POST** /recovery_plan_jobs | Create Recovery Plan Job |
| [**recoveryPlanJobsUuidActionPost()**](RecoveryPlanJobsApi.md#recoveryPlanJobsUuidActionPost) | **POST** /recovery_plan_jobs/{uuid}/{action} | Perform an action on Recovery Plan Job |
| [**recoveryPlanJobsUuidDelete()**](RecoveryPlanJobsApi.md#recoveryPlanJobsUuidDelete) | **DELETE** /recovery_plan_jobs/{uuid} | Delete Recovery Plan Job |
| [**recoveryPlanJobsUuidGet()**](RecoveryPlanJobsApi.md#recoveryPlanJobsUuidGet) | **GET** /recovery_plan_jobs/{uuid} | Get Recovery Plan Job |
| [**recoveryPlanJobsUuidStatusGet()**](RecoveryPlanJobsApi.md#recoveryPlanJobsUuidStatusGet) | **GET** /recovery_plan_jobs/{uuid}/{status} | Get the execution status of the Recovery Plan Job |


## `recoveryPlanJobsListPost()`

```php
recoveryPlanJobsListPost($get_entities_request): \OpenAPI\Client\Model\RecoveryPlanJobListIntentResponse
```

List the Recovery Plan Jobs

List the Recovery Plan Jobs

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RecoveryPlanJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\RecoveryPlanJobListMetadata(); // \OpenAPI\Client\Model\RecoveryPlanJobListMetadata

try {
    $result = $apiInstance->recoveryPlanJobsListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecoveryPlanJobsApi->recoveryPlanJobsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\RecoveryPlanJobListMetadata**](../Model/RecoveryPlanJobListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RecoveryPlanJobListIntentResponse**](../Model/RecoveryPlanJobListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recoveryPlanJobsPost()`

```php
recoveryPlanJobsPost($body): \OpenAPI\Client\Model\RecoveryPlanJobResponse
```

Create Recovery Plan Job

Create a Recovery Plan Job for a Recovery Plan with associated metadata

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RecoveryPlanJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\RecoveryPlanJobIntentInput(); // \OpenAPI\Client\Model\RecoveryPlanJobIntentInput | Request body

try {
    $result = $apiInstance->recoveryPlanJobsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecoveryPlanJobsApi->recoveryPlanJobsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\RecoveryPlanJobIntentInput**](../Model/RecoveryPlanJobIntentInput.md)| Request body | |

### Return type

[**\OpenAPI\Client\Model\RecoveryPlanJobResponse**](../Model/RecoveryPlanJobResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recoveryPlanJobsUuidActionPost()`

```php
recoveryPlanJobsUuidActionPost($uuid, $action, $body): \OpenAPI\Client\Model\RecoveryPlanJobResponse
```

Perform an action on Recovery Plan Job

Perform an action on Recovery Plan Job

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RecoveryPlanJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$action = 'action_example'; // string | Action to be performed on the Recovery Plan Job. Only Following actions are supported, cleanup - Delete entities recovered in the last Test-Failover   operation. rerun - Retriggers the Recovery Plan execution from its last   state. This action is only supported for Migrate, Failover, and   Test-Failover operations.
$body = new \OpenAPI\Client\Model\RecoveryPlanJobActionRequest(); // \OpenAPI\Client\Model\RecoveryPlanJobActionRequest | Request body

try {
    $result = $apiInstance->recoveryPlanJobsUuidActionPost($uuid, $action, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecoveryPlanJobsApi->recoveryPlanJobsUuidActionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **action** | **string**| Action to be performed on the Recovery Plan Job. Only Following actions are supported, cleanup - Delete entities recovered in the last Test-Failover   operation. rerun - Retriggers the Recovery Plan execution from its last   state. This action is only supported for Migrate, Failover, and   Test-Failover operations. | |
| **body** | [**\OpenAPI\Client\Model\RecoveryPlanJobActionRequest**](../Model/RecoveryPlanJobActionRequest.md)| Request body | |

### Return type

[**\OpenAPI\Client\Model\RecoveryPlanJobResponse**](../Model/RecoveryPlanJobResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recoveryPlanJobsUuidDelete()`

```php
recoveryPlanJobsUuidDelete($uuid): \OpenAPI\Client\Model\RecoveryPlanJobResponse
```

Delete Recovery Plan Job

Delete a Recovery Plan Job given its UUID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RecoveryPlanJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->recoveryPlanJobsUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecoveryPlanJobsApi->recoveryPlanJobsUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\RecoveryPlanJobResponse**](../Model/RecoveryPlanJobResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recoveryPlanJobsUuidGet()`

```php
recoveryPlanJobsUuidGet($uuid): \OpenAPI\Client\Model\RecoveryPlanJobIntentResponse
```

Get Recovery Plan Job

Given a UUID, returns a Recovery Plan Job state

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RecoveryPlanJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->recoveryPlanJobsUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecoveryPlanJobsApi->recoveryPlanJobsUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\RecoveryPlanJobIntentResponse**](../Model/RecoveryPlanJobIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recoveryPlanJobsUuidStatusGet()`

```php
recoveryPlanJobsUuidStatusGet($uuid, $status): \OpenAPI\Client\Model\RecoveryPlanJobExecutionStatus
```

Get the execution status of the Recovery Plan Job

Get the execution status of the Recovery Plan Job

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RecoveryPlanJobsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$status = 'status_example'; // string | Type of the Recovery Plan Job status

try {
    $result = $apiInstance->recoveryPlanJobsUuidStatusGet($uuid, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecoveryPlanJobsApi->recoveryPlanJobsUuidStatusGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **status** | **string**| Type of the Recovery Plan Job status | |

### Return type

[**\OpenAPI\Client\Model\RecoveryPlanJobExecutionStatus**](../Model/RecoveryPlanJobExecutionStatus.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
