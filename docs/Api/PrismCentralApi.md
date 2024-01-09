# OpenAPI\Client\PrismCentralApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**prismCentralCmspConfigurePost()**](PrismCentralApi.md#prismCentralCmspConfigurePost) | **POST** /prism_central/cmsp/configure | Enables CMSP on Prism Central. |
| [**prismCentralGet()**](PrismCentralApi.md#prismCentralGet) | **GET** /prism_central | Get a existing Prism Central |
| [**prismCentralNodesPost()**](PrismCentralApi.md#prismCentralNodesPost) | **POST** /prism_central/nodes | Add a new prism central VM to Prism Central cluster. |


## `prismCentralCmspConfigurePost()`

```php
prismCentralCmspConfigurePost($body): \OpenAPI\Client\Model\PrismCentralEnableCmspStatus
```

Enables CMSP on Prism Central.

Enables CMSP on Prism Central using all passed fields.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PrismCentralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\CmspConfigEnablement(); // \OpenAPI\Client\Model\CmspConfigEnablement

try {
    $result = $apiInstance->prismCentralCmspConfigurePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrismCentralApi->prismCentralCmspConfigurePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\CmspConfigEnablement**](../Model/CmspConfigEnablement.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PrismCentralEnableCmspStatus**](../Model/PrismCentralEnableCmspStatus.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `prismCentralGet()`

```php
prismCentralGet(): \OpenAPI\Client\Model\PrismCentral
```

Get a existing Prism Central

This operation gets a existing Prism Central.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PrismCentralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->prismCentralGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrismCentralApi->prismCentralGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\PrismCentral**](../Model/PrismCentral.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `prismCentralNodesPost()`

```php
prismCentralNodesPost($body): \OpenAPI\Client\Model\PrismCentralRequestStatus
```

Add a new prism central VM to Prism Central cluster.

Given an intentful spec, add a new prism central vm to the cluster .

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\PrismCentralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\PrismCentralNodes(); // \OpenAPI\Client\Model\PrismCentralNodes

try {
    $result = $apiInstance->prismCentralNodesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PrismCentralApi->prismCentralNodesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\PrismCentralNodes**](../Model/PrismCentralNodes.md)|  | |

### Return type

[**\OpenAPI\Client\Model\PrismCentralRequestStatus**](../Model/PrismCentralRequestStatus.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
