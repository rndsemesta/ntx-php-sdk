# # RecoverEntitiesEntityInfoListInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**vm_power_state** | **string** | Power state of the VM(s) after recovery. | [optional]
**any_entity_reference** | [**\OpenAPI\Client\Model\Reference**](Reference.md) |  | [optional]
**volume_group_attachment_list** | [**\OpenAPI\Client\Model\RecoverEntitiesEntityInfoListInnerVolumeGroupAttachmentListInner[]**](RecoverEntitiesEntityInfoListInnerVolumeGroupAttachmentListInner.md) | List containing the VMs to Volume Group attachment information. | [optional]
**categories** | **array<string,string>** | Categories for filtering entities. | [optional]
**script_list** | [**\OpenAPI\Client\Model\RecoveryPlanScriptConfig[]**](RecoveryPlanScriptConfig.md) | List of scripts to be executed inside the guest VMs after recovery. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
