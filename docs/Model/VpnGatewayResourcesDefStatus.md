# # VpnGatewayResourcesDefStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**vpc_reference** | [**\OpenAPI\Client\Model\VpcReference**](VpcReference.md) |  | [optional]
**operational_status** | [**\OpenAPI\Client\Model\VpnComponentStatus**](VpnComponentStatus.md) |  | [optional]
**gateway_device_vendor** | **string** | 3rd Party VPN Vendor. This could be a traditional device vendor (like Cisco ASA, Fortinet etc.) or one of the public cloud providers (eg: AWS). | [optional]
**public_ip** | **string** | Public IP address of this gateway. | [optional]
**gateway_type** | **string** | Whether this is local or remote gateway entity. | [optional]
**deployment** | [**\OpenAPI\Client\Model\DeploymentStatus**](DeploymentStatus.md) |  | [optional]
**internal_routing_protocol_config** | [**\OpenAPI\Client\Model\InternalRoutingProtocolConfigStatus**](InternalRoutingProtocolConfigStatus.md) |  | [optional]
**ebgp_config** | [**\OpenAPI\Client\Model\BgpConfigStatus**](BgpConfigStatus.md) |  | [optional]
**virtual_network_reference** | [**\OpenAPI\Client\Model\VirtualNetworkReference**](VirtualNetworkReference.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
