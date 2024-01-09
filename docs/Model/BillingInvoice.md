# # BillingInvoice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Status of the invoice. | [optional]
**due_date** | **\DateTime** | Date on which this invoice is due. | [optional]
**invoice_target_date** | **\DateTime** | Target date of the invoice. | [optional]
**invoice_date** | **\DateTime** | Date on which this invoice was generated. | [optional]
**invoice_item_list** | [**\OpenAPI\Client\Model\BillingInvoiceItem[]**](BillingInvoiceItem.md) | Line items of the invoice. | [optional]
**amount** | [**\OpenAPI\Client\Model\MonetaryValue**](MonetaryValue.md) |  | [optional]
**invoice_number** | **string** | Unique number associated with the invoice. | [optional]
**balance** | [**\OpenAPI\Client\Model\MonetaryValue**](MonetaryValue.md) |  | [optional]
**account_name** | **string** | Name of the billing account. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
