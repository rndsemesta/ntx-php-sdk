# # ActionRuleResultResources

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action_result_list** | [**\OpenAPI\Client\Model\ActionResult[]**](ActionResult.md) | Ordered list of action execution results. |
**execution_plan** | [**\OpenAPI\Client\Model\RuleExecutionPlan**](RuleExecutionPlan.md) |  |
**execution_status** | **string** | The execution status of an action or an action rule. |
**action_rule_reference** | [**\OpenAPI\Client\Model\ActionRuleReference**](ActionRuleReference.md) |  |
**rule_parameter_values** | **array<string,string>** | The trigger or action required input parameter value map, or the output parameters. | [optional]
**execution_messages** | **string[]** | List of messages associated with rule execution. | [optional]
**execution_start_time** | **\DateTime** | The time the first action started execution. | [optional]
**trigger_info_list** | [**\OpenAPI\Client\Model\TriggerInfo[]**](TriggerInfo.md) | The information about the triggers. |
**execution_end_time** | **\DateTime** | The time the last action finished execution. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
