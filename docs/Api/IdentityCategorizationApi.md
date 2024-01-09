# OpenAPI\Client\IdentityCategorizationApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**identityCategorizationCategoryMappingsListPost()**](IdentityCategorizationApi.md#identityCategorizationCategoryMappingsListPost) | **POST** /identity_categorization/category_mappings/list | Get a list of existing category_mappings |
| [**identityCategorizationCategoryMappingsPost()**](IdentityCategorizationApi.md#identityCategorizationCategoryMappingsPost) | **POST** /identity_categorization/category_mappings | Create a new category_mapping |
| [**identityCategorizationCategoryMappingsUuidDelete()**](IdentityCategorizationApi.md#identityCategorizationCategoryMappingsUuidDelete) | **DELETE** /identity_categorization/category_mappings/{uuid} | Delete a existing category_mapping |
| [**identityCategorizationCategoryMappingsUuidGet()**](IdentityCategorizationApi.md#identityCategorizationCategoryMappingsUuidGet) | **GET** /identity_categorization/category_mappings/{uuid} | Get a existing category_mapping |
| [**identityCategorizationCategoryMappingsUuidPut()**](IdentityCategorizationApi.md#identityCategorizationCategoryMappingsUuidPut) | **PUT** /identity_categorization/category_mappings/{uuid} | Update a existing category_mapping |
| [**identityCategorizationConfigurationGet()**](IdentityCategorizationApi.md#identityCategorizationConfigurationGet) | **GET** /identity_categorization/configuration | Gets identity categorization configuration |
| [**identityCategorizationConfigurationPut()**](IdentityCategorizationApi.md#identityCategorizationConfigurationPut) | **PUT** /identity_categorization/configuration | Configures identity categorization |


## `identityCategorizationCategoryMappingsListPost()`

```php
identityCategorizationCategoryMappingsListPost($get_entities_request): \OpenAPI\Client\Model\CategoryMappingListIntentResponse
```

Get a list of existing category_mappings

This operation gets a list of category_mappings, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\IdentityCategorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\CategoryMappingListMetadata(); // \OpenAPI\Client\Model\CategoryMappingListMetadata

try {
    $result = $apiInstance->identityCategorizationCategoryMappingsListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityCategorizationApi->identityCategorizationCategoryMappingsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\CategoryMappingListMetadata**](../Model/CategoryMappingListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CategoryMappingListIntentResponse**](../Model/CategoryMappingListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `identityCategorizationCategoryMappingsPost()`

```php
identityCategorizationCategoryMappingsPost($body): \OpenAPI\Client\Model\CategoryMappingIntentResponse
```

Create a new category_mapping

This operation submits a request to create a new category_mapping based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\IdentityCategorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\CategoryMappingIntentInput(); // \OpenAPI\Client\Model\CategoryMappingIntentInput

try {
    $result = $apiInstance->identityCategorizationCategoryMappingsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityCategorizationApi->identityCategorizationCategoryMappingsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\CategoryMappingIntentInput**](../Model/CategoryMappingIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CategoryMappingIntentResponse**](../Model/CategoryMappingIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `identityCategorizationCategoryMappingsUuidDelete()`

```php
identityCategorizationCategoryMappingsUuidDelete($uuid): \OpenAPI\Client\Model\CategoryMappingIntentResponse
```

Delete a existing category_mapping

This operation submits a request to delete a existing category_mapping.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\IdentityCategorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->identityCategorizationCategoryMappingsUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityCategorizationApi->identityCategorizationCategoryMappingsUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\CategoryMappingIntentResponse**](../Model/CategoryMappingIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `identityCategorizationCategoryMappingsUuidGet()`

```php
identityCategorizationCategoryMappingsUuidGet($uuid): \OpenAPI\Client\Model\CategoryMappingIntentResponse
```

Get a existing category_mapping

This operation gets a existing category_mapping.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\IdentityCategorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->identityCategorizationCategoryMappingsUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityCategorizationApi->identityCategorizationCategoryMappingsUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\CategoryMappingIntentResponse**](../Model/CategoryMappingIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `identityCategorizationCategoryMappingsUuidPut()`

```php
identityCategorizationCategoryMappingsUuidPut($uuid, $body): \OpenAPI\Client\Model\CategoryMappingIntentResponse
```

Update a existing category_mapping

This operation submits a request to update a existing category_mapping based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\IdentityCategorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\CategoryMappingIntentInput(); // \OpenAPI\Client\Model\CategoryMappingIntentInput

try {
    $result = $apiInstance->identityCategorizationCategoryMappingsUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityCategorizationApi->identityCategorizationCategoryMappingsUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\CategoryMappingIntentInput**](../Model/CategoryMappingIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CategoryMappingIntentResponse**](../Model/CategoryMappingIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `identityCategorizationConfigurationGet()`

```php
identityCategorizationConfigurationGet(): \OpenAPI\Client\Model\IdentityCategorizationConfig
```

Gets identity categorization configuration

Gets identity categorization configuration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\IdentityCategorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->identityCategorizationConfigurationGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityCategorizationApi->identityCategorizationConfigurationGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\IdentityCategorizationConfig**](../Model/IdentityCategorizationConfig.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `identityCategorizationConfigurationPut()`

```php
identityCategorizationConfigurationPut($body): \OpenAPI\Client\Model\IdentityCategorizationConfig
```

Configures identity categorization

Allows for configuring various aspects of identity categorization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\IdentityCategorizationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\IdentityCategorizationConfig(); // \OpenAPI\Client\Model\IdentityCategorizationConfig

try {
    $result = $apiInstance->identityCategorizationConfigurationPut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityCategorizationApi->identityCategorizationConfigurationPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\IdentityCategorizationConfig**](../Model/IdentityCategorizationConfig.md)|  | |

### Return type

[**\OpenAPI\Client\Model\IdentityCategorizationConfig**](../Model/IdentityCategorizationConfig.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
