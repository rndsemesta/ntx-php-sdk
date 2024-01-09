# OpenAPI\Client\SecurityMonitoringApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**securityMonitoringQueryPost()**](SecurityMonitoringApi.md#securityMonitoringQueryPost) | **POST** /security_monitoring/query | Query API in Security Monitoring. |
| [**securityMonitoringTopologyPost()**](SecurityMonitoringApi.md#securityMonitoringTopologyPost) | **POST** /security_monitoring/topology | Topology details |


## `securityMonitoringQueryPost()`

```php
securityMonitoringQueryPost($body): \OpenAPI\Client\Model\QueryResponse
```

Query API in Security Monitoring.

Query API to execute various queries and retrieve results in Security Monitoring.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SecurityMonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\QueryRequest(); // \OpenAPI\Client\Model\QueryRequest

try {
    $result = $apiInstance->securityMonitoringQueryPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityMonitoringApi->securityMonitoringQueryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\QueryRequest**](../Model/QueryRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\QueryResponse**](../Model/QueryResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `securityMonitoringTopologyPost()`

```php
securityMonitoringTopologyPost($body): \OpenAPI\Client\Model\TopologyResponse
```

Topology details

Topology details for visualisation in Security Monitoring

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\SecurityMonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \OpenAPI\Client\Model\TopologyRequest(); // \OpenAPI\Client\Model\TopologyRequest

try {
    $result = $apiInstance->securityMonitoringTopologyPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SecurityMonitoringApi->securityMonitoringTopologyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\OpenAPI\Client\Model\TopologyRequest**](../Model/TopologyRequest.md)|  | |

### Return type

[**\OpenAPI\Client\Model\TopologyResponse**](../Model/TopologyResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
