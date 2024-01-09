# # TriggerInstanceObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**instance_uuid** | **string** | Id to uniquely identify trigger in instance list. | [optional]
**display_name** | **string** | Trigger display name.  This is for display name, hence ready-only. | [optional] [readonly]
**description** | **string** | The description of the trigger instance in the rule. | [optional]
**action_trigger_type_reference** | [**\OpenAPI\Client\Model\ActionTriggerTypeReference**](ActionTriggerTypeReference.md) |  |
**output_parameters** | **object** | The trigger output parameter descriptors.  Came from trigger type. | [optional] [readonly]
**input_parameter_values** | **array<string,string>** | The trigger or action required input parameter value map, or the output parameters. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
