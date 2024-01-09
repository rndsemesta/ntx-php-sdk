# # MhVmSnapshotInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**expiration_time** | **\DateTime** | The time when this recovery point expires and will be garbage collected. This is in internet date/time format (RFC 3339). If not set, then the recovery point never expires. | [optional]
**vm_recovery_point_uuid** | **string** |  | [optional]
**name** | **string** | Name of the recovery point. | [optional]
**recovery_point_type** | **string** | Crash consistent or Application Consistent recovery point | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
