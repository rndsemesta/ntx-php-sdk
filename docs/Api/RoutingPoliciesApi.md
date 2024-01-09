# OpenAPI\Client\RoutingPoliciesApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**routingPoliciesListPost()**](RoutingPoliciesApi.md#routingPoliciesListPost) | **POST** /routing_policies/list | Get a list of existing routing_policies |
| [**routingPoliciesPost()**](RoutingPoliciesApi.md#routingPoliciesPost) | **POST** /routing_policies | Create a new routing_policy |
| [**routingPoliciesUuidDelete()**](RoutingPoliciesApi.md#routingPoliciesUuidDelete) | **DELETE** /routing_policies/{uuid} | Delete a existing routing_policy |
| [**routingPoliciesUuidGet()**](RoutingPoliciesApi.md#routingPoliciesUuidGet) | **GET** /routing_policies/{uuid} | Get a existing routing_policy |
| [**routingPoliciesUuidPut()**](RoutingPoliciesApi.md#routingPoliciesUuidPut) | **PUT** /routing_policies/{uuid} | Update a existing routing_policy |
| [**routingPoliciesUuidResetCountersPost()**](RoutingPoliciesApi.md#routingPoliciesUuidResetCountersPost) | **POST** /routing_policies/{uuid}/reset_counters | Clear routing policy counters. |
| [**virtualNetworksRoutingPoliciesListPost()**](RoutingPoliciesApi.md#virtualNetworksRoutingPoliciesListPost) | **POST** /virtual_networks/routing_policies/list | Get a list of existing routing_policies |
| [**virtualNetworksRoutingPoliciesPost()**](RoutingPoliciesApi.md#virtualNetworksRoutingPoliciesPost) | **POST** /virtual_networks/routing_policies | Create a new routing_policy |
| [**virtualNetworksRoutingPoliciesUuidDelete()**](RoutingPoliciesApi.md#virtualNetworksRoutingPoliciesUuidDelete) | **DELETE** /virtual_networks/routing_policies/{uuid} | Delete a existing routing_policy |
| [**virtualNetworksRoutingPoliciesUuidGet()**](RoutingPoliciesApi.md#virtualNetworksRoutingPoliciesUuidGet) | **GET** /virtual_networks/routing_policies/{uuid} | Get a existing routing_policy |
| [**virtualNetworksRoutingPoliciesUuidPut()**](RoutingPoliciesApi.md#virtualNetworksRoutingPoliciesUuidPut) | **PUT** /virtual_networks/routing_policies/{uuid} | Update a existing routing_policy |
| [**virtualNetworksRoutingPoliciesUuidResetCountersPost()**](RoutingPoliciesApi.md#virtualNetworksRoutingPoliciesUuidResetCountersPost) | **POST** /virtual_networks/routing_policies/{uuid}/reset_counters | Clear routing policy counters. |
| [**virtualNetworksUuidRoutingPoliciesResetCountersPost()**](RoutingPoliciesApi.md#virtualNetworksUuidRoutingPoliciesResetCountersPost) | **POST** /virtual_networks/{uuid}/routing_policies/reset_counters | Clear all routing policy counters. |
| [**vpcsUuidRoutingPoliciesResetCountersPost()**](RoutingPoliciesApi.md#vpcsUuidRoutingPoliciesResetCountersPost) | **POST** /vpcs/{uuid}/routing_policies/reset_counters | Clear all routing policy counters. |


## `routingPoliciesListPost()`

```php
routingPoliciesListPost($get_entities_request): \OpenAPI\Client\Model\RoutingPolicyListIntentResponse
```

Get a list of existing routing_policies

This operation gets a list of routing_policies, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RoutingPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\RoutingPolicyListMetadata(); // \OpenAPI\Client\Model\RoutingPolicyListMetadata

try {
    $result = $apiInstance->routingPoliciesListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingPoliciesApi->routingPoliciesListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\RoutingPolicyListMetadata**](../Model/RoutingPolicyListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RoutingPolicyListIntentResponse**](../Model/RoutingPolicyListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `routingPoliciesPost()`

```php
routingPoliciesPost($body): \OpenAPI\Client\Model\RoutingPolicyIntentResponse
```

Create a new routing_policy

This operation submits a request to create a new routing_policy based on the input parameters. A routing policy that defines traffic behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RoutingPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\RoutingPolicyIntentInput(); // \OpenAPI\Client\Model\RoutingPolicyIntentInput

try {
    $result = $apiInstance->routingPoliciesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingPoliciesApi->routingPoliciesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\RoutingPolicyIntentInput**](../Model/RoutingPolicyIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RoutingPolicyIntentResponse**](../Model/RoutingPolicyIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `routingPoliciesUuidDelete()`

```php
routingPoliciesUuidDelete($uuid): \OpenAPI\Client\Model\RoutingPolicyIntentResponse
```

Delete a existing routing_policy

This operation submits a request to delete a existing routing_policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RoutingPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->routingPoliciesUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingPoliciesApi->routingPoliciesUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\RoutingPolicyIntentResponse**](../Model/RoutingPolicyIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `routingPoliciesUuidGet()`

```php
routingPoliciesUuidGet($uuid): \OpenAPI\Client\Model\RoutingPolicyIntentResponse
```

Get a existing routing_policy

This operation gets a existing routing_policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RoutingPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->routingPoliciesUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingPoliciesApi->routingPoliciesUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\RoutingPolicyIntentResponse**](../Model/RoutingPolicyIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `routingPoliciesUuidPut()`

```php
routingPoliciesUuidPut($uuid, $body): \OpenAPI\Client\Model\RoutingPolicyIntentResponse
```

Update a existing routing_policy

This operation submits a request to update a existing routing_policy based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RoutingPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\RoutingPolicyIntentInput(); // \OpenAPI\Client\Model\RoutingPolicyIntentInput

try {
    $result = $apiInstance->routingPoliciesUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingPoliciesApi->routingPoliciesUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\RoutingPolicyIntentInput**](../Model/RoutingPolicyIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RoutingPolicyIntentResponse**](../Model/RoutingPolicyIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `routingPoliciesUuidResetCountersPost()`

```php
routingPoliciesUuidResetCountersPost($uuid)
```

Clear routing policy counters.

This operation clears the counter values for a particular routing policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RoutingPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $apiInstance->routingPoliciesUuidResetCountersPost($uuid);
} catch (Exception $e) {
    echo 'Exception when calling RoutingPoliciesApi->routingPoliciesUuidResetCountersPost: ', $e->getMessage(), PHP_EOL;
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

## `virtualNetworksRoutingPoliciesListPost()`

```php
virtualNetworksRoutingPoliciesListPost($get_entities_request): \OpenAPI\Client\Model\RoutingPolicyListIntentResponse
```

Get a list of existing routing_policies

This operation gets a list of routing_policies, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RoutingPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\RoutingPolicyListMetadata(); // \OpenAPI\Client\Model\RoutingPolicyListMetadata

try {
    $result = $apiInstance->virtualNetworksRoutingPoliciesListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingPoliciesApi->virtualNetworksRoutingPoliciesListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\RoutingPolicyListMetadata**](../Model/RoutingPolicyListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RoutingPolicyListIntentResponse**](../Model/RoutingPolicyListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `virtualNetworksRoutingPoliciesPost()`

```php
virtualNetworksRoutingPoliciesPost($body): \OpenAPI\Client\Model\RoutingPolicyIntentResponse
```

Create a new routing_policy

This operation submits a request to create a new routing_policy based on the input parameters. A routing policy that defines traffic behavior.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RoutingPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\RoutingPolicyIntentInput(); // \OpenAPI\Client\Model\RoutingPolicyIntentInput

try {
    $result = $apiInstance->virtualNetworksRoutingPoliciesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingPoliciesApi->virtualNetworksRoutingPoliciesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\RoutingPolicyIntentInput**](../Model/RoutingPolicyIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RoutingPolicyIntentResponse**](../Model/RoutingPolicyIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `virtualNetworksRoutingPoliciesUuidDelete()`

```php
virtualNetworksRoutingPoliciesUuidDelete($uuid): \OpenAPI\Client\Model\RoutingPolicyIntentResponse
```

Delete a existing routing_policy

This operation submits a request to delete a existing routing_policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RoutingPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->virtualNetworksRoutingPoliciesUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingPoliciesApi->virtualNetworksRoutingPoliciesUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\RoutingPolicyIntentResponse**](../Model/RoutingPolicyIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `virtualNetworksRoutingPoliciesUuidGet()`

```php
virtualNetworksRoutingPoliciesUuidGet($uuid): \OpenAPI\Client\Model\RoutingPolicyIntentResponse
```

Get a existing routing_policy

This operation gets a existing routing_policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RoutingPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->virtualNetworksRoutingPoliciesUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingPoliciesApi->virtualNetworksRoutingPoliciesUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\RoutingPolicyIntentResponse**](../Model/RoutingPolicyIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `virtualNetworksRoutingPoliciesUuidPut()`

```php
virtualNetworksRoutingPoliciesUuidPut($uuid, $body): \OpenAPI\Client\Model\RoutingPolicyIntentResponse
```

Update a existing routing_policy

This operation submits a request to update a existing routing_policy based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RoutingPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\RoutingPolicyIntentInput(); // \OpenAPI\Client\Model\RoutingPolicyIntentInput

try {
    $result = $apiInstance->virtualNetworksRoutingPoliciesUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RoutingPoliciesApi->virtualNetworksRoutingPoliciesUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\RoutingPolicyIntentInput**](../Model/RoutingPolicyIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RoutingPolicyIntentResponse**](../Model/RoutingPolicyIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `virtualNetworksRoutingPoliciesUuidResetCountersPost()`

```php
virtualNetworksRoutingPoliciesUuidResetCountersPost($uuid)
```

Clear routing policy counters.

This operation clears the counter values for a particular routing policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RoutingPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $apiInstance->virtualNetworksRoutingPoliciesUuidResetCountersPost($uuid);
} catch (Exception $e) {
    echo 'Exception when calling RoutingPoliciesApi->virtualNetworksRoutingPoliciesUuidResetCountersPost: ', $e->getMessage(), PHP_EOL;
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

## `virtualNetworksUuidRoutingPoliciesResetCountersPost()`

```php
virtualNetworksUuidRoutingPoliciesResetCountersPost($uuid)
```

Clear all routing policy counters.

This operation clears the counter values for all routing policies in the virtual network.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RoutingPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $apiInstance->virtualNetworksUuidRoutingPoliciesResetCountersPost($uuid);
} catch (Exception $e) {
    echo 'Exception when calling RoutingPoliciesApi->virtualNetworksUuidRoutingPoliciesResetCountersPost: ', $e->getMessage(), PHP_EOL;
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

## `vpcsUuidRoutingPoliciesResetCountersPost()`

```php
vpcsUuidRoutingPoliciesResetCountersPost($uuid)
```

Clear all routing policy counters.

This operation clears the counter values for all routing policies in the VPC.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RoutingPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $apiInstance->vpcsUuidRoutingPoliciesResetCountersPost($uuid);
} catch (Exception $e) {
    echo 'Exception when calling RoutingPoliciesApi->vpcsUuidRoutingPoliciesResetCountersPost: ', $e->getMessage(), PHP_EOL;
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
