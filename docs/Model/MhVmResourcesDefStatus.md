# # MhVmResourcesDefStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**hypervisor_specific_id** | **string** | The hypervisor specific ID of the VM. | [optional]
**host_reference** | [**\OpenAPI\Client\Model\Reference**](Reference.md) |  | [optional]
**guest_tools** | [**\OpenAPI\Client\Model\GuestToolsStatus**](GuestToolsStatus.md) |  | [optional]
**hypervisor_type** | **string** | The hypervisor type for the hypervisor the VM is hosted on. | [optional]
**storage_config** | [**\OpenAPI\Client\Model\MhVmStorageConfigStatus**](MhVmStorageConfigStatus.md) |  | [optional]
**protection_type** | **string** | The type of protection applied on a VM. PD_PROTECTED indicates a VM protected using Prism Element. RULE_PROTECTED indicates a VM protected using Prism Central. | [optional]
**parent_reference** | [**\OpenAPI\Client\Model\Reference**](Reference.md) |  | [optional]
**recovery_plan_state_list** | [**\OpenAPI\Client\Model\RecoveryPlanPolicyState[]**](RecoveryPlanPolicyState.md) | Status of the Recovery Plans associated with the VM. | [optional]
**protection_policy_state** | [**\OpenAPI\Client\Model\ProtectionPolicyState**](ProtectionPolicyState.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
