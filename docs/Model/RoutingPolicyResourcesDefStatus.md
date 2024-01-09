# # RoutingPolicyResourcesDefStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**service_ip_counters_reverse_direction** | [**\OpenAPI\Client\Model\ServiceIpCounters[]**](ServiceIpCounters.md) | Policy counters for each service IP for reverse direction reroute routing policy. Applicable only if is_bidirectional is true. | [optional]
**vpc_reference** | [**\OpenAPI\Client\Model\VpcReference**](VpcReference.md) |  | [optional]
**error_message** | **string** | Error message describing why the routing policy is inactive. | [optional]
**routing_policy_counters_reverse_direction** | [**\OpenAPI\Client\Model\RoutingPolicyCounters**](RoutingPolicyCounters.md) |  | [optional]
**destination** | [**\OpenAPI\Client\Model\NetworkAddressStatus**](NetworkAddressStatus.md) |  | [optional]
**service_ip_counters** | [**\OpenAPI\Client\Model\ServiceIpCounters[]**](ServiceIpCounters.md) | Policy counters for each service IP. | [optional]
**is_bidirectional** | **bool** | Whether to configure/install policy in reverse direction too (i.e matching traffic from destination to source) | [optional] [default to false]
**source** | [**\OpenAPI\Client\Model\NetworkAddressStatus**](NetworkAddressStatus.md) |  | [optional]
**routing_policy_counters** | [**\OpenAPI\Client\Model\RoutingPolicyCounters**](RoutingPolicyCounters.md) |  | [optional]
**protocol_parameters** | [**\OpenAPI\Client\Model\ProtocolParametersStatus**](ProtocolParametersStatus.md) |  | [optional]
**virtual_network_reference** | [**\OpenAPI\Client\Model\VirtualNetworkReference**](VirtualNetworkReference.md) |  | [optional]
**action** | [**\OpenAPI\Client\Model\RoutingPolicyActionStatus**](RoutingPolicyActionStatus.md) |  | [optional]
**protocol_type** | **string** | The IP protocol type of traffic that is entering the router. | [optional]
**priority** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
