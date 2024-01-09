# # VmRecoveryPointsRealizeCloneInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**vm_uuid** | **string** | UUID of the vm entity for which the recovery point is to be cloned. |
**availability_zone_reference** | [**\OpenAPI\Client\Model\AvailabilityZoneReference**](AvailabilityZoneReference.md) |  |
**clone_target_time** | **\DateTime** | The target time of the state that the user wishes to clone to a target site. This is in internet date/time format (RFC 3339). This field is explicitly used for time based replication in high frequency snapshotting and will be ignored for a regular restore. |
**vm_recovery_point_uuid** | **string** | UUID of the new vm_recovery_point that will be created. | [optional]
**cluster_reference** | [**\OpenAPI\Client\Model\ClusterReference**](ClusterReference.md) |  | [optional]
**override_spec** | [**\OpenAPI\Client\Model\VmRecoveryPointsOverrideSpec**](VmRecoveryPointsOverrideSpec.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
