# # ProtectionRuleResourcesAvailabilityZoneConnectivityListInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**destination_availability_zone_index** | **int** | Index of the availability zone in ordered_availability_zone_list. This represents the availability zone where the entity needs to be replicated to. Index starts at 0. | [optional]
**source_availability_zone_index** | **int** | Index of the availability zone in ordered_availability_zone_list. This represents the source availability zone where the entity is running. Index starts at 0. | [optional]
**snapshot_schedule_list** | [**\OpenAPI\Client\Model\ProtectionRuleResourcesAvailabilityZoneConnectivityListInnerSnapshotScheduleListInner[]**](ProtectionRuleResourcesAvailabilityZoneConnectivityListInnerSnapshotScheduleListInner.md) | Snapshot schedules for the pair of the availability zones. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
