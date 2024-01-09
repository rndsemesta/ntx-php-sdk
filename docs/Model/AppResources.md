# # AppResources

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action_list** | [**\OpenAPI\Client\Model\AppActionInput[]**](AppActionInput.md) | List of Action for Application. |
**credential_list** | [**\OpenAPI\Client\Model\AppCredentialInput[]**](AppCredentialInput.md) | Credential list for appspec |
**app_blueprint_config_reference** | [**\OpenAPI\Client\Model\BlueprintReference**](BlueprintReference.md) |  | [optional]
**app_blueprint_reference** | [**\OpenAPI\Client\Model\BlueprintReference**](BlueprintReference.md) |  | [optional]
**app_profile_config_reference** | [**\OpenAPI\Client\Model\AppProfileReference**](AppProfileReference.md) |  | [optional]
**client_attrs** | **array<string,mixed>** | Data needed for clients. | [optional]
**dependency_list** | [**\OpenAPI\Client\Model\BlueprintDependencyList[]**](BlueprintDependencyList.md) | Dependencies or edges between callrunbook tasks formed by usage of macros in child tasks | [optional]
**variable_list** | [**\OpenAPI\Client\Model\AppVariableInput[]**](AppVariableInput.md) | List of variables |
**deployment_list** | [**\OpenAPI\Client\Model\AppDeploymentInput[]**](AppDeploymentInput.md) | List of Deployment Spec for Application. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
