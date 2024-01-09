# OpenAPI\Client\IdempotenceIdentifiersApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**idempotenceIdentifiersClientIdentifierDelete()**](IdempotenceIdentifiersApi.md#idempotenceIdentifiersClientIdentifierDelete) | **DELETE** /idempotence_identifiers/{client_identifier} | Delete an existing idempotence_identifier |
| [**idempotenceIdentifiersClientIdentifierGet()**](IdempotenceIdentifiersApi.md#idempotenceIdentifiersClientIdentifierGet) | **GET** /idempotence_identifiers/{client_identifier} | Get an existing idempotence_identifier |
| [**idempotenceIdentifiersPost()**](IdempotenceIdentifiersApi.md#idempotenceIdentifiersPost) | **POST** /idempotence_identifiers | Create an new idempotence_identifier \&quot; (UUID4)\&quot; |
| [**idempotenceIdentifiersSaltedPost()**](IdempotenceIdentifiersApi.md#idempotenceIdentifiersSaltedPost) | **POST** /idempotence_identifiers/salted | Create an new idempotence_identifier \&quot; (Salted / UUID5)\&quot; |


## `idempotenceIdentifiersClientIdentifierDelete()`

```php
idempotenceIdentifiersClientIdentifierDelete($client_identifier)
```

Delete an existing idempotence_identifier

This operation submits a request to delete an existing idempotence_identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\IdempotenceIdentifiersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_identifier = 'client_identifier_example'; // string

try {
    $apiInstance->idempotenceIdentifiersClientIdentifierDelete($client_identifier);
} catch (Exception $e) {
    echo 'Exception when calling IdempotenceIdentifiersApi->idempotenceIdentifiersClientIdentifierDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_identifier** | **string**|  | |

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

## `idempotenceIdentifiersClientIdentifierGet()`

```php
idempotenceIdentifiersClientIdentifierGet($client_identifier): \OpenAPI\Client\Model\IdempotenceIdentifiersResponse
```

Get an existing idempotence_identifier

This operation gets an existing idempotence_identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\IdempotenceIdentifiersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_identifier = 'client_identifier_example'; // string

try {
    $result = $apiInstance->idempotenceIdentifiersClientIdentifierGet($client_identifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdempotenceIdentifiersApi->idempotenceIdentifiersClientIdentifierGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_identifier** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\IdempotenceIdentifiersResponse**](../Model/IdempotenceIdentifiersResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `idempotenceIdentifiersPost()`

```php
idempotenceIdentifiersPost($body): \OpenAPI\Client\Model\IdempotenceIdentifiersResponse
```

Create an new idempotence_identifier \" (UUID4)\"

This operation submits a request to create an new idempotence_identifier based on the input parameters. The idempotence_identifiers API allows users to generate an idempotent UUID4 with a user-provided identifier. The idempotent UUID(s) can later be passed in POST requests. By default,  Nutanix v3 APIs do not allow for operations to be created with user-provided UUIDs; each POST request received by the API gateway results in a UUID4 being automatically generated and returned in the response JSON.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\IdempotenceIdentifiersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\IdempotenceIdentifiersInput(); // \OpenAPI\Client\Model\IdempotenceIdentifiersInput | An idempotence identifier object.

try {
    $result = $apiInstance->idempotenceIdentifiersPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdempotenceIdentifiersApi->idempotenceIdentifiersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\IdempotenceIdentifiersInput**](../Model/IdempotenceIdentifiersInput.md)| An idempotence identifier object. | [optional] |

### Return type

[**\OpenAPI\Client\Model\IdempotenceIdentifiersResponse**](../Model/IdempotenceIdentifiersResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `idempotenceIdentifiersSaltedPost()`

```php
idempotenceIdentifiersSaltedPost($body): \OpenAPI\Client\Model\IdentifierResponse
```

Create an new idempotence_identifier \" (Salted / UUID5)\"

This operation submits a request to create an new idempotence_identifier based on the input parameters. This internal API generates idempotent UUID5(s)for given name or list of names. These are deterministic UUID5, so use caution as this can result in duplicated uuids across environments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\IdempotenceIdentifiersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\IdentifierInput(); // \OpenAPI\Client\Model\IdentifierInput

try {
    $result = $apiInstance->idempotenceIdentifiersSaltedPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdempotenceIdentifiersApi->idempotenceIdentifiersSaltedPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\IdentifierInput**](../Model/IdentifierInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\IdentifierResponse**](../Model/IdentifierResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
