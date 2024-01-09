# OpenAPI\Client\ImagePlacementPoliciesApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**imagesPlacementPoliciesListPost()**](ImagePlacementPoliciesApi.md#imagesPlacementPoliciesListPost) | **POST** /images/placement_policies/list | Get a list of existing image_placement_policies |
| [**imagesPlacementPoliciesPost()**](ImagePlacementPoliciesApi.md#imagesPlacementPoliciesPost) | **POST** /images/placement_policies | Create a new image_placement_policy |
| [**imagesPlacementPoliciesUuidDelete()**](ImagePlacementPoliciesApi.md#imagesPlacementPoliciesUuidDelete) | **DELETE** /images/placement_policies/{uuid} | Delete a existing image_placement_policy |
| [**imagesPlacementPoliciesUuidGet()**](ImagePlacementPoliciesApi.md#imagesPlacementPoliciesUuidGet) | **GET** /images/placement_policies/{uuid} | Get a existing image_placement_policy |
| [**imagesPlacementPoliciesUuidPut()**](ImagePlacementPoliciesApi.md#imagesPlacementPoliciesUuidPut) | **PUT** /images/placement_policies/{uuid} | Update a existing image_placement_policy |


## `imagesPlacementPoliciesListPost()`

```php
imagesPlacementPoliciesListPost($get_entities_request): \OpenAPI\Client\Model\ImagePlacementPolicyListIntentResponse
```

Get a list of existing image_placement_policies

This operation gets a list of image_placement_policies, allowing for sorting and pagination. Note: Entities that have not been created successfully are not listed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ImagePlacementPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\ImagePlacementPolicyListMetadata(); // \OpenAPI\Client\Model\ImagePlacementPolicyListMetadata

try {
    $result = $apiInstance->imagesPlacementPoliciesListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagePlacementPoliciesApi->imagesPlacementPoliciesListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\ImagePlacementPolicyListMetadata**](../Model/ImagePlacementPolicyListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\ImagePlacementPolicyListIntentResponse**](../Model/ImagePlacementPolicyListIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `imagesPlacementPoliciesPost()`

```php
imagesPlacementPoliciesPost($body): \OpenAPI\Client\Model\ImagePlacementPolicyIntentResponse
```

Create a new image_placement_policy

Create a placement policy object by specifiying Image and Cluster categories and placement type. Based on this input the Images matching the category will be placed on the cluster which match the cluster category.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ImagePlacementPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\ImagePlacementPolicyIntentInput(); // \OpenAPI\Client\Model\ImagePlacementPolicyIntentInput

try {
    $result = $apiInstance->imagesPlacementPoliciesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagePlacementPoliciesApi->imagesPlacementPoliciesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\ImagePlacementPolicyIntentInput**](../Model/ImagePlacementPolicyIntentInput.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ImagePlacementPolicyIntentResponse**](../Model/ImagePlacementPolicyIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `imagesPlacementPoliciesUuidDelete()`

```php
imagesPlacementPoliciesUuidDelete($uuid): \OpenAPI\Client\Model\ImagePlacementPolicyIntentResponse
```

Delete a existing image_placement_policy

This operation submits a request to delete a existing image_placement_policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ImagePlacementPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->imagesPlacementPoliciesUuidDelete($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagePlacementPoliciesApi->imagesPlacementPoliciesUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\ImagePlacementPolicyIntentResponse**](../Model/ImagePlacementPolicyIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `imagesPlacementPoliciesUuidGet()`

```php
imagesPlacementPoliciesUuidGet($uuid): \OpenAPI\Client\Model\ImagePlacementPolicyIntentResponse
```

Get a existing image_placement_policy

This operation gets a existing image_placement_policy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ImagePlacementPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->imagesPlacementPoliciesUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagePlacementPoliciesApi->imagesPlacementPoliciesUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\ImagePlacementPolicyIntentResponse**](../Model/ImagePlacementPolicyIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `imagesPlacementPoliciesUuidPut()`

```php
imagesPlacementPoliciesUuidPut($uuid, $body): \OpenAPI\Client\Model\ImagePlacementPolicyIntentResponse
```

Update a existing image_placement_policy

This operation submits a request to update a existing image_placement_policy based on the input parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ImagePlacementPoliciesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$body = new \OpenAPI\Client\Model\ImagePlacementPolicyIntentInput(); // \OpenAPI\Client\Model\ImagePlacementPolicyIntentInput | Image placement policy to be updated

try {
    $result = $apiInstance->imagesPlacementPoliciesUuidPut($uuid, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagePlacementPoliciesApi->imagesPlacementPoliciesUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **body** | [**\OpenAPI\Client\Model\ImagePlacementPolicyIntentInput**](../Model/ImagePlacementPolicyIntentInput.md)| Image placement policy to be updated | |

### Return type

[**\OpenAPI\Client\Model\ImagePlacementPolicyIntentResponse**](../Model/ImagePlacementPolicyIntentResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
