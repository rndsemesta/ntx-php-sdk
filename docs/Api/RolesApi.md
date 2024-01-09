# OpenAPI\Client\RolesApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**rolesListPost()**](RolesApi.md#rolesListPost) | **POST** /roles/list | List the roles. |
| [**rolesPost()**](RolesApi.md#rolesPost) | **POST** /roles | Create a role. |
| [**rolesUuidDelete()**](RolesApi.md#rolesUuidDelete) | **DELETE** /roles/{uuid} | Delete a role. |
| [**rolesUuidGet()**](RolesApi.md#rolesUuidGet) | **GET** /roles/{uuid} | Get a role. |
| [**rolesUuidPut()**](RolesApi.md#rolesUuidPut) | **PUT** /roles/{uuid} | Update a role. |


## `rolesListPost()`

```php
rolesListPost($get_entities_request): \OpenAPI\Client\Model\RoleListIntentResponse
```

List the roles.

Get roles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\RoleListMetadata(); // \OpenAPI\Client\Model\RoleListMetadata

try {
    $result = $apiInstance->rolesListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->rolesListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\RoleListMetadata**](../Model/RoleListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RoleListIntentResponse**](../Model/RoleListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rolesPost()`

```php
rolesPost($body): \OpenAPI\Client\Model\RoleIntentResponse
```

Create a role.

\"A role is a collection of permissions defined for one or more kinds. A kind represents the type of an entity (such as VM). Roles are defined by users who have permission to create roles and assign roles to projects. All users in a project inherit the role.\"

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\RoleIntentInput(); // \OpenAPI\Client\Model\RoleIntentInput

try {
    $result = $apiInstance->rolesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->rolesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\RoleIntentInput**](../Model/RoleIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RoleIntentResponse**](../Model/RoleIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rolesUuidDelete()`

```php
rolesUuidDelete($uuid): \OpenAPI\Client\Model\RoleIntentResponse
```

Delete a role.

Delete a role.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->rolesUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->rolesUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\RoleIntentResponse**](../Model/RoleIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rolesUuidGet()`

```php
rolesUuidGet($uuid): \OpenAPI\Client\Model\RoleIntentResponse
```

Get a role.

Get a role.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->rolesUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->rolesUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\RoleIntentResponse**](../Model/RoleIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rolesUuidPut()`

```php
rolesUuidPut($uuid, $body): \OpenAPI\Client\Model\RoleIntentResponse
```

Update a role.

Update a role.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RolesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\RoleIntentInput(); // \OpenAPI\Client\Model\RoleIntentInput

try {
    $result = $apiInstance->rolesUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RolesApi->rolesUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\RoleIntentInput**](../Model/RoleIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RoleIntentResponse**](../Model/RoleIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
