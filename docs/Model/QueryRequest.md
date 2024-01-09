# # QueryRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**filter_criteria** | **string** | FIQL filter criteria that will be used to form the filter field for the backend queries. | [optional]
**interval_start_ms** | **int** | For a time-series query, the start of the interval since epoch in ms. | [optional]
**entity_type** | **string** | Helps identify the query to be executed in Security Monitoring. | [optional]
**group_member_offset** | **int** | The offset into the total member set to return per group. | [optional]
**group_member_count** | **int** | The maximum number of members to return per group. | [optional]
**group_member_sort_order** | **string** | Sort order for entities and entity groups. | [optional]
**query_name** | **string** | A custom name to use for tagging the query when debugging. | [optional]
**group_member_attributes** | [**\OpenAPI\Client\Model\GroupRequestedAttribute[]**](GroupRequestedAttribute.md) |  | [optional]
**group_member_sort_attribute** | **string** | The name of the attribute that will be used to sort group members. | [optional]
**interval_end_ms** | **int** | For a time-series query, the end of the interval since epoch in ms. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
