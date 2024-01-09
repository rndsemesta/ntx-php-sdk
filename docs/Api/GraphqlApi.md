# OpenAPI\Client\GraphqlApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**graphqlPost()**](GraphqlApi.md#graphqlPost) | **POST** /graphql | Execute graphql queries. |


## `graphqlPost()`

```php
graphqlPost($body): \OpenAPI\Client\Model\GraphqlResponse
```

Execute graphql queries.

Execute graphql query and return the data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\GraphqlApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\GraphqlQuery(); // \OpenAPI\Client\Model\GraphqlQuery | Graphql query to execute.

try {
    $result = $apiInstance->graphqlPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GraphqlApi->graphqlPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\GraphqlQuery**](../Model/GraphqlQuery.md)| Graphql query to execute. | |

### Return type

[**\OpenAPI\Client\Model\GraphqlResponse**](../Model/GraphqlResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
