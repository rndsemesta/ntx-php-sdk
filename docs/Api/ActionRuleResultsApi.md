# OpenAPI\Client\ActionRuleResultsApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**actionRuleResultsActionActionPost()**](ActionRuleResultsApi.md#actionRuleResultsActionActionPost) | **POST** /action_rule_results/action/{action} | Perform an action to abort/resume action rule execution instance. |
| [**actionRuleResultsListPost()**](ActionRuleResultsApi.md#actionRuleResultsListPost) | **POST** /action_rule_results/list | Get a list of existing action_rule_result |
| [**actionRuleResultsPost()**](ActionRuleResultsApi.md#actionRuleResultsPost) | **POST** /action_rule_results | Create a new action_rule_result |
| [**actionRuleResultsUuidDelete()**](ActionRuleResultsApi.md#actionRuleResultsUuidDelete) | **DELETE** /action_rule_results/{uuid} | Delete a existing action_rule_result |
| [**actionRuleResultsUuidGet()**](ActionRuleResultsApi.md#actionRuleResultsUuidGet) | **GET** /action_rule_results/{uuid} | Get a existing action_rule_result |


## `actionRuleResultsActionActionPost()`

```php
actionRuleResultsActionActionPost($action, $body): \OpenAPI\Client\Model\ProceduralResponse
```

Perform an action to abort/resume action rule execution instance.

Abort or resume the rule execution instance.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ActionRuleResultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$action = 'action_example'; // string | The action type.
$body = new \OpenAPI\Client\Model\ActionRuleResultActionInput(); // \OpenAPI\Client\Model\ActionRuleResultActionInput

try {
    $result = $apiInstance->actionRuleResultsActionActionPost($action, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionRuleResultsApi->actionRuleResultsActionActionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **action** | **string**| The action type. | |
| **body** | [**\OpenAPI\Client\Model\ActionRuleResultActionInput**](../Model/ActionRuleResultActionInput.md)|  | |

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

## `actionRuleResultsListPost()`

```php
actionRuleResultsListPost($get_entities_request): \OpenAPI\Client\Model\ActionRuleResultListIntentResponse
```

Get a list of existing action_rule_result

This operation gets a list of action_rule_result, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ActionRuleResultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\ActionRuleResultListMetadata(); // \OpenAPI\Client\Model\ActionRuleResultListMetadata

try {
    $result = $apiInstance->actionRuleResultsListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionRuleResultsApi->actionRuleResultsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\ActionRuleResultListMetadata**](../Model/ActionRuleResultListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ActionRuleResultListIntentResponse**](../Model/ActionRuleResultListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionRuleResultsPost()`

```php
actionRuleResultsPost($body): \OpenAPI\Client\Model\ActionRuleResultIntentResponse
```

Create a new action_rule_result

For testing purpose.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ActionRuleResultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ActionRuleResultIntentInput(); // \OpenAPI\Client\Model\ActionRuleResultIntentInput

try {
    $result = $apiInstance->actionRuleResultsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionRuleResultsApi->actionRuleResultsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\ActionRuleResultIntentInput**](../Model/ActionRuleResultIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ActionRuleResultIntentResponse**](../Model/ActionRuleResultIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionRuleResultsUuidDelete()`

```php
actionRuleResultsUuidDelete($uuid)
```

Delete a existing action_rule_result

This operation submits a request to delete a existing action_rule_result.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ActionRuleResultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $apiInstance->actionRuleResultsUuidDelete($uuid);
} catch (Exception $e) {
    echo 'Exception when calling ActionRuleResultsApi->actionRuleResultsUuidDelete: ', $e->getMessage(), PHP_EOL;
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

## `actionRuleResultsUuidGet()`

```php
actionRuleResultsUuidGet($uuid): \OpenAPI\Client\Model\ActionRuleResultIntentResponse
```

Get a existing action_rule_result

This operation gets a existing action_rule_result.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ActionRuleResultsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->actionRuleResultsUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionRuleResultsApi->actionRuleResultsUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\ActionRuleResultIntentResponse**](../Model/ActionRuleResultIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
