# # VpnConnectionResourcesDefStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ebgp_status** | [**\OpenAPI\Client\Model\VpnComponentStatus**](VpnComponentStatus.md) |  | [optional]
**ipsec_tunnel_status** | [**\OpenAPI\Client\Model\VpnComponentStatus**](VpnComponentStatus.md) |  | [optional]
**remote_gateway_reference** | [**\OpenAPI\Client\Model\VpnGatewayReference**](VpnGatewayReference.md) |  | [optional]
**peer_route_prefix_list** | [**\OpenAPI\Client\Model\IpSubnetStatus[]**](IpSubnetStatus.md) | IP prefixes learned from the remote gateway over eBGP. | [optional]
**qos_config** | [**\OpenAPI\Client\Model\QosConfigStatus**](QosConfigStatus.md) |  | [optional]
**local_gateway_role** | **string** | Local gateway role (acceptor or initiator) in the connection. | [optional]
**ipsec_config** | [**\OpenAPI\Client\Model\IpsecConfigStatus**](IpsecConfigStatus.md) |  | [optional]
**dynamic_route_priority** | **int** | Priority assigned to routes received on this connection over eBGP. A higher priority value indicates that the routes are more preferred. | [optional]
**local_gateway_reference** | [**\OpenAPI\Client\Model\VpnGatewayReference**](VpnGatewayReference.md) |  | [optional]
**local_route_prefix_list** | [**\OpenAPI\Client\Model\IpSubnetStatus[]**](IpSubnetStatus.md) | IP prefixes advertised to the remote gateway over eBGP. | [optional]
**dpd_config** | [**\OpenAPI\Client\Model\DpdConfigStatus**](DpdConfigStatus.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
