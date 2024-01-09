# # HostGpu

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Current status of the physical GPU. | [optional]
**assignable** | **bool** | Whether this vGPU instance can be allocated to a VM. | [optional]
**vendor** | **string** | The vendor of the GPU. | [optional]
**name** | **string** | Name of the host GPU. | [optional]
**index** | **int** | The index of the vGPU within physical GPU resource. | [optional]
**license_list** | **string[]** | List of license types associated with this GPU. | [optional]
**numa_node** | **int** | NUMA node this GPU belongs to. | [optional]
**max_resolution** | **string** | Maximum resolution per display head. | [optional]
**num_vgpus_allocated** | **int** | The number of vGPU instances allocated for this physical GPU resource. | [optional]
**consumer_reference** | [**\OpenAPI\Client\Model\Reference**](Reference.md) |  | [optional]
**pci_address** | **string** | GPU {segment:bus:device:function} (sbdf) address. | [optional]
**fraction** | **int** | Fraction of the physical GPU. | [optional]
**mode** | **string** | The type of this GPU. | [optional]
**num_virtual_display_heads** | **int** | Number of supported virtual display heads. | [optional]
**guest_driver_version** | **string** | Last determined guest driver version. | [optional]
**frame_buffer_size_mib** | **int** | GPU frame buffer size in MiB. | [optional]
**device_id** | **int** | The device ID of the GPU. | [optional]
**max_instances_per_vm** | **int** | Maximum number of vGPUs of a GPU type assignable to a VM. | [optional]
**uuid** | **string** | UUID of the GPU. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
