# # VmRecoveryPointRealizeRestoreInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cluster_uuid** | **string** | UUID of the cluster where recovery point is present. This needs to be provided in case of Self AZ restore. | [optional]
**restore_target_time** | **\DateTime** | The target time to which the user wishes to restore to. This is in internet date/time format (RFC 3339). This field is explicitly used for time based restore in high frequency snapshotting and will be ignored for a regular restore. |
**vm_override_spec** | [**\OpenAPI\Client\Model\VmRestoreOverrideSpec**](VmRestoreOverrideSpec.md) |  | [optional]
**vm_uuid** | **string** | UUID of the vm entity for which the recovery point is to be restored. |
**metadata** | [**\OpenAPI\Client\Model\MetadataOfTheRestoredVm**](MetadataOfTheRestoredVm.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
