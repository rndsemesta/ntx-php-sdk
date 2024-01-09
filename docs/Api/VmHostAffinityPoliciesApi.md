# OpenAPI\Client\VmHostAffinityPoliciesApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**vmHostAffinityPoliciesListPost()**](VmHostAffinityPoliciesApi.md#vmHostAffinityPoliciesListPost) | **POST** /vm_host_affinity_policies/list | Get a list of existing VM Host Affinity Policies |
| [**vmHostAffinityPoliciesPost()**](VmHostAffinityPoliciesApi.md#vmHostAffinityPoliciesPost) | **POST** /vm_host_affinity_policies | Create a new VM Host Affinity Policy |
| [**vmHostAffinityPoliciesUuidDelete()**](VmHostAffinityPoliciesApi.md#vmHostAffinityPoliciesUuidDelete) | **DELETE** /vm_host_affinity_policies/{uuid} | Delete a existing VM Host Affinity Policy |
| [**vmHostAffinityPoliciesUuidGet()**](VmHostAffinityPoliciesApi.md#vmHostAffinityPoliciesUuidGet) | **GET** /vm_host_affinity_policies/{uuid} | Get a existing VM Host Affinity Policy |
| [**vmHostAffinityPoliciesUuidPut()**](VmHostAffinityPoliciesApi.md#vmHostAffinityPoliciesUuidPut) | **PUT** /vm_host_affinity_policies/{uuid} | Update a existing VM Host Affinity Policy |
| [**vmHostAffinityPoliciesUuidReEnforcePost()**](VmHostAffinityPoliciesApi.md#vmHostAffinityPoliciesUuidReEnforcePost) | **POST** /vm_host_affinity_policies/{uuid}/re_enforce | Re-enforce VM Host Affinity Policy for all the applicable VMs |
| [**vmHostAffinityPoliciesUuidVmsListPost()**](VmHostAffinityPoliciesApi.md#vmHostAffinityPoliciesUuidVmsListPost) | **POST** /vm_host_affinity_policies/{uuid}/vms_list | Information about the VMs which are part of VM Host Affinity Policy |


## `vmHostAffinityPoliciesListPost()`

```php
vmHostAffinityPoliciesListPost($get_entities_request, $include_vms_hosts_count): \OpenAPI\Client\Model\VmHostAffinityPolicyListResponse
```

Get a list of existing VM Host Affinity Policies

This operation gets a list of VM Host Affinity Policies, allowing for pagination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmHostAffinityPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\VmHostAffinityPolicyListMetadata(); // \OpenAPI\Client\Model\VmHostAffinityPolicyListMetadata
$include_vms_hosts_count = false; // bool | Query param to include VMs and Hosts count associated with the Policy. When this param is set to True, returns counts of total VMs, compliant VMs, non compliant VMs and total Hosts associated with every policy.

try {
    $result = $apiInstance->vmHostAffinityPoliciesListPost($get_entities_request, $include_vms_hosts_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmHostAffinityPoliciesApi->vmHostAffinityPoliciesListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\VmHostAffinityPolicyListMetadata**](../Model/VmHostAffinityPolicyListMetadata.md)|  | |
| **include_vms_hosts_count** | **bool**| Query param to include VMs and Hosts count associated with the Policy. When this param is set to True, returns counts of total VMs, compliant VMs, non compliant VMs and total Hosts associated with every policy. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\VmHostAffinityPolicyListResponse**](../Model/VmHostAffinityPolicyListResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vmHostAffinityPoliciesPost()`

```php
vmHostAffinityPoliciesPost($body): \OpenAPI\Client\Model\ProceduralResponse
```

Create a new VM Host Affinity Policy

This operation submits a request to create a new VM Host Affinity Policy based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmHostAffinityPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\VmHostAffinityPolicyCreateInput(); // \OpenAPI\Client\Model\VmHostAffinityPolicyCreateInput

try {
    $result = $apiInstance->vmHostAffinityPoliciesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmHostAffinityPoliciesApi->vmHostAffinityPoliciesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\VmHostAffinityPolicyCreateInput**](../Model/VmHostAffinityPolicyCreateInput.md)|  | |

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

## `vmHostAffinityPoliciesUuidDelete()`

```php
vmHostAffinityPoliciesUuidDelete($uuid): \OpenAPI\Client\Model\ProceduralResponse
```

Delete a existing VM Host Affinity Policy

This operation submits a request to delete a existing VM Host Affinity Policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmHostAffinityPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->vmHostAffinityPoliciesUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmHostAffinityPoliciesApi->vmHostAffinityPoliciesUuidDelete: ', $e->getMessage(), PHP_EOL;
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

## `vmHostAffinityPoliciesUuidGet()`

```php
vmHostAffinityPoliciesUuidGet($uuid, $include_vms_hosts_count): \OpenAPI\Client\Model\VmHostAffinityPolicyGetResponse
```

Get a existing VM Host Affinity Policy

This operation gets a existing VM Host Affinity Policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmHostAffinityPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$include_vms_hosts_count = false; // bool | Query param to include VMs and Hosts count associated with the Policy. When this param is set to True, returns counts of total VMs, compliant VMs, non compliant VMs and total Hosts.

try {
    $result = $apiInstance->vmHostAffinityPoliciesUuidGet($uuid, $include_vms_hosts_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmHostAffinityPoliciesApi->vmHostAffinityPoliciesUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **include_vms_hosts_count** | **bool**| Query param to include VMs and Hosts count associated with the Policy. When this param is set to True, returns counts of total VMs, compliant VMs, non compliant VMs and total Hosts. | [optional] [default to false] |

### Return type

[**\OpenAPI\Client\Model\VmHostAffinityPolicyGetResponse**](../Model/VmHostAffinityPolicyGetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vmHostAffinityPoliciesUuidPut()`

```php
vmHostAffinityPoliciesUuidPut($uuid, $body): \OpenAPI\Client\Model\ProceduralResponse
```

Update a existing VM Host Affinity Policy

This operation submits a request to update a existing VM Host Affinity Policy based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmHostAffinityPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\VmHostAffinityPolicyUpdateInput(); // \OpenAPI\Client\Model\VmHostAffinityPolicyUpdateInput

try {
    $result = $apiInstance->vmHostAffinityPoliciesUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmHostAffinityPoliciesApi->vmHostAffinityPoliciesUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\VmHostAffinityPolicyUpdateInput**](../Model/VmHostAffinityPolicyUpdateInput.md)|  | [optional] |

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

## `vmHostAffinityPoliciesUuidReEnforcePost()`

```php
vmHostAffinityPoliciesUuidReEnforcePost($uuid): \OpenAPI\Client\Model\ProceduralResponse
```

Re-enforce VM Host Affinity Policy for all the applicable VMs

Reapply the policy for all the affected VMs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmHostAffinityPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->vmHostAffinityPoliciesUuidReEnforcePost($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmHostAffinityPoliciesApi->vmHostAffinityPoliciesUuidReEnforcePost: ', $e->getMessage(), PHP_EOL;
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

## `vmHostAffinityPoliciesUuidVmsListPost()`

```php
vmHostAffinityPoliciesUuidVmsListPost($uuid, $get_entities_request, $status): \OpenAPI\Client\Model\VmHostAffinityPolicyVmsListResponse
```

Information about the VMs which are part of VM Host Affinity Policy

List of all the VMs which are part of input VM Host Affinity Policy and their compliance information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmHostAffinityPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$get_entities_request = new \OpenAPI\Client\Model\VmHostAffinityPolicyVmsListMetadata(); // \OpenAPI\Client\Model\VmHostAffinityPolicyVmsListMetadata
$status = 'status_example'; // string | Query filter to retrieve VMs based on compliance status. Valid status include - PENDING, COMPLIANT, NONCOMPLIANT.

try {
    $result = $apiInstance->vmHostAffinityPoliciesUuidVmsListPost($uuid, $get_entities_request, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmHostAffinityPoliciesApi->vmHostAffinityPoliciesUuidVmsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **get_entities_request** | [**\OpenAPI\Client\Model\VmHostAffinityPolicyVmsListMetadata**](../Model/VmHostAffinityPolicyVmsListMetadata.md)|  | |
| **status** | **string**| Query filter to retrieve VMs based on compliance status. Valid status include - PENDING, COMPLIANT, NONCOMPLIANT. | [optional] |

### Return type

[**\OpenAPI\Client\Model\VmHostAffinityPolicyVmsListResponse**](../Model/VmHostAffinityPolicyVmsListResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
