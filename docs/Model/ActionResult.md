# # ActionResult

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action_instance_index** | **int** | Index of action instance in action rule. | [optional]
**action_type_reference** | [**\OpenAPI\Client\Model\ActionTypeReference**](ActionTypeReference.md) |  |
**output_parameter_values** | **array<string,string>** | The trigger or action required input parameter value map, or the output parameters. | [optional]
**action_type_display_name** | **string** | the display name | [optional]
**error_message_list** | **string[]** | A list of error messages if failed, or if timed out.  For actions that have rule&#39;s on_timeout property set to RETRY, each of the retry could have one timeout message. | [optional]
**execution_status** | **string** | The execution status of an action or an action rule. |
**info_message_list** | **string[]** | A list of informational messages associated with the actions result. | [optional]
**execution_start_time** | **\DateTime** | Denotes the timestamp when the action is invoked. |
**input_parameter_values** | **array<string,string>** | The trigger or action required input parameter value map, or the output parameters. | [optional]
**execution_end_time** | **\DateTime** | Denotes the timestamp when the action is completed. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
