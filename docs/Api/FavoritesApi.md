# OpenAPI\Client\FavoritesApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**searchFavoritesGet()**](FavoritesApi.md#searchFavoritesGet) | **GET** /search/favorites | Get all favorites. |
| [**searchFavoritesPost()**](FavoritesApi.md#searchFavoritesPost) | **POST** /search/favorites | Create a favorite |
| [**searchFavoritesUuidDelete()**](FavoritesApi.md#searchFavoritesUuidDelete) | **DELETE** /search/favorites/{uuid} | Delete a favorite. |


## `searchFavoritesGet()`

```php
searchFavoritesGet(): \OpenAPI\Client\Model\FavoriteGetResponse
```

Get all favorites.

Get all favorites for current logged in user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\FavoritesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->searchFavoritesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoritesApi->searchFavoritesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\FavoriteGetResponse**](../Model/FavoriteGetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchFavoritesPost()`

```php
searchFavoritesPost($favorite): \OpenAPI\Client\Model\Favorite
```

Create a favorite

Add a search query as user favorite.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\FavoritesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$favorite = new \OpenAPI\Client\Model\Favorite(); // \OpenAPI\Client\Model\Favorite

try {
    $result = $apiInstance->searchFavoritesPost($favorite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FavoritesApi->searchFavoritesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **favorite** | [**\OpenAPI\Client\Model\Favorite**](../Model/Favorite.md)|  | |

### Return type

[**\OpenAPI\Client\Model\Favorite**](../Model/Favorite.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `searchFavoritesUuidDelete()`

```php
searchFavoritesUuidDelete($uuid)
```

Delete a favorite.

Delete a favorite.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\FavoritesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $apiInstance->searchFavoritesUuidDelete($uuid);
} catch (Exception $e) {
    echo 'Exception when calling FavoritesApi->searchFavoritesUuidDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
