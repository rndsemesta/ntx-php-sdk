# # AppDefStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | app Name. |
**state** | **string** | The state of the app. | [optional]
**availability_zone_reference** | [**\OpenAPI\Client\Model\AvailabilityZoneReference**](AvailabilityZoneReference.md) |  | [optional]
**message_list** | [**\OpenAPI\Client\Model\MessageResource[]**](MessageResource.md) | Any error messages for the app, if in an error state. | [optional]
**cluster_reference** | [**\OpenAPI\Client\Model\ClusterReference**](ClusterReference.md) |  | [optional]
**resources** | [**\OpenAPI\Client\Model\AppResourcesDefStatus**](AppResourcesDefStatus.md) |  |
**description** | **string** | A description for app. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
