# OpenAPI\Client\CloudApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cloudConfigsCloudTypeGet()**](CloudApi.md#cloudConfigsCloudTypeGet) | **GET** /cloud_configs/{cloud_type} | Gets the Nutanix hosted cloud config. |
| [**cloudTrustsListPost()**](CloudApi.md#cloudTrustsListPost) | **POST** /cloud_trusts/list | List trusted clouds. |
| [**cloudTrustsPost()**](CloudApi.md#cloudTrustsPost) | **POST** /cloud_trusts | Pairs this cloud with the given cloud (Nutanix hosted cloud/ Onprem Cloud). |
| [**cloudTrustsUuidDelete()**](CloudApi.md#cloudTrustsUuidDelete) | **DELETE** /cloud_trusts/{uuid} | Deletes the specified cloud pairing. |
| [**cloudTrustsUuidGet()**](CloudApi.md#cloudTrustsUuidGet) | **GET** /cloud_trusts/{uuid} | Get the details of the specified trusted cloud. |


## `cloudConfigsCloudTypeGet()`

```php
cloudConfigsCloudTypeGet($cloud_type): \OpenAPI\Client\Model\CloudConfigResponse
```

Gets the Nutanix hosted cloud config.

Gets the Nutanix hosted cloud config.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloud_type = 'cloud_type_example'; // string | The Cloud Type.

try {
    $result = $apiInstance->cloudConfigsCloudTypeGet($cloud_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudConfigsCloudTypeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **cloud_type** | **string**| The Cloud Type. | |

### Return type

[**\OpenAPI\Client\Model\CloudConfigResponse**](../Model/CloudConfigResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudTrustsListPost()`

```php
cloudTrustsListPost($body): \OpenAPI\Client\Model\CloudTrustListIntentResponse
```

List trusted clouds.

Gets list of trusted clouds.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\CloudTrustListMetadata(); // \OpenAPI\Client\Model\CloudTrustListMetadata | A cloud trust object

try {
    $result = $apiInstance->cloudTrustsListPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudTrustsListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\CloudTrustListMetadata**](../Model/CloudTrustListMetadata.md)| A cloud trust object | |

### Return type

[**\OpenAPI\Client\Model\CloudTrustListIntentResponse**](../Model/CloudTrustListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudTrustsPost()`

```php
cloudTrustsPost($body): \OpenAPI\Client\Model\CloudTrustIntentResponse
```

Pairs this cloud with the given cloud (Nutanix hosted cloud/ Onprem Cloud).

Performs cloud pairing by establishing a trust with the provided cloud.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\CloudTrustIntentInput(); // \OpenAPI\Client\Model\CloudTrustIntentInput

try {
    $result = $apiInstance->cloudTrustsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudTrustsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\CloudTrustIntentInput**](../Model/CloudTrustIntentInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\CloudTrustIntentResponse**](../Model/CloudTrustIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudTrustsUuidDelete()`

```php
cloudTrustsUuidDelete($uuid): \OpenAPI\Client\Model\CloudTrustIntentResponse
```

Deletes the specified cloud pairing.

Deletes the specified cloud pairing by un-establishing trust with the cloud.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->cloudTrustsUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudTrustsUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\CloudTrustIntentResponse**](../Model/CloudTrustIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloudTrustsUuidGet()`

```php
cloudTrustsUuidGet($uuid): \OpenAPI\Client\Model\CloudTrustIntentResponse
```

Get the details of the specified trusted cloud.

Gets the details of the specified trusted cloud.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\CloudApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->cloudTrustsUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudApi->cloudTrustsUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\CloudTrustIntentResponse**](../Model/CloudTrustIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
