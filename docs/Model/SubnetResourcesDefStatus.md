# # SubnetResourcesDefStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**subnet_type** | **string** |  | [optional]
**vpc_reference** | [**\OpenAPI\Client\Model\VpcReference**](VpcReference.md) |  | [optional]
**virtual_switch_uuid** | **string** | Reference to virtual switch | [optional]
**is_external** | **bool** | Whether the subnet is external subnet or not. | [optional]
**vswitch_name** | **string** |  | [optional]
**network_function_chain_reference** | [**\OpenAPI\Client\Model\NetworkFunctionChainReference**](NetworkFunctionChainReference.md) |  | [optional]
**reserved_ip_address_list** | **string[]** | List of IPs that are not considered while allocating IP addresses to Atlas ports. | [optional]
**availability_zone_reference_list** | [**\OpenAPI\Client\Model\AvailabilityZoneReference[]**](AvailabilityZoneReference.md) | List of availability zones from which resources are derived (Only supported on Xi). | [optional]
**ip_config** | [**\OpenAPI\Client\Model\IpConfig**](IpConfig.md) |  | [optional]
**ip_usage_stats** | [**\OpenAPI\Client\Model\IpUsageStats**](IpUsageStats.md) |  | [optional]
**enable_nat** | **bool** | Whether NAT should be performed for VPCs attaching to the subnet. This field is supported only for external subnets. NAT is enabled by default on external subnets. | [optional]
**external_connectivity_state** | **string** | External connectivity state (Only supported on Xi) | [optional]
**vlan_id** | **int** |  | [optional]
**virtual_network_reference** | [**\OpenAPI\Client\Model\VirtualNetworkReference**](VirtualNetworkReference.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
