# # AppCredentialResponseDownload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**username** | **string** |  |
**uuid** | **string** |  | [optional]
**message_list** | [**\OpenAPI\Client\Model\MessageResource[]**](MessageResource.md) | Message list | [optional]
**state** | **string** |  | [optional]
**name** | **string** |  |
**secret** | **array<string,mixed>** | Credential secret object |
**editables** | **array<string,mixed>** | Runtime editable attributes for this entity. The structure for this is a dictionary. The keys in this dictionary should be the name of the attribute on the entity. If the attribute is editable, the value should be true, else false. If the attribute is a nested dictionary, the value can contain a nested dictionary with the same key value structure described above. | [optional]
**type** | **string** |  |
**passphrase** | **array<string,mixed>** | Credential passphrase object associated with the provided key | [optional]
**description** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
