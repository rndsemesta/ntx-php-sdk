# OpenAPI\Client\EntitySyncRulesApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**entitySyncRulesListPost()**](EntitySyncRulesApi.md#entitySyncRulesListPost) | **POST** /entity_sync_rules/list | Get a list of existing entity_sync_rules |
| [**entitySyncRulesPost()**](EntitySyncRulesApi.md#entitySyncRulesPost) | **POST** /entity_sync_rules | Create a new entity_sync_rule |
| [**entitySyncRulesUuidDelete()**](EntitySyncRulesApi.md#entitySyncRulesUuidDelete) | **DELETE** /entity_sync_rules/{uuid} | Delete a existing entity_sync_rule |
| [**entitySyncRulesUuidGet()**](EntitySyncRulesApi.md#entitySyncRulesUuidGet) | **GET** /entity_sync_rules/{uuid} | Get a existing entity_sync_rule |
| [**entitySyncRulesUuidListEntitiesToSyncGet()**](EntitySyncRulesApi.md#entitySyncRulesUuidListEntitiesToSyncGet) | **GET** /entity_sync_rules/{uuid}/list_entities_to_sync | Get the list of entities which needs to be synced. |
| [**entitySyncRulesUuidProcessPost()**](EntitySyncRulesApi.md#entitySyncRulesUuidProcessPost) | **POST** /entity_sync_rules/{uuid}/process | Process an entity sync rule. |
| [**entitySyncRulesUuidPut()**](EntitySyncRulesApi.md#entitySyncRulesUuidPut) | **PUT** /entity_sync_rules/{uuid} | Update a existing entity_sync_rule |


## `entitySyncRulesListPost()`

```php
entitySyncRulesListPost($get_entities_request): \OpenAPI\Client\Model\EntitySyncRuleListIntentResponse
```

Get a list of existing entity_sync_rules

This operation gets a list of entity_sync_rules, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\EntitySyncRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\EntitySyncRuleListMetadata(); // \OpenAPI\Client\Model\EntitySyncRuleListMetadata

try {
    $result = $apiInstance->entitySyncRulesListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntitySyncRulesApi->entitySyncRulesListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\EntitySyncRuleListMetadata**](../Model/EntitySyncRuleListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EntitySyncRuleListIntentResponse**](../Model/EntitySyncRuleListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `entitySyncRulesPost()`

```php
entitySyncRulesPost($body): \OpenAPI\Client\Model\EntitySyncRuleIntentResponse
```

Create a new entity_sync_rule

This operation submits a request to create a new entity_sync_rule based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\EntitySyncRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\EntitySyncRuleIntentInput(); // \OpenAPI\Client\Model\EntitySyncRuleIntentInput

try {
    $result = $apiInstance->entitySyncRulesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntitySyncRulesApi->entitySyncRulesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\EntitySyncRuleIntentInput**](../Model/EntitySyncRuleIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EntitySyncRuleIntentResponse**](../Model/EntitySyncRuleIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `entitySyncRulesUuidDelete()`

```php
entitySyncRulesUuidDelete($uuid)
```

Delete a existing entity_sync_rule

This operation submits a request to delete a existing entity_sync_rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\EntitySyncRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $apiInstance->entitySyncRulesUuidDelete($uuid);
} catch (Exception $e) {
    echo 'Exception when calling EntitySyncRulesApi->entitySyncRulesUuidDelete: ', $e->getMessage(), PHP_EOL;
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

## `entitySyncRulesUuidGet()`

```php
entitySyncRulesUuidGet($uuid): \OpenAPI\Client\Model\EntitySyncRuleIntentResponse
```

Get a existing entity_sync_rule

This operation gets a existing entity_sync_rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\EntitySyncRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->entitySyncRulesUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntitySyncRulesApi->entitySyncRulesUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\EntitySyncRuleIntentResponse**](../Model/EntitySyncRuleIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `entitySyncRulesUuidListEntitiesToSyncGet()`

```php
entitySyncRulesUuidListEntitiesToSyncGet($uuid, $include_categories, $sort_attribute, $sort_order, $offset, $length): \OpenAPI\Client\Model\ListEntitiesToSyncResponseInner[]
```

Get the list of entities which needs to be synced.

Get the list of entities that are affected by this entity sync rule which needs to be synced to connected Availability Zones.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\EntitySyncRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$include_categories = false; // bool | Boolean to indicate whether the categories should be included in the response or not.
$sort_attribute = 'sort_attribute_example'; // string | The attribute to perform sort on.
$sort_order = 'sort_order_example'; // string | The sort order in which results are to be returned.
$offset = 0; // int | Offset from start of the entity list.
$length = 20; // int | The number of records to retrieve relative to the offset.

try {
    $result = $apiInstance->entitySyncRulesUuidListEntitiesToSyncGet($uuid, $include_categories, $sort_attribute, $sort_order, $offset, $length);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntitySyncRulesApi->entitySyncRulesUuidListEntitiesToSyncGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **include_categories** | **bool**| Boolean to indicate whether the categories should be included in the response or not. | [optional] [default to false] |
| **sort_attribute** | **string**| The attribute to perform sort on. | [optional] |
| **sort_order** | **string**| The sort order in which results are to be returned. | [optional] |
| **offset** | **int**| Offset from start of the entity list. | [optional] [default to 0] |
| **length** | **int**| The number of records to retrieve relative to the offset. | [optional] [default to 20] |

### Return type

[**\OpenAPI\Client\Model\ListEntitiesToSyncResponseInner[]**](../Model/ListEntitiesToSyncResponseInner.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `entitySyncRulesUuidProcessPost()`

```php
entitySyncRulesUuidProcessPost($uuid, $body): \OpenAPI\Client\Model\ProceduralResponse
```

Process an entity sync rule.

It will be used whenever user wants to process an entity sync rule immediately, irrespective of sync trigger or schedule. It will override entities in case of conflicts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\EntitySyncRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = array(new \OpenAPI\Client\Model\EntitySyncRuleProcessInputInner()); // \OpenAPI\Client\Model\EntitySyncRuleProcessInputInner[]

try {
    $result = $apiInstance->entitySyncRulesUuidProcessPost($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntitySyncRulesApi->entitySyncRulesUuidProcessPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\EntitySyncRuleProcessInputInner[]**](../Model/EntitySyncRuleProcessInputInner.md)|  | [optional] |

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

## `entitySyncRulesUuidPut()`

```php
entitySyncRulesUuidPut($uuid, $body): \OpenAPI\Client\Model\EntitySyncRuleIntentResponse
```

Update a existing entity_sync_rule

This operation submits a request to update a existing entity_sync_rule based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\EntitySyncRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\EntitySyncRuleIntentInput(); // \OpenAPI\Client\Model\EntitySyncRuleIntentInput

try {
    $result = $apiInstance->entitySyncRulesUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EntitySyncRulesApi->entitySyncRulesUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\EntitySyncRuleIntentInput**](../Model/EntitySyncRuleIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\EntitySyncRuleIntentResponse**](../Model/EntitySyncRuleIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
