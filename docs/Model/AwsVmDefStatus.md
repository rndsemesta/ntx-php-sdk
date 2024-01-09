# # AwsVmDefStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | aws_vm Name. |
**state** | **string** | The state of the aws_vm. | [optional]
**availability_zone_reference** | [**\OpenAPI\Client\Model\AvailabilityZoneReference**](AvailabilityZoneReference.md) |  | [optional]
**message_list** | [**\OpenAPI\Client\Model\MessageResource[]**](MessageResource.md) | Any error messages for the aws_vm, if in an error state. | [optional]
**cluster_reference** | [**\OpenAPI\Client\Model\ClusterReference**](ClusterReference.md) |  | [optional]
**resources** | [**\OpenAPI\Client\Model\AwsVmResourcesDefStatus**](AwsVmResourcesDefStatus.md) |  |
**description** | **string** | A description for aws_vm. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
