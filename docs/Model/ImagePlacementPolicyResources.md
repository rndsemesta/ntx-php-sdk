# # ImagePlacementPolicyResources

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cluster_entity_filter** | [**\OpenAPI\Client\Model\PlacementEntityFilter**](PlacementEntityFilter.md) |  |
**image_entity_filter** | [**\OpenAPI\Client\Model\PlacementEntityFilter**](PlacementEntityFilter.md) |  |
**placement_type** | **string** | Describes the image placement semantic. AT_LEAST semantics defines that the image will be attempted to be placed in the set of clusters specified by the cluster category filter but at the same time Image will still be allowed to be copied to other cluster not specified as part of the cluster category filter (for example as a result of VM create workflow). In EXACTLY semantics copying image to any cluster not part of cluster category filter will not be allowed. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
