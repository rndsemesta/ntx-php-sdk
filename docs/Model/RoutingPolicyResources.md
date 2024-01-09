# # RoutingPolicyResources

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_bidirectional** | **bool** | Whether to configure/install policy in reverse direction too (i.e matching traffic from destination to source) | [optional] [default to false]
**vpc_reference** | [**\OpenAPI\Client\Model\VpcReference**](VpcReference.md) |  | [optional]
**destination** | [**\OpenAPI\Client\Model\NetworkAddress**](NetworkAddress.md) |  |
**priority** | **int** |  |
**source** | [**\OpenAPI\Client\Model\NetworkAddress**](NetworkAddress.md) |  |
**protocol_parameters** | [**\OpenAPI\Client\Model\ProtocolParameters**](ProtocolParameters.md) |  | [optional]
**virtual_network_reference** | [**\OpenAPI\Client\Model\VirtualNetworkReference**](VirtualNetworkReference.md) |  | [optional]
**action** | [**\OpenAPI\Client\Model\RoutingPolicyAction**](RoutingPolicyAction.md) |  |
**protocol_type** | **string** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
