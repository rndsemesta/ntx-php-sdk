# OpenAPI\Client\RecoveryPointsApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**recoveryPointsUuidReplicatePost()**](RecoveryPointsApi.md#recoveryPointsUuidReplicatePost) | **POST** /recovery_points/{uuid}/replicate | Replicate a Recovery Point |
| [**recoveryPointsUuidRestorePost()**](RecoveryPointsApi.md#recoveryPointsUuidRestorePost) | **POST** /recovery_points/{uuid}/restore | Restore a recovery point. |


## `recoveryPointsUuidReplicatePost()`

```php
recoveryPointsUuidReplicatePost($uuid, $body): \OpenAPI\Client\Model\ProceduralResponse
```

Replicate a Recovery Point

Submits a request to replicate a Recovery Point from source Availability Zone to target Availability Zone. The successful request returns a task ID to track the replication status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RecoveryPointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\ReplicateRecoveryPointInput(); // \OpenAPI\Client\Model\ReplicateRecoveryPointInput

try {
    $result = $apiInstance->recoveryPointsUuidReplicatePost($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecoveryPointsApi->recoveryPointsUuidReplicatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\ReplicateRecoveryPointInput**](../Model/ReplicateRecoveryPointInput.md)|  | |

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

## `recoveryPointsUuidRestorePost()`

```php
recoveryPointsUuidRestorePost($uuid, $body): \OpenAPI\Client\Model\ProceduralResponse
```

Restore a recovery point.

Submits a request to create a task handling the restore of a recovery point, returns the task reference. This operation is used to restore an entire composite recovery point or a subset of entities from it. Follow the task to get the reference of the created entities.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RecoveryPointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\RecoveryPointRestoreInput(); // \OpenAPI\Client\Model\RecoveryPointRestoreInput

try {
    $result = $apiInstance->recoveryPointsUuidRestorePost($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecoveryPointsApi->recoveryPointsUuidRestorePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\RecoveryPointRestoreInput**](../Model/RecoveryPointRestoreInput.md)|  | [optional] |

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
