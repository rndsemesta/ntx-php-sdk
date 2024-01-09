# # DirectConnectVirtualInterfaceResources

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**vpc_reference** | [**\OpenAPI\Client\Model\VpcReference**](VpcReference.md) |  | [optional]
**virtual_network_reference** | [**\OpenAPI\Client\Model\VirtualNetworkReference**](VirtualNetworkReference.md) |  | [optional]
**direct_connect_reference** | [**\OpenAPI\Client\Model\DirectConnectReference**](DirectConnectReference.md) |  |
**dynamic_route_priority** | **int** | Priority assigned to routes received on this connection over eBGP. A higher priority value indicates that the routes are more preferred. | [optional]
**peer_asn** | **int** | Autonomous system number |
**peer_ip_prefix** | **string** | Customer peering IPv4 /30 or /31 prefix. |
**md5** | **string** | md5 hash for bgp peering. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
