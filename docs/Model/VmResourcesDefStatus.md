# # VmResourcesDefStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**num_threads_per_core** | **int** | Number of logical threads per core. | [optional]
**is_agent_vm** | **bool** | Indicates whether the VM is an agent VM. | [optional]
**protection_policy_state** | [**\OpenAPI\Client\Model\ProtectionPolicyState**](ProtectionPolicyState.md) |  | [optional]
**memory_size_mib** | **int** | Memory size in MiB. | [optional]
**boot_config** | [**\OpenAPI\Client\Model\VmBootConfig**](VmBootConfig.md) |  | [optional]
**disk_list** | [**\OpenAPI\Client\Model\VmDiskOutputStatus[]**](VmDiskOutputStatus.md) | Disks attached to the VM. | [optional]
**serial_port_list** | [**\OpenAPI\Client\Model\SerialPort[]**](SerialPort.md) | Serial ports configured on the VM. | [optional]
**is_vcpu_hard_pinned** | **bool** | Indicates whether the vCPUs should be hard pinned to specific pCPUs. | [optional]
**power_state** | **string** | Current power state of the VM. | [optional]
**recovery_plan_state_list** | [**\OpenAPI\Client\Model\RecoveryPlanPolicyState[]**](RecoveryPlanPolicyState.md) | Status of the Recovery Plans associated with the VM. | [optional]
**effective_storage_config** | [**\OpenAPI\Client\Model\EffectiveStorageConfig**](EffectiveStorageConfig.md) |  | [optional]
**num_vcpus_per_socket** | **int** | Number of vCPUs per socket. | [optional]
**num_sockets** | **int** | Number of vCPU sockets. | [optional]
**hardware_virtualization_enabled** | **bool** | Indicates whether hardware assisted virtualization should be enabled for the Guest OS. Once enabled, the Guest OS has the ability to deploy a nested hypervisor. | [optional]
**storage_config** | [**\OpenAPI\Client\Model\VmStorageConfigStatus**](VmStorageConfigStatus.md) |  | [optional]
**protection_type** | **string** | The type of protection applied on a VM. PD_PROTECTED indicates a VM protected using Prism Element. RULE_PROTECTED indicates a VM protected using Prism Central. | [optional]
**gpu_list** | [**\OpenAPI\Client\Model\VmGpuOutputStatus[]**](VmGpuOutputStatus.md) | GPUs attached to the VM. | [optional]
**machine_type** | **string** | Machine type for the VM. Machine type Q35 is required for secure boot and does not support IDE disks. | [optional]
**hardware_clock_timezone** | **string** | VM&#39;s hardware clock timezone in IANA TZDB format (America/Los_Angeles). | [optional]
**guest_customization** | [**\OpenAPI\Client\Model\GuestCustomizationStatus**](GuestCustomizationStatus.md) |  | [optional]
**power_state_mechanism** | [**\OpenAPI\Client\Model\VmPowerStateMechanism**](VmPowerStateMechanism.md) |  | [optional]
**vga_console_enabled** | **bool** | Indicates whether VGA console has been enabled or not. | [optional]
**memory_overcommit_enabled** | **bool** | Indicates whether memory overcommit feature should be enabled for the VM. If enabled, parts of the VM&#39;s memory may reside outside of the hypervisor physical memory. When enabled, it should be expected that the VM may suffer performance degradation. | [optional]
**vnuma_config** | [**\OpenAPI\Client\Model\VmVnumaConfig**](VmVnumaConfig.md) |  | [optional]
**nic_list** | [**\OpenAPI\Client\Model\VmNicOutputStatus[]**](VmNicOutputStatus.md) | NICs attached to the VM. | [optional]
**host_reference** | [**\OpenAPI\Client\Model\Reference**](Reference.md) |  | [optional]
**guest_os_id** | **string** | String that identifies the OS running inside of the guest. Reserved for use by the system. Do not set or modify. | [optional]
**guest_tools** | [**\OpenAPI\Client\Model\GuestToolsStatus**](GuestToolsStatus.md) |  | [optional]
**gpu_console_enabled** | **bool** | Indicates whether vGPU console is enabled or not. | [optional]
**vtpm_config** | [**\OpenAPI\Client\Model\VmVtpmStatus**](VmVtpmStatus.md) |  | [optional]
**enable_cpu_passthrough** | **bool** | Indicates whether to passthrough the host&#39;s CPU features to the guest. Enabling this will disable live migration of the VM. | [optional]
**parent_reference** | [**\OpenAPI\Client\Model\Reference**](Reference.md) |  | [optional]
**hypervisor_type** | **string** | The hypervisor type for the hypervisor the VM is hosted on. | [optional]
**disable_branding** | **bool** | Indicates whether to remove AHV branding from VM firmware tables. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
