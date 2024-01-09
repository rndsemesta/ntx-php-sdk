# # VolumeGroupResourcesOutput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**flash_mode** | **string** | Flash Mode, if enabled all volume disks of the VG will be pinned to SSD tier. | [optional]
**iscsi_target_name** | **string** | iSCSI target full name | [optional]
**enabled_authentications** | **string** | Which authentication is enabled for VG. | [optional]
**attachment_list** | [**\OpenAPI\Client\Model\AttachmentReferenceOutput[]**](AttachmentReferenceOutput.md) | VMs attached to volume group. | [optional]
**created_by** | **string** | Service/user who created this Volume Group. | [optional]
**parent_reference** | [**\OpenAPI\Client\Model\Reference**](Reference.md) |  | [optional]
**sharing_status** | **string** | Whether the volume group can be shared across multiple iSCSI initiators. | [optional]
**disk_list** | [**\OpenAPI\Client\Model\VolumeDiskResourceOutput[]**](VolumeDiskResourceOutput.md) | Volume group disk specification. | [optional]
**size_bytes** | **int** | The total size of the Volume Group in bytes | [optional]
**usage_type** | **string** | Expected usage type for the volume group. | [optional]
**load_balance_vm_attachments** | **bool** | Whether volume group load balancing is enabled. | [optional]
**is_hidden** | **bool** | Whether the VG is meant to be hidden or not. | [optional]
**size_mib** | **int** | The total size of the Volume Group in mib | [optional]
**iscsi_target_prefix** | **string** | iSCSI target prefix-name. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
