# # AppPublishedServiceInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**singleton** | **bool** | If True, then this service can only be in a deployment with replica 1 | [optional] [default to false]
**uuid** | **string** |  |
**action_list** | [**\OpenAPI\Client\Model\AppActionInput[]**](AppActionInput.md) | List of references to service action | [optional]
**depends_on_list** | [**\OpenAPI\Client\Model\EntityReference[]**](EntityReference.md) |  | [optional]
**name** | **string** |  |
**config_reference** | [**\OpenAPI\Client\Model\AppPublishedServiceReference**](AppPublishedServiceReference.md) |  | [optional]
**port_list** | [**\OpenAPI\Client\Model\AppServicePort[]**](AppServicePort.md) |  | [optional]
**editables** | **array<string,mixed>** | Runtime editable attributes for this entity. The structure for this is a dictionary. The keys in this dictionary should be the name of the attribute on the entity. If the attribute is editable, the value should be true, else false. If the attribute is a nested dictionary, the value can contain a nested dictionary with the same key value structure described above. | [optional]
**tier** | **string** | Service tier name | [optional]
**type** | **string** | Type of published service | [optional] [default to 'K8S_SERVICE']
**options** | **object** | Additional published service options | [optional]
**variable_list** | [**\OpenAPI\Client\Model\AppVariableInput[]**](AppVariableInput.md) |  | [optional]
**description** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
