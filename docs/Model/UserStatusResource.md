# # UserStatusResource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**access_control_policy_reference_list** | [**\OpenAPI\Client\Model\AccessControlPolicyReference[]**](AccessControlPolicyReference.md) | List of ACP references. | [optional]
**display_name** | **string** | The display name of the user (common name) provided by the directory service. | [optional]
**user_type** | **string** |  | [optional]
**resource_usage_summary** | [**\OpenAPI\Client\Model\UserStatusResourceResourceUsageSummary**](UserStatusResourceResourceUsageSummary.md) |  | [optional]
**projects_reference_list** | [**\OpenAPI\Client\Model\ProjectReference[]**](ProjectReference.md) | A list of projects the user is part of. | [optional]
**identity_provider_user** | [**\OpenAPI\Client\Model\IdentityProviderUser**](IdentityProviderUser.md) |  | [optional]
**directory_service_user** | [**\OpenAPI\Client\Model\DirectoryServiceUserStatus**](DirectoryServiceUserStatus.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
