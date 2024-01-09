# # RecoveryPlanValidationMessage

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**message** | **string** | Message describing validation error or warning. |
**validation_type** | **string** | Type of validation. |
**affected_any_reference_list** | [**\OpenAPI\Client\Model\Reference[]**](Reference.md) | List of affected entities for this validation message. | [optional]
**impact_message_list** | **string[]** | Impact of the validation message on the Recovery Plan actions. | [optional]
**cause_and_resolution_message_list** | [**\OpenAPI\Client\Model\RecoveryPlanValidationMessageCauseAndResolutionMessageListInner[]**](RecoveryPlanValidationMessageCauseAndResolutionMessageListInner.md) | List of causes and resolutions for the validation warning or error. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
