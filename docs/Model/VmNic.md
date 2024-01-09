# # VmNic

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**nic_type** | **string** | The type of this NIC. Defaults to NORMAL_NIC. | [optional]
**uuid** | **string** | The NIC&#39;s UUID, which is used to uniquely identify this particular NIC. This UUID may be used to refer to the NIC outside the context of the particular VM it is attached to. | [optional]
**ip_endpoint_list** | [**\OpenAPI\Client\Model\IpAddress[]**](IpAddress.md) | IP endpoints for the adapter. Currently, IPv4 addresses are supported. | [optional]
**num_queues** | **int** | The number of tx/rx queue pairs for this NIC. | [optional]
**secondary_ip_address_list** | **string[]** | Secondary IPv4 Addresses for this NIC. | [optional]
**network_function_nic_type** | **string** | The type of this Network function NIC. Defaults to INGRESS. | [optional]
**network_function_chain_reference** | [**\OpenAPI\Client\Model\NetworkFunctionChainReference**](NetworkFunctionChainReference.md) |  | [optional]
**vlan_mode** | **string** | By default, all virtual NICs are created in ACCESS mode, which permits only one VLAN per virtual network. TRUNKED mode allows multiple VLANs on a single VM NIC for network-aware user VMs. | [optional]
**mac_address** | **string** | The MAC address for the adapter. | [optional]
**subnet_reference** | [**\OpenAPI\Client\Model\SubnetReference**](SubnetReference.md) |  | [optional]
**model** | **string** | The model of this NIC. | [optional]
**is_connected** | **bool** | Whether or not the NIC is connected. True by default. | [optional]
**trunked_vlan_list** | **int[]** | List of networks to trunk if vlan_mode is TRUNKED. If empty and VLAN mode is TRUNKED, all VLANs are trunked. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
