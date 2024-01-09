# OpenAPI\Client\ActionTemplatesApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**actionTemplatesListPost()**](ActionTemplatesApi.md#actionTemplatesListPost) | **POST** /action_templates/list | Get a list of existing action_template |
| [**actionTemplatesPost()**](ActionTemplatesApi.md#actionTemplatesPost) | **POST** /action_templates | Create a new action_template |
| [**actionTemplatesUuidDelete()**](ActionTemplatesApi.md#actionTemplatesUuidDelete) | **DELETE** /action_templates/{uuid} | Delete a existing action_template |
| [**actionTemplatesUuidGet()**](ActionTemplatesApi.md#actionTemplatesUuidGet) | **GET** /action_templates/{uuid} | Get a existing action_template |
| [**actionTemplatesUuidPut()**](ActionTemplatesApi.md#actionTemplatesUuidPut) | **PUT** /action_templates/{uuid} | Update a existing action_template |


## `actionTemplatesListPost()`

```php
actionTemplatesListPost($get_entities_request): \OpenAPI\Client\Model\ActionTemplateListIntentResponse
```

Get a list of existing action_template

This operation gets a list of action_template, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ActionTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\ActionTemplateListMetadata(); // \OpenAPI\Client\Model\ActionTemplateListMetadata

try {
    $result = $apiInstance->actionTemplatesListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionTemplatesApi->actionTemplatesListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\ActionTemplateListMetadata**](../Model/ActionTemplateListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ActionTemplateListIntentResponse**](../Model/ActionTemplateListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionTemplatesPost()`

```php
actionTemplatesPost($body): \OpenAPI\Client\Model\ActionTemplateIntentResponse
```

Create a new action_template

This operation submits a request to create a new action_template based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ActionTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ActionTemplateIntentInput(); // \OpenAPI\Client\Model\ActionTemplateIntentInput

try {
    $result = $apiInstance->actionTemplatesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionTemplatesApi->actionTemplatesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\ActionTemplateIntentInput**](../Model/ActionTemplateIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ActionTemplateIntentResponse**](../Model/ActionTemplateIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionTemplatesUuidDelete()`

```php
actionTemplatesUuidDelete($uuid)
```

Delete a existing action_template

This operation submits a request to delete a existing action_template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ActionTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $apiInstance->actionTemplatesUuidDelete($uuid);
} catch (Exception $e) {
    echo 'Exception when calling ActionTemplatesApi->actionTemplatesUuidDelete: ', $e->getMessage(), PHP_EOL;
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

## `actionTemplatesUuidGet()`

```php
actionTemplatesUuidGet($uuid): \OpenAPI\Client\Model\ActionTemplateIntentResponse
```

Get a existing action_template

This operation gets a existing action_template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ActionTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->actionTemplatesUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionTemplatesApi->actionTemplatesUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\ActionTemplateIntentResponse**](../Model/ActionTemplateIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `actionTemplatesUuidPut()`

```php
actionTemplatesUuidPut($uuid, $body): \OpenAPI\Client\Model\ActionTemplateIntentResponse
```

Update a existing action_template

This operation submits a request to update a existing action_template based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ActionTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\ActionTemplateIntentInput(); // \OpenAPI\Client\Model\ActionTemplateIntentInput

try {
    $result = $apiInstance->actionTemplatesUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActionTemplatesApi->actionTemplatesUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\ActionTemplateIntentInput**](../Model/ActionTemplateIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ActionTemplateIntentResponse**](../Model/ActionTemplateIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
