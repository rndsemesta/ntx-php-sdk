# OpenAPI\Client\ClustersApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**clustersEntityReplicationTargetDetailsPost()**](ClustersApi.md#clustersEntityReplicationTargetDetailsPost) | **POST** /clusters/entity_replication_target_details | Get the placement information for an entity. This will be used to identify the replication target for an entity snapshot or placement of the entity. |
| [**clustersListPost()**](ClustersApi.md#clustersListPost) | **POST** /clusters/list | Get a list of existing clusters |
| [**clustersMulticlusterConfigClusterUuidMigrateSspConfigPost()**](ClustersApi.md#clustersMulticlusterConfigClusterUuidMigrateSspConfigPost) | **POST** /clusters/multicluster_config/{cluster_uuid}/migrate_ssp_config | Migrate SSP config from a Prism Element. |
| [**clustersMulticlusterConfigPost()**](ClustersApi.md#clustersMulticlusterConfigPost) | **POST** /clusters/multicluster_config | Apply multicluster configuration from Prism Central. |
| [**clustersMulticlusterConfigUuidCancelPost()**](ClustersApi.md#clustersMulticlusterConfigUuidCancelPost) | **POST** /clusters/multicluster_config/{uuid}/cancel | Cancel a multicluster configuration request from Prism Central. |
| [**clustersMulticlusterConfigUuidDelete()**](ClustersApi.md#clustersMulticlusterConfigUuidDelete) | **DELETE** /clusters/multicluster_config/{uuid} | Delete a scheduled and unprocessed multicluster configuration request. |
| [**clustersMulticlusterConfigUuidPausePost()**](ClustersApi.md#clustersMulticlusterConfigUuidPausePost) | **POST** /clusters/multicluster_config/{uuid}/pause | Pause a multicluster configuration request from Prism Central. |
| [**clustersMulticlusterConfigUuidPut()**](ClustersApi.md#clustersMulticlusterConfigUuidPut) | **PUT** /clusters/multicluster_config/{uuid} | Update a scheduled and unprocessed multicluster configuration request. |
| [**clustersMulticlusterConfigUuidResumePost()**](ClustersApi.md#clustersMulticlusterConfigUuidResumePost) | **POST** /clusters/multicluster_config/{uuid}/resume | Resume a paused multicluster configuration request. |
| [**clustersRecoveryPointResourceReservationPost()**](ClustersApi.md#clustersRecoveryPointResourceReservationPost) | **POST** /clusters/recovery_point_resource_reservation | Update the Lazan resource reservation lease for the given recovery point replication. |
| [**clustersSynchronousReplicationCapablePost()**](ClustersApi.md#clustersSynchronousReplicationCapablePost) | **POST** /clusters/synchronous_replication_capable | Get a list of existing clusters |
| [**clustersUuidCertificatesCaCertsCaNameDelete()**](ClustersApi.md#clustersUuidCertificatesCaCertsCaNameDelete) | **DELETE** /clusters/{uuid}/certificates/ca_certs/{ca_name} | Delete the CA certificate |
| [**clustersUuidCertificatesCaCertsPost()**](ClustersApi.md#clustersUuidCertificatesCaCertsPost) | **POST** /clusters/{uuid}/certificates/ca_certs | Add a new CA certificate |
| [**clustersUuidCertificatesClientAuthDelete()**](ClustersApi.md#clustersUuidCertificatesClientAuthDelete) | **DELETE** /clusters/{uuid}/certificates/client_auth | Remove the CA chain for client authentication |
| [**clustersUuidCertificatesClientAuthPost()**](ClustersApi.md#clustersUuidCertificatesClientAuthPost) | **POST** /clusters/{uuid}/certificates/client_auth | Import CA chain for client authentication |
| [**clustersUuidCertificatesClientAuthPut()**](ClustersApi.md#clustersUuidCertificatesClientAuthPut) | **PUT** /clusters/{uuid}/certificates/client_auth | Replace the CA chain for client authentication |
| [**clustersUuidCertificatesCsrsGet()**](ClustersApi.md#clustersUuidCertificatesCsrsGet) | **GET** /clusters/{uuid}/certificates/csrs | Download CSRs from cluster |
| [**clustersUuidCertificatesCsrsNodeIpGet()**](ClustersApi.md#clustersUuidCertificatesCsrsNodeIpGet) | **GET** /clusters/{uuid}/certificates/csrs/{node_ip} | Download CSR from a discovered node |
| [**clustersUuidCertificatesPemkeyImportPost()**](ClustersApi.md#clustersUuidCertificatesPemkeyImportPost) | **POST** /clusters/{uuid}/certificates/pemkey/import | Import a new key |
| [**clustersUuidCertificatesPemkeyPost()**](ClustersApi.md#clustersUuidCertificatesPemkeyPost) | **POST** /clusters/{uuid}/certificates/pemkey | Generate a 2048 bits cipher length RSA key |
| [**clustersUuidCertificatesRootDelete()**](ClustersApi.md#clustersUuidCertificatesRootDelete) | **DELETE** /clusters/{uuid}/certificates/root | Remove PC root certificates |
| [**clustersUuidCertificatesRootGet()**](ClustersApi.md#clustersUuidCertificatesRootGet) | **GET** /clusters/{uuid}/certificates/root | Retrieve PC root certificates |
| [**clustersUuidCertificatesRootPost()**](ClustersApi.md#clustersUuidCertificatesRootPost) | **POST** /clusters/{uuid}/certificates/root | Save a PC root certificate on a PC or a PE |
| [**clustersUuidCertificatesSvmCertsKmsUuidPost()**](ClustersApi.md#clustersUuidCertificatesSvmCertsKmsUuidPost) | **POST** /clusters/{uuid}/certificates/svm_certs/{kms_uuid} | Add one or more certificates to a service VM |
| [**clustersUuidCertificatesSvmCertsNodeUuidKmsUuidDelete()**](ClustersApi.md#clustersUuidCertificatesSvmCertsNodeUuidKmsUuidDelete) | **DELETE** /clusters/{uuid}/certificates/svm_certs/{node_uuid}/{kms_uuid} | Delete the certificate on a service VM |
| [**clustersUuidCertificatesSvmCertsNodeUuidKmsUuidPut()**](ClustersApi.md#clustersUuidCertificatesSvmCertsNodeUuidKmsUuidPut) | **PUT** /clusters/{uuid}/certificates/svm_certs/{node_uuid}/{kms_uuid} | Replace the certificate on a service VM |
| [**clustersUuidCloudCredentialsCloudTypeCloudCredentialsIdDelete()**](ClustersApi.md#clustersUuidCloudCredentialsCloudTypeCloudCredentialsIdDelete) | **DELETE** /clusters/{uuid}/cloud_credentials/{cloud_type}/{cloud_credentials_id} | Delete a existing cloud credentials |
| [**clustersUuidCloudCredentialsCloudTypeCloudCredentialsIdGet()**](ClustersApi.md#clustersUuidCloudCredentialsCloudTypeCloudCredentialsIdGet) | **GET** /clusters/{uuid}/cloud_credentials/{cloud_type}/{cloud_credentials_id} | Get a existing cloud credentials |
| [**clustersUuidCloudCredentialsCloudTypeCloudCredentialsIdPut()**](ClustersApi.md#clustersUuidCloudCredentialsCloudTypeCloudCredentialsIdPut) | **PUT** /clusters/{uuid}/cloud_credentials/{cloud_type}/{cloud_credentials_id} | Update a existing cloud credentials |
| [**clustersUuidCloudCredentialsCloudTypeDelete()**](ClustersApi.md#clustersUuidCloudCredentialsCloudTypeDelete) | **DELETE** /clusters/{uuid}/cloud_credentials/{cloud_type} | Delete all cloud credentials |
| [**clustersUuidCloudCredentialsCloudTypeListPost()**](ClustersApi.md#clustersUuidCloudCredentialsCloudTypeListPost) | **POST** /clusters/{uuid}/cloud_credentials/{cloud_type}/list | Get a list of existing cloud credentials |
| [**clustersUuidCloudCredentialsCloudTypePost()**](ClustersApi.md#clustersUuidCloudCredentialsCloudTypePost) | **POST** /clusters/{uuid}/cloud_credentials/{cloud_type} | Add a cloud credential for accessing cloud sites |
| [**clustersUuidGet()**](ClustersApi.md#clustersUuidGet) | **GET** /clusters/{uuid} | Get a existing cluster |
| [**clustersUuidPut()**](ClustersApi.md#clustersUuidPut) | **PUT** /clusters/{uuid} | Update a existing cluster |


## `clustersEntityReplicationTargetDetailsPost()`

```php
clustersEntityReplicationTargetDetailsPost($spec): \OpenAPI\Client\Model\PlacementDetail
```

Get the placement information for an entity. This will be used to identify the replication target for an entity snapshot or placement of the entity.

Get entity placement details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$spec = new \OpenAPI\Client\Model\PlacementSpec(); // \OpenAPI\Client\Model\PlacementSpec | Entity spec.

try {
    $result = $apiInstance->clustersEntityReplicationTargetDetailsPost($spec);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->clustersEntityReplicationTargetDetailsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **spec** | [**\OpenAPI\Client\Model\PlacementSpec**](../Model/PlacementSpec.md)| Entity spec. | |

### Return type

[**\OpenAPI\Client\Model\PlacementDetail**](../Model/PlacementDetail.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clustersListPost()`

```php
clustersListPost($get_entities_request, $force_refresh): \OpenAPI\Client\Model\ClusterListIntentResponse
```

Get a list of existing clusters

This operation gets a list of clusters, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\ClusterListMetadata(); // \OpenAPI\Client\Model\ClusterListMetadata
$force_refresh = 'force_refresh_example'; // string | Forcefully get the latest response. (Values can be True, False)

try {
    $result = $apiInstance->clustersListPost($get_entities_request, $force_refresh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->clustersListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\ClusterListMetadata**](../Model/ClusterListMetadata.md)|  | |
| **force_refresh** | **string**| Forcefully get the latest response. (Values can be True, False) | [optional] |

### Return type

[**\OpenAPI\Client\Model\ClusterListIntentResponse**](../Model/ClusterListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clustersMulticlusterConfigClusterUuidMigrateSspConfigPost()`

```php
clustersMulticlusterConfigClusterUuidMigrateSspConfigPost($cluster_uuid, $body): \OpenAPI\Client\Model\SspMigrationStatus
```

Migrate SSP config from a Prism Element.

Migrate SSP config from a Prism Element.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cluster_uuid = 'cluster_uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\SspConfigInput(); // \OpenAPI\Client\Model\SspConfigInput

try {
    $result = $apiInstance->clustersMulticlusterConfigClusterUuidMigrateSspConfigPost($cluster_uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->clustersMulticlusterConfigClusterUuidMigrateSspConfigPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cluster_uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\SspConfigInput**](../Model/SspConfigInput.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\SspMigrationStatus**](../Model/SspMigrationStatus.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clustersMulticlusterConfigPost()`

```php
clustersMulticlusterConfigPost($body): \OpenAPI\Client\Model\MulticlusterConfigIntentResponse
```

Apply multicluster configuration from Prism Central.

Apply multicluster configuration from Prism Central.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\MulticlusterConfigIntentInput(); // \OpenAPI\Client\Model\MulticlusterConfigIntentInput

try {
    $result = $apiInstance->clustersMulticlusterConfigPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->clustersMulticlusterConfigPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\MulticlusterConfigIntentInput**](../Model/MulticlusterConfigIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\MulticlusterConfigIntentResponse**](../Model/MulticlusterConfigIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clustersMulticlusterConfigUuidCancelPost()`

```php
clustersMulticlusterConfigUuidCancelPost($uuid)
```

Cancel a multicluster configuration request from Prism Central.

Cancel a multicluster configuration request by cancelling all queued cluster configuration tasks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $apiInstance->clustersMulticlusterConfigUuidCancelPost($uuid);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->clustersMulticlusterConfigUuidCancelPost: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clustersMulticlusterConfigUuidDelete()`

```php
clustersMulticlusterConfigUuidDelete($uuid): \OpenAPI\Client\Model\MulticlusterConfigIntentResponse
```

Delete a scheduled and unprocessed multicluster configuration request.

Delete a scheduled and unprocessed multicluster configuration request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->clustersMulticlusterConfigUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->clustersMulticlusterConfigUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\MulticlusterConfigIntentResponse**](../Model/MulticlusterConfigIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clustersMulticlusterConfigUuidPausePost()`

```php
clustersMulticlusterConfigUuidPausePost($uuid)
```

Pause a multicluster configuration request from Prism Central.

Pause a multicluster configuration request by pausing all queued cluster configuration tasks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $apiInstance->clustersMulticlusterConfigUuidPausePost($uuid);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->clustersMulticlusterConfigUuidPausePost: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clustersMulticlusterConfigUuidPut()`

```php
clustersMulticlusterConfigUuidPut($uuid, $body): \OpenAPI\Client\Model\MulticlusterConfigIntentResponse
```

Update a scheduled and unprocessed multicluster configuration request.

Update a scheduled and unprocessed multicluster configuration request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\MulticlusterConfigIntentInput(); // \OpenAPI\Client\Model\MulticlusterConfigIntentInput

try {
    $result = $apiInstance->clustersMulticlusterConfigUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->clustersMulticlusterConfigUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\MulticlusterConfigIntentInput**](../Model/MulticlusterConfigIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\MulticlusterConfigIntentResponse**](../Model/MulticlusterConfigIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clustersMulticlusterConfigUuidResumePost()`

```php
clustersMulticlusterConfigUuidResumePost($uuid)
```

Resume a paused multicluster configuration request.

Resume a paused multicluster configuration request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $apiInstance->clustersMulticlusterConfigUuidResumePost($uuid);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->clustersMulticlusterConfigUuidResumePost: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clustersRecoveryPointResourceReservationPost()`

```php
clustersRecoveryPointResourceReservationPost($spec)
```

Update the Lazan resource reservation lease for the given recovery point replication.

Update Lazan resource reservation lease.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$spec = new \OpenAPI\Client\Model\RecoveryPointResourceReservationSpec(); // \OpenAPI\Client\Model\RecoveryPointResourceReservationSpec | Entity spec.

try {
    $apiInstance->clustersRecoveryPointResourceReservationPost($spec);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->clustersRecoveryPointResourceReservationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **spec** | [**\OpenAPI\Client\Model\RecoveryPointResourceReservationSpec**](../Model/RecoveryPointResourceReservationSpec.md)| Entity spec. | |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clustersSynchronousReplicationCapablePost()`

```php
clustersSynchronousReplicationCapablePost($body): \OpenAPI\Client\Model\ClusterSynchronousReplicationCapableResponseInner[]
```

Get a list of existing clusters

\"API to check if a remote cluster is synchronous replication capable.\"

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ClusterSynchronousReplicationCapableInput(); // \OpenAPI\Client\Model\ClusterSynchronousReplicationCapableInput

try {
    $result = $apiInstance->clustersSynchronousReplicationCapablePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->clustersSynchronousReplicationCapablePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\ClusterSynchronousReplicationCapableInput**](../Model/ClusterSynchronousReplicationCapableInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ClusterSynchronousReplicationCapableResponseInner[]**](../Model/ClusterSynchronousReplicationCapableResponseInner.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clustersUuidCertificatesCaCertsCaNameDelete()`

```php
clustersUuidCertificatesCaCertsCaNameDelete($uuid, $ca_name)
```

Delete the CA certificate

Delete the CA certificate specified by certificate authority name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$ca_name = 'ca_name_example'; // string

try {
    $apiInstance->clustersUuidCertificatesCaCertsCaNameDelete($uuid, $ca_name);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->clustersUuidCertificatesCaCertsCaNameDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **ca_name** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clustersUuidCertificatesCaCertsPost()`

```php
clustersUuidCertificatesCaCertsPost($uuid, $spec)
```

Add a new CA certificate

Add a new CA certificate

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$spec = new \OpenAPI\Client\Model\CaCert(); // \OpenAPI\Client\Model\CaCert

try {
    $apiInstance->clustersUuidCertificatesCaCertsPost($uuid, $spec);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->clustersUuidCertificatesCaCertsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **spec** | [**\OpenAPI\Client\Model\CaCert**](../Model/CaCert.md)|  | |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clustersUuidCertificatesClientAuthDelete()`

```php
clustersUuidCertificatesClientAuthDelete($uuid)
```

Remove the CA chain for client authentication

Remove the CA chain for client authentication

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $apiInstance->clustersUuidCertificatesClientAuthDelete($uuid);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->clustersUuidCertificatesClientAuthDelete: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clustersUuidCertificatesClientAuthPost()`

```php
clustersUuidCertificatesClientAuthPost($uuid, $spec)
```

Import CA chain for client authentication

Import CA chain for client authentication

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$spec = new \OpenAPI\Client\Model\CaChainSpec(); // \OpenAPI\Client\Model\CaChainSpec

try {
    $apiInstance->clustersUuidCertificatesClientAuthPost($uuid, $spec);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->clustersUuidCertificatesClientAuthPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **spec** | [**\OpenAPI\Client\Model\CaChainSpec**](../Model/CaChainSpec.md)|  | |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clustersUuidCertificatesClientAuthPut()`

```php
clustersUuidCertificatesClientAuthPut($uuid, $spec)
```

Replace the CA chain for client authentication

Replace the CA chain for client authentication

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$spec = new \OpenAPI\Client\Model\CaChainSpec(); // \OpenAPI\Client\Model\CaChainSpec

try {
    $apiInstance->clustersUuidCertificatesClientAuthPut($uuid, $spec);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->clustersUuidCertificatesClientAuthPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **spec** | [**\OpenAPI\Client\Model\CaChainSpec**](../Model/CaChainSpec.md)|  | |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clustersUuidCertificatesCsrsGet()`

```php
clustersUuidCertificatesCsrsGet($uuid, $body)
```

Download CSRs from cluster

Download Certificate Signing Requests from cluster

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\CsrsSpec(); // \OpenAPI\Client\Model\CsrsSpec

try {
    $apiInstance->clustersUuidCertificatesCsrsGet($uuid, $body);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->clustersUuidCertificatesCsrsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\CsrsSpec**](../Model/CsrsSpec.md)|  | |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clustersUuidCertificatesCsrsNodeIpGet()`

```php
clustersUuidCertificatesCsrsNodeIpGet($uuid, $node_ip)
```

Download CSR from a discovered node

Download Certificate Signing Request from a discovered node

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$node_ip = 'node_ip_example'; // string

try {
    $apiInstance->clustersUuidCertificatesCsrsNodeIpGet($uuid, $node_ip);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->clustersUuidCertificatesCsrsNodeIpGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **node_ip** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clustersUuidCertificatesPemkeyImportPost()`

```php
clustersUuidCertificatesPemkeyImportPost($uuid, $spec)
```

Import a new key

Import a new key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$spec = new \OpenAPI\Client\Model\PemkeySpec(); // \OpenAPI\Client\Model\PemkeySpec

try {
    $apiInstance->clustersUuidCertificatesPemkeyImportPost($uuid, $spec);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->clustersUuidCertificatesPemkeyImportPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **spec** | [**\OpenAPI\Client\Model\PemkeySpec**](../Model/PemkeySpec.md)|  | |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clustersUuidCertificatesPemkeyPost()`

```php
clustersUuidCertificatesPemkeyPost($uuid)
```

Generate a 2048 bits cipher length RSA key

Generate a 2048 bits cipher length RSA key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $apiInstance->clustersUuidCertificatesPemkeyPost($uuid);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->clustersUuidCertificatesPemkeyPost: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clustersUuidCertificatesRootDelete()`

```php
clustersUuidCertificatesRootDelete($uuid)
```

Remove PC root certificates

On PC: - Delete the root certificate that is associated with the specified   cluster UUID from the PC. - Delete the specified root certificate from all PEs registered with the   PC. On PE: - Delete the root certificate that is associated with the specified   cluster UUID from the PE.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $apiInstance->clustersUuidCertificatesRootDelete($uuid);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->clustersUuidCertificatesRootDelete: ', $e->getMessage(), PHP_EOL;
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
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clustersUuidCertificatesRootGet()`

```php
clustersUuidCertificatesRootGet($uuid): \OpenAPI\Client\Model\Certificate
```

Retrieve PC root certificates

On PC: - If the UUID refers to this PC, return the root certificate for the PC. - If the UUID refers to a peer PC, this request is to verify if the peer   root certificate has been stored on this PC, as well as all registered   PEs to this PC; if this is verified, it will return the peer root   certificate. On PE: - The receiving PE returns the root certificate that is associated with   the specified cluster UUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->clustersUuidCertificatesRootGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->clustersUuidCertificatesRootGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\Certificate**](../Model/Certificate.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clustersUuidCertificatesRootPost()`

```php
clustersUuidCertificatesRootPost($uuid, $root_cert): \OpenAPI\Client\Model\RootCertificate
```

Save a PC root certificate on a PC or a PE

On PC: - The request specifies with an \"INITIATOR\" role: The PC initiates a   root certificate exchange with all peer PCs. - The request specifies with an \"ACCEPTOR\" role: The PC performs root   certficate exchange with the peer PC by saving peer root certificate   to this PC, as well as all PEs registered with this PC. On PE: - The receiving PE save the peer root certificate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$root_cert = new \OpenAPI\Client\Model\RootCertificate(); // \OpenAPI\Client\Model\RootCertificate

try {
    $result = $apiInstance->clustersUuidCertificatesRootPost($uuid, $root_cert);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->clustersUuidCertificatesRootPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **root_cert** | [**\OpenAPI\Client\Model\RootCertificate**](../Model/RootCertificate.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RootCertificate**](../Model/RootCertificate.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clustersUuidCertificatesSvmCertsKmsUuidPost()`

```php
clustersUuidCertificatesSvmCertsKmsUuidPost($uuid, $kms_uuid, $body)
```

Add one or more certificates to a service VM

Add one or more certificates to a service VM

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$kms_uuid = 'kms_uuid_example'; // string
$body = new \OpenAPI\Client\Model\CertificateSpecUploadInput(); // \OpenAPI\Client\Model\CertificateSpecUploadInput

try {
    $apiInstance->clustersUuidCertificatesSvmCertsKmsUuidPost($uuid, $kms_uuid, $body);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->clustersUuidCertificatesSvmCertsKmsUuidPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **kms_uuid** | **string**|  | |
| **body** | [**\OpenAPI\Client\Model\CertificateSpecUploadInput**](../Model/CertificateSpecUploadInput.md)|  | |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clustersUuidCertificatesSvmCertsNodeUuidKmsUuidDelete()`

```php
clustersUuidCertificatesSvmCertsNodeUuidKmsUuidDelete($uuid, $node_uuid, $kms_uuid)
```

Delete the certificate on a service VM

Delete the certificate on a service VM

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$node_uuid = 'node_uuid_example'; // string
$kms_uuid = 'kms_uuid_example'; // string

try {
    $apiInstance->clustersUuidCertificatesSvmCertsNodeUuidKmsUuidDelete($uuid, $node_uuid, $kms_uuid);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->clustersUuidCertificatesSvmCertsNodeUuidKmsUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **node_uuid** | **string**|  | |
| **kms_uuid** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clustersUuidCertificatesSvmCertsNodeUuidKmsUuidPut()`

```php
clustersUuidCertificatesSvmCertsNodeUuidKmsUuidPut($uuid, $node_uuid, $kms_uuid, $cert)
```

Replace the certificate on a service VM

Replace the certificate on a service VM

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$node_uuid = 'node_uuid_example'; // string
$kms_uuid = 'kms_uuid_example'; // string
$cert = new \OpenAPI\Client\Model\Certificate(); // \OpenAPI\Client\Model\Certificate

try {
    $apiInstance->clustersUuidCertificatesSvmCertsNodeUuidKmsUuidPut($uuid, $node_uuid, $kms_uuid, $cert);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->clustersUuidCertificatesSvmCertsNodeUuidKmsUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **node_uuid** | **string**|  | |
| **kms_uuid** | **string**|  | |
| **cert** | [**\OpenAPI\Client\Model\Certificate**](../Model/Certificate.md)|  | |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clustersUuidCloudCredentialsCloudTypeCloudCredentialsIdDelete()`

```php
clustersUuidCloudCredentialsCloudTypeCloudCredentialsIdDelete($uuid, $cloud_type, $cloud_credentials_id): \OpenAPI\Client\Model\CloudCredentialsIntentResponse
```

Delete a existing cloud credentials

This operation submits a request to delete a existing cloud credentials.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$cloud_type = 'cloud_type_example'; // string | The Cloud Type.
$cloud_credentials_id = 56; // int

try {
    $result = $apiInstance->clustersUuidCloudCredentialsCloudTypeCloudCredentialsIdDelete($uuid, $cloud_type, $cloud_credentials_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->clustersUuidCloudCredentialsCloudTypeCloudCredentialsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **cloud_type** | **string**| The Cloud Type. | |
| **cloud_credentials_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\CloudCredentialsIntentResponse**](../Model/CloudCredentialsIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clustersUuidCloudCredentialsCloudTypeCloudCredentialsIdGet()`

```php
clustersUuidCloudCredentialsCloudTypeCloudCredentialsIdGet($uuid, $cloud_type, $cloud_credentials_id): \OpenAPI\Client\Model\CloudCredentialsIntentResponse
```

Get a existing cloud credentials

This operation gets a existing cloud credentials.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$cloud_type = 'cloud_type_example'; // string | The Cloud Type.
$cloud_credentials_id = 56; // int

try {
    $result = $apiInstance->clustersUuidCloudCredentialsCloudTypeCloudCredentialsIdGet($uuid, $cloud_type, $cloud_credentials_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->clustersUuidCloudCredentialsCloudTypeCloudCredentialsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **cloud_type** | **string**| The Cloud Type. | |
| **cloud_credentials_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\CloudCredentialsIntentResponse**](../Model/CloudCredentialsIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clustersUuidCloudCredentialsCloudTypeCloudCredentialsIdPut()`

```php
clustersUuidCloudCredentialsCloudTypeCloudCredentialsIdPut($uuid, $cloud_type, $cloud_credentials_id, $body): \OpenAPI\Client\Model\CloudCredentialsIntentResponse
```

Update a existing cloud credentials

This operation submits a request to update a existing cloud credentials based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$cloud_type = 'cloud_type_example'; // string | The Cloud Type.
$cloud_credentials_id = 56; // int
$body = new \OpenAPI\Client\Model\CloudCredentialsIntentInput(); // \OpenAPI\Client\Model\CloudCredentialsIntentInput

try {
    $result = $apiInstance->clustersUuidCloudCredentialsCloudTypeCloudCredentialsIdPut($uuid, $cloud_type, $cloud_credentials_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->clustersUuidCloudCredentialsCloudTypeCloudCredentialsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **cloud_type** | **string**| The Cloud Type. | |
| **cloud_credentials_id** | **int**|  | |
| **body** | [**\OpenAPI\Client\Model\CloudCredentialsIntentInput**](../Model/CloudCredentialsIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CloudCredentialsIntentResponse**](../Model/CloudCredentialsIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clustersUuidCloudCredentialsCloudTypeDelete()`

```php
clustersUuidCloudCredentialsCloudTypeDelete($uuid, $cloud_type): \OpenAPI\Client\Model\CloudCredentialsIntentResponse
```

Delete all cloud credentials

Delete all cloud credentials

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$cloud_type = 'cloud_type_example'; // string | The Cloud Type.

try {
    $result = $apiInstance->clustersUuidCloudCredentialsCloudTypeDelete($uuid, $cloud_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->clustersUuidCloudCredentialsCloudTypeDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **cloud_type** | **string**| The Cloud Type. | |

### Return type

[**\OpenAPI\Client\Model\CloudCredentialsIntentResponse**](../Model/CloudCredentialsIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clustersUuidCloudCredentialsCloudTypeListPost()`

```php
clustersUuidCloudCredentialsCloudTypeListPost($uuid, $cloud_type, $get_entities_request): \OpenAPI\Client\Model\CloudCredentialsListIntentResponse
```

Get a list of existing cloud credentials

This operation gets a list of cloud credentials, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$cloud_type = 'cloud_type_example'; // string | The Cloud Type.
$get_entities_request = new \OpenAPI\Client\Model\CloudCredentialsListMetadata(); // \OpenAPI\Client\Model\CloudCredentialsListMetadata

try {
    $result = $apiInstance->clustersUuidCloudCredentialsCloudTypeListPost($uuid, $cloud_type, $get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->clustersUuidCloudCredentialsCloudTypeListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **cloud_type** | **string**| The Cloud Type. | |
| **get_entities_request** | [**\OpenAPI\Client\Model\CloudCredentialsListMetadata**](../Model/CloudCredentialsListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CloudCredentialsListIntentResponse**](../Model/CloudCredentialsListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clustersUuidCloudCredentialsCloudTypePost()`

```php
clustersUuidCloudCredentialsCloudTypePost($uuid, $cloud_type, $body): \OpenAPI\Client\Model\CloudCredentialsIntentResponse
```

Add a cloud credential for accessing cloud sites

Add a cloud credential for accessing cloud sites

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$cloud_type = 'cloud_type_example'; // string | The Cloud Type.
$body = new \OpenAPI\Client\Model\CloudCredentialsIntentInput(); // \OpenAPI\Client\Model\CloudCredentialsIntentInput

try {
    $result = $apiInstance->clustersUuidCloudCredentialsCloudTypePost($uuid, $cloud_type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->clustersUuidCloudCredentialsCloudTypePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **cloud_type** | **string**| The Cloud Type. | |
| **body** | [**\OpenAPI\Client\Model\CloudCredentialsIntentInput**](../Model/CloudCredentialsIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CloudCredentialsIntentResponse**](../Model/CloudCredentialsIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clustersUuidGet()`

```php
clustersUuidGet($uuid): \OpenAPI\Client\Model\ClusterIntentResponse
```

Get a existing cluster

This operation gets a existing cluster.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->clustersUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->clustersUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\ClusterIntentResponse**](../Model/ClusterIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `clustersUuidPut()`

```php
clustersUuidPut($uuid, $body): \OpenAPI\Client\Model\ClusterIntentResponse
```

Update a existing cluster

This operation submits a request to update a existing cluster based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ClustersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\ClusterIntentInput(); // \OpenAPI\Client\Model\ClusterIntentInput

try {
    $result = $apiInstance->clustersUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClustersApi->clustersUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\ClusterIntentInput**](../Model/ClusterIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ClusterIntentResponse**](../Model/ClusterIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
