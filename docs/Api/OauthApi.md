# OpenAPI\Client\OauthApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**oauthAdfsLoginGet()**](OauthApi.md#oauthAdfsLoginGet) | **GET** /oauth/adfs_login | ADFS login url for idp |
| [**oauthAuthorizePost()**](OauthApi.md#oauthAuthorizePost) | **POST** /oauth/authorize | Used to get authorization code from server |
| [**oauthClientClientIdDelete()**](OauthApi.md#oauthClientClientIdDelete) | **DELETE** /oauth/client/{client_id} | Delete an existing Oauth client |
| [**oauthClientClientIdGet()**](OauthApi.md#oauthClientClientIdGet) | **GET** /oauth/client/{client_id} | Used to fetch existing oauth client details |
| [**oauthClientClientIdPut()**](OauthApi.md#oauthClientClientIdPut) | **PUT** /oauth/client/{client_id} | Used to update existing client details |
| [**oauthClientListPost()**](OauthApi.md#oauthClientListPost) | **POST** /oauth/client/list | Retrieves all oauth client |
| [**oauthClientPost()**](OauthApi.md#oauthClientPost) | **POST** /oauth/client | This is used to register new oauth client |
| [**oauthGenerateTokenPost()**](OauthApi.md#oauthGenerateTokenPost) | **POST** /oauth/generate_token | This is used when the user is already authenticated and would like to create bearer tokens for distribution |
| [**oauthIdpCallbackGet()**](OauthApi.md#oauthIdpCallbackGet) | **GET** /oauth/idp_callback | Oauth2 callback from IDP to intent gateway |
| [**oauthIdpLoginGet()**](OauthApi.md#oauthIdpLoginGet) | **GET** /oauth/idp_login | Oauth2 login to idp |
| [**oauthRevokeTokenPost()**](OauthApi.md#oauthRevokeTokenPost) | **POST** /oauth/revoke_token | Revoke a token will cause the token to be removed from system Any subsequent authorization calls with the token will fail |
| [**oauthTokenPost()**](OauthApi.md#oauthTokenPost) | **POST** /oauth/token | This callback is used to get token from Oauth2 provider |


## `oauthAdfsLoginGet()`

```php
oauthAdfsLoginGet()
```

ADFS login url for idp

Oauth2

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OauthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->oauthAdfsLoginGet();
} catch (Exception $e) {
    echo 'Exception when calling OauthApi->oauthAdfsLoginGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oauthAuthorizePost()`

```php
oauthAuthorizePost($client_id, $response_type, $confirm, $scope, $redirect_uri, $state): \OpenAPI\Client\Model\OauthStatus
```

Used to get authorization code from server

Authorization confirmation post url

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OauthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 'client_id_example'; // string | Your client ID
$response_type = 'response_type_example'; // string | Must be 'code'
$confirm = 'confirm_example'; // string | Must be 'yes' or 'no'
$scope = 'scope_example'; // string | Whitespace-separated list of scopes you application needs
$redirect_uri = 'redirect_uri_example'; // string | This URL is used to provide user authorization if the user accepted access to the application or not
$state = 'state_example'; // string | state parameter to prevent cross site origin attacks

try {
    $result = $apiInstance->oauthAuthorizePost($client_id, $response_type, $confirm, $scope, $redirect_uri, $state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OauthApi->oauthAuthorizePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**| Your client ID | |
| **response_type** | **string**| Must be &#39;code&#39; | |
| **confirm** | **string**| Must be &#39;yes&#39; or &#39;no&#39; | |
| **scope** | **string**| Whitespace-separated list of scopes you application needs | [optional] |
| **redirect_uri** | **string**| This URL is used to provide user authorization if the user accepted access to the application or not | [optional] |
| **state** | **string**| state parameter to prevent cross site origin attacks | [optional] |

### Return type

[**\OpenAPI\Client\Model\OauthStatus**](../Model/OauthStatus.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oauthClientClientIdDelete()`

```php
oauthClientClientIdDelete($client_id): \OpenAPI\Client\Model\OauthClientResponse
```

Delete an existing Oauth client

Delete existing Oauth client information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OauthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->oauthClientClientIdDelete($client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OauthApi->oauthClientClientIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\OauthClientResponse**](../Model/OauthClientResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oauthClientClientIdGet()`

```php
oauthClientClientIdGet($client_id): \OpenAPI\Client\Model\OauthClientResponse
```

Used to fetch existing oauth client details

Get Oauth client information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OauthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 'client_id_example'; // string

try {
    $result = $apiInstance->oauthClientClientIdGet($client_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OauthApi->oauthClientClientIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\OauthClientResponse**](../Model/OauthClientResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oauthClientClientIdPut()`

```php
oauthClientClientIdPut($client_id, $oauth_client): \OpenAPI\Client\Model\OauthClientResponse
```

Used to update existing client details

Update Oauth client information

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OauthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$client_id = 'client_id_example'; // string
$oauth_client = new \OpenAPI\Client\Model\OauthClientInput(); // \OpenAPI\Client\Model\OauthClientInput | Oauth client details

try {
    $result = $apiInstance->oauthClientClientIdPut($client_id, $oauth_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OauthApi->oauthClientClientIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **client_id** | **string**|  | |
| **oauth_client** | [**\OpenAPI\Client\Model\OauthClientInput**](../Model/OauthClientInput.md)| Oauth client details | |

### Return type

[**\OpenAPI\Client\Model\OauthClientResponse**](../Model/OauthClientResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oauthClientListPost()`

```php
oauthClientListPost($get_entities_request): \OpenAPI\Client\Model\OauthClientList
```

Retrieves all oauth client

Retrieves all oauth clients

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OauthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$get_entities_request = new \OpenAPI\Client\Model\OauthClientListMetadata(); // \OpenAPI\Client\Model\OauthClientListMetadata

try {
    $result = $apiInstance->oauthClientListPost($get_entities_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OauthApi->oauthClientListPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **get_entities_request** | [**\OpenAPI\Client\Model\OauthClientListMetadata**](../Model/OauthClientListMetadata.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OauthClientList**](../Model/OauthClientList.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oauthClientPost()`

```php
oauthClientPost($oauth_client): \OpenAPI\Client\Model\OauthClientResponse
```

This is used to register new oauth client

Add new Oauth Client

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OauthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$oauth_client = new \OpenAPI\Client\Model\OauthClientInput(); // \OpenAPI\Client\Model\OauthClientInput | Oauth client details

try {
    $result = $apiInstance->oauthClientPost($oauth_client);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OauthApi->oauthClientPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **oauth_client** | [**\OpenAPI\Client\Model\OauthClientInput**](../Model/OauthClientInput.md)| Oauth client details | |

### Return type

[**\OpenAPI\Client\Model\OauthClientResponse**](../Model/OauthClientResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oauthGenerateTokenPost()`

```php
oauthGenerateTokenPost($oauth_generate_token_request): \OpenAPI\Client\Model\OauthGenerateTokenResponse
```

This is used when the user is already authenticated and would like to create bearer tokens for distribution

Generates an oauth token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OauthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$oauth_generate_token_request = new \OpenAPI\Client\Model\OauthGenerateTokenRequest(); // \OpenAPI\Client\Model\OauthGenerateTokenRequest

try {
    $result = $apiInstance->oauthGenerateTokenPost($oauth_generate_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OauthApi->oauthGenerateTokenPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **oauth_generate_token_request** | [**\OpenAPI\Client\Model\OauthGenerateTokenRequest**](../Model/OauthGenerateTokenRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\OauthGenerateTokenResponse**](../Model/OauthGenerateTokenResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oauthIdpCallbackGet()`

```php
oauthIdpCallbackGet($code, $state)
```

Oauth2 callback from IDP to intent gateway

Oauth2 callback from IDP to intent gateway

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OauthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string
$state = 'state_example'; // string

try {
    $apiInstance->oauthIdpCallbackGet($code, $state);
} catch (Exception $e) {
    echo 'Exception when calling OauthApi->oauthIdpCallbackGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**|  | |
| **state** | **string**|  | [optional] |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oauthIdpLoginGet()`

```php
oauthIdpLoginGet()
```

Oauth2 login to idp

Oauth2

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OauthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->oauthIdpLoginGet();
} catch (Exception $e) {
    echo 'Exception when calling OauthApi->oauthIdpLoginGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oauthRevokeTokenPost()`

```php
oauthRevokeTokenPost($token, $token_type_hint): \OpenAPI\Client\Model\OauthStatus
```

Revoke a token will cause the token to be removed from system Any subsequent authorization calls with the token will fail

Revokes an oauth token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OauthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = 'token_example'; // string
$token_type_hint = 'access_token'; // string

try {
    $result = $apiInstance->oauthRevokeTokenPost($token, $token_type_hint);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OauthApi->oauthRevokeTokenPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token** | **string**|  | |
| **token_type_hint** | **string**|  | [optional] [default to &#39;access_token&#39;] |

### Return type

[**\OpenAPI\Client\Model\OauthStatus**](../Model/OauthStatus.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `oauthTokenPost()`

```php
oauthTokenPost($grant_type, $client_id, $client_secret, $code, $refresh_token, $state, $redirect_uri): \OpenAPI\Client\Model\ProviderOauthToken
```

This callback is used to get token from Oauth2 provider

Returns an access token

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\OauthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$grant_type = 'grant_type_example'; // string | Must be authorization_code or refresh_token
$client_id = 'client_id_example'; // string | Your client ID
$client_secret = 'client_secret_example'; // string | Your client secret
$code = 'code_example'; // string | authorization_code received in redirect_uri must for grant_type = authorization_code
$refresh_token = 'refresh_token_example'; // string | refresh_token received with previous token must for grant_type = refresh_token
$state = 'state_example'; // string | state parameter to prevent cross site origin attacks use only if passed in getting authorization
$redirect_uri = 'redirect_uri_example'; // string | redirect uri used to get authorization must for grant_type = authorization_code

try {
    $result = $apiInstance->oauthTokenPost($grant_type, $client_id, $client_secret, $code, $refresh_token, $state, $redirect_uri);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OauthApi->oauthTokenPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **grant_type** | **string**| Must be authorization_code or refresh_token | |
| **client_id** | **string**| Your client ID | |
| **client_secret** | **string**| Your client secret | |
| **code** | **string**| authorization_code received in redirect_uri must for grant_type &#x3D; authorization_code | [optional] |
| **refresh_token** | **string**| refresh_token received with previous token must for grant_type &#x3D; refresh_token | [optional] |
| **state** | **string**| state parameter to prevent cross site origin attacks use only if passed in getting authorization | [optional] |
| **redirect_uri** | **string**| redirect uri used to get authorization must for grant_type &#x3D; authorization_code | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProviderOauthToken**](../Model/ProviderOauthToken.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
