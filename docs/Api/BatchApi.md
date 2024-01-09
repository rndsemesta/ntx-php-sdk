# OpenAPI\Client\BatchApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**batchPost()**](BatchApi.md#batchPost) | **POST** /batch | Submit a list of one or more intentful REST APIs to be processed |


## `batchPost()`

```php
batchPost($intent_list): \OpenAPI\Client\Model\BatchResponse
```

Submit a list of one or more intentful REST APIs to be processed

Batching allows for instructions for several operations to be sent using a single HTTP request. Depending on the batch parameters, the Nutanix v3 gateway processes each independent operation sequentially or in parallel. Once all operations in the batch have been completed, a consolidated response is returned and the HTTP connection is closed. The batch API takes an array of logical HTTP requests represented as JSON arrays. Maximum size of the array should not exceed 60. Each request comprises the following: - A method (corresponding to HTTP methods such as GET, PUT, and POST) - A relative URL (relative_url) - (Optional) A body (for POST and PUT requests). The batch API returns an array of logical HTTP responses represented as JSON arrays containing the following: - A status code - (Optional) A body represented as a JSON-encoded string

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\BatchApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$intent_list = new \OpenAPI\Client\Model\BatchRequest(); // \OpenAPI\Client\Model\BatchRequest | List of intent APIs

try {
    $result = $apiInstance->batchPost($intent_list);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BatchApi->batchPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **intent_list** | [**\OpenAPI\Client\Model\BatchRequest**](../Model/BatchRequest.md)| List of intent APIs | |

### Return type

[**\OpenAPI\Client\Model\BatchResponse**](../Model/BatchResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
