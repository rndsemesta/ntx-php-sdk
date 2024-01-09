# # ProtectionRuleResourcesAvailabilityZoneConnectivityListInnerSnapshotScheduleListInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**recovery_point_objective_secs** | **int** | A recovery point objective (RPO) is the maximum acceptable amount of data loss. RPO is measured in time (in seconds) and then dictates disaster recovery procedures. For example, if the RPO is set to 30 minutes, then a backup of the entity is required to be done every 30 minutes. |
**local_snapshot_retention_policy** | [**\OpenAPI\Client\Model\SnapshotRetentionPolicy**](SnapshotRetentionPolicy.md) |  | [optional]
**auto_suspend_timeout_secs** | **int** | Auto suspend timeout in case of connection failure between the sites. If not set, then policy will not be suspended in case of site connection failure. | [optional]
**snapshot_type** | **string** | Crash consistent or Application Consistent snapshot | [optional]
**remote_snapshot_retention_policy** | [**\OpenAPI\Client\Model\SnapshotRetentionPolicy**](SnapshotRetentionPolicy.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
