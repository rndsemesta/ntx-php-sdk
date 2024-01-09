# # BlueprintResourcesDefStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_attrs** | **array<string,mixed>** | Data needed for clients. | [optional]
**service_definition_list** | [**\OpenAPI\Client\Model\AppServiceResponse[]**](AppServiceResponse.md) | Service definitions for Blueprint. | [optional]
**substrate_definition_list** | [**\OpenAPI\Client\Model\AppSubstrateResponse[]**](AppSubstrateResponse.md) | Substrate definitions for Blueprint. | [optional]
**credential_definition_list** | [**\OpenAPI\Client\Model\AppCredentialResponse[]**](AppCredentialResponse.md) | Credential definitions for Blueprint. | [optional]
**package_definition_list** | [**\OpenAPI\Client\Model\AppPackageResponse[]**](AppPackageResponse.md) | Package definitions for Blueprint. | [optional]
**app_profile_list** | [**\OpenAPI\Client\Model\AppProfileResponse[]**](AppProfileResponse.md) | App profile definitions for Blueprint. | [optional]
**published_service_definition_list** | [**\OpenAPI\Client\Model\AppPublishedServiceResponse[]**](AppPublishedServiceResponse.md) | Published service definitions for Blueprint. | [optional]
**default_credential_local_reference** | [**\OpenAPI\Client\Model\AppCredentialReference**](AppCredentialReference.md) |  | [optional]
**state** | **string** |  | [optional]
**type** | **string** | Type of blueprint | [optional]
**message_list** | [**\OpenAPI\Client\Model\MessageResource[]**](MessageResource.md) | Message list for app blueprint | [optional]
**is_cloned** | **bool** | Cloned or original blueprint | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
