# # VmSpec

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** | The UUID which is used to uniquely identify this VM. |
**num_cores_per_vcpu** | **int** | Number of cores per vCPU. | [optional]
**vm_disk_list** | [**\OpenAPI\Client\Model\DiskSpec[]**](DiskSpec.md) | List of associated VM virtual disks. | [optional]
**vm_recovery_point_reference** | [**\OpenAPI\Client\Model\VmRecoveryPointReference**](VmRecoveryPointReference.md) |  | [optional]
**num_vcpus** | **int** | Number of vCPUs needed. | [optional]
**memory_bytes** | **int** | Amount of memory needed in bytes. | [optional]
**virtual_hardware_version** | **int** | Virtual hardware version of the VM. | [optional]
**source_vm_uuid** | **string** | Source VM UUID of which this VM is clone of. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
