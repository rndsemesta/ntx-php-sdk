# OpenAPI\Client\ProtectionRulesApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**protectionRulesListPost()**](ProtectionRulesApi.md#protectionRulesListPost) | **POST** /protection_rules/list | Get protection rules |
| [**protectionRulesPost()**](ProtectionRulesApi.md#protectionRulesPost) | **POST** /protection_rules | Create a protection rule |
| [**protectionRulesQueryEntitiesGet()**](ProtectionRulesApi.md#protectionRulesQueryEntitiesGet) | **GET** /protection_rules/query_entities | Get a list of entities along with their protection status. |
| [**protectionRulesUuidDelete()**](ProtectionRulesApi.md#protectionRulesUuidDelete) | **DELETE** /protection_rules/{uuid} | Delete a protection rule |
| [**protectionRulesUuidGet()**](ProtectionRulesApi.md#protectionRulesUuidGet) | **GET** /protection_rules/{uuid} | Get details for a protection rule |
| [**protectionRulesUuidProcessPost()**](ProtectionRulesApi.md#protectionRulesUuidProcessPost) | **POST** /protection_rules/{uuid}/process | Process a protection rule |
| [**protectionRulesUuidPut()**](ProtectionRulesApi.md#protectionRulesUuidPut) | **PUT** /protection_rules/{uuid} | Modify protection rule |
| [**protectionRulesUuidQueryEntitiesGet()**](ProtectionRulesApi.md#protectionRulesUuidQueryEntitiesGet) | **GET** /protection_rules/{uuid}/query_entities | Get a list of entities affected by a protection rule |


## `protectionRulesListPost()`

```php
protectionRulesListPost($get_entities_request): \OpenAPI\Client\Model\ProtectionRuleListIntentResponse
```

Get protection rules

Get protection rules

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProtectionRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\ProtectionRuleListMetadata(); // \OpenAPI\Client\Model\ProtectionRuleListMetadata

try {
    $result = $apiInstance->protectionRulesListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProtectionRulesApi->protectionRulesListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\ProtectionRuleListMetadata**](../Model/ProtectionRuleListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProtectionRuleListIntentResponse**](../Model/ProtectionRuleListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `protectionRulesPost()`

```php
protectionRulesPost($body): \OpenAPI\Client\Model\ProtectionRuleIntentResponse
```

Create a protection rule

Create a protection rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProtectionRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ProtectionRuleIntentInput(); // \OpenAPI\Client\Model\ProtectionRuleIntentInput

try {
    $result = $apiInstance->protectionRulesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProtectionRulesApi->protectionRulesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\ProtectionRuleIntentInput**](../Model/ProtectionRuleIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProtectionRuleIntentResponse**](../Model/ProtectionRuleIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `protectionRulesQueryEntitiesGet()`

```php
protectionRulesQueryEntitiesGet($categories, $recovery_point_objective_seconds, $has_intra_pc_dr_config, $cluster_uuid_list, $should_exclude_cluster_uuid_list, $protection_rule_uuid, $protection_status_filter, $entity_type, $offset, $length): \OpenAPI\Client\Model\QueryEntitiesResponse
```

Get a list of entities along with their protection status.

This API fetches what could be the protection status of the entity given a set of parameters. The entities to return are based on the category name and value pair which is passed as an input to the API. The recovery point objective values and some other parameters passed, also as query params, help to determine if there are any errors associated with it which are returned in the response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProtectionRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$categories = 'categories_example'; // string | Category name, value separated by ':'. Example: 'dept:eng'.
$recovery_point_objective_seconds = array(56); // int[] | Recovery Point Objective (RPO) in seconds. This will be used to determine if the VM can be protected with the given RPO values.
$has_intra_pc_dr_config = True; // bool | Whether the Protection Rule has the intra PC DR policy configured.
$cluster_uuid_list = array('cluster_uuid_list_example'); // string[] | List of PE cluster UUIDs for which the entities that belong to them are either fetched or ignored based on the value set for the should_exclude_cluster_uuid_list parameter. If no value is given then all the PE cluster UUIDs are looked at.
$should_exclude_cluster_uuid_list = false; // bool | Controls whether the cluster_uuid_list is an inclusion list or an exclusion list. If set to False, then the only the entities that are present on the clusters from the cluster_uuid_list are fetched. If set to True, then only the entities that are present on the clusters other than the ones from the cluster_uuid_list are fetched.
$protection_rule_uuid = 'protection_rule_uuid_example'; // string | Protection rule UUID for which the query is being invoked. If protection rule isn't created yet then this field will be empty.
$protection_status_filter = 'ALL'; // string | Filter value which dictates whether to show all entities, irrespective of their protection status, or entities for which there is protection failure, i.e., aren't protected at all.
$entity_type = 'VM'; // string | The entity type to be queried. Set to VM by default.
$offset = 56; // int | Offset from the start of the entity list.
$length = 56; // int | The number of records to retrieve relative to the offset.

try {
    $result = $apiInstance->protectionRulesQueryEntitiesGet($categories, $recovery_point_objective_seconds, $has_intra_pc_dr_config, $cluster_uuid_list, $should_exclude_cluster_uuid_list, $protection_rule_uuid, $protection_status_filter, $entity_type, $offset, $length);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProtectionRulesApi->protectionRulesQueryEntitiesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **categories** | **string**| Category name, value separated by &#39;:&#39;. Example: &#39;dept:eng&#39;. | [optional] |
| **recovery_point_objective_seconds** | [**int[]**](../Model/int.md)| Recovery Point Objective (RPO) in seconds. This will be used to determine if the VM can be protected with the given RPO values. | [optional] |
| **has_intra_pc_dr_config** | **bool**| Whether the Protection Rule has the intra PC DR policy configured. | [optional] |
| **cluster_uuid_list** | [**string[]**](../Model/string.md)| List of PE cluster UUIDs for which the entities that belong to them are either fetched or ignored based on the value set for the should_exclude_cluster_uuid_list parameter. If no value is given then all the PE cluster UUIDs are looked at. | [optional] |
| **should_exclude_cluster_uuid_list** | **bool**| Controls whether the cluster_uuid_list is an inclusion list or an exclusion list. If set to False, then the only the entities that are present on the clusters from the cluster_uuid_list are fetched. If set to True, then only the entities that are present on the clusters other than the ones from the cluster_uuid_list are fetched. | [optional] [default to false] |
| **protection_rule_uuid** | **string**| Protection rule UUID for which the query is being invoked. If protection rule isn&#39;t created yet then this field will be empty. | [optional] |
| **protection_status_filter** | **string**| Filter value which dictates whether to show all entities, irrespective of their protection status, or entities for which there is protection failure, i.e., aren&#39;t protected at all. | [optional] [default to &#39;ALL&#39;] |
| **entity_type** | **string**| The entity type to be queried. Set to VM by default. | [optional] [default to &#39;VM&#39;] |
| **offset** | **int**| Offset from the start of the entity list. | [optional] |
| **length** | **int**| The number of records to retrieve relative to the offset. | [optional] |

### Return type

[**\OpenAPI\Client\Model\QueryEntitiesResponse**](../Model/QueryEntitiesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `protectionRulesUuidDelete()`

```php
protectionRulesUuidDelete($uuid): \OpenAPI\Client\Model\ProtectionRuleIntentResponse
```

Delete a protection rule

Delete a protection rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProtectionRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->protectionRulesUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProtectionRulesApi->protectionRulesUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\ProtectionRuleIntentResponse**](../Model/ProtectionRuleIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `protectionRulesUuidGet()`

```php
protectionRulesUuidGet($uuid): \OpenAPI\Client\Model\ProtectionRuleIntentResponse
```

Get details for a protection rule

Get details for a protection rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProtectionRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->protectionRulesUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProtectionRulesApi->protectionRulesUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\ProtectionRuleIntentResponse**](../Model/ProtectionRuleIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `protectionRulesUuidProcessPost()`

```php
protectionRulesUuidProcessPost($uuid): \OpenAPI\Client\Model\ProtectionRuleStatus
```

Process a protection rule

It will be used whenever user wants to process a protection rule immediately. For example if an entity is protected by a protection rule, user can call this API to trigger protection rule processing. This API doesn't wait for the processing to be completed. The API triggers the protection rule processing and returns.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProtectionRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->protectionRulesUuidProcessPost($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProtectionRulesApi->protectionRulesUuidProcessPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\ProtectionRuleStatus**](../Model/ProtectionRuleStatus.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `protectionRulesUuidPut()`

```php
protectionRulesUuidPut($uuid, $body): \OpenAPI\Client\Model\ProtectionRuleIntentResponse
```

Modify protection rule

Modify protection rule

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProtectionRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\ProtectionRuleIntentInput(); // \OpenAPI\Client\Model\ProtectionRuleIntentInput

try {
    $result = $apiInstance->protectionRulesUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProtectionRulesApi->protectionRulesUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\ProtectionRuleIntentInput**](../Model/ProtectionRuleIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ProtectionRuleIntentResponse**](../Model/ProtectionRuleIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `protectionRulesUuidQueryEntitiesGet()`

```php
protectionRulesUuidQueryEntitiesGet($uuid): \OpenAPI\Client\Model\AffectedEntityList
```

Get a list of entities affected by a protection rule

Get a list of entities affected by a protection rule based on the filters provided in the protection rule definition.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ProtectionRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->protectionRulesUuidQueryEntitiesGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProtectionRulesApi->protectionRulesUuidQueryEntitiesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\AffectedEntityList**](../Model/AffectedEntityList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
