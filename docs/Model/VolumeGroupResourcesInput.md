# # VolumeGroupResourcesInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**flash_mode** | **string** | Flash Mode, if enabled all volume disks of the VG will be pinned to SSD tier. | [optional]
**load_balance_vm_attachments** | **bool** | Whether to enable volume group load balancing. | [optional]
**created_by** | **string** | Service/user who created this volume group. | [optional]
**iscsi_target_prefix** | **string** | iSCSI target prefix-name. | [optional]
**parent_reference** | [**\OpenAPI\Client\Model\Reference**](Reference.md) |  | [optional]
**sharing_status** | **string** | Whether the volume group can be shared across multiple iSCSI initiators. | [optional]
**attachment_list** | [**\OpenAPI\Client\Model\AttachmentReferenceInput[]**](AttachmentReferenceInput.md) | VMs attached to volume group. | [optional]
**usage_type** | **string** | Expected usage type for the volume group. | [optional]
**target_secret** | **string** | Target Secret in case of CHAP authentication. | [optional]
**is_hidden** | **bool** | Whether the VG is meant to be hidden or not. | [optional]
**disk_list** | [**\OpenAPI\Client\Model\VolumeDiskResourceInput[]**](VolumeDiskResourceInput.md) | Volume group disk specification. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
