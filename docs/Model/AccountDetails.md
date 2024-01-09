# # AccountDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Status of the account indicating if it is active or not. | [optional]
**minimum_charge_amount** | [**\OpenAPI\Client\Model\MonetaryValue**](MonetaryValue.md) |  | [optional]
**prepaid_amount** | [**\OpenAPI\Client\Model\MonetaryValue**](MonetaryValue.md) |  | [optional]
**subscription_expiry_date** | **\DateTime** | Date on which current subscription plan ends. | [optional]
**next_invoice_date** | **\DateTime** | Date on which next invoice will be generated. | [optional]
**account_number** | **string** | Number associated with the account. | [optional]
**plan_name** | **string** | Name of the plan that user has subscribed to. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
