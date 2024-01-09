# # GetInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**inline_compression** | **bool** | Indicates whether compression is inline or post-process on the entity. | [optional]
**compliance_state** | **string** | Compliance state of the entity with the storage policy. | [optional] [default to 'IN_PROGRESS']
**throttled_iops** | **int** | Max IOs the entity is allowed to do in a second. | [optional]
**active_storage_policy_reference_list** | [**\OpenAPI\Client\Model\Reference[]**](Reference.md) | List of storage policies active on the entity. | [optional]
**compression_enabled** | **bool** | Indicates whether compression is enabled or not on the entity. | [optional]
**encryption_enabled** | **bool** |  | [optional]
**non_compliant_error_codes** | **string[]** | Indicates the reasons of non-compliance with the applied policy. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
