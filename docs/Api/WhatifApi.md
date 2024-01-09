# OpenAPI\Client\WhatifApi

All URIs are relative to /api/nutanix/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**capacityPlanningRecommendationsPost()**](WhatifApi.md#capacityPlanningRecommendationsPost) | **POST** /capacity_planning/recommendations | Recommend nodes for scenario. |
| [**capacityPlanningRecommendationsTaskUuidGet()**](WhatifApi.md#capacityPlanningRecommendationsTaskUuidGet) | **GET** /capacity_planning/recommendations/{task_uuid} | Get scenario runway and recommendation |
| [**capacityPlanningReportsPost()**](WhatifApi.md#capacityPlanningReportsPost) | **POST** /capacity_planning/reports | Generate scenario summary pdf report |
| [**capacityPlanningReportsTaskUuidGet()**](WhatifApi.md#capacityPlanningReportsTaskUuidGet) | **GET** /capacity_planning/reports/{task_uuid} | Get scenario summary pdf report |
| [**capacityPlanningScenariosGet()**](WhatifApi.md#capacityPlanningScenariosGet) | **GET** /capacity_planning/scenarios | Get scenarios name and uuid with pagination |
| [**capacityPlanningScenariosPost()**](WhatifApi.md#capacityPlanningScenariosPost) | **POST** /capacity_planning/scenarios | Create a scenario |
| [**capacityPlanningScenariosUuidDelete()**](WhatifApi.md#capacityPlanningScenariosUuidDelete) | **DELETE** /capacity_planning/scenarios/{uuid} | Delete scenario |
| [**capacityPlanningScenariosUuidGet()**](WhatifApi.md#capacityPlanningScenariosUuidGet) | **GET** /capacity_planning/scenarios/{uuid} | Get scenario with uuid |
| [**capacityPlanningScenariosUuidPut()**](WhatifApi.md#capacityPlanningScenariosUuidPut) | **PUT** /capacity_planning/scenarios/{uuid} | Update scenario |


## `capacityPlanningRecommendationsPost()`

```php
capacityPlanningRecommendationsPost($recommendation_params): \OpenAPI\Client\Model\ProceduralResponse
```

Recommend nodes for scenario.

Run scenario recommendation in background and return task uuid.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\WhatifApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$recommendation_params = new \OpenAPI\Client\Model\RecommendationParams(); // \OpenAPI\Client\Model\RecommendationParams | recommendation request include scenario uuid.

try {
    $result = $apiInstance->capacityPlanningRecommendationsPost($recommendation_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatifApi->capacityPlanningRecommendationsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **recommendation_params** | [**\OpenAPI\Client\Model\RecommendationParams**](../Model/RecommendationParams.md)| recommendation request include scenario uuid. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProceduralResponse**](../Model/ProceduralResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `capacityPlanningRecommendationsTaskUuidGet()`

```php
capacityPlanningRecommendationsTaskUuidGet($task_uuid): \OpenAPI\Client\Model\WhatifScenario
```

Get scenario runway and recommendation

Get scenario runway and recommendation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\WhatifApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_uuid = 0e09cf83-ac68-4f28-af70-6df9a43df4f0; // string | Task uuid in path.

try {
    $result = $apiInstance->capacityPlanningRecommendationsTaskUuidGet($task_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatifApi->capacityPlanningRecommendationsTaskUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_uuid** | **string**| Task uuid in path. | |

### Return type

[**\OpenAPI\Client\Model\WhatifScenario**](../Model/WhatifScenario.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `capacityPlanningReportsPost()`

```php
capacityPlanningReportsPost($report_params): \OpenAPI\Client\Model\ProceduralResponse
```

Generate scenario summary pdf report

Generate scenario summary pdf report and return task uuid.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\WhatifApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_params = new \OpenAPI\Client\Model\ReportParams(); // \OpenAPI\Client\Model\ReportParams | report request include scenario uuid and locale.

try {
    $result = $apiInstance->capacityPlanningReportsPost($report_params);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatifApi->capacityPlanningReportsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **report_params** | [**\OpenAPI\Client\Model\ReportParams**](../Model/ReportParams.md)| report request include scenario uuid and locale. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ProceduralResponse**](../Model/ProceduralResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `capacityPlanningReportsTaskUuidGet()`

```php
capacityPlanningReportsTaskUuidGet($task_uuid): object
```

Get scenario summary pdf report

Get scenario summary pdf report.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\WhatifApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$task_uuid = 0e09cf83-ac68-4f28-af70-6df9a43df4f0; // string | Task uuid in path.

try {
    $result = $apiInstance->capacityPlanningReportsTaskUuidGet($task_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatifApi->capacityPlanningReportsTaskUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **task_uuid** | **string**| Task uuid in path. | |

### Return type

**object**

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `capacityPlanningScenariosGet()`

```php
capacityPlanningScenariosGet($offset, $limit): \OpenAPI\Client\Model\WhatifScenarios
```

Get scenarios name and uuid with pagination

Query all scenarios name and uuid with pagination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\WhatifApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // int
$limit = 50; // int

try {
    $result = $apiInstance->capacityPlanningScenariosGet($offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatifApi->capacityPlanningScenariosGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **int**|  | [optional] [default to 0] |
| **limit** | **int**|  | [optional] [default to 50] |

### Return type

[**\OpenAPI\Client\Model\WhatifScenarios**](../Model/WhatifScenarios.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `capacityPlanningScenariosPost()`

```php
capacityPlanningScenariosPost($scenario): \OpenAPI\Client\Model\CapacityPlanningScenariosPost201Response
```

Create a scenario

Create a new scenario in DB.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\WhatifApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scenario = new \OpenAPI\Client\Model\WhatifScenario(); // \OpenAPI\Client\Model\WhatifScenario | scenario body.

try {
    $result = $apiInstance->capacityPlanningScenariosPost($scenario);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatifApi->capacityPlanningScenariosPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **scenario** | [**\OpenAPI\Client\Model\WhatifScenario**](../Model/WhatifScenario.md)| scenario body. | |

### Return type

[**\OpenAPI\Client\Model\CapacityPlanningScenariosPost201Response**](../Model/CapacityPlanningScenariosPost201Response.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `capacityPlanningScenariosUuidDelete()`

```php
capacityPlanningScenariosUuidDelete($uuid)
```

Delete scenario

Delete scenario.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\WhatifApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $apiInstance->capacityPlanningScenariosUuidDelete($uuid);
} catch (Exception $e) {
    echo 'Exception when calling WhatifApi->capacityPlanningScenariosUuidDelete: ', $e->getMessage(), PHP_EOL;
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

## `capacityPlanningScenariosUuidGet()`

```php
capacityPlanningScenariosUuidGet($uuid): \OpenAPI\Client\Model\WhatifScenario
```

Get scenario with uuid

Get scenario with given uuid.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\WhatifApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.

try {
    $result = $apiInstance->capacityPlanningScenariosUuidGet($uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatifApi->capacityPlanningScenariosUuidGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |

### Return type

[**\OpenAPI\Client\Model\WhatifScenario**](../Model/WhatifScenario.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `capacityPlanningScenariosUuidPut()`

```php
capacityPlanningScenariosUuidPut($uuid, $scenario): \OpenAPI\Client\Model\WhatifScenario
```

Update scenario

Update scenario.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\WhatifApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$uuid = 'uuid_example'; // string | The UUID of the entity.
$scenario = new \OpenAPI\Client\Model\WhatifScenario(); // \OpenAPI\Client\Model\WhatifScenario | scenario body.

try {
    $result = $apiInstance->capacityPlanningScenariosUuidPut($uuid, $scenario);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhatifApi->capacityPlanningScenariosUuidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **uuid** | **string**| The UUID of the entity. | |
| **scenario** | [**\OpenAPI\Client\Model\WhatifScenario**](../Model/WhatifScenario.md)| scenario body. | |

### Return type

[**\OpenAPI\Client\Model\WhatifScenario**](../Model/WhatifScenario.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
