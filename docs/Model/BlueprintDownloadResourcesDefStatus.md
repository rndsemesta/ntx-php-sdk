# # BlueprintDownloadResourcesDefStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**client_attrs** | **array<string,mixed>** | Data needed for clients. | [optional]
**service_definition_list** | [**\OpenAPI\Client\Model\AppServiceResponseDownload[]**](AppServiceResponseDownload.md) | Service definitions for Blueprint. | [optional]
**substrate_definition_list** | [**\OpenAPI\Client\Model\AppSubstrateResponseDownload[]**](AppSubstrateResponseDownload.md) | Substrate definitions for Blueprint. | [optional]
**credential_definition_list** | [**\OpenAPI\Client\Model\AppCredentialResponseDownload[]**](AppCredentialResponseDownload.md) | Credential definitions for Blueprint. | [optional]
**package_definition_list** | [**\OpenAPI\Client\Model\AppPackageResponseDownload[]**](AppPackageResponseDownload.md) | Package definitions for Blueprint. | [optional]
**app_profile_list** | [**\OpenAPI\Client\Model\AppProfileResponseDownload[]**](AppProfileResponseDownload.md) | App profile definitions for Blueprint. | [optional]
**published_service_definition_list** | [**\OpenAPI\Client\Model\AppPublishedServiceResponseDownload[]**](AppPublishedServiceResponseDownload.md) | Published service definitions for Blueprint. | [optional]
**default_credential_local_reference** | [**\OpenAPI\Client\Model\AppCredentialReferenceUpload**](AppCredentialReferenceUpload.md) |  | [optional]
**state** | **string** |  | [optional]
**type** | **string** | Type of blueprint | [optional]
**message_list** | [**\OpenAPI\Client\Model\MessageResource[]**](MessageResource.md) | Message list for app blueprint | [optional]
**is_cloned** | **bool** | Cloned or original blueprint | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
