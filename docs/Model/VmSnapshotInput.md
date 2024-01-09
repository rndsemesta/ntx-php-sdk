# # VmSnapshotInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**creation_time** | **\DateTime** | The target time at which the user wishes to have a fully usable recovery point. This is in internet date/time format (RFC 3339). For example, 1985-04-12T22:10:10Z, this represents 10 minutes and 10.10 seconds after the 22nd hour of April 12th, 1985 in UTC. The backend will generate a complete recovery point out of the closest available partial backend recovery point that is created on or before the provided timestamp. This field is explicitly used for the realization semantics for high frequency snapshotting. If this field is set, none of the other fields in this parameter are valid. | [optional]
**expiration_time** | **\DateTime** | The time when this recovery point expires and will be garbage collected. This is in internet date/time format (RFC 3339). If not set, then the recovery point never expires. | [optional]
**vm_recovery_point_uuid** | **string** |  | [optional]
**name** | **string** | Name of the recovery point. | [optional]
**recovery_point_type** | **string** | Crash consistent or Application Consistent recovery point | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
