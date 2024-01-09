# # DirectConnectVirtualInterfaceResourcesDefStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**vpc_reference** | [**\OpenAPI\Client\Model\VpcReference**](VpcReference.md) |  | [optional]
**peer_ip_prefix** | **string** | Customer peering IPv4 /30 or /31 prefix. | [optional]
**peer_asn** | **int** | Customer peering autonomous system number (ASN). | [optional]
**received_prefix_list** | [**\OpenAPI\Client\Model\IpSubnetStatus[]**](IpSubnetStatus.md) | IP prefixes learned from the remote gateway over eBGP. | [optional]
**sent_prefix_list** | [**\OpenAPI\Client\Model\IpSubnetStatus[]**](IpSubnetStatus.md) | IP prefixes advertised to the remote gateway over eBGP. | [optional]
**nutanix_peer_ip** | **string** | Nutanix peering IP address. | [optional]
**direct_connect_reference** | [**\OpenAPI\Client\Model\DirectConnectReference**](DirectConnectReference.md) |  | [optional]
**dynamic_route_priority** | **int** | Priority assigned to routes received on this connection over eBGP. A higher priority value indicates that the routes are more preferred. | [optional]
**peering_status** | [**\OpenAPI\Client\Model\DirectConnectVifStatus**](DirectConnectVifStatus.md) |  | [optional]
**nutanix_peer_asn** | **int** | Nutanix peering autonomous system number. | [optional]
**md5** | **string** | md5 hash for bgp peering. | [optional]
**virtual_network_reference** | [**\OpenAPI\Client\Model\VirtualNetworkReference**](VirtualNetworkReference.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
