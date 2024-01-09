# # Indicator

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**metric_display_name** | **string** | The metric display name in English | [optional]
**metric_name** | **string** | The metric key name | [optional]
**trigger_time** | **\DateTime** | The time that this indicator was created.  It is the source metric time. | [optional]
**condition_type** | **string** | Indicating if this symptom is caused by static threshold or anomaly (dynamic threshold) evaluation.  If an indicator is raised, there may have another indicator indicating the safe guard zone value. | [optional]
**threshold** | [**\OpenAPI\Client\Model\ParamValue**](ParamValue.md) |  | [optional]
**last_value** | [**\OpenAPI\Client\Model\ParamValue**](ParamValue.md) |  | [optional]
**comparison_operator** | **string** | The comparison operator used in this evaluation | [optional]
**unit** | **string** | Data unit. | [optional]
**wait_time_in_usecs** | **int** | How long the indicator had been lasted before raised the issue | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
