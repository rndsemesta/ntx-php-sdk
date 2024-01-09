# # DirectoryServiceSearchMetadata

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**query** | **string** | The search string. |
**searched_attribute_list** | **string[]** | The attributes for search operation. If not specified, search is performed with the common name. | [optional]
**returned_attribute_list** | **string[]** | The attributes the search operation returns. If not available, a list of default attributes is returned. | [optional]
**is_wildcard_search** | **bool** | The attribute that tells if the query is a wildcard match or exact match query. | [optional] [default to true]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
