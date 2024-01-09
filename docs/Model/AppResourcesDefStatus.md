# # AppResourcesDefStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**app_state** | **string** |  |
**action_list** | [**\OpenAPI\Client\Model\AppActionResponse[]**](AppActionResponse.md) | List of Action for Application. |
**source_marketplace_name** | **string** | Name of the marketplace item used to create this app | [optional]
**credential_list** | [**\OpenAPI\Client\Model\AppCredentialResponse[]**](AppCredentialResponse.md) | Credential list for appspec |
**app_blueprint_config_reference** | [**\OpenAPI\Client\Model\BlueprintReference**](BlueprintReference.md) |  | [optional]
**app_blueprint_reference** | [**\OpenAPI\Client\Model\BlueprintReference**](BlueprintReference.md) |  |
**app_profile_config_reference** | [**\OpenAPI\Client\Model\AppProfileReference**](AppProfileReference.md) |  | [optional]
**source_marketplace_version** | **string** | Version of the marketplace item used to create this app | [optional]
**client_attrs** | **array<string,mixed>** | Data needed for clients. | [optional]
**dependency_list** | [**\OpenAPI\Client\Model\BlueprintDependencyList[]**](BlueprintDependencyList.md) | Dependencies or edges between callrunbook tasks formed by usage of macros in child tasks | [optional]
**variable_list** | [**\OpenAPI\Client\Model\AppVariableResponse[]**](AppVariableResponse.md) | List of variables |
**deployment_list** | [**\OpenAPI\Client\Model\AppDeploymentResponse[]**](AppDeploymentResponse.md) | List of Deployment Spec for Application. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
