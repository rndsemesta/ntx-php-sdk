# # RoutingPolicyDefStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | routing_policy Name. |
**state** | **string** | The state of the routing_policy. | [optional]
**availability_zone_reference** | [**\OpenAPI\Client\Model\AvailabilityZoneReference**](AvailabilityZoneReference.md) |  | [optional]
**message_list** | [**\OpenAPI\Client\Model\MessageResource[]**](MessageResource.md) | Any error messages for the routing_policy, if in an error state. | [optional]
**cluster_reference** | [**\OpenAPI\Client\Model\ClusterReference**](ClusterReference.md) |  | [optional]
**resources** | [**\OpenAPI\Client\Model\RoutingPolicyResourcesDefStatus**](RoutingPolicyResourcesDefStatus.md) |  |
**description** | **string** | A description for routing_policy. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
