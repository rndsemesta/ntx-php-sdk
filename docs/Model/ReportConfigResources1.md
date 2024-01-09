# # ReportConfigResources1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**retention_policy** | [**\OpenAPI\Client\Model\RetentionPolicy**](RetentionPolicy.md) |  | [optional]
**description** | **string** | Description of the common report config. | [optional]
**end_time_offset_secs** | **int** | Offset for end time for data collection during report generation. | [optional]
**schedule** | [**\OpenAPI\Client\Model\Schedule**](Schedule.md) |  | [optional]
**template_spec_version** | **string** | Version of the template spec. | [optional]
**generation_format** | **string[]** | List specifying the formats in which report is to be created. | [optional]
**start_time_offset_secs** | **int** | Offset for start time for data collection during report generation. | [optional]
**template** | [**\OpenAPI\Client\Model\ReportTemplate**](ReportTemplate.md) |  | [optional]
**timezone** | **string** | Timezone in which report is to be generated. This is the list supported by pytz.all_timezones. For more info, check http://pytz.sourceforge.net | [optional]
**notification_policy** | [**\OpenAPI\Client\Model\NotificationPolicy**](NotificationPolicy.md) |  | [optional]
**out_of_box_report** | **bool** | Flag specifying if Report Config is a pre defined report. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
