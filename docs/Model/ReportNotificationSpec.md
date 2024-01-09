# # ReportNotificationSpec

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**recipient_list** | [**\OpenAPI\Client\Model\Recipient[]**](Recipient.md) | Recipients in addition to those specified in report config. | [optional]
**email_body** | **string** | Custom content of the email. | [optional]
**recipient_format** | **string[]** | List specifying the formats in which report is to be sent. | [optional]
**instance_reference_list** | [**\OpenAPI\Client\Model\ReportInstanceReference[]**](ReportInstanceReference.md) | List of the instances for which email should be sent. | [optional]
**report_config_reference** | [**\OpenAPI\Client\Model\ReportConfigReference**](ReportConfigReference.md) |  |
**email_subject** | **string** | Subject of the email that will be sent. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
