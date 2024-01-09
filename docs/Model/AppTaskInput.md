# # AppTaskInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**target_any_local_reference** | [**\OpenAPI\Client\Model\EntityReference**](EntityReference.md) |  | [optional]
**retries** | **string** | Number of retries for the task. | [optional]
**description** | **string** |  | [optional]
**child_tasks_local_reference_list** | [**\OpenAPI\Client\Model\AppTaskReference[]**](AppTaskReference.md) |  | [optional]
**name** | **string** |  |
**attrs** | **array<string,mixed>** | Task attrs for application of type object. | [optional]
**timeout_secs** | **string** | task timeout. | [optional]
**type** | **string** |  |
**variable_list** | [**\OpenAPI\Client\Model\AppVariableInput[]**](AppVariableInput.md) |  | [optional]
**uuid** | **string** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
