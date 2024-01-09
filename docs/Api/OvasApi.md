# OpenAPI\Client\OvasApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ovasCapabilitiesGet()**](OvasApi.md#ovasCapabilitiesGet) | **GET** /ovas/capabilities | Capability information for OVAs. |
| [**ovasCapabilitiesOptions()**](OvasApi.md#ovasCapabilitiesOptions) | **OPTIONS** /ovas/capabilities | Returns metadata for /ovas/capabilities endpoint. |
| [**ovasListPost()**](OvasApi.md#ovasListPost) | **POST** /ovas/list | Get a list of existing OVAs |
| [**ovasPost()**](OvasApi.md#ovasPost) | **POST** /ovas | Create a new ova |
| [**ovasUuidChunksConcatenatePost()**](OvasApi.md#ovasUuidChunksConcatenatePost) | **POST** /ovas/{uuid}/chunks/concatenate | Concatenate uploaded file chunks of an OVA |
| [**ovasUuidChunksHead()**](OvasApi.md#ovasUuidChunksHead) | **HEAD** /ovas/{uuid}/chunks | Uploaded OVA file info |
| [**ovasUuidChunksPut()**](OvasApi.md#ovasUuidChunksPut) | **PUT** /ovas/{uuid}/chunks | Upload file chunk of an OVA |
| [**ovasUuidDelete()**](OvasApi.md#ovasUuidDelete) | **DELETE** /ovas/{uuid} | Delete a existing OVA |
| [**ovasUuidDisksDiskIdGet()**](OvasApi.md#ovasUuidDisksDiskIdGet) | **GET** /ovas/{uuid}/disks/{disk_id} | Get an existing disk of an OVA |
| [**ovasUuidDisksGet()**](OvasApi.md#ovasUuidDisksGet) | **GET** /ovas/{uuid}/disks | Gets a list of existing disks of an OVA |
| [**ovasUuidFileGet()**](OvasApi.md#ovasUuidFileGet) | **GET** /ovas/{uuid}/file | Get OVA Contents |
| [**ovasUuidGet()**](OvasApi.md#ovasUuidGet) | **GET** /ovas/{uuid} | Get an existing OVA |
| [**ovasUuidPut()**](OvasApi.md#ovasUuidPut) | **PUT** /ovas/{uuid} | Update name of an existing OVA |
| [**ovasUuidVmSpecGet()**](OvasApi.md#ovasUuidVmSpecGet) | **GET** /ovas/{uuid}/vm_spec | Get VM spec from an OVA. |


## `ovasCapabilitiesGet()`

```php
ovasCapabilitiesGet($name): \OpenAPI\Client\Model\CapabilityResponse
```

Capability information for OVAs.

Get capability information for OVAs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OvasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of the capability

try {
    $result = $apiInstance->ovasCapabilitiesGet($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OvasApi->ovasCapabilitiesGet: ', $e->getMessage(), PHP_EOL;
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

## `ovasCapabilitiesOptions()`

```php
ovasCapabilitiesOptions(): \OpenAPI\Client\Model\CapabilityInformation[]
```

Returns metadata for /ovas/capabilities endpoint.

List of dictionaries containing supported capability names and their descriptions for OVAs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OvasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->ovasCapabilitiesOptions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OvasApi->ovasCapabilitiesOptions: ', $e->getMessage(), PHP_EOL;
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

## `ovasListPost()`

```php
ovasListPost($get_entities_request): \OpenAPI\Client\Model\OvaListResponse
```

Get a list of existing OVAs

This operation gets a list of OVAs, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OvasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\OvaListMetadata(); // \OpenAPI\Client\Model\OvaListMetadata

try {
    $result = $apiInstance->ovasListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OvasApi->ovasListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\OvaListMetadata**](../Model/OvaListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OvaListResponse**](../Model/OvaListResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ovasPost()`

```php
ovasPost($body): \OpenAPI\Client\Model\ProceduralResponse
```

Create a new ova

Creates an ova entity. OVAs can be uploaded using this by user which can be later used to create a VM.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OvasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\OvaCreateInput(); // \OpenAPI\Client\Model\OvaCreateInput

try {
    $result = $apiInstance->ovasPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OvasApi->ovasPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\OvaCreateInput**](../Model/OvaCreateInput.md)|  | [optional] |

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

## `ovasUuidChunksConcatenatePost()`

```php
ovasUuidChunksConcatenatePost($uuid): \OpenAPI\Client\Model\ProceduralResponse
```

Concatenate uploaded file chunks of an OVA

This operation will concatenate file chunks in order of their upload offset to create the resulting OVA file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OvasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->ovasUuidChunksConcatenatePost($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OvasApi->ovasUuidChunksConcatenatePost: ', $e->getMessage(), PHP_EOL;
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

## `ovasUuidChunksHead()`

```php
ovasUuidChunksHead($uuid)
```

Uploaded OVA file info

Information of the uploaded OVA file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OvasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $apiInstance->ovasUuidChunksHead($uuid);
} catch (Exception $e) {
    echo 'Exception when calling OvasApi->ovasUuidChunksHead: ', $e->getMessage(), PHP_EOL;
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

## `ovasUuidChunksPut()`

```php
ovasUuidChunksPut($uuid, $x_nutanix_upload_offset, $x_nutanix_content_length, $ova, $x_nutanix_checksum_type, $x_nutanix_checksum_bytes)
```

Upload file chunk of an OVA

Upload a file chunk of an OVA based on the UUID specified. Note that the OVA must be created first before an upload can be done.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OvasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$x_nutanix_upload_offset = 56; // int | Offset of file chunk in original OVA file.
$x_nutanix_content_length = 56; // int | Length of file chunk to upload.
$ova = array('key' => new \stdClass); // object | File chunk in binary format.
$x_nutanix_checksum_type = 'x_nutanix_checksum_type_example'; // string | Checksum type (e.g SHA_1, SHA_256).
$x_nutanix_checksum_bytes = 'x_nutanix_checksum_bytes_example'; // string | Checksum bytes of file chunk.

try {
    $apiInstance->ovasUuidChunksPut($uuid, $x_nutanix_upload_offset, $x_nutanix_content_length, $ova, $x_nutanix_checksum_type, $x_nutanix_checksum_bytes);
} catch (Exception $e) {
    echo 'Exception when calling OvasApi->ovasUuidChunksPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **x_nutanix_upload_offset** | **int**| Offset of file chunk in original OVA file. | |
| **x_nutanix_content_length** | **int**| Length of file chunk to upload. | |
| **ova** | **object**| File chunk in binary format. | |
| **x_nutanix_checksum_type** | **string**| Checksum type (e.g SHA_1, SHA_256). | [optional] |
| **x_nutanix_checksum_bytes** | **string**| Checksum bytes of file chunk. | [optional] |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/octet-stream`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ovasUuidDelete()`

```php
ovasUuidDelete($uuid): \OpenAPI\Client\Model\ProceduralResponse
```

Delete a existing OVA

This operation submits a request to delete a existing OVA.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OvasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->ovasUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OvasApi->ovasUuidDelete: ', $e->getMessage(), PHP_EOL;
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

## `ovasUuidDisksDiskIdGet()`

```php
ovasUuidDisksDiskIdGet($uuid, $disk_id): \OpenAPI\Client\Model\OvaDiskInfo
```

Get an existing disk of an OVA

This operation gets disk of an existing OVA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OvasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string
$disk_id = 'disk_id_example'; // string

try {
    $result = $apiInstance->ovasUuidDisksDiskIdGet($uuid, $disk_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OvasApi->ovasUuidDisksDiskIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**|  | |
| **disk_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\OvaDiskInfo**](../Model/OvaDiskInfo.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ovasUuidDisksGet()`

```php
ovasUuidDisksGet($uuid): \OpenAPI\Client\Model\OvaDiskListResponse
```

Gets a list of existing disks of an OVA

This operation gets a list of disks of an exisiting OVA

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OvasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->ovasUuidDisksGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OvasApi->ovasUuidDisksGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\OvaDiskListResponse**](../Model/OvaDiskListResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ovasUuidFileGet()`

```php
ovasUuidFileGet($uuid): \SplFileObject
```

Get OVA Contents

Downloads the OVA based on the UUID specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OvasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->ovasUuidFileGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OvasApi->ovasUuidFileGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

**\SplFileObject**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ovasUuidGet()`

```php
ovasUuidGet($uuid): \OpenAPI\Client\Model\OvaGetResponse
```

Get an existing OVA

This operation gets a existing OVA.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OvasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->ovasUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OvasApi->ovasUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\OvaGetResponse**](../Model/OvaGetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ovasUuidPut()`

```php
ovasUuidPut($uuid, $body)
```

Update name of an existing OVA

This operation updates a existing OVA based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OvasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\OvaUpdateInput(); // \OpenAPI\Client\Model\OvaUpdateInput

try {
    $apiInstance->ovasUuidPut($uuid, $body);
} catch (Exception $e) {
    echo 'Exception when calling OvasApi->ovasUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\OvaUpdateInput**](../Model/OvaUpdateInput.md)|  | [optional] |

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

## `ovasUuidVmSpecGet()`

```php
ovasUuidVmSpecGet($uuid, $ignore_unknown_fields): \OpenAPI\Client\Model\VmSpecOutput
```

Get VM spec from an OVA.

Get VM spec from an OVA. This spec can be used to create a VM.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OvasApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$ignore_unknown_fields = True; // bool

try {
    $result = $apiInstance->ovasUuidVmSpecGet($uuid, $ignore_unknown_fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OvasApi->ovasUuidVmSpecGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **ignore_unknown_fields** | **bool**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\VmSpecOutput**](../Model/VmSpecOutput.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
