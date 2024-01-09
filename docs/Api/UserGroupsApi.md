# OpenAPI\Client\UserGroupsApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**userGroupsListPost()**](UserGroupsApi.md#userGroupsListPost) | **POST** /user_groups/list | Get a list of existing User Groups |
| [**userGroupsPost()**](UserGroupsApi.md#userGroupsPost) | **POST** /user_groups | Add a User group. |
| [**userGroupsUuidDelete()**](UserGroupsApi.md#userGroupsUuidDelete) | **DELETE** /user_groups/{uuid} | Delete a existing User Group |
| [**userGroupsUuidGet()**](UserGroupsApi.md#userGroupsUuidGet) | **GET** /user_groups/{uuid} | Get a existing User Group |
| [**userGroupsUuidPut()**](UserGroupsApi.md#userGroupsUuidPut) | **PUT** /user_groups/{uuid} | Update a existing User Group |


## `userGroupsListPost()`

```php
userGroupsListPost($get_entities_request): \OpenAPI\Client\Model\UserGroupListIntentResponse
```

Get a list of existing User Groups

This operation gets a list of User Groups, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UserGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\UserGroupListMetadata(); // \OpenAPI\Client\Model\UserGroupListMetadata

try {
    $result = $apiInstance->userGroupsListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserGroupsApi->userGroupsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\UserGroupListMetadata**](../Model/UserGroupListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\UserGroupListIntentResponse**](../Model/UserGroupListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userGroupsPost()`

```php
userGroupsPost($body): \OpenAPI\Client\Model\UserGroupIntentResponse
```

Add a User group.

Add a User group to the system.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UserGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\UserGroupIntentInput(); // \OpenAPI\Client\Model\UserGroupIntentInput

try {
    $result = $apiInstance->userGroupsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserGroupsApi->userGroupsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\UserGroupIntentInput**](../Model/UserGroupIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\UserGroupIntentResponse**](../Model/UserGroupIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userGroupsUuidDelete()`

```php
userGroupsUuidDelete($uuid): \OpenAPI\Client\Model\UserGroupIntentResponse
```

Delete a existing User Group

This operation submits a request to delete a existing User Group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UserGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->userGroupsUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserGroupsApi->userGroupsUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\UserGroupIntentResponse**](../Model/UserGroupIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userGroupsUuidGet()`

```php
userGroupsUuidGet($uuid): \OpenAPI\Client\Model\UserGroupIntentResponse
```

Get a existing User Group

A user group is a grouping of users either defined locally or in a Directory service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UserGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->userGroupsUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserGroupsApi->userGroupsUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\UserGroupIntentResponse**](../Model/UserGroupIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `userGroupsUuidPut()`

```php
userGroupsUuidPut($uuid, $body): \OpenAPI\Client\Model\UserGroupIntentResponse
```

Update a existing User Group

This operation submits a request to update a existing User Group based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\UserGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\UserGroupIntentInput(); // \OpenAPI\Client\Model\UserGroupIntentInput

try {
    $result = $apiInstance->userGroupsUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserGroupsApi->userGroupsUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\UserGroupIntentInput**](../Model/UserGroupIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\UserGroupIntentResponse**](../Model/UserGroupIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
