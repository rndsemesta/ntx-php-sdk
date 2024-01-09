# OpenAPI\Client\MhVmApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**mhVmsUuidValidateMigrationPost()**](MhVmApi.md#mhVmsUuidValidateMigrationPost) | **POST** /mh_vms/{uuid}/validate_migration | Validates the feasibility of VM migration to given migration target. |


## `mhVmsUuidValidateMigrationPost()`

```php
mhVmsUuidValidateMigrationPost($uuid, $body): \OpenAPI\Client\Model\VmValidateMigrationOutputInner[]
```

Validates the feasibility of VM migration to given migration target.

Validates the feasibility of VM migration to given migration target, if not feasible returns the reason behind it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\MhVmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\VmValidateMigrationInput(); // \OpenAPI\Client\Model\VmValidateMigrationInput

try {
    $result = $apiInstance->mhVmsUuidValidateMigrationPost($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MhVmApi->mhVmsUuidValidateMigrationPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\VmValidateMigrationInput**](../Model/VmValidateMigrationInput.md)|  | |

### Return type

[**\OpenAPI\Client\Model\VmValidateMigrationOutputInner[]**](../Model/VmValidateMigrationOutputInner.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
