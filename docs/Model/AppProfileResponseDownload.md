# # AppProfileResponseDownload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**deployment_create_list** | [**\OpenAPI\Client\Model\BlueprintDeploymentResponseDownload[]**](BlueprintDeploymentResponseDownload.md) |  | [optional]
**description** | **string** |  | [optional]
**action_list** | [**\OpenAPI\Client\Model\AppActionResponseDownload[]**](AppActionResponseDownload.md) | List of references to action | [optional]
**name** | **string** |  |
**state** | **string** |  |
**editables** | **array<string,mixed>** | Runtime editable attributes for this entity. The structure for this is a dictionary. The keys in this dictionary should be the name of the attribute on the entity. If the attribute is editable, the value should be true, else false. If the attribute is a nested dictionary, the value can contain a nested dictionary with the same key value structure described above. | [optional]
**message_list** | [**\OpenAPI\Client\Model\MessageResource[]**](MessageResource.md) | Message list for blueprint deployment |
**dependency_list** | [**\OpenAPI\Client\Model\BlueprintDependencyList[]**](BlueprintDependencyList.md) |  |
**variable_list** | [**\OpenAPI\Client\Model\AppVariableResponseDownload[]**](AppVariableResponseDownload.md) |  | [optional]
**uuid** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
