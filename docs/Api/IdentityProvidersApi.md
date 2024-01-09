# OpenAPI\Client\IdentityProvidersApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**identityProvidersCallbackPost()**](IdentityProvidersApi.md#identityProvidersCallbackPost) | **POST** /identity_providers/callback | Endpoint which will be called from the identity provider. |
| [**identityProvidersListPost()**](IdentityProvidersApi.md#identityProvidersListPost) | **POST** /identity_providers/list | Get a list of existing identity_provider |
| [**identityProvidersPost()**](IdentityProvidersApi.md#identityProvidersPost) | **POST** /identity_providers | Create a new identity_provider |
| [**identityProvidersRedirectListPost()**](IdentityProvidersApi.md#identityProvidersRedirectListPost) | **POST** /identity_providers/redirect_list | Get a list of existing identity_provider |
| [**identityProvidersSpMetadataGet()**](IdentityProvidersApi.md#identityProvidersSpMetadataGet) | **GET** /identity_providers/sp_metadata | Endpoint which will give service provider metadata as output |
| [**identityProvidersUuidDelete()**](IdentityProvidersApi.md#identityProvidersUuidDelete) | **DELETE** /identity_providers/{uuid} | Delete a existing identity_provider |
| [**identityProvidersUuidGet()**](IdentityProvidersApi.md#identityProvidersUuidGet) | **GET** /identity_providers/{uuid} | Get a existing identity_provider |
| [**identityProvidersUuidPut()**](IdentityProvidersApi.md#identityProvidersUuidPut) | **PUT** /identity_providers/{uuid} | Update a existing identity_provider |


## `identityProvidersCallbackPost()`

```php
identityProvidersCallbackPost($saml_response)
```

Endpoint which will be called from the identity provider.

Assertion consumer service url to which the SAML assertion is posted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$saml_response = 'saml_response_example'; // string

try {
    $apiInstance->identityProvidersCallbackPost($saml_response);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->identityProvidersCallbackPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **saml_response** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `identityProvidersListPost()`

```php
identityProvidersListPost($get_entities_request): \OpenAPI\Client\Model\IdentityProviderListIntentResponse
```

Get a list of existing identity_provider

This operation gets a list of identity_provider, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\IdentityProviderListMetadata(); // \OpenAPI\Client\Model\IdentityProviderListMetadata

try {
    $result = $apiInstance->identityProvidersListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->identityProvidersListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\IdentityProviderListMetadata**](../Model/IdentityProviderListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\IdentityProviderListIntentResponse**](../Model/IdentityProviderListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `identityProvidersPost()`

```php
identityProvidersPost($body): \OpenAPI\Client\Model\IdentityProviderIntentResponse
```

Create a new identity_provider

This operation submits a request to create a new identity_provider based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\IdentityProviderIntentInput(); // \OpenAPI\Client\Model\IdentityProviderIntentInput

try {
    $result = $apiInstance->identityProvidersPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->identityProvidersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\IdentityProviderIntentInput**](../Model/IdentityProviderIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\IdentityProviderIntentResponse**](../Model/IdentityProviderIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `identityProvidersRedirectListPost()`

```php
identityProvidersRedirectListPost($get_entities_request): \OpenAPI\Client\Model\IdentityProviderListIntentResponse
```

Get a list of existing identity_provider

This operation gets a list of identity_provider, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\IdentityProviderListMetadata(); // \OpenAPI\Client\Model\IdentityProviderListMetadata

try {
    $result = $apiInstance->identityProvidersRedirectListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->identityProvidersRedirectListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\IdentityProviderListMetadata**](../Model/IdentityProviderListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\IdentityProviderListIntentResponse**](../Model/IdentityProviderListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `identityProvidersSpMetadataGet()`

```php
identityProvidersSpMetadataGet(): object
```

Endpoint which will give service provider metadata as output

Endpoint which will give service provider metadata as output

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->identityProvidersSpMetadataGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->identityProvidersSpMetadataGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `identityProvidersUuidDelete()`

```php
identityProvidersUuidDelete($uuid)
```

Delete a existing identity_provider

This operation submits a request to delete a existing identity_provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $apiInstance->identityProvidersUuidDelete($uuid);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->identityProvidersUuidDelete: ', $e->getMessage(), PHP_EOL;
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

## `identityProvidersUuidGet()`

```php
identityProvidersUuidGet($uuid): \OpenAPI\Client\Model\IdentityProviderIntentResponse
```

Get a existing identity_provider

This operation gets a existing identity_provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->identityProvidersUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->identityProvidersUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\IdentityProviderIntentResponse**](../Model/IdentityProviderIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `identityProvidersUuidPut()`

```php
identityProvidersUuidPut($uuid, $body): \OpenAPI\Client\Model\IdentityProviderIntentResponse
```

Update a existing identity_provider

This operation submits a request to update a existing identity_provider based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\IdentityProviderIntentInput(); // \OpenAPI\Client\Model\IdentityProviderIntentInput

try {
    $result = $apiInstance->identityProvidersUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->identityProvidersUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\IdentityProviderIntentInput**](../Model/IdentityProviderIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\IdentityProviderIntentResponse**](../Model/IdentityProviderIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
