# # AppSubstrateResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**platform_data** | **string** |  | [optional]
**instance_address** | **string** |  | [optional]
**description** | **string** |  | [optional]
**action_list** | [**\OpenAPI\Client\Model\AppActionResponse[]**](AppActionResponse.md) | List of references to action |
**element_list** | [**\OpenAPI\Client\Model\AppSubstrateElement[]**](AppSubstrateElement.md) |  | [optional]
**instance_id** | **string** |  | [optional]
**uuid** | **string** |  |
**account_reference** | [**\OpenAPI\Client\Model\AccountReference**](AccountReference.md) |  | [optional]
**name** | **string** |  |
**instance_name** | **string** |  | [optional]
**state** | **string** |  |
**readiness_probe** | [**\OpenAPI\Client\Model\AppSubstrateReadinessProbe**](AppSubstrateReadinessProbe.md) |  | [optional]
**editables** | **array<string,mixed>** | Runtime editable attributes for this entity. The structure for this is a dictionary. The keys in this dictionary should be the name of the attribute on the entity. If the attribute is editable, the value should be true, else false. If the attribute is a nested dictionary, the value can contain a nested dictionary with the same key value structure described above. | [optional]
**message_list** | [**\OpenAPI\Client\Model\MessageResource[]**](MessageResource.md) |  | [optional]
**config_reference** | [**\OpenAPI\Client\Model\AppSubstrateReference**](AppSubstrateReference.md) |  | [optional]
**os_type** | **string** |  | [optional]
**type** | **string** |  |
**create_spec** | **array<string,mixed>** | Spec of the substrate | [optional]
**variable_list** | [**\OpenAPI\Client\Model\AppVariableResponse[]**](AppVariableResponse.md) | List of variables |
**instance_power_state** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
