# # AppPackageElement

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**image_spec** | **object** | Additional properties for k8s image spec | [optional]
**description** | **string** |  | [optional]
**action_list** | [**\OpenAPI\Client\Model\AppActionResponse[]**](AppActionResponse.md) | List of references to action | [optional]
**message_list** | [**\OpenAPI\Client\Model\MessageResource[]**](MessageResource.md) | Message list for package | [optional]
**service_local_reference_list** | [**\OpenAPI\Client\Model\AppServiceReference[]**](AppServiceReference.md) | References of the service. | [optional]
**name** | **string** |  |
**state** | **string** |  |
**version** | **string** |  | [optional]
**editables** | **array<string,mixed>** | Runtime editable attributes for this entity. The structure for this is a dictionary. The keys in this dictionary should be the name of the attribute on the entity. If the attribute is editable, the value should be true, else false. If the attribute is a nested dictionary, the value can contain a nested dictionary with the same key value structure described above. | [optional]
**type** | **string** |  |
**options** | **array<string,mixed>** | Details based on type of the package. | [optional]
**variable_list** | [**\OpenAPI\Client\Model\AppVariableResponse[]**](AppVariableResponse.md) |  | [optional]
**uuid** | **string** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
