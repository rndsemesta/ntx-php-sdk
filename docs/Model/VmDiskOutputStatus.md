# # VmDiskOutputStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** | The device ID which is used to uniquely identify this particular disk. | [optional]
**is_encryption_in_progress** | **bool** | Indicates whether encryption is in progress or not. | [optional] [default to false]
**is_migration_in_progress** | **bool** | Indicated if the disk is undergoing migration to another container or not. | [optional] [default to false]
**disk_size_bytes** | **int** | Size of the disk in Bytes. | [optional]
**storage_config** | [**\OpenAPI\Client\Model\DiskStorageConfig**](DiskStorageConfig.md) |  | [optional]
**device_properties** | [**\OpenAPI\Client\Model\VmDiskDeviceProperties**](VmDiskDeviceProperties.md) |  | [optional]
**data_source_reference** | [**\OpenAPI\Client\Model\VmDiskOutputStatusDataSourceReference**](VmDiskOutputStatusDataSourceReference.md) |  | [optional]
**disk_size_mib** | **int** | Size of the disk in MiB. Must match the size specified in &#39;disk_size_bytes&#39; - rounded up to the nearest MiB -  when that field is present. | [optional]
**volume_group_reference** | [**\OpenAPI\Client\Model\Reference**](Reference.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
