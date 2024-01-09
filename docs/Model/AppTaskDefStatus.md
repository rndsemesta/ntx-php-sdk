# # AppTaskDefStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | app_task Name. |
**state** | **string** | The state of the app_task. | [optional]
**availability_zone_reference** | [**\OpenAPI\Client\Model\AvailabilityZoneReference**](AvailabilityZoneReference.md) |  | [optional]
**message_list** | [**\OpenAPI\Client\Model\MessageResource[]**](MessageResource.md) | Any error messages for the app_task, if in an error state. | [optional]
**cluster_reference** | [**\OpenAPI\Client\Model\ClusterReference**](ClusterReference.md) |  | [optional]
**resources** | [**\OpenAPI\Client\Model\AppTaskResourcesDefStatus**](AppTaskResourcesDefStatus.md) |  |
**description** | **string** | A description for app_task. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
