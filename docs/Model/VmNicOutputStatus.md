# # VmNicOutputStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dns_ip_addresses_list** | **string[]** | List of DNS IP addresses. | [optional]
**nic_type** | **string** | The type of this NIC. Defaults to NORMAL_NIC. | [optional]
**subnet_reference** | [**\OpenAPI\Client\Model\SubnetReference**](SubnetReference.md) |  | [optional]
**uuid** | **string** | The NIC&#39;s UUID, which is used to uniquely identify this particular NIC. This UUID may be used to refer to the NIC outside the context of the particular VM it is attached to. | [optional]
**ip_endpoint_list** | [**\OpenAPI\Client\Model\IpAddress[]**](IpAddress.md) | IP endpoints for the adapter. Currently, IPv4 addresses are supported. | [optional]
**network_function_chain_reference** | [**\OpenAPI\Client\Model\NetworkFunctionChainReference**](NetworkFunctionChainReference.md) |  | [optional]
**secondary_ip_address_list** | **string[]** | Secondary IPv4 Addresses for this NIC. | [optional]
**floating_ip** | **string** | The Floating IP associated with the vnic. | [optional]
**mac_address** | **string** | The MAC address for the adapter. | [optional]
**network_function_nic_type** | **string** | The type of this Network function NIC. Defaults to INGRESS. | [optional]
**vlan_mode** | **string** | VLAN mode. | [optional]
**num_queues** | **int** | The number of tx/rx queue pairs for this NIC. | [optional]
**default_gateway_address_list** | **string[]** | Default gateway IP addresses. | [optional]
**dhcp_server_ip** | **string** | IP address of the DHCP server. | [optional]
**model** | **string** | The model of this NIC. | [optional]
**is_connected** | **bool** | Whether or not the NIC is connected. True by default. | [optional]
**trunked_vlan_list** | **int[]** | List of VLANs to trunk if vlan_mode is TRUNKED. If empty, all VLANs are trunked. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
