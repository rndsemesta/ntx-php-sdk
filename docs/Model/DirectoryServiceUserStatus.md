# # DirectoryServiceUserStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**user_principal_name** | **string** | The UserPrincipalName of the user from the directory service. It will be same as default user principal name if no upn suffix is enabled for user logon name in directory service. | [optional]
**directory_service_reference** | [**\OpenAPI\Client\Model\DirectoryServiceReference**](DirectoryServiceReference.md) |  | [optional]
**default_user_principal_name** | **string** | The Default UserPrincipalName of the user from the directory service. This is of format samAccountName@domain_name. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
