# OpenAPI\Client\PermissionsApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**permissionsListPost()**](PermissionsApi.md#permissionsListPost) | **POST** /permissions/list | List the permissions. |
| [**permissionsPost()**](PermissionsApi.md#permissionsPost) | **POST** /permissions | Create a permission. |
| [**permissionsUuidDelete()**](PermissionsApi.md#permissionsUuidDelete) | **DELETE** /permissions/{uuid} | Delete a permission. |
| [**permissionsUuidGet()**](PermissionsApi.md#permissionsUuidGet) | **GET** /permissions/{uuid} | Get a permission. |
| [**permissionsUuidPut()**](PermissionsApi.md#permissionsUuidPut) | **PUT** /permissions/{uuid} | Update a permission. |


## `permissionsListPost()`

```php
permissionsListPost($get_entities_request): \OpenAPI\Client\Model\PermissionListIntentResponse
```

List the permissions.

Get permissions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\PermissionListMetadata(); // \OpenAPI\Client\Model\PermissionListMetadata

try {
    $result = $apiInstance->permissionsListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->permissionsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\PermissionListMetadata**](../Model/PermissionListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PermissionListIntentResponse**](../Model/PermissionListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `permissionsPost()`

```php
permissionsPost($body): \OpenAPI\Client\Model\PermissionIntentResponse
```

Create a permission.

\"Permissions define what a user can do with each type. For example, an admin can upload images; a DevOps user can create, edit, or delete a VM; and an operations user can view a VM console.\"

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\PermissionIntentInput(); // \OpenAPI\Client\Model\PermissionIntentInput

try {
    $result = $apiInstance->permissionsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->permissionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\PermissionIntentInput**](../Model/PermissionIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PermissionIntentResponse**](../Model/PermissionIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `permissionsUuidDelete()`

```php
permissionsUuidDelete($uuid): \OpenAPI\Client\Model\PermissionIntentResponse
```

Delete a permission.

Delete a permission.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->permissionsUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->permissionsUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\PermissionIntentResponse**](../Model/PermissionIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `permissionsUuidGet()`

```php
permissionsUuidGet($uuid): \OpenAPI\Client\Model\PermissionIntentResponse
```

Get a permission.

Get a permission.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->permissionsUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->permissionsUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\PermissionIntentResponse**](../Model/PermissionIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `permissionsUuidPut()`

```php
permissionsUuidPut($uuid, $body): \OpenAPI\Client\Model\PermissionIntentResponse
```

Update a permission.

Update a permission.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\PermissionIntentInput(); // \OpenAPI\Client\Model\PermissionIntentInput

try {
    $result = $apiInstance->permissionsUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PermissionsApi->permissionsUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\PermissionIntentInput**](../Model/PermissionIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PermissionIntentResponse**](../Model/PermissionIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
