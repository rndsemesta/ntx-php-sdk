# OpenAPI\Client\AccessControlPoliciesApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**accessControlPoliciesListPost()**](AccessControlPoliciesApi.md#accessControlPoliciesListPost) | **POST** /access_control_policies/list | Get a list of existing Access Control Policies |
| [**accessControlPoliciesPost()**](AccessControlPoliciesApi.md#accessControlPoliciesPost) | **POST** /access_control_policies | Create a new Access Control Policy |
| [**accessControlPoliciesUuidDelete()**](AccessControlPoliciesApi.md#accessControlPoliciesUuidDelete) | **DELETE** /access_control_policies/{uuid} | Delete a existing Access Control Policy |
| [**accessControlPoliciesUuidGet()**](AccessControlPoliciesApi.md#accessControlPoliciesUuidGet) | **GET** /access_control_policies/{uuid} | Get a existing Access Control Policy |
| [**accessControlPoliciesUuidPut()**](AccessControlPoliciesApi.md#accessControlPoliciesUuidPut) | **PUT** /access_control_policies/{uuid} | Update a existing Access Control Policy |


## `accessControlPoliciesListPost()`

```php
accessControlPoliciesListPost($get_entities_request): \OpenAPI\Client\Model\AccessControlPolicyListIntentResponse
```

Get a list of existing Access Control Policies

This operation gets a list of Access Control Policies, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AccessControlPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\AccessControlPolicyListMetadata(); // \OpenAPI\Client\Model\AccessControlPolicyListMetadata

try {
    $result = $apiInstance->accessControlPoliciesListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessControlPoliciesApi->accessControlPoliciesListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\AccessControlPolicyListMetadata**](../Model/AccessControlPolicyListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AccessControlPolicyListIntentResponse**](../Model/AccessControlPolicyListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accessControlPoliciesPost()`

```php
accessControlPoliciesPost($body): \OpenAPI\Client\Model\AccessControlPolicyIntentResponse
```

Create a new Access Control Policy

An Access Control Policy (ACP) represents the association of a User with a role, in a given 'Context' (i.e. where can the role be exercised) e.g. an ACP can represent the following: User1 has Role1 within the boundaries of Project1. (i.e. if Role1 allows the User to update-VM, he/she can do so ONLY for VMs belonging to Project1)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AccessControlPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\AccessControlPolicyIntentInput(); // \OpenAPI\Client\Model\AccessControlPolicyIntentInput

try {
    $result = $apiInstance->accessControlPoliciesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessControlPoliciesApi->accessControlPoliciesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\AccessControlPolicyIntentInput**](../Model/AccessControlPolicyIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AccessControlPolicyIntentResponse**](../Model/AccessControlPolicyIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accessControlPoliciesUuidDelete()`

```php
accessControlPoliciesUuidDelete($uuid): \OpenAPI\Client\Model\AccessControlPolicyIntentResponse
```

Delete a existing Access Control Policy

Delete an existing Access Control Policy. Warning - deleting an Access Control Policy will automatically detach the associated users and user-groups, thereby revoking the access they were granted because of this Access Control Policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AccessControlPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->accessControlPoliciesUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessControlPoliciesApi->accessControlPoliciesUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\AccessControlPolicyIntentResponse**](../Model/AccessControlPolicyIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accessControlPoliciesUuidGet()`

```php
accessControlPoliciesUuidGet($uuid): \OpenAPI\Client\Model\AccessControlPolicyIntentResponse
```

Get a existing Access Control Policy

This operation gets a existing Access Control Policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AccessControlPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->accessControlPoliciesUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessControlPoliciesApi->accessControlPoliciesUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\AccessControlPolicyIntentResponse**](../Model/AccessControlPolicyIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `accessControlPoliciesUuidPut()`

```php
accessControlPoliciesUuidPut($uuid, $body): \OpenAPI\Client\Model\AccessControlPolicyIntentResponse
```

Update a existing Access Control Policy

This operation submits a request to update a existing Access Control Policy based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\AccessControlPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\AccessControlPolicyIntentInput(); // \OpenAPI\Client\Model\AccessControlPolicyIntentInput

try {
    $result = $apiInstance->accessControlPoliciesUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessControlPoliciesApi->accessControlPoliciesUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\AccessControlPolicyIntentInput**](../Model/AccessControlPolicyIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\AccessControlPolicyIntentResponse**](../Model/AccessControlPolicyIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
