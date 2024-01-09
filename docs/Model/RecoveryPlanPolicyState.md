# # RecoveryPlanPolicyState

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**policy_reference** | [**\OpenAPI\Client\Model\Reference**](Reference.md) |  |
**policy_info** | [**\OpenAPI\Client\Model\RecoveryPlanInfo**](RecoveryPlanInfo.md) |  | [optional]
**compliance_status** | **string** | Compliance state enum. |
**enforcement_mode** | **string** | Policy enforcement mode informs us about what the policy engine is currently doing to enforce the policy on the entity. Monitoring indicates that the policy engine is simply monitoring the entity&#39;s state. Enforcing means that the policy engine is currently trying to enforce the policy on the entity. Enforcement failed indicates that the policy engine encountered a non-transient error and requires user intervention to fix the problem, error message gives the reason for error in this case. |
**error_message_list** | [**\OpenAPI\Client\Model\MessageResource[]**](MessageResource.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
