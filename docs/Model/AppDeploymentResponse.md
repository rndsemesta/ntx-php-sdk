# # AppDeploymentResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**percent_fault_tolerance** | **int** |  | [optional]
**published_service_list** | [**\OpenAPI\Client\Model\AppPublishedServiceInput[]**](AppPublishedServiceInput.md) | List of references for published services | [optional]
**fault_domain_scope** | **string** |  | [optional]
**description** | **string** |  | [optional]
**action_list** | [**\OpenAPI\Client\Model\AppActionResponse[]**](AppActionResponse.md) | List of references to action | [optional]
**element_list** | [**\OpenAPI\Client\Model\AppDeploymentElement[]**](AppDeploymentElement.md) |  |
**service_list** | [**\OpenAPI\Client\Model\AppServiceResponse[]**](AppServiceResponse.md) | List of references for services | [optional]
**substrate_configuration** | [**\OpenAPI\Client\Model\AppSubstrateResponse**](AppSubstrateResponse.md) |  |
**depends_on_list** | [**\OpenAPI\Client\Model\EntityReference[]**](EntityReference.md) |  | [optional]
**package_list** | [**\OpenAPI\Client\Model\AppPackageResponse[]**](AppPackageResponse.md) | List of references for the packages | [optional]
**min_replicas** | **string** | Minimum replicas for the deployment. | [default to '1']
**state** | **string** |  |
**current_replicas** | **int** |  |
**max_replicas** | **string** | Maximum replicas for the deployment. | [default to '1']
**message_list** | [**\OpenAPI\Client\Model\MessageResource[]**](MessageResource.md) | Message list for deployment |
**config_reference** | [**\OpenAPI\Client\Model\AppBlueprintDeploymentReference**](AppBlueprintDeploymentReference.md) |  | [optional]
**variable_list** | [**\OpenAPI\Client\Model\AppVariableResponse[]**](AppVariableResponse.md) |  | [optional]
**name** | **string** |  |
**options** | **object** | Additional deployment options | [optional]
**num_fault_tolerance** | **int** |  | [optional]
**uuid** | **string** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
