# # AppDeploymentInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**percent_fault_tolerance** | **int** |  | [optional]
**published_service_list** | [**\OpenAPI\Client\Model\AppPublishedServiceInput[]**](AppPublishedServiceInput.md) | List of references for published services | [optional]
**substrate** | [**\OpenAPI\Client\Model\AppSubstrateInput**](AppSubstrateInput.md) |  |
**description** | **string** |  | [optional]
**action_list** | [**\OpenAPI\Client\Model\AppActionInput[]**](AppActionInput.md) | List of references to action | [optional]
**service_list** | [**\OpenAPI\Client\Model\AppServiceInput[]**](AppServiceInput.md) | List of references for services | [optional]
**name** | **string** |  |
**uuid** | **string** |  |
**package_list** | [**\OpenAPI\Client\Model\AppPackageInput[]**](AppPackageInput.md) | List of references for the packages | [optional]
**state** | **string** |  | [optional]
**depends_on_list** | [**\OpenAPI\Client\Model\EntityReference[]**](EntityReference.md) |  | [optional]
**max_replicas** | **string** | Maximum replicas for the deployment. | [default to '1']
**type** | **string** |  | [optional] [default to 'GREENFIELD']
**config_reference** | [**\OpenAPI\Client\Model\AppBlueprintDeploymentReference**](AppBlueprintDeploymentReference.md) |  | [optional]
**fault_domain_scope** | **string** |  | [optional]
**variable_list** | [**\OpenAPI\Client\Model\AppVariableInput[]**](AppVariableInput.md) |  | [optional]
**min_replicas** | **string** | Minimum replicas for the deployment. | [default to '1']
**options** | **object** | Additional deployment options | [optional]
**num_fault_tolerance** | **int** |  | [optional]
**brownfield_instance_list** | [**\OpenAPI\Client\Model\BrownfieldInstanceInput[]**](BrownfieldInstanceInput.md) | list of brownfield elements | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
