# OpenAPI\Client\NgtPoliciesApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**ngtPoliciesListPost()**](NgtPoliciesApi.md#ngtPoliciesListPost) | **POST** /ngt_policies/list | Get a list of existing ngt_policies |
| [**ngtPoliciesPost()**](NgtPoliciesApi.md#ngtPoliciesPost) | **POST** /ngt_policies | Create a new ngt_policy |
| [**ngtPoliciesUuidDelete()**](NgtPoliciesApi.md#ngtPoliciesUuidDelete) | **DELETE** /ngt_policies/{uuid} | Delete a existing ngt_policy |
| [**ngtPoliciesUuidGet()**](NgtPoliciesApi.md#ngtPoliciesUuidGet) | **GET** /ngt_policies/{uuid} | Get a existing ngt_policy |
| [**ngtPoliciesUuidPut()**](NgtPoliciesApi.md#ngtPoliciesUuidPut) | **PUT** /ngt_policies/{uuid} | Update a existing ngt_policy |


## `ngtPoliciesListPost()`

```php
ngtPoliciesListPost($get_entities_request): \OpenAPI\Client\Model\NgtPolicyListIntentResponse
```

Get a list of existing ngt_policies

This operation gets a list of ngt_policies, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\NgtPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\NgtPolicyListMetadata(); // \OpenAPI\Client\Model\NgtPolicyListMetadata

try {
    $result = $apiInstance->ngtPoliciesListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NgtPoliciesApi->ngtPoliciesListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\NgtPolicyListMetadata**](../Model/NgtPolicyListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\NgtPolicyListIntentResponse**](../Model/NgtPolicyListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ngtPoliciesPost()`

```php
ngtPoliciesPost($body): \OpenAPI\Client\Model\NgtPolicyIntentResponse
```

Create a new ngt_policy

This operation submits a request to create a new ngt_policy based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\NgtPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\NgtPolicyIntentInput(); // \OpenAPI\Client\Model\NgtPolicyIntentInput

try {
    $result = $apiInstance->ngtPoliciesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NgtPoliciesApi->ngtPoliciesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\NgtPolicyIntentInput**](../Model/NgtPolicyIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\NgtPolicyIntentResponse**](../Model/NgtPolicyIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ngtPoliciesUuidDelete()`

```php
ngtPoliciesUuidDelete($uuid): \OpenAPI\Client\Model\NgtPolicyStatus
```

Delete a existing ngt_policy

This operation submits a request to delete a existing ngt_policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\NgtPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->ngtPoliciesUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NgtPoliciesApi->ngtPoliciesUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\NgtPolicyStatus**](../Model/NgtPolicyStatus.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ngtPoliciesUuidGet()`

```php
ngtPoliciesUuidGet($uuid): \OpenAPI\Client\Model\NgtPolicyIntentResponse
```

Get a existing ngt_policy

This operation gets a existing ngt_policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\NgtPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->ngtPoliciesUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NgtPoliciesApi->ngtPoliciesUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\NgtPolicyIntentResponse**](../Model/NgtPolicyIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ngtPoliciesUuidPut()`

```php
ngtPoliciesUuidPut($uuid, $body): \OpenAPI\Client\Model\NgtPolicyIntentResponse
```

Update a existing ngt_policy

This operation submits a request to update a existing ngt_policy based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\NgtPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\NgtPolicyIntentInput(); // \OpenAPI\Client\Model\NgtPolicyIntentInput

try {
    $result = $apiInstance->ngtPoliciesUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NgtPoliciesApi->ngtPoliciesUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\NgtPolicyIntentInput**](../Model/NgtPolicyIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\NgtPolicyIntentResponse**](../Model/NgtPolicyIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
