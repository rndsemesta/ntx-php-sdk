# OpenAPI\Client\SshUserApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**sshUserListPost()**](SshUserApi.md#sshUserListPost) | **POST** /ssh_user/list | Retrieves all SSH Users on the cluster |
| [**sshUserPost()**](SshUserApi.md#sshUserPost) | **POST** /ssh_user | Add SSH User to the entity |
| [**sshUserUuidDelete()**](SshUserApi.md#sshUserUuidDelete) | **DELETE** /ssh_user/{uuid} | Unregister specified SSH User |
| [**sshUserUuidGet()**](SshUserApi.md#sshUserUuidGet) | **GET** /ssh_user/{uuid} | Retrieves specified SSH User |
| [**sshUserUuidPut()**](SshUserApi.md#sshUserUuidPut) | **PUT** /ssh_user/{uuid} | Update SSH User entity |


## `sshUserListPost()`

```php
sshUserListPost($get_entities_request): \OpenAPI\Client\Model\SshUserList
```

Retrieves all SSH Users on the cluster

Retrieves all SSH Users on the cluster

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SshUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\SshUserListMetadata(); // \OpenAPI\Client\Model\SshUserListMetadata

try {
    $result = $apiInstance->sshUserListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SshUserApi->sshUserListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\SshUserListMetadata**](../Model/SshUserListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\SshUserList**](../Model/SshUserList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sshUserPost()`

```php
sshUserPost($ssh_user_intent): \OpenAPI\Client\Model\SshUserIntentResponse
```

Add SSH User to the entity

Add SSH User to the entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SshUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ssh_user_intent = new \OpenAPI\Client\Model\SshUserIntentInput(); // \OpenAPI\Client\Model\SshUserIntentInput | Create SSH User object

try {
    $result = $apiInstance->sshUserPost($ssh_user_intent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SshUserApi->sshUserPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ssh_user_intent** | [**\OpenAPI\Client\Model\SshUserIntentInput**](../Model/SshUserIntentInput.md)| Create SSH User object | |

### Return type

[**\OpenAPI\Client\Model\SshUserIntentResponse**](../Model/SshUserIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sshUserUuidDelete()`

```php
sshUserUuidDelete($uuid): \OpenAPI\Client\Model\SshUserIntentResponse
```

Unregister specified SSH User

Unregister specified SSH User

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SshUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->sshUserUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SshUserApi->sshUserUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\SshUserIntentResponse**](../Model/SshUserIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sshUserUuidGet()`

```php
sshUserUuidGet($uuid): \OpenAPI\Client\Model\SshUserDetails
```

Retrieves specified SSH User

Retrieves specified SSH User

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SshUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->sshUserUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SshUserApi->sshUserUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\SshUserDetails**](../Model/SshUserDetails.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sshUserUuidPut()`

```php
sshUserUuidPut($uuid, $ssh_user_intent): \OpenAPI\Client\Model\SshUserIntentResponse
```

Update SSH User entity

Update SSH User entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SshUserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$ssh_user_intent = new \OpenAPI\Client\Model\SshUserIntentInput(); // \OpenAPI\Client\Model\SshUserIntentInput | Update SSH User

try {
    $result = $apiInstance->sshUserUuidPut($uuid, $ssh_user_intent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SshUserApi->sshUserUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **ssh_user_intent** | [**\OpenAPI\Client\Model\SshUserIntentInput**](../Model/SshUserIntentInput.md)| Update SSH User | |

### Return type

[**\OpenAPI\Client\Model\SshUserIntentResponse**](../Model/SshUserIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
