# # DiskDefStatusResources

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**host_reference** | [**\OpenAPI\Client\Model\Reference**](Reference.md) |  | [optional]
**enabled_features_list** | **string[]** | Disk feature flags - &#39;CanAddAsNewDisk&#39;: Flag to indicate if this disk can be added as    new disk. - &#39;CanAddAsOldDisk&#39;: Flag to indicate if the disk can be added as    old disk. - &#39;BootDisk&#39;: Flag to indicate if its a boot disk. - &#39;OnlyBootDisk&#39;: Flag to indicate if the disk is boot only and    no disk operation to be run on it. - &#39;SelfEncryptingEnabled&#39;: Flag to indicate if the disk has self    encryption enabled. - &#39;PasswordProtected&#39;: Flag to indicate if the disk is password    protected. - &#39;SelfManagedNvme&#39;: Flag to indicate if the NVMe disk is self   managed and no host/CVM reboot required. | [optional]
**vendor** | **string** | Disk vendor. | [optional]
**mount_path** | **string** | Mount path. | [optional]
**storage_pool_uuid** | **string** | Storage pool uuid. | [optional]
**state_list** | **string[]** | Array of disk states - &#39;DataMigrationInitiated&#39;: Data Migration Initiated. - &#39;MarkedForRemovalButNotDetachable&#39;: Marked for removal, data    migration is in progress. - &#39;ReadyToDetach&#39;: Flag to indicate the disk is detachable. - &#39;DataMigrated&#39;: Flag to indicate if data migration is completed for    this disk. - &#39;MarkedForRemoval&#39;: Flag to indicate if the disk is marked for    removal. - &#39;Online&#39;: Flag to indicate if the disk is online. - &#39;Bad&#39;: Flag to indicate if the disk is bad. - &#39;Mounted&#39;: Flag to indicate if the disk is mounted. - &#39;UnderDiagnosis&#39;: Flag to indicate if the disk is under diagnosis. | [optional]
**storage_tier_type** | **string** | Storage tier type. | [optional]
**size_bytes** | **int** | Disk size in bytes. | [optional]
**slot_number** | **int** | Disk location in a node. | [optional]
**serial_number** | **string** | Disk serial number. | [optional]
**model** | **string** | Disk model. | [optional]
**firmware_version** | **string** | Firmware version. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
