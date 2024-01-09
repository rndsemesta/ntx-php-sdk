# # ImageResourcesDefStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**retrieval_uri_list** | **string[]** | List of URIs where the raw image data can be accessed. | [optional]
**current_cluster_reference_list** | [**\OpenAPI\Client\Model\ClusterReference[]**](ClusterReference.md) | List of clusters where image is currently present. | [optional]
**image_type** | **string** | The type of image. | [optional]
**checksum** | [**\OpenAPI\Client\Model\Checksum**](Checksum.md) |  | [optional]
**source_uri** | **string** | The source URI points at the location of a the source image which is used to create/update image. | [optional]
**initial_placement_ref_list** | [**\OpenAPI\Client\Model\ClusterReference[]**](ClusterReference.md) | List of clusters where image is requested to be placed at time of creation. This argument will not be honored at time of update. | [optional]
**version** | [**\OpenAPI\Client\Model\ImageVersionStatus**](ImageVersionStatus.md) |  | [optional]
**architecture** | **string** | The supported CPU architecture for a disk image. | [optional]
**size_bytes** | **int** | The size of the image in bytes. | [optional]
**data_source_reference** | [**\OpenAPI\Client\Model\Reference**](Reference.md) |  | [optional]
**image_placement_policy_state_list** | [**\OpenAPI\Client\Model\ImagePlacementPolicyState[]**](ImagePlacementPolicyState.md) | A single image could get multiple policies applied to it. In such cases, each policy state is shown as an element of this list. | [optional]
**source_options** | [**\OpenAPI\Client\Model\SourceOptions**](SourceOptions.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
