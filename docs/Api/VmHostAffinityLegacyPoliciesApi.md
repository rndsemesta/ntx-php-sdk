# OpenAPI\Client\VmHostAffinityLegacyPoliciesApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**vmHostAffinityLegacyPoliciesListPost()**](VmHostAffinityLegacyPoliciesApi.md#vmHostAffinityLegacyPoliciesListPost) | **POST** /vm_host_affinity_legacy_policies/list | Get a list of existing VM Host Affinity Legacy Policies |
| [**vmHostAffinityLegacyPoliciesUuidDelete()**](VmHostAffinityLegacyPoliciesApi.md#vmHostAffinityLegacyPoliciesUuidDelete) | **DELETE** /vm_host_affinity_legacy_policies/{uuid} | Delete a existing VM Host Affinity Legacy Policy |


## `vmHostAffinityLegacyPoliciesListPost()`

```php
vmHostAffinityLegacyPoliciesListPost($get_entities_request): \OpenAPI\Client\Model\VmHostAffinityLegacyPolicyListResponse
```

Get a list of existing VM Host Affinity Legacy Policies

This operation gets a list of VM Host Affinity Legacy Policies, allowing for pagination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmHostAffinityLegacyPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\VmHostAffinityLegacyPolicyListMetadata(); // \OpenAPI\Client\Model\VmHostAffinityLegacyPolicyListMetadata

try {
    $result = $apiInstance->vmHostAffinityLegacyPoliciesListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmHostAffinityLegacyPoliciesApi->vmHostAffinityLegacyPoliciesListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\VmHostAffinityLegacyPolicyListMetadata**](../Model/VmHostAffinityLegacyPolicyListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VmHostAffinityLegacyPolicyListResponse**](../Model/VmHostAffinityLegacyPolicyListResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vmHostAffinityLegacyPoliciesUuidDelete()`

```php
vmHostAffinityLegacyPoliciesUuidDelete($uuid): \OpenAPI\Client\Model\ProceduralResponse
```

Delete a existing VM Host Affinity Legacy Policy

This operation submits a request to delete a existing VM Host Affinity Legacy Policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmHostAffinityLegacyPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->vmHostAffinityLegacyPoliciesUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmHostAffinityLegacyPoliciesApi->vmHostAffinityLegacyPoliciesUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

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
