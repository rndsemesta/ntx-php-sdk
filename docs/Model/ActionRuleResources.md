# # ActionRuleResources

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_enabled** | **bool** | is the rule enabled or disabled. | [optional]
**should_validate** | **bool** | The rule should be validated or not.  If True, then, the rule will be validated before saving.  If the validation failed, the spec status message list will have errors. | [optional]
**trigger_list** | [**\OpenAPI\Client\Model\TriggerInstanceObject[]**](TriggerInstanceObject.md) | The only trigger that the rule has. |
**name** | **string** | The action rule name | [optional]
**execution_user_reference** | [**\OpenAPI\Client\Model\UserReference**](UserReference.md) |  | [optional]
**rule_type** | **string** | Action rule types associated with this rule. | [optional]
**action_list** | [**\OpenAPI\Client\Model\ActionInstanceObject[]**](ActionInstanceObject.md) | Ordered list of the actions to execute in this rule. |
**check_trigger_validity** | **bool** | If it is true, the rule action execution at the schedueled time will check if the original trigger is still valid.  If not set, default to True. | [optional]
**global_parameters** | **object** | The rule level global parameter descriptors. This is provided by the system. | [optional] [readonly]
**x_pilot_params** | [**\OpenAPI\Client\Model\ActionRuleXPilotParams**](ActionRuleXPilotParams.md) |  | [optional]
**error_list** | [**\OpenAPI\Client\Model\ComponentError[]**](ComponentError.md) | Errors identified in this rule. | [optional]
**validated** | **bool** | Is this been validated to trur or not. | [optional] [readonly]
**description** | **string** | The rule description | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
