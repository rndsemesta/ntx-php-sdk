# OpenAPI\Client\RecoveryPlansApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**recoveryPlansListPost()**](RecoveryPlansApi.md#recoveryPlansListPost) | **POST** /recovery_plans/list | List the Recovery Plans |
| [**recoveryPlansPost()**](RecoveryPlansApi.md#recoveryPlansPost) | **POST** /recovery_plans | Create Recovery Plan |
| [**recoveryPlansUuidDelete()**](RecoveryPlansApi.md#recoveryPlansUuidDelete) | **DELETE** /recovery_plans/{uuid} | Delete Recovery Plan |
| [**recoveryPlansUuidEntitiesGet()**](RecoveryPlansApi.md#recoveryPlansUuidEntitiesGet) | **GET** /recovery_plans/{uuid}/entities | Get entities associated with the Recovery Plan |
| [**recoveryPlansUuidGet()**](RecoveryPlansApi.md#recoveryPlansUuidGet) | **GET** /recovery_plans/{uuid} | Get Recovery Plan |
| [**recoveryPlansUuidPut()**](RecoveryPlansApi.md#recoveryPlansUuidPut) | **PUT** /recovery_plans/{uuid} | Update Recovery Plan |


## `recoveryPlansListPost()`

```php
recoveryPlansListPost($get_entities_request): \OpenAPI\Client\Model\RecoveryPlanListIntentResponse
```

List the Recovery Plans

List the Recovery Plans with associated metadata

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RecoveryPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\RecoveryPlanListMetadata(); // \OpenAPI\Client\Model\RecoveryPlanListMetadata

try {
    $result = $apiInstance->recoveryPlansListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecoveryPlansApi->recoveryPlansListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\RecoveryPlanListMetadata**](../Model/RecoveryPlanListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RecoveryPlanListIntentResponse**](../Model/RecoveryPlanListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recoveryPlansPost()`

```php
recoveryPlansPost($body): \OpenAPI\Client\Model\RecoveryPlanIntentResponse
```

Create Recovery Plan

Given a spec creates a Recovery Plan with associated metadata

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RecoveryPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\RecoveryPlanIntentInput(); // \OpenAPI\Client\Model\RecoveryPlanIntentInput | Request body

try {
    $result = $apiInstance->recoveryPlansPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecoveryPlansApi->recoveryPlansPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\RecoveryPlanIntentInput**](../Model/RecoveryPlanIntentInput.md)| Request body | |

### Return type

[**\OpenAPI\Client\Model\RecoveryPlanIntentResponse**](../Model/RecoveryPlanIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recoveryPlansUuidDelete()`

```php
recoveryPlansUuidDelete($uuid): \OpenAPI\Client\Model\RecoveryPlanIntentResponse
```

Delete Recovery Plan

Delete a Recovery Plan given its UUID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RecoveryPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->recoveryPlansUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecoveryPlansApi->recoveryPlansUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\RecoveryPlanIntentResponse**](../Model/RecoveryPlanIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recoveryPlansUuidEntitiesGet()`

```php
recoveryPlansUuidEntitiesGet($uuid, $action_type, $failed_availability_zone_info_list, $recovery_availability_zone_info_list, $recovery_reference_time): \OpenAPI\Client\Model\RecoveryPlanEntities
```

Get entities associated with the Recovery Plan

Entities associated with the Recovery Plan. It includes the live entities and the entities for which Recovery Points are present on the local Availability Zones/Public Cloud.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RecoveryPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$action_type = 'action_type_example'; // string | The entities that will be recovered when an operation is performed on the Recovery Plan. Below is the list of supported action types. MIGRATE - Entities will be recovered from their latest state in the   Recovery Availability Zone. LIVE_MIGRATE - Entities will be recovered from their latest state   in the Recovery Availability Zone without VM down time. FAILOVER - Entities will be recovered from a Recovery Point at   Recovery Availability Zone. TEST_FAILOVER - Entities will be recovered from the latest Recovery   Point in the test network.
$failed_availability_zone_info_list = array('failed_availability_zone_info_list_example'); // string[] | List of Availability Zone URL and cluster UUIDs. Sample format is \"<az_url>|<cluster_uuid_1>|<cluster_uuid_2>|...\" where cluster_uuids are optional.
$recovery_availability_zone_info_list = array('recovery_availability_zone_info_list_example'); // string[] | List of Availability Zone URL and cluster UUIDs. Sample format is \"<az_url>|<cluster_uuid_1>|<cluster_uuid_2>|...\" where cluster_uuids are optional.
$recovery_reference_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Time with respect to which entities has to be fetched for Unplanned Failover. This time will be used as reference time with respect to which latest snapshot will have to be restored in case of failover. For example, if failover is required to be done using snapshot created on or before yesterday '2:00' PM, then recovery_reference_time will be set to this time. This would be given in the format %Y-%m-%dT%H:%M:%SZ.

try {
    $result = $apiInstance->recoveryPlansUuidEntitiesGet($uuid, $action_type, $failed_availability_zone_info_list, $recovery_availability_zone_info_list, $recovery_reference_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecoveryPlansApi->recoveryPlansUuidEntitiesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **action_type** | **string**| The entities that will be recovered when an operation is performed on the Recovery Plan. Below is the list of supported action types. MIGRATE - Entities will be recovered from their latest state in the   Recovery Availability Zone. LIVE_MIGRATE - Entities will be recovered from their latest state   in the Recovery Availability Zone without VM down time. FAILOVER - Entities will be recovered from a Recovery Point at   Recovery Availability Zone. TEST_FAILOVER - Entities will be recovered from the latest Recovery   Point in the test network. | [optional] |
| **failed_availability_zone_info_list** | [**string[]**](../Model/string.md)| List of Availability Zone URL and cluster UUIDs. Sample format is \&quot;&lt;az_url&gt;|&lt;cluster_uuid_1&gt;|&lt;cluster_uuid_2&gt;|...\&quot; where cluster_uuids are optional. | [optional] |
| **recovery_availability_zone_info_list** | [**string[]**](../Model/string.md)| List of Availability Zone URL and cluster UUIDs. Sample format is \&quot;&lt;az_url&gt;|&lt;cluster_uuid_1&gt;|&lt;cluster_uuid_2&gt;|...\&quot; where cluster_uuids are optional. | [optional] |
| **recovery_reference_time** | **\DateTime**| Time with respect to which entities has to be fetched for Unplanned Failover. This time will be used as reference time with respect to which latest snapshot will have to be restored in case of failover. For example, if failover is required to be done using snapshot created on or before yesterday &#39;2:00&#39; PM, then recovery_reference_time will be set to this time. This would be given in the format %Y-%m-%dT%H:%M:%SZ. | [optional] |

### Return type

[**\OpenAPI\Client\Model\RecoveryPlanEntities**](../Model/RecoveryPlanEntities.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recoveryPlansUuidGet()`

```php
recoveryPlansUuidGet($uuid): \OpenAPI\Client\Model\RecoveryPlanIntentResponse
```

Get Recovery Plan

Given a UUID, returns a Recovery Plan definition

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RecoveryPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->recoveryPlansUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecoveryPlansApi->recoveryPlansUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\RecoveryPlanIntentResponse**](../Model/RecoveryPlanIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `recoveryPlansUuidPut()`

```php
recoveryPlansUuidPut($uuid, $body): \OpenAPI\Client\Model\RecoveryPlanIntentResponse
```

Update Recovery Plan

Given a spec and Recovery Plan UUID, update Recovery Plan

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RecoveryPlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\RecoveryPlanIntentInput(); // \OpenAPI\Client\Model\RecoveryPlanIntentInput

try {
    $result = $apiInstance->recoveryPlansUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecoveryPlansApi->recoveryPlansUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\RecoveryPlanIntentInput**](../Model/RecoveryPlanIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RecoveryPlanIntentResponse**](../Model/RecoveryPlanIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
