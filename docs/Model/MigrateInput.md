# # MigrateInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**source_availability_zone_reference** | [**\OpenAPI\Client\Model\AvailabilityZoneReference**](AvailabilityZoneReference.md) |  |
**vm_list** | [**\OpenAPI\Client\Model\MigrateInputVmListInner[]**](MigrateInputVmListInner.md) |  |
**target_cluster_reference** | [**\OpenAPI\Client\Model\ClusterReference**](ClusterReference.md) |  | [optional]
**target_availability_zone_reference** | [**\OpenAPI\Client\Model\AvailabilityZoneReference**](AvailabilityZoneReference.md) |  |
**is_live_migration** | **bool** | Whether to do live migration of the entity. This is applicable only when the entity is protected with sync protection policy. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
