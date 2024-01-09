# OpenAPI\Client\ImagesApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**imagesListPost()**](ImagesApi.md#imagesListPost) | **POST** /images/list | Get a list of existing images |
| [**imagesMigratePost()**](ImagesApi.md#imagesMigratePost) | **POST** /images/migrate | Migrate images from PE cluster to PC |
| [**imagesPost()**](ImagesApi.md#imagesPost) | **POST** /images | Create a new image |
| [**imagesRemoteCopyPost()**](ImagesApi.md#imagesRemoteCopyPost) | **POST** /images/remote_copy | Copy AHV images between on-prem and Xi |
| [**imagesUuidDelete()**](ImagesApi.md#imagesUuidDelete) | **DELETE** /images/{uuid} | Delete a existing image |
| [**imagesUuidFileGet()**](ImagesApi.md#imagesUuidFileGet) | **GET** /images/{uuid}/file | Get Image Contents |
| [**imagesUuidFilePut()**](ImagesApi.md#imagesUuidFilePut) | **PUT** /images/{uuid}/file | Upload Image Contents |
| [**imagesUuidGet()**](ImagesApi.md#imagesUuidGet) | **GET** /images/{uuid} | Get a existing image |
| [**imagesUuidPut()**](ImagesApi.md#imagesUuidPut) | **PUT** /images/{uuid} | Update a existing image |


## `imagesListPost()`

```php
imagesListPost($get_entities_request): \OpenAPI\Client\Model\ImageListIntentResponse
```

Get a list of existing images

This operation gets a list of images, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\ImageListMetadata(); // \OpenAPI\Client\Model\ImageListMetadata

try {
    $result = $apiInstance->imagesListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->imagesListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\ImageListMetadata**](../Model/ImageListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ImageListIntentResponse**](../Model/ImageListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `imagesMigratePost()`

```php
imagesMigratePost($body): \OpenAPI\Client\Model\ProceduralResponse
```

Migrate images from PE cluster to PC

Submits a request to create a task handling image migration operation, returns a task reference. This moves ownership of images from the PE cluster to PC. Image uuids can be obtained by querying the PE instance to list images on the PE. In the case where image uuid list is provided as empty, all images on the cluster that are not currently migrated to PC will be migrated to PC.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ImageMigrateInput(); // \OpenAPI\Client\Model\ImageMigrateInput

try {
    $result = $apiInstance->imagesMigratePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->imagesMigratePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\ImageMigrateInput**](../Model/ImageMigrateInput.md)|  | [optional] |

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

## `imagesPost()`

```php
imagesPost($body): \OpenAPI\Client\Model\ImageIntentResponse
```

Create a new image

Images are raw ISO, QCOW2, or VMDK files that are uploaded by a user can be attached to a VM. An ISO image is attached as a virtual CD-ROM drive, and QCOW2 and VMDK files are attached as SCSI disks. An image has to be explicitly added to the self-service catalog before users can create VMs from it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ImageIntentInput(); // \OpenAPI\Client\Model\ImageIntentInput

try {
    $result = $apiInstance->imagesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->imagesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\ImageIntentInput**](../Model/ImageIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ImageIntentResponse**](../Model/ImageIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `imagesRemoteCopyPost()`

```php
imagesRemoteCopyPost($body): \OpenAPI\Client\Model\ProceduralResponse
```

Copy AHV images between on-prem and Xi

Submits a request to create a task handling image remote copy operation, returns a task uuid. In the case where image uuid list is provided as empty, all images on the local PC cluster will be copied to remote PC's cluster.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ImageRemoteCopyInput(); // \OpenAPI\Client\Model\ImageRemoteCopyInput

try {
    $result = $apiInstance->imagesRemoteCopyPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->imagesRemoteCopyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\ImageRemoteCopyInput**](../Model/ImageRemoteCopyInput.md)|  | [optional] |

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

## `imagesUuidDelete()`

```php
imagesUuidDelete($uuid): \OpenAPI\Client\Model\ImageIntentResponse
```

Delete a existing image

This operation submits a request to delete a existing image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->imagesUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->imagesUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\ImageIntentResponse**](../Model/ImageIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `imagesUuidFileGet()`

```php
imagesUuidFileGet($uuid): \SplFileObject
```

Get Image Contents

Downloads the image based on the UUID specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->imagesUuidFileGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->imagesUuidFileGet: ', $e->getMessage(), PHP_EOL;
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

## `imagesUuidFilePut()`

```php
imagesUuidFilePut($uuid, $image, $x_nutanix_checksum_type, $x_nutanix_checksum_bytes)
```

Upload Image Contents

Upload the binary bits of an image based on the UUID specified. Note that the image must be created first before an upload can be done. Also, once the image has been uploaded the image cannot be changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$image = array('key' => new \stdClass); // object
$x_nutanix_checksum_type = 'x_nutanix_checksum_type_example'; // string | Checksum type (e.g SHA_1, SHA_256).
$x_nutanix_checksum_bytes = 'x_nutanix_checksum_bytes_example'; // string | Checksum bytes.

try {
    $apiInstance->imagesUuidFilePut($uuid, $image, $x_nutanix_checksum_type, $x_nutanix_checksum_bytes);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->imagesUuidFilePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **image** | **object**|  | |
| **x_nutanix_checksum_type** | **string**| Checksum type (e.g SHA_1, SHA_256). | [optional] |
| **x_nutanix_checksum_bytes** | **string**| Checksum bytes. | [optional] |

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

## `imagesUuidGet()`

```php
imagesUuidGet($uuid): \OpenAPI\Client\Model\ImageIntentResponse
```

Get a existing image

This operation gets a existing image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->imagesUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->imagesUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\ImageIntentResponse**](../Model/ImageIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `imagesUuidPut()`

```php
imagesUuidPut($uuid, $body): \OpenAPI\Client\Model\ImageIntentResponse
```

Update a existing image

This operation submits a request to update a existing image based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\ImageIntentInput(); // \OpenAPI\Client\Model\ImageIntentInput

try {
    $result = $apiInstance->imagesUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->imagesUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\ImageIntentInput**](../Model/ImageIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ImageIntentResponse**](../Model/ImageIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
