# OpenAPI\Client\GroupsApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**groupsPost()**](GroupsApi.md#groupsPost) | **POST** /groups | Get Entities. |


## `groupsPost()`

```php
groupsPost($get_entities_request): \OpenAPI\Client\Model\GroupsGetEntitiesResponse
```

Get Entities.

Get entities from entity db.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\GroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\GroupsGetEntitiesRequest(); // \OpenAPI\Client\Model\GroupsGetEntitiesRequest

try {
    $result = $apiInstance->groupsPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GroupsApi->groupsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\GroupsGetEntitiesRequest**](../Model/GroupsGetEntitiesRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\GroupsGetEntitiesResponse**](../Model/GroupsGetEntitiesResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
