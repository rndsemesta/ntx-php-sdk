# OpenAPI\Client\SearchApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**searchPost()**](SearchApi.md#searchPost) | **POST** /search | Search Information on cluster |


## `searchPost()`

```php
searchPost($search_request): \OpenAPI\Client\Model\QueryResult
```

Search Information on cluster

Parse user query and give the structured search response according to user query

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SearchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search_request = new \OpenAPI\Client\Model\SearchRequest(); // \OpenAPI\Client\Model\SearchRequest

try {
    $result = $apiInstance->searchPost($search_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->searchPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search_request** | [**\OpenAPI\Client\Model\SearchRequest**](../Model/SearchRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\QueryResult**](../Model/QueryResult.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
