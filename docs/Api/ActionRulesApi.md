# OpenAPI\Client\ActionRulesApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**actionRulesListPost()**](ActionRulesApi.md#actionRulesListPost) | **POST** /action_rules/list | Get a list of existing action_rule |
| [**actionRulesPost()**](ActionRulesApi.md#actionRulesPost) | **POST** /action_rules | Create a new action_rule |
| [**actionRulesTriggerPost()**](ActionRulesApi.md#actionRulesTriggerPost) | **POST** /action_rules/trigger | Manually trigger action rules execution. |
| [**actionRulesUuidDelete()**](ActionRulesApi.md#actionRulesUuidDelete) | **DELETE** /action_rules/{uuid} | Delete a existing action_rule |
| [**actionRulesUuidGet()**](ActionRulesApi.md#actionRulesUuidGet) | **GET** /action_rules/{uuid} | Get a existing action_rule |
| [**actionRulesUuidPut()**](ActionRulesApi.md#actionRulesUuidPut) | **PUT** /action_rules/{uuid} | Update a existing action_rule |
| [**actionRulesValidatePost()**](ActionRulesApi.md#actionRulesValidatePost) | **POST** /action_rules/validate | Validate an action rule |


## `actionRulesListPost()`

```php
actionRulesListPost($get_entities_request): \OpenAPI\Client\Model\ActionRuleListIntentResponse
```

Get a list of existing action_rule

This operation gets a list of action_rule, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ActionRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\ActionRuleListMetadata(); // \OpenAPI\Client\Model\ActionRuleListMetadata

try {
    $result = $apiInstance->actionRulesListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionRulesApi->actionRulesListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\ActionRuleListMetadata**](../Model/ActionRuleListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ActionRuleListIntentResponse**](../Model/ActionRuleListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionRulesPost()`

```php
actionRulesPost($body): \OpenAPI\Client\Model\ActionRuleIntentResponse
```

Create a new action_rule

This operation submits a request to create a new action_rule based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ActionRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ActionRuleIntentInput(); // \OpenAPI\Client\Model\ActionRuleIntentInput

try {
    $result = $apiInstance->actionRulesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionRulesApi->actionRulesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\ActionRuleIntentInput**](../Model/ActionRuleIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ActionRuleIntentResponse**](../Model/ActionRuleIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionRulesTriggerPost()`

```php
actionRulesTriggerPost($body): \OpenAPI\Client\Model\ProceduralResponse
```

Manually trigger action rules execution.

Execute playbooks on demand using trigger information passed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ActionRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ActionRuleTriggerInput(); // \OpenAPI\Client\Model\ActionRuleTriggerInput

try {
    $result = $apiInstance->actionRulesTriggerPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionRulesApi->actionRulesTriggerPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\ActionRuleTriggerInput**](../Model/ActionRuleTriggerInput.md)|  | |

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

## `actionRulesUuidDelete()`

```php
actionRulesUuidDelete($uuid)
```

Delete a existing action_rule

This operation submits a request to delete a existing action_rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ActionRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $apiInstance->actionRulesUuidDelete($uuid);
} catch (Exception $e) {
    echo 'Exception when calling ActionRulesApi->actionRulesUuidDelete: ', $e->getMessage(), PHP_EOL;
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

## `actionRulesUuidGet()`

```php
actionRulesUuidGet($uuid): \OpenAPI\Client\Model\ActionRuleIntentResponse
```

Get a existing action_rule

This operation gets a existing action_rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ActionRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->actionRulesUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionRulesApi->actionRulesUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\ActionRuleIntentResponse**](../Model/ActionRuleIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionRulesUuidPut()`

```php
actionRulesUuidPut($uuid, $body): \OpenAPI\Client\Model\ActionRuleIntentResponse
```

Update a existing action_rule

This operation submits a request to update a existing action_rule based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ActionRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\ActionRuleIntentInput(); // \OpenAPI\Client\Model\ActionRuleIntentInput

try {
    $result = $apiInstance->actionRulesUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionRulesApi->actionRulesUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\ActionRuleIntentInput**](../Model/ActionRuleIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ActionRuleIntentResponse**](../Model/ActionRuleIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionRulesValidatePost()`

```php
actionRulesValidatePost($body): \OpenAPI\Client\Model\ActionRuleResources
```

Validate an action rule

Validate an action rule without changing the rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ActionRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ActionRuleValidationInput(); // \OpenAPI\Client\Model\ActionRuleValidationInput

try {
    $result = $apiInstance->actionRulesValidatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionRulesApi->actionRulesValidatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\ActionRuleValidationInput**](../Model/ActionRuleValidationInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ActionRuleResources**](../Model/ActionRuleResources.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
