# # VpnConnectionResources

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**local_gateway_role** | **string** | Local gateway role (acceptor or initiator) in the connection. |
**qos_config** | [**\OpenAPI\Client\Model\QosConfig**](QosConfig.md) |  | [optional]
**remote_gateway_reference** | [**\OpenAPI\Client\Model\VpnGatewayReference**](VpnGatewayReference.md) |  |
**ipsec_config** | [**\OpenAPI\Client\Model\IpsecConfig**](IpsecConfig.md) |  |
**dynamic_route_priority** | **int** | Priority assigned to routes received on this connection over eBGP. A higher priority value indicates that the routes are more preferred. | [optional]
**local_gateway_reference** | [**\OpenAPI\Client\Model\VpnGatewayReference**](VpnGatewayReference.md) |  |
**dpd_config** | [**\OpenAPI\Client\Model\DpdConfig**](DpdConfig.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
