# # AppRunlogResources

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action_reference** | [**\OpenAPI\Client\Model\EntityReference**](EntityReference.md) |  | [optional]
**task_reference** | [**\OpenAPI\Client\Model\AppTaskReference**](AppTaskReference.md) |  | [optional]
**userdata_reference** | [**\OpenAPI\Client\Model\EntityReference**](EntityReference.md) |  | [optional]
**is_critical** | **bool** | critical or non-critical runlog | [default to false]
**root_reference** | [**\OpenAPI\Client\Model\AppRunlogReference**](AppRunlogReference.md) |  | [optional]
**call_runbook_reference** | [**\OpenAPI\Client\Model\AppTaskReference**](AppTaskReference.md) |  | [optional]
**element_type** | **string** | type of element this runlog refers to. | [optional]
**reason_list** | **string[]** | reasons of failure if any |
**parent_reference** | [**\OpenAPI\Client\Model\AppRunlogReference**](AppRunlogReference.md) |  | [optional]
**is_runlog_archived** | **bool** | Describe if action runlog is archived | [optional] [default to false]
**type** | **string** | type of runlog |
**application_reference** | [**\OpenAPI\Client\Model\AppReference**](AppReference.md) |  | [optional]
**element_reference** | [**\OpenAPI\Client\Model\EntityReference**](EntityReference.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
