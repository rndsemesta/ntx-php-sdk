# # GroupsGetEntitiesRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**number_of_intervals_for_latest_data** | **int** | When retrieving latest values, how far back to look as a multiple of the downsampling interval for the metric. | [optional]
**group_sort_attribute** | **string** | The name of the attribute that will be used to sort groups. | [optional]
**number_of_buckets** | **int** | For grouping, how many groups to return. | [optional]
**entity_ids** | **string[]** | A set of entities that the request will be scoped to. | [optional]
**group_member_attributes** | [**\OpenAPI\Client\Model\GroupsRequestedAttribute[]**](GroupsRequestedAttribute.md) |  | [optional]
**group_member_sort_attribute** | **string** | The name of the attribute that will be used to sort group members. | [optional]
**bucket_boundary** | **int** | For grouping, the boundary to snap to when grouping. | [optional]
**group_offset** | **int** | The offset into the total set of groups to return. | [optional]
**downsampling_interval** | **int** | Downsampling interval to apply to query if override is desired. | [optional]
**interval_start_ms** | **int** | For a time-series query, the start of the interval since the epoch in ms. Default is latest value only. | [optional] [default to 0]
**entity_type** | **string** | The entity type that will be requested. |
**group_member_offset** | **int** | The offset into the total member set to return per group. | [optional]
**grouping_attribute** | **string** | Attribute that will be used to perform a group-by if needed. | [optional]
**group_member_sort_downsampling_function** | **string** | Downsampling function to take time series data and resolve to one value for sorting purposes. | [optional]
**group_sort_order** | **string** | Sort order for entities and entity groups. | [optional]
**group_sort_downsample_function** | **string** | Downsampling function to take time series data and resolve to one value for sorting purposes. | [optional]
**filter_criteria** | **string** | FIQL filter criteria that will be used to filter the returned data. | [optional]
**large_bucket_boundary** | **int** | Same as bucket_boundary but supports larger range of values. | [optional]
**availability_zone_scope** | **string** | The scope of availability zones from which to fetch the  data. | [optional] [default to 'LOCAL']
**group_count** | **int** | The maximum number of groups to return in the result. | [optional]
**group_attributes** | [**\OpenAPI\Client\Model\GroupsRequestedAttribute[]**](GroupsRequestedAttribute.md) |  | [optional]
**interval_end_ms** | **int** | For a time-series query, the end of the interval since the epoch in ms. Default is latest value only. | [optional] [default to 0]
**grouping_attribute_type** | **string** | The type of an attribute being used for grouping - may be continuous or discrete. | [optional]
**group_member_count** | **int** | The maximum number of members to return per group. | [optional]
**group_member_sort_order** | **string** | Sort order for entities and entity groups. | [optional]
**query_name** | **string** | A custom name to use for tagging the query when debugging. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
