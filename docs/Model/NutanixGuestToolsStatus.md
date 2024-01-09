# # NutanixGuestToolsStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**available_version** | **string** | Version of Nutanix Guest Tools available on the cluster. | [optional]
**ngt_state** | **string** | Nutanix guest tools is installed or not. | [optional]
**iso_mount_state** | **string** | Desired mount state of Nutanix Guest Tools ISO. | [optional]
**guest_os_version** | **string** | Version of the operating system on the VM. | [optional]
**state** | **string** | Nutanix Guest Tools is enabled or not. | [optional]
**version** | **string** | Version of Nutanix Guest Tools installed on the VM. | [optional]
**enabled_capability_list** | **string[]** | Application names that are enabled. | [optional]
**credentials** | [**\OpenAPI\Client\Model\Credentials**](Credentials.md) |  | [optional]
**vss_snapshot_capable** | **bool** | Whether the VM is configured to take VSS snapshots through NGT. | [optional]
**is_reachable** | **bool** | Communication from VM to CVM is active or not. | [optional]
**vm_mobility_drivers_installed** | **bool** | Whether VM mobility drivers are installed in the VM. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
