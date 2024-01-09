# # VmCloneOverrideSpec

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**num_threads_per_core** | **int** | Number of logical threads per core. | [optional]
**nic_list** | [**\OpenAPI\Client\Model\VmNic[]**](VmNic.md) | If specified, the complete list of NICs attached to the cloned VM. | [optional]
**name** | **string** | VM Name. | [optional]
**num_vcpus_per_socket** | **int** | Number of vCPUs per socket. | [optional]
**num_sockets** | **int** | Number of vCPU sockets. | [optional]
**memory_size_mib** | **int** | Memory size in MiB. | [optional]
**boot_config** | [**\OpenAPI\Client\Model\VmBootConfig**](VmBootConfig.md) |  | [optional]
**guest_customization** | [**\OpenAPI\Client\Model\GuestCustomization**](GuestCustomization.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
