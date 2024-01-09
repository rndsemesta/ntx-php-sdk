# OpenAPI\Client\NetworkSecurityRulesApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**networkSecurityRulesExportGet()**](NetworkSecurityRulesApi.md#networkSecurityRulesExportGet) | **GET** /network_security_rules/export | Export all network security rules |
| [**networkSecurityRulesImportApplyPost()**](NetworkSecurityRulesApi.md#networkSecurityRulesImportApplyPost) | **POST** /network_security_rules/import/apply | Imports all the network security rules specified by the data. |
| [**networkSecurityRulesImportDryRunPost()**](NetworkSecurityRulesApi.md#networkSecurityRulesImportDryRunPost) | **POST** /network_security_rules/import/dry_run | Reports on the impact of importing the policy |
| [**networkSecurityRulesListPost()**](NetworkSecurityRulesApi.md#networkSecurityRulesListPost) | **POST** /network_security_rules/list | Get all network security rules |
| [**networkSecurityRulesPost()**](NetworkSecurityRulesApi.md#networkSecurityRulesPost) | **POST** /network_security_rules | Create a new Network security rule |
| [**networkSecurityRulesUuidDelete()**](NetworkSecurityRulesApi.md#networkSecurityRulesUuidDelete) | **DELETE** /network_security_rules/{uuid} | Delete a existing Network security rule |
| [**networkSecurityRulesUuidGet()**](NetworkSecurityRulesApi.md#networkSecurityRulesUuidGet) | **GET** /network_security_rules/{uuid} | Get a existing Network security rule |
| [**networkSecurityRulesUuidPut()**](NetworkSecurityRulesApi.md#networkSecurityRulesUuidPut) | **PUT** /network_security_rules/{uuid} | Update a existing Network security rule |


## `networkSecurityRulesExportGet()`

```php
networkSecurityRulesExportGet(): object
```

Export all network security rules

Export all network security rules to save and for subsequent import

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\NetworkSecurityRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->networkSecurityRulesExportGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkSecurityRulesApi->networkSecurityRulesExportGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkSecurityRulesImportApplyPost()`

```php
networkSecurityRulesImportApplyPost($import_data): \OpenAPI\Client\Model\ProceduralResponse
```

Imports all the network security rules specified by the data.

Imports previously exported network security rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\NetworkSecurityRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$import_data = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->networkSecurityRulesImportApplyPost($import_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkSecurityRulesApi->networkSecurityRulesImportApplyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **import_data** | **object**|  | |

### Return type

[**\OpenAPI\Client\Model\ProceduralResponse**](../Model/ProceduralResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/octet-stream`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkSecurityRulesImportDryRunPost()`

```php
networkSecurityRulesImportDryRunPost($import_data): \OpenAPI\Client\Model\NetworkSecurityRuleImportResponse
```

Reports on the impact of importing the policy

Generates a report on the impact of importing the policy data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\NetworkSecurityRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$import_data = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->networkSecurityRulesImportDryRunPost($import_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkSecurityRulesApi->networkSecurityRulesImportDryRunPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **import_data** | **object**|  | |

### Return type

[**\OpenAPI\Client\Model\NetworkSecurityRuleImportResponse**](../Model/NetworkSecurityRuleImportResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/octet-stream`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkSecurityRulesListPost()`

```php
networkSecurityRulesListPost($get_entities_request): \OpenAPI\Client\Model\NetworkSecurityRuleListIntentResponse
```

Get all network security rules

This operation gets a list of Network security rules, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\NetworkSecurityRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\NetworkSecurityRuleListMetadata(); // \OpenAPI\Client\Model\NetworkSecurityRuleListMetadata

try {
    $result = $apiInstance->networkSecurityRulesListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkSecurityRulesApi->networkSecurityRulesListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\NetworkSecurityRuleListMetadata**](../Model/NetworkSecurityRuleListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\NetworkSecurityRuleListIntentResponse**](../Model/NetworkSecurityRuleListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkSecurityRulesPost()`

```php
networkSecurityRulesPost($body): \OpenAPI\Client\Model\NetworkSecurityRuleIntentResponse
```

Create a new Network security rule

This operation submits a request to create a new Network security rule based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\NetworkSecurityRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\NetworkSecurityRuleIntentInput(); // \OpenAPI\Client\Model\NetworkSecurityRuleIntentInput

try {
    $result = $apiInstance->networkSecurityRulesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkSecurityRulesApi->networkSecurityRulesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\NetworkSecurityRuleIntentInput**](../Model/NetworkSecurityRuleIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\NetworkSecurityRuleIntentResponse**](../Model/NetworkSecurityRuleIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkSecurityRulesUuidDelete()`

```php
networkSecurityRulesUuidDelete($uuid): \OpenAPI\Client\Model\NetworkSecurityRuleIntentResponse
```

Delete a existing Network security rule

This operation submits a request to delete a existing Network security rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\NetworkSecurityRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->networkSecurityRulesUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkSecurityRulesApi->networkSecurityRulesUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\NetworkSecurityRuleIntentResponse**](../Model/NetworkSecurityRuleIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkSecurityRulesUuidGet()`

```php
networkSecurityRulesUuidGet($uuid): \OpenAPI\Client\Model\NetworkSecurityRuleIntentResponse
```

Get a existing Network security rule

This operation gets a existing Network security rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\NetworkSecurityRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->networkSecurityRulesUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkSecurityRulesApi->networkSecurityRulesUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\NetworkSecurityRuleIntentResponse**](../Model/NetworkSecurityRuleIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `networkSecurityRulesUuidPut()`

```php
networkSecurityRulesUuidPut($uuid, $body): \OpenAPI\Client\Model\NetworkSecurityRuleIntentResponse
```

Update a existing Network security rule

This operation submits a request to update a existing Network security rule based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\NetworkSecurityRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\NetworkSecurityRuleIntentInput(); // \OpenAPI\Client\Model\NetworkSecurityRuleIntentInput

try {
    $result = $apiInstance->networkSecurityRulesUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NetworkSecurityRulesApi->networkSecurityRulesUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\NetworkSecurityRuleIntentInput**](../Model/NetworkSecurityRuleIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\NetworkSecurityRuleIntentResponse**](../Model/NetworkSecurityRuleIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
