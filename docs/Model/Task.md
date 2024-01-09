# # Task

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Current state of the task. | [optional]
**last_update_time** | **\DateTime** | UTC date and time in RFC-3339 format when task was last updated. | [optional]
**error_detail** | **string** | In case of task failure this field will provide the error description. | [optional]
**logical_timestamp** | **int** | Number of times the task has been updated. The value increases sequentially with each update of the task and can be used to verify if there have been changes to the task. | [optional]
**requested_status** | **string** | Final expected state of the task. It is set when the task is aborted. | [optional]
**entity_reference_list** | [**\OpenAPI\Client\Model\Reference[]**](Reference.md) |  | [optional]
**start_time** | **\DateTime** | UTC date and time in RFC-3339 format when Task execution started. | [optional]
**creation_time** | **\DateTime** | UTC date and time in RFC-3339 format when task was created. | [optional]
**uuid** | **string** | UUID of the task. | [optional]
**start_time_usecs** | **int** | Time in microseconds from epoch when the task execution started. | [optional]
**cluster_reference** | [**\OpenAPI\Client\Model\ClusterReference**](ClusterReference.md) |  | [optional]
**subtask_reference_list** | [**\OpenAPI\Client\Model\TaskReference[]**](TaskReference.md) | Reference to the sub-tasks. | [optional]
**completion_time** | **\DateTime** | UTC date and time in RFC-3339 format when Task execution completed. | [optional]
**creation_time_usecs** | **int** | Time in microseconds from epoch when task was created. | [optional]
**progress_message** | **string** | Description of what currently the task is doing. | [optional]
**operation_type** | **string** | Type of the operation tracked by the task. | [optional]
**completion_time_usecs** | **int** | Time in microseconds from epoch when task execution completed. | [optional]
**error_code** | **string** | In case of task failure this field will provide the error code. | [optional]
**percentage_complete** | **int** | The completion percentage for the task. | [optional]
**api_version** | **string** | API Version of the Nutanix v3 API framework. | [optional] [default to '3.1.0']
**parent_task_reference** | [**\OpenAPI\Client\Model\TaskReference**](TaskReference.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
