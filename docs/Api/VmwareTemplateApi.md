# OpenAPI\Client\VmwareTemplateApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**vmwareV6AccountsAccountUuidTemplatesUuidGet()**](VmwareTemplateApi.md#vmwareV6AccountsAccountUuidTemplatesUuidGet) | **GET** /vmware/v6/accounts/{account_uuid}/templates/{uuid} | Get vmware template |
| [**vmwareV6TemplateListPost()**](VmwareTemplateApi.md#vmwareV6TemplateListPost) | **POST** /vmware/v6/template/list | List vm templates |


## `vmwareV6AccountsAccountUuidTemplatesUuidGet()`

```php
vmwareV6AccountsAccountUuidTemplatesUuidGet($uuid, $account_uuid): array<string,mixed>
```

Get vmware template

Given a UUID, returns a vmware template

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmwareTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | uuid of template
$account_uuid = 'account_uuid_example'; // string | uuid of account

try {
    $result = $apiInstance->vmwareV6AccountsAccountUuidTemplatesUuidGet($uuid, $account_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmwareTemplateApi->vmwareV6AccountsAccountUuidTemplatesUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| uuid of template | |
| **account_uuid** | **string**| uuid of account | |

### Return type

**array<string,mixed>**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `vmwareV6TemplateListPost()`

```php
vmwareV6TemplateListPost($get_entities_request): array<string,mixed>
```

List vm templates

List all vm templates in a datacenter. Supported filters are: - account_uuid

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\VmwareTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\VmwareListMetadata(); // \OpenAPI\Client\Model\VmwareListMetadata | Request body

try {
    $result = $apiInstance->vmwareV6TemplateListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VmwareTemplateApi->vmwareV6TemplateListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\VmwareListMetadata**](../Model/VmwareListMetadata.md)| Request body | |

### Return type

**array<string,mixed>**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
