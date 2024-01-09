# # SubnetDefStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | subnet Name. |
**state** | **string** | The state of the subnet. | [optional]
**availability_zone_reference** | [**\OpenAPI\Client\Model\AvailabilityZoneReference**](AvailabilityZoneReference.md) |  | [optional]
**message_list** | [**\OpenAPI\Client\Model\MessageResource[]**](MessageResource.md) | Any error messages for the subnet, if in an error state. | [optional]
**cluster_reference** | [**\OpenAPI\Client\Model\ClusterReference**](ClusterReference.md) |  | [optional]
**resources** | [**\OpenAPI\Client\Model\SubnetResourcesDefStatus**](SubnetResourcesDefStatus.md) |  |
**description** | **string** | A description for subnet. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
