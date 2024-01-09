# # AwsInstanceDisk

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**size_gb** | **int** | Size of volumes in GB. | [optional]
**volume_type** | **string** | Type of the Volume. | [optional]
**device_name** | **string** | Device name e.g. /dev/sdb | [optional]
**iops** | **int** | The requested number of I/O operations per second that the volume can support for provisioned IOPS (SSD) volumes (io1). Minimum &#x3D; 100 IOPS and Maximum &#x3D; 20000 IOPS. | [optional]
**snapshot_id** | **string** | AWS snapshot ID. | [optional]
**delete_on_termination** | **bool** | Status of delete on termination. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
