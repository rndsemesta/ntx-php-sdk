# OpenAPI\Client\CategoriesApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**categoriesListPost()**](CategoriesApi.md#categoriesListPost) | **POST** /categories/list | List the category keys. |
| [**categoriesNameDelete()**](CategoriesApi.md#categoriesNameDelete) | **DELETE** /categories/{name} | Delete a category Key. |
| [**categoriesNameGet()**](CategoriesApi.md#categoriesNameGet) | **GET** /categories/{name} | Get a category key. |
| [**categoriesNameListPost()**](CategoriesApi.md#categoriesNameListPost) | **POST** /categories/{name}/list | List the values for a specified key. |
| [**categoriesNamePut()**](CategoriesApi.md#categoriesNamePut) | **PUT** /categories/{name} | Create or Update a category Key. |
| [**categoriesNameValueDelete()**](CategoriesApi.md#categoriesNameValueDelete) | **DELETE** /categories/{name}/{value} | Delete a category value. |
| [**categoriesNameValueGet()**](CategoriesApi.md#categoriesNameValueGet) | **GET** /categories/{name}/{value} | Get a category value. |
| [**categoriesNameValuePut()**](CategoriesApi.md#categoriesNameValuePut) | **PUT** /categories/{name}/{value} | Create or Update a category value. |
| [**categoryQueryPost()**](CategoriesApi.md#categoryQueryPost) | **POST** /category/query | Get category usage details. |


## `categoriesListPost()`

```php
categoriesListPost($get_entities_request): \OpenAPI\Client\Model\CategoryKeyListResponse
```

List the category keys.

List the category keys.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\CategoryListMetadata(); // \OpenAPI\Client\Model\CategoryListMetadata

try {
    $result = $apiInstance->categoriesListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\CategoryListMetadata**](../Model/CategoryListMetadata.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CategoryKeyListResponse**](../Model/CategoryKeyListResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoriesNameDelete()`

```php
categoriesNameDelete($name)
```

Delete a category Key.

Delete a category Key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string

try {
    $apiInstance->categoriesNameDelete($name);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesNameDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | |

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

## `categoriesNameGet()`

```php
categoriesNameGet($name): \OpenAPI\Client\Model\CategoryKeyStatus
```

Get a category key.

Get a category key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string

try {
    $result = $apiInstance->categoriesNameGet($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesNameGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\CategoryKeyStatus**](../Model/CategoryKeyStatus.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoriesNameListPost()`

```php
categoriesNameListPost($name, $get_entities_request): \OpenAPI\Client\Model\CategoryValueListResponse
```

List the values for a specified key.

List the values for a specified key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string
$get_entities_request = new \OpenAPI\Client\Model\CategoryListMetadata(); // \OpenAPI\Client\Model\CategoryListMetadata

try {
    $result = $apiInstance->categoriesNameListPost($name, $get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesNameListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | |
| **get_entities_request** | [**\OpenAPI\Client\Model\CategoryListMetadata**](../Model/CategoryListMetadata.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CategoryValueListResponse**](../Model/CategoryValueListResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoriesNamePut()`

```php
categoriesNamePut($name, $spec): \OpenAPI\Client\Model\CategoryKeyStatus
```

Create or Update a category Key.

Create or Update a category Key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string
$spec = new \OpenAPI\Client\Model\CategoryKey(); // \OpenAPI\Client\Model\CategoryKey

try {
    $result = $apiInstance->categoriesNamePut($name, $spec);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesNamePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | |
| **spec** | [**\OpenAPI\Client\Model\CategoryKey**](../Model/CategoryKey.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CategoryKeyStatus**](../Model/CategoryKeyStatus.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoriesNameValueDelete()`

```php
categoriesNameValueDelete($name, $value)
```

Delete a category value.

Delete a category value.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string
$value = 'value_example'; // string

try {
    $apiInstance->categoriesNameValueDelete($name, $value);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesNameValueDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | |
| **value** | **string**|  | |

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

## `categoriesNameValueGet()`

```php
categoriesNameValueGet($name, $value): \OpenAPI\Client\Model\CategoryValueStatus
```

Get a category value.

Get a category value.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string
$value = 'value_example'; // string

try {
    $result = $apiInstance->categoriesNameValueGet($name, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesNameValueGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | |
| **value** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\CategoryValueStatus**](../Model/CategoryValueStatus.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoriesNameValuePut()`

```php
categoriesNameValuePut($name, $value, $spec): \OpenAPI\Client\Model\CategoryValueStatus
```

Create or Update a category value.

Create or Update a category value. Creates when value doesn't exist.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string
$value = 'value_example'; // string
$spec = new \OpenAPI\Client\Model\CategoryValue(); // \OpenAPI\Client\Model\CategoryValue

try {
    $result = $apiInstance->categoriesNameValuePut($name, $value, $spec);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoriesNameValuePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**|  | |
| **value** | **string**|  | |
| **spec** | [**\OpenAPI\Client\Model\CategoryValue**](../Model/CategoryValue.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CategoryValueStatus**](../Model/CategoryValueStatus.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `categoryQueryPost()`

```php
categoryQueryPost($query): \OpenAPI\Client\Model\CategoryQueryResponse
```

Get category usage details.

Get list of entities attached to categories or policies in which categories are used as defined by the filter criteria.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CategoriesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query = new \OpenAPI\Client\Model\CategoryQueryInput(); // \OpenAPI\Client\Model\CategoryQueryInput

try {
    $result = $apiInstance->categoryQueryPost($query);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CategoriesApi->categoryQueryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **query** | [**\OpenAPI\Client\Model\CategoryQueryInput**](../Model/CategoryQueryInput.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CategoryQueryResponse**](../Model/CategoryQueryResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
