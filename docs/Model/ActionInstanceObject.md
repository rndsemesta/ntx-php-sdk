# # ActionInstanceObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**instance_uuid** | **string** | Id to uniquely identify action in instance list. |
**action_type_reference** | [**\OpenAPI\Client\Model\ActionTypeReference**](ActionTypeReference.md) |  |
**display_name** | **string** | Each action instance already has a default display name from action type.  However, users could change an action instance with a different display name. | [optional]
**description** | **string** | The description of the action instance in the rule.  For example, an action instance is used twice in a rule, each serves different purpose, it could use this field to describe the purpose. | [optional]
**child_action_uuids** | **string[]** | List of possible actions that will be executed after this action. | [optional]
**max_retries** | **int** | This field applies to on_timeout enum retry choice.  When this action execution times out, the rule execution will retry the execution until the max retry number is exceeded. | [optional]
**output_parameters** | **object** | The action output parameter descriptors. | [optional]
**input_parameter_values** | **array<string,string>** | The trigger or action required input parameter value map, or the output parameters. | [optional]
**should_continue_on_failure** | **bool** | When this action execution fails, the rule execution should continue to the next action or not. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
