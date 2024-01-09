# # AwsInstanceDiskOutputStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | The status of the Volume. | [optional]
**size_gb** | **int** | Size of volumes in GB. | [optional]
**availability_zone** | **string** | The zone on which the EBS volume is created | [optional]
**volume_type** | **string** | Type of the Volume. | [optional]
**device_name** | **string** | Device name e.g. /dev/sdb | [optional]
**iops** | **int** | The requested number of I/O operations per second that the volume can support for provisioned IOPS (SSD) volumes (io1). Minimum &#x3D; 100 IOPS and Maximum &#x3D; 20000 IOPS. | [optional]
**snapshot_id** | **string** | AWS snapshot ID. | [optional]
**id** | **string** | AWS ID of the volume. | [optional]
**tag_list** | [**\OpenAPI\Client\Model\AwsTagListInner[]**](AwsTagListInner.md) | The AWS Tags associated with any AWS resource | [optional]
**delete_on_termination** | **bool** | Status of delete on termination. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
