# # ReportConfigResources

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**retention_policy** | [**\OpenAPI\Client\Model\RetentionPolicy**](RetentionPolicy.md) |  | [optional]
**description** | **string** | Description of the common report config. | [optional]
**end_time_offset_secs** | **int** | End time for data collection during report generation. | [optional]
**schedule** | [**\OpenAPI\Client\Model\Schedule**](Schedule.md) |  | [optional]
**template_spec_version** | **string** | Version of the template spec. | [optional]
**start_time_offset_secs** | **int** | Start time for data collection during report generation. | [optional]
**generation_format** | **string[]** | List specifying the formats in which report is to be created. | [optional]
**template** | [**\OpenAPI\Client\Model\ReportTemplate**](ReportTemplate.md) |  |
**timezone** | **string** | Timezone in which report is to be generated. This is the list supported by pytz.all_timezones. For more info, check http://pytz.sourceforge.net | [optional]
**notification_policy** | [**\OpenAPI\Client\Model\NotificationPolicy**](NotificationPolicy.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
