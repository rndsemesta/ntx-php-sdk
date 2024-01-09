# # BillingInvoiceItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**charge_type** | **string** | Nature of the charge. | [optional]
**subscription_name** | **string** | Name of the subscription. | [optional]
**tax_amount** | [**\OpenAPI\Client\Model\MonetaryValue**](MonetaryValue.md) |  | [optional]
**charge_amount** | [**\OpenAPI\Client\Model\MonetaryValue**](MonetaryValue.md) |  | [optional]
**service_end_date** | **\DateTime** | Date on which subscription to the line item ends. | [optional]
**charge_id** | **string** | Id of the charge plan applicable to the subscription. | [optional]
**service_start_date** | **\DateTime** | Date on which this service was started. | [optional]
**charge_name** | **string** | Name of the charge plan applicable to the subscription. | [optional]
**subscription_id** | **string** | Id of the subscription. | [optional]
**processing_type** | **string** | Type of processing done on the charge. | [optional]
**charge_date** | **\DateTime** | Date on which this line item will be charged. | [optional]
**charge_description** | **string** | Description of the charge plan applicable to the subscription. | [optional]
**quantity** | **int** | Number of instances of the line item subscribed. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
