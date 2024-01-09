# # VmGpuOutputStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**frame_buffer_size_mib** | **int** | GPU frame buffer size in MiB. | [optional]
**vendor** | **string** | The vendor of the GPU. | [optional]
**uuid** | **string** | UUID of the GPU. | [optional]
**name** | **string** | Name of the GPU resource. | [optional]
**pci_address** | **string** | GPU {segment:bus:device:function} (sbdf) address if assigned. | [optional]
**fraction** | **int** | Fraction of the physical GPU assigned. | [optional]
**mode** | **string** | The mode of this GPU | [optional]
**num_virtual_display_heads** | **int** | Number of supported virtual display heads. | [optional]
**guest_driver_version** | **string** | Last determined guest driver version. | [optional]
**max_instances_per_vm** | **int** | Maximum number of vGPUs of a GPU type assignable to a VM. | [optional]
**device_id** | **int** | The device ID of the GPU. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
