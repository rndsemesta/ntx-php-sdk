# # ActionTemplateResources

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action_type_reference** | [**\OpenAPI\Client\Model\ActionTypeReference**](ActionTypeReference.md) |  |
**display_name** | **string** | Each action instance already has a default display name from action type.  However, users could change an action instance with a different display name. | [optional]
**description** | **string** | Description of the action template. | [optional]
**is_disabled** | **bool** | Flag to indicate if action template is disabled | [optional]
**input_parameter_values** | **array<string,string>** | The trigger or action required input parameter value map, or the output parameters. | [optional]
**blank_template** | **bool** | Is this a blank template or a user defined template. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
