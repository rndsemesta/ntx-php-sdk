# # CategoryMappingResourcesDefStatusAdMapping

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**object_identifier** | **string** | The objectGUID for the object in AD. | [optional]
**object_common_name** | **string** | The CN for the mapped object in AD. | [optional] [readonly]
**status** | **string** | Whether the mapping is usable or not; USABLE means it is usable. DELETED means the mapped object has been removed from AD, and DIRECTORY_NOT_CONFIGURED means either the directory service the mapping references has been removed or that directory service is not currently in use for identity categorization. | [optional] [readonly]
**directory_service_reference** | [**\OpenAPI\Client\Model\DirectoryServiceReference**](DirectoryServiceReference.md) |  | [optional]
**object_path** | **string** | The path for the mapped object in AD. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
