# # RecoveryPlanVolumeGroupRecoveryInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**volume_group_config_info_list** | [**\OpenAPI\Client\Model\RecoveryPlanVolumeGroupRecoveryInfoVolumeGroupConfigInfoListInner[]**](RecoveryPlanVolumeGroupRecoveryInfoVolumeGroupConfigInfoListInner.md) | List of configuration information for each Volume Group specified explicitly or in the category filter. Each entry in this list will contain reference to the Volume Group, authentication protocol and the target secret to be used for authenticating the Volume Group. | [optional]
**category_filter** | [**\OpenAPI\Client\Model\CategoryFilter**](CategoryFilter.md) |  | [optional]
**volume_group_reference** | [**\OpenAPI\Client\Model\VolumeGroupReference**](VolumeGroupReference.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
