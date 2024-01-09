# # VmBootConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**boot_device_order_list** | **string[]** | Indicates the order of device types in which VM should try to boot from. If boot device order is not provided the system will decide appropriate boot device order. | [optional]
**boot_device** | [**\OpenAPI\Client\Model\VmBootDevice**](VmBootDevice.md) |  | [optional]
**data_source_reference** | [**\OpenAPI\Client\Model\Reference**](Reference.md) |  | [optional]
**boot_type** | **string** | Indicates whether the VM should use Secure boot, UEFI boot or Legacy boot.If UEFI or Secure boot is enabled then other legacy boot options (like boot_device and boot_device_order_list) are ignored. Secure boot depends on UEFI boot, i.e. enabling Secure boot means that UEFI boot is also enabled. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
