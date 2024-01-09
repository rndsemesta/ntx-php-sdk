# OpenAPI\Client\VmsApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**vmsCapabilitiesGet()**](VmsApi.md#vmsCapabilitiesGet) | **GET** /vms/capabilities | Capability information for VMs. |
| [**vmsCapabilitiesOptions()**](VmsApi.md#vmsCapabilitiesOptions) | **OPTIONS** /vms/capabilities | Returns metadata for /vms/capabilities endpoint. |
| [**vmsListPost()**](VmsApi.md#vmsListPost) | **POST** /vms/list | Get a list of existing VMs |
| [**vmsPost()**](VmsApi.md#vmsPost) | **POST** /vms | Create a new VM |
| [**vmsUuidAcpiRebootPost()**](VmsApi.md#vmsUuidAcpiRebootPost) | **POST** /vms/{uuid}/acpi_reboot | Create a VM acpi_reboot request. |
| [**vmsUuidAcpiShutdownPost()**](VmsApi.md#vmsUuidAcpiShutdownPost) | **POST** /vms/{uuid}/acpi_shutdown | Create a VM acpi_shutdown request. |
| [**vmsUuidClonePost()**](VmsApi.md#vmsUuidClonePost) | **POST** /vms/{uuid}/clone | Clone a vm. |
| [**vmsUuidDelete()**](VmsApi.md#vmsUuidDelete) | **DELETE** /vms/{uuid} | Delete an existing VM |
| [**vmsUuidExportPost()**](VmsApi.md#vmsUuidExportPost) | **POST** /vms/{uuid}/export | Create an OVA object. |
| [**vmsUuidGet()**](VmsApi.md#vmsUuidGet) | **GET** /vms/{uuid} | Get an existing VM |
| [**vmsUuidGuestRebootPost()**](VmsApi.md#vmsUuidGuestRebootPost) | **POST** /vms/{uuid}/guest_reboot | Create a VM guest_reboot request. |
| [**vmsUuidGuestShutdownPost()**](VmsApi.md#vmsUuidGuestShutdownPost) | **POST** /vms/{uuid}/guest_shutdown | Create a VM guest_shutdown request. |
| [**vmsUuidMigrateDisksPost()**](VmsApi.md#vmsUuidMigrateDisksPost) | **POST** /vms/{uuid}/migrate_disks | Migrate disks to a different container |
| [**vmsUuidPauseReplicationPost()**](VmsApi.md#vmsUuidPauseReplicationPost) | **POST** /vms/{uuid}/pause_replication | Pause the replication for the VM. |
| [**vmsUuidPowerCyclePost()**](VmsApi.md#vmsUuidPowerCyclePost) | **POST** /vms/{uuid}/power_cycle | Create a VM power_cycle request. |
| [**vmsUuidPut()**](VmsApi.md#vmsUuidPut) | **PUT** /vms/{uuid} | Update an existing VM |
| [**vmsUuidResetPost()**](VmsApi.md#vmsUuidResetPost) | **POST** /vms/{uuid}/reset | Create a VM reset request. |
| [**vmsUuidResumeReplicationPost()**](VmsApi.md#vmsUuidResumeReplicationPost) | **POST** /vms/{uuid}/resume_replication | Resume the replication for the VM. |
| [**vmsUuidRevertPost()**](VmsApi.md#vmsUuidRevertPost) | **POST** /vms/{uuid}/revert | Revert the vm to the given recovery point. |
| [**vmsUuidSnapshotPost()**](VmsApi.md#vmsUuidSnapshotPost) | **POST** /vms/{uuid}/snapshot | Create a vm recovery point. |
| [**vmsUuidUpdateIpPut()**](VmsApi.md#vmsUuidUpdateIpPut) | **PUT** /vms/{uuid}/update_ip | Request IP addresses for NICs with the given UUIDs. |
| [**vmsUuidValidateMigrationPost()**](VmsApi.md#vmsUuidValidateMigrationPost) | **POST** /vms/{uuid}/validate_migration | Validates the feasibility of VM migration to given migration target. |


## `vmsCapabilitiesGet()`

```php
vmsCapabilitiesGet($name): \OpenAPI\Client\Model\CapabilityResponse
```

Capability information for VMs.

Get capability information for VMs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of the capability

try {
    $result = $apiInstance->vmsCapabilitiesGet($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmsApi->vmsCapabilitiesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of the capability | [optional] |

### Return type

[**\OpenAPI\Client\Model\CapabilityResponse**](../Model/CapabilityResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vmsCapabilitiesOptions()`

```php
vmsCapabilitiesOptions(): \OpenAPI\Client\Model\CapabilityInformation[]
```

Returns metadata for /vms/capabilities endpoint.

List of dictionaries containing supported capability names and their descriptions for vms.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->vmsCapabilitiesOptions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmsApi->vmsCapabilitiesOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\CapabilityInformation[]**](../Model/CapabilityInformation.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vmsListPost()`

```php
vmsListPost($get_entities_request): \OpenAPI\Client\Model\VmListIntentResponse
```

Get a list of existing VMs

This operation gets a list of VMs, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\VmListMetadata(); // \OpenAPI\Client\Model\VmListMetadata

try {
    $result = $apiInstance->vmsListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmsApi->vmsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\VmListMetadata**](../Model/VmListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VmListIntentResponse**](../Model/VmListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vmsPost()`

```php
vmsPost($body): \OpenAPI\Client\Model\VmIntentResponse
```

Create a new VM

This operation submits a request to create a new VM based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\VmIntentInput(); // \OpenAPI\Client\Model\VmIntentInput

try {
    $result = $apiInstance->vmsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmsApi->vmsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\VmIntentInput**](../Model/VmIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VmIntentResponse**](../Model/VmIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vmsUuidAcpiRebootPost()`

```php
vmsUuidAcpiRebootPost($uuid, $body): \OpenAPI\Client\Model\VmSetPowerStateResponse
```

Create a VM acpi_reboot request.

Creates a VM acpi_reboot request task.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\VmSetPowerStateInput(); // \OpenAPI\Client\Model\VmSetPowerStateInput

try {
    $result = $apiInstance->vmsUuidAcpiRebootPost($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmsApi->vmsUuidAcpiRebootPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\VmSetPowerStateInput**](../Model/VmSetPowerStateInput.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\VmSetPowerStateResponse**](../Model/VmSetPowerStateResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vmsUuidAcpiShutdownPost()`

```php
vmsUuidAcpiShutdownPost($uuid, $body): \OpenAPI\Client\Model\VmSetPowerStateResponse
```

Create a VM acpi_shutdown request.

Creates a VM acpi_shutdown request task.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\VmSetPowerStateInput(); // \OpenAPI\Client\Model\VmSetPowerStateInput

try {
    $result = $apiInstance->vmsUuidAcpiShutdownPost($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmsApi->vmsUuidAcpiShutdownPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\VmSetPowerStateInput**](../Model/VmSetPowerStateInput.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\VmSetPowerStateResponse**](../Model/VmSetPowerStateResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vmsUuidClonePost()`

```php
vmsUuidClonePost($uuid, $body): \OpenAPI\Client\Model\ProceduralResponse
```

Clone a vm.

Submits a request to create a task handling vm clone operation, returns a task reference. This creates a new vm by cloning the current vm.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\VmCloneInput(); // \OpenAPI\Client\Model\VmCloneInput

try {
    $result = $apiInstance->vmsUuidClonePost($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmsApi->vmsUuidClonePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\VmCloneInput**](../Model/VmCloneInput.md)|  | [optional] |

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

## `vmsUuidDelete()`

```php
vmsUuidDelete($uuid): \OpenAPI\Client\Model\VmIntentResponse
```

Delete an existing VM

This operation submits a request to delete an existing VM.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->vmsUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmsApi->vmsUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\VmIntentResponse**](../Model/VmIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vmsUuidExportPost()`

```php
vmsUuidExportPost($uuid, $body): \OpenAPI\Client\Model\ProceduralResponse
```

Create an OVA object.

Submits a request to create a task handling OVA create operation, returns a task reference. This will export VM and create an OVA object for it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\VmExportInput(); // \OpenAPI\Client\Model\VmExportInput

try {
    $result = $apiInstance->vmsUuidExportPost($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmsApi->vmsUuidExportPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\VmExportInput**](../Model/VmExportInput.md)|  | [optional] |

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

## `vmsUuidGet()`

```php
vmsUuidGet($uuid): \OpenAPI\Client\Model\VmIntentResponse
```

Get an existing VM

This operation gets an existing VM.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->vmsUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmsApi->vmsUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\VmIntentResponse**](../Model/VmIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vmsUuidGuestRebootPost()`

```php
vmsUuidGuestRebootPost($uuid, $body): \OpenAPI\Client\Model\VmSetPowerStateResponse
```

Create a VM guest_reboot request.

Creates a VM guest_reboot request task.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\VmSetPowerStateInput(); // \OpenAPI\Client\Model\VmSetPowerStateInput

try {
    $result = $apiInstance->vmsUuidGuestRebootPost($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmsApi->vmsUuidGuestRebootPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\VmSetPowerStateInput**](../Model/VmSetPowerStateInput.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\VmSetPowerStateResponse**](../Model/VmSetPowerStateResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vmsUuidGuestShutdownPost()`

```php
vmsUuidGuestShutdownPost($uuid, $body): \OpenAPI\Client\Model\VmSetPowerStateResponse
```

Create a VM guest_shutdown request.

Creates a VM guest_shutdown request task.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\VmSetPowerStateInput(); // \OpenAPI\Client\Model\VmSetPowerStateInput

try {
    $result = $apiInstance->vmsUuidGuestShutdownPost($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmsApi->vmsUuidGuestShutdownPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\VmSetPowerStateInput**](../Model/VmSetPowerStateInput.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\VmSetPowerStateResponse**](../Model/VmSetPowerStateResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vmsUuidMigrateDisksPost()`

```php
vmsUuidMigrateDisksPost($uuid, $body): \OpenAPI\Client\Model\ProceduralResponse
```

Migrate disks to a different container

API to migrate the VM's selected disks to the specified container

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\MigrateDisksInput(); // \OpenAPI\Client\Model\MigrateDisksInput

try {
    $result = $apiInstance->vmsUuidMigrateDisksPost($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmsApi->vmsUuidMigrateDisksPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\MigrateDisksInput**](../Model/MigrateDisksInput.md)|  | [optional] |

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

## `vmsUuidPauseReplicationPost()`

```php
vmsUuidPauseReplicationPost($uuid): \OpenAPI\Client\Model\ProceduralResponse
```

Pause the replication for the VM.

API to pause replication for a given VM protected using sync protection policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->vmsUuidPauseReplicationPost($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmsApi->vmsUuidPauseReplicationPost: ', $e->getMessage(), PHP_EOL;
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

## `vmsUuidPowerCyclePost()`

```php
vmsUuidPowerCyclePost($uuid, $body): \OpenAPI\Client\Model\VmSetPowerStateResponse
```

Create a VM power_cycle request.

Creates a VM power_cycle request task.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\VmSetPowerStateInput(); // \OpenAPI\Client\Model\VmSetPowerStateInput

try {
    $result = $apiInstance->vmsUuidPowerCyclePost($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmsApi->vmsUuidPowerCyclePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\VmSetPowerStateInput**](../Model/VmSetPowerStateInput.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\VmSetPowerStateResponse**](../Model/VmSetPowerStateResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vmsUuidPut()`

```php
vmsUuidPut($uuid, $body): \OpenAPI\Client\Model\VmIntentResponse
```

Update an existing VM

This operation submits a request to update an existing VM based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\VmIntentInput(); // \OpenAPI\Client\Model\VmIntentInput

try {
    $result = $apiInstance->vmsUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmsApi->vmsUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\VmIntentInput**](../Model/VmIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VmIntentResponse**](../Model/VmIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vmsUuidResetPost()`

```php
vmsUuidResetPost($uuid, $body): \OpenAPI\Client\Model\VmSetPowerStateResponse
```

Create a VM reset request.

Creates a VM reset request task.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\VmSetPowerStateInput(); // \OpenAPI\Client\Model\VmSetPowerStateInput

try {
    $result = $apiInstance->vmsUuidResetPost($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmsApi->vmsUuidResetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\VmSetPowerStateInput**](../Model/VmSetPowerStateInput.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\VmSetPowerStateResponse**](../Model/VmSetPowerStateResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vmsUuidResumeReplicationPost()`

```php
vmsUuidResumeReplicationPost($uuid): \OpenAPI\Client\Model\ProceduralResponse
```

Resume the replication for the VM.

API to resume replication for a given VM protected using sync protection policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->vmsUuidResumeReplicationPost($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmsApi->vmsUuidResumeReplicationPost: ', $e->getMessage(), PHP_EOL;
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

## `vmsUuidRevertPost()`

```php
vmsUuidRevertPost($uuid, $body): \OpenAPI\Client\Model\ProceduralResponse
```

Revert the vm to the given recovery point.

Submits a request to create a task handling the vm revert to a recovery point operation, returns a task reference.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\VmRevertInput(); // \OpenAPI\Client\Model\VmRevertInput

try {
    $result = $apiInstance->vmsUuidRevertPost($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmsApi->vmsUuidRevertPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\VmRevertInput**](../Model/VmRevertInput.md)|  | |

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

## `vmsUuidSnapshotPost()`

```php
vmsUuidSnapshotPost($uuid, $body): \OpenAPI\Client\Model\ProceduralResponse
```

Create a vm recovery point.

Submits a request to create a task handling the snapshot operation on the vm, returns a task reference. This creates a point in time recovery point.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\VmSnapshotInput(); // \OpenAPI\Client\Model\VmSnapshotInput

try {
    $result = $apiInstance->vmsUuidSnapshotPost($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmsApi->vmsUuidSnapshotPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\VmSnapshotInput**](../Model/VmSnapshotInput.md)|  | [optional] |

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

## `vmsUuidUpdateIpPut()`

```php
vmsUuidUpdateIpPut($uuid, $body): \OpenAPI\Client\Model\ProceduralResponse
```

Request IP addresses for NICs with the given UUIDs.

Request a new IP address the currently allocated IP address.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\VmUpdateIpInput(); // \OpenAPI\Client\Model\VmUpdateIpInput

try {
    $result = $apiInstance->vmsUuidUpdateIpPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmsApi->vmsUuidUpdateIpPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\VmUpdateIpInput**](../Model/VmUpdateIpInput.md)|  | |

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

## `vmsUuidValidateMigrationPost()`

```php
vmsUuidValidateMigrationPost($uuid, $body): \OpenAPI\Client\Model\VmValidateMigrationOutputInner[]
```

Validates the feasibility of VM migration to given migration target.

Validates the feasibility of VM migration to given migration target, if not feasible returns the reason behind it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\VmValidateMigrationInput(); // \OpenAPI\Client\Model\VmValidateMigrationInput

try {
    $result = $apiInstance->vmsUuidValidateMigrationPost($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmsApi->vmsUuidValidateMigrationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\VmValidateMigrationInput**](../Model/VmValidateMigrationInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VmValidateMigrationOutputInner[]**](../Model/VmValidateMigrationOutputInner.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
