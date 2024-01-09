# # ReportInstance1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | Description of the report. | [optional]
**recipient_list** | [**\OpenAPI\Client\Model\Recipient[]**](Recipient.md) | Recipients in addition to specified on the report config. | [optional]
**error_message** | **string** | Error message when generation failed. | [optional]
**data_start_time** | **\DateTime** | UTC date and time in \&quot;%Y-%m-%d %H:%M:%S\&quot; format for data collection start point. | [optional]
**generation_format** | **string[]** | List specifying the formats in which report is to be created. | [optional]
**recipient_format** | **string[]** | List specifying the formats in which report is to be sent. | [optional]
**save_instance** | **bool** | Generated instance saved or not. | [optional]
**data_end_time** | **\DateTime** | UTC date and time in \&quot;%Y-%m-%d %H:%M:%S\&quot; format for data collection end point. | [optional]
**timezone** | **string** | Timezone in which report is to be generated. This is the list supported by pytz.all_timezones. For more info, check http://pytz.sourceforge.net | [optional]
**runtime_key_values** | **array<string,string>** | Generic key value pair used for custom attributes. | [optional]
**generation_status** | **string** | Generation status of the report. | [optional]
**report_config_reference** | [**\OpenAPI\Client\Model\ReportConfigReference**](ReportConfigReference.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
