# # Workload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**adjusted_workload** | [**\OpenAPI\Client\Model\AdjustedWorkload**](AdjustedWorkload.md) |  | [optional]
**sql_workload** | [**\OpenAPI\Client\Model\SqlWorkload**](SqlWorkload.md) |  | [optional]
**workload_name** | **string** | Workload name. | [optional]
**exchange_workload** | [**\OpenAPI\Client\Model\ExchangeWorkload**](ExchangeWorkload.md) |  | [optional]
**to_remove** | **bool** | The variable to indicated if the workload is used as removed workload. | [optional] [default to false]
**enabled** | **bool** | The variable to indicate if the workload is enabled. | [optional] [default to true]
**splunk_workload** | [**\OpenAPI\Client\Model\SplunkWorkload**](SplunkWorkload.md) |  | [optional]
**vdi_workload** | [**\OpenAPI\Client\Model\VdiWorkload**](VdiWorkload.md) |  | [optional]
**vm_workload** | [**\OpenAPI\Client\Model\VmWorkload**](VmWorkload.md) |  | [optional]
**workload_type** | **string** | The type of workload. | [optional]
**resource_requirement** | [**\OpenAPI\Client\Model\GenericResourceSpec**](GenericResourceSpec.md) |  | [optional]
**schedule_timestamp_sec** | **int** | The scheduled timestamp in seconds. | [optional]
**xen_workload** | [**\OpenAPI\Client\Model\XenWorkload**](XenWorkload.md) |  | [optional]
**virtual_server_workload** | [**\OpenAPI\Client\Model\VirtualServerWorkload**](VirtualServerWorkload.md) |  | [optional]
**vm_category_workload** | [**\OpenAPI\Client\Model\VmCategoryWorkload**](VmCategoryWorkload.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
