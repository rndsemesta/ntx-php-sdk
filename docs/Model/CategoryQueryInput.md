# # CategoryQueryInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**usage_type** | **string** | USED_IN - to get policies in which specified categories are used. APPLIED_TO - to get entities attached to specified categories. | [optional]
**group_member_offset** | **int** | The offset into the total member set to return per group. | [optional]
**group_member_count** | **int** | The maximum number of members to return per group. | [optional]
**category_filter** | [**\OpenAPI\Client\Model\CategoryFilter**](CategoryFilter.md) |  | [optional]
**api_version** | **string** | API Version of the Nutanix v3 API framework. | [optional] [default to '3.1.0']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
