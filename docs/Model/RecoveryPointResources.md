# # RecoveryPointResources

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**source_cluster_reference** | [**\OpenAPI\Client\Model\ClusterReference**](ClusterReference.md) |  | [optional]
**source_availability_zone_reference** | [**\OpenAPI\Client\Model\AvailabilityZoneReference**](AvailabilityZoneReference.md) |  | [optional]
**parent_vm_reference** | [**\OpenAPI\Client\Model\VmReference**](VmReference.md) |  | [optional]
**recovery_point_type** | **string** | Crash consistent or Application Consistent recovery point | [optional]
**creation_time** | **\DateTime** | The time when the the recovery point is created. This is in internet date/time format (RFC 3339). For example, 1985-04-12T23:20:50.52Z, this represents 20 minutes and 50.52 seconds after the 23rd hour of April 12th, 1985 in UTC. | [optional]
**vm_recovery_point_location_agnostic_uuid** | **string** | Location agnostic UUID of the recovery point. If a recovery point is replicated to a different clusters, then all the instances of same recovery point will share this UUID. | [optional]
**expiration_time** | **\DateTime** | The time when this recovery point expires and will be garbage collected. This is in internet date/time format (RFC 3339). For example, 1985-04-12T23:20:50.52Z, this represents 20 minutes and 50.52 seconds after the 23rd hour of April 12th, 1985 in UTC. If not set, then the recovery point never expires. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
