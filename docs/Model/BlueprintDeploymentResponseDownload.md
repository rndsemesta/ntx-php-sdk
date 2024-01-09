# # BlueprintDeploymentResponseDownload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**percent_fault_tolerance** | **int** |  | [optional]
**fault_domain_scope** | **string** |  | [optional]
**description** | **string** |  | [optional]
**action_list** | [**\OpenAPI\Client\Model\AppActionResponseDownload[]**](AppActionResponseDownload.md) | List of references to action | [optional]
**type** | **string** |  | [optional] [default to 'GREENFIELD']
**message_list** | [**\OpenAPI\Client\Model\MessageResource[]**](MessageResource.md) | Message list for blueprint deployment |
**uuid** | **string** |  | [optional]
**name** | **string** |  |
**editables** | **array<string,mixed>** | Runtime editable attributes for this entity. The structure for this is a dictionary. The keys in this dictionary should be the name of the attribute on the entity. If the attribute is editable, the value should be true, else false. If the attribute is a nested dictionary, the value can contain a nested dictionary with the same key value structure described above. | [optional]
**state** | **string** |  |
**published_service_local_reference_list** | [**\OpenAPI\Client\Model\AppPublishedServiceReferenceUpload[]**](AppPublishedServiceReferenceUpload.md) | List of references for published services | [optional]
**depends_on_list** | [**\OpenAPI\Client\Model\EntityReference[]**](EntityReference.md) |  | [optional]
**max_replicas** | **string** | Maximum replicas for the deployment. | [default to '1']
**package_local_reference_list** | [**\OpenAPI\Client\Model\AppPackageReferenceUpload[]**](AppPackageReferenceUpload.md) | List of references for the packages | [optional]
**substrate_local_reference** | [**\OpenAPI\Client\Model\AppSubstrateReferenceUpload**](AppSubstrateReferenceUpload.md) |  |
**variable_list** | [**\OpenAPI\Client\Model\AppVariableResponseDownload[]**](AppVariableResponseDownload.md) |  | [optional]
**min_replicas** | **string** | Minimum replicas for the deployment. | [default to '1']
**options** | **object** | Additional deployment options | [optional]
**num_fault_tolerance** | **int** |  | [optional]
**brownfield_instance_list** | [**\OpenAPI\Client\Model\BrownfieldInstanceInput[]**](BrownfieldInstanceInput.md) | brownfield map | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
