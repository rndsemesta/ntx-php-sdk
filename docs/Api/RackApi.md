# OpenAPI\Client\RackApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**racksListPost()**](RackApi.md#racksListPost) | **POST** /racks/list | Retrieves all racks |
| [**racksPost()**](RackApi.md#racksPost) | **POST** /racks | Create a rack instance |
| [**racksUuidDelete()**](RackApi.md#racksUuidDelete) | **DELETE** /racks/{uuid} | Delete specified rack |
| [**racksUuidGet()**](RackApi.md#racksUuidGet) | **GET** /racks/{uuid} | Retrieves specified rack |
| [**racksUuidPut()**](RackApi.md#racksUuidPut) | **PUT** /racks/{uuid} | Update rack |
| [**racksValidateRackConfigPost()**](RackApi.md#racksValidateRackConfigPost) | **POST** /racks/validate_rack_config | Validates Specified Rack Configuration |


## `racksListPost()`

```php
racksListPost($get_entities_request): \OpenAPI\Client\Model\RackListIntentResponse
```

Retrieves all racks

Retrieves all racks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\RackListMetadata(); // \OpenAPI\Client\Model\RackListMetadata

try {
    $result = $apiInstance->racksListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RackApi->racksListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\RackListMetadata**](../Model/RackListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\RackListIntentResponse**](../Model/RackListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `racksPost()`

```php
racksPost($body): \OpenAPI\Client\Model\RackIntentResponse
```

Create a rack instance

Create a rack instance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\RackIntentInput(); // \OpenAPI\Client\Model\RackIntentInput | Create rack object

try {
    $result = $apiInstance->racksPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RackApi->racksPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\RackIntentInput**](../Model/RackIntentInput.md)| Create rack object | |

### Return type

[**\OpenAPI\Client\Model\RackIntentResponse**](../Model/RackIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `racksUuidDelete()`

```php
racksUuidDelete($uuid): \OpenAPI\Client\Model\RackIntentResponse
```

Delete specified rack

Delete specified rack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->racksUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RackApi->racksUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\RackIntentResponse**](../Model/RackIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `racksUuidGet()`

```php
racksUuidGet($uuid): \OpenAPI\Client\Model\RackIntentResponse
```

Retrieves specified rack

Retrieves specified rack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->racksUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RackApi->racksUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\RackIntentResponse**](../Model/RackIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `racksUuidPut()`

```php
racksUuidPut($uuid, $body): \OpenAPI\Client\Model\RackIntentResponse
```

Update rack

Update rack

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\RackIntentInput(); // \OpenAPI\Client\Model\RackIntentInput | Update rack

try {
    $result = $apiInstance->racksUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RackApi->racksUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\RackIntentInput**](../Model/RackIntentInput.md)| Update rack | |

### Return type

[**\OpenAPI\Client\Model\RackIntentResponse**](../Model/RackIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `racksValidateRackConfigPost()`

```php
racksValidateRackConfigPost($body): \OpenAPI\Client\Model\ValidateRackConfigOutput
```

Validates Specified Rack Configuration

Check whether given rack configuration in this cluster's context is valid or not. A rack configuration refers to a map of racks to the hosts it contains.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\RackApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ValidateRackConfigInput(); // \OpenAPI\Client\Model\ValidateRackConfigInput | Validate rack configuration

try {
    $result = $apiInstance->racksValidateRackConfigPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RackApi->racksValidateRackConfigPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\ValidateRackConfigInput**](../Model/ValidateRackConfigInput.md)| Validate rack configuration | |

### Return type

[**\OpenAPI\Client\Model\ValidateRackConfigOutput**](../Model/ValidateRackConfigOutput.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
