# # ParamDescriptor

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**default_value** | [**\OpenAPI\Client\Model\ActionServiceParamValue**](ActionServiceParamValue.md) |  | [optional]
**entity_types** | **string[]** | The possible entity types the param value be holding like vm, etc. | [optional]
**display_name** | **string** | parameter display name |
**name** | **string** | parameter name |
**is_parameterized** | **bool** | The field can take parameter or not. | [optional]
**choice_list** | [**\OpenAPI\Client\Model\ParamDescriptorChoiceListInner[]**](ParamDescriptorChoiceListInner.md) | The parameter can only be one of the choices in this ordered list. We do not support choice list of elements with complex type. | [optional]
**is_array** | **bool** | Is this parameter a list or a scalar value | [optional]
**entity_type** | **string** | Deprecated. Please use entity_types instead. The entity type the param value be holding like vm, etc. | [optional]
**value_info** | [**\OpenAPI\Client\Model\ValueInfo**](ValueInfo.md) |  | [optional]
**element_data_type** | **string** | The parameter&#39;s data type.  If the parameter is a list, it is the element data type. |
**is_deprecated** | **bool** | Flag to indicate if this parameter is deprecated. | [optional]
**is_secret** | **bool** | Is this parameter a secret like password, security token? | [optional]
**parent_params** | [**\OpenAPI\Client\Model\ParamDescriptorParentParamsInner[]**](ParamDescriptorParentParamsInner.md) | A list of parent params with their expected values. Any one of these params must have the provided value in order for this field to be valid. | [optional]
**is_hidden** | **bool** | The field is hidden from other actions or triggers.  For example, not showing in the UI. | [optional]
**is_required** | **bool** | Is this parameter optional. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
