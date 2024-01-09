# # ActionServiceComponentType

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**display_name** | **string** | Action service component display name. |
**global_parameters** | **object** | The rule parameters globally available to every component to use. This is provided by system, not by action type or trigger type service. | [optional] [readonly]
**input_parameters** | **object** | The component required input parameter descriptors.  The key is the parameter name | [optional]
**is_disabled** | **bool** | Flag to indicate if this action/trigger type is disabled. | [optional]
**description** | **string** | Action service component type description. |
**additional_info_severity** | **string** | Severity of additional info provided. | [optional]
**group_list** | **string[]** | The group/bucket in which the component falls into. | [optional]
**local_parameters** | **object** | The rule parameters available locally to the action/trigger. | [optional]
**output_parameters** | **object** | The component output parameter descriptors. The key is the parameter name. | [optional]
**ui_metadata** | [**\OpenAPI\Client\Model\DisplayMetadata[]**](DisplayMetadata.md) | The metadata of form fields/params required for UI to render params. | [optional]
**additional_info** | **string** | Additional information about the action/trigger type. | [optional]
**name** | **string** | A preconfigured, or dynamically created component type. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
