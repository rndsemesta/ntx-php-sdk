# # ActionRuleXPilotParams

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**metric_name** | **string** | The name of the KPI that will be monitored |
**entity_type** | **string** | The Type of the entity whose KPI will be monitored |
**min_threshold** | **float** | Lower Bound for desired KPI value | [optional]
**monitor_duration_mins** | **int** | Duration(minutes) for which the playbook will be monitored | [optional]
**entity_info** | **string** | The Entity Info of the entity whose KPI will be monitored |
**request_approval_after_each_retry** | **bool** | Should XPilot play wait for approval after every retry. | [optional]
**max_threshold** | **float** | Upper Bound for desired KPI value | [optional]
**max_retry_count** | **int** | Count of number of times rule can be rerun in case of positive feedback | [optional] [default to 5]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
