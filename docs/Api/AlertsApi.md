# OpenAPI\Client\AlertsApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**alertsActionActionPost()**](AlertsApi.md#alertsActionActionPost) | **POST** /alerts/action/{action} | Perform an action to acknowledge or resolve alerts. |
| [**alertsListPost()**](AlertsApi.md#alertsListPost) | **POST** /alerts/list | Get a list of existing alert |
| [**alertsNotifyPost()**](AlertsApi.md#alertsNotifyPost) | **POST** /alerts/notify | Create a new alert |
| [**alertsUuidGet()**](AlertsApi.md#alertsUuidGet) | **GET** /alerts/{uuid} | Get a existing alert |


## `alertsActionActionPost()`

```php
alertsActionActionPost($action, $body): \OpenAPI\Client\Model\ProceduralResponse
```

Perform an action to acknowledge or resolve alerts.

Acknowledge alerts being looked at or be resolved.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$action = 'action_example'; // string | The action type.
$body = new \OpenAPI\Client\Model\AlertActionInput(); // \OpenAPI\Client\Model\AlertActionInput

try {
    $result = $apiInstance->alertsActionActionPost($action, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->alertsActionActionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **action** | **string**| The action type. | |
| **body** | [**\OpenAPI\Client\Model\AlertActionInput**](../Model/AlertActionInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProceduralResponse**](../Model/ProceduralResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `alertsListPost()`

```php
alertsListPost($get_entities_request): \OpenAPI\Client\Model\AlertListIntentResponse
```

Get a list of existing alert

This operation gets a list of alert, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\AlertListMetadata(); // \OpenAPI\Client\Model\AlertListMetadata

try {
    $result = $apiInstance->alertsListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->alertsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\AlertListMetadata**](../Model/AlertListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AlertListIntentResponse**](../Model/AlertListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `alertsNotifyPost()`

```php
alertsNotifyPost($body): \OpenAPI\Client\Model\ProceduralResponse
```

Create a new alert

This operation submits a request to create a new alert based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\AlertNotificationInput(); // \OpenAPI\Client\Model\AlertNotificationInput

try {
    $result = $apiInstance->alertsNotifyPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->alertsNotifyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\AlertNotificationInput**](../Model/AlertNotificationInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProceduralResponse**](../Model/ProceduralResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `alertsUuidGet()`

```php
alertsUuidGet($uuid): \OpenAPI\Client\Model\AlertIntentResponse
```

Get a existing alert

This operation gets a existing alert.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AlertsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->alertsUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AlertsApi->alertsUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\AlertIntentResponse**](../Model/AlertIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
