# # AwsRoleMetadata

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**last_update_time** | **\DateTime** | UTC date and time in RFC-3339 format when aws_role was last updated | [optional] [readonly]
**kind** | **string** | The kind name | [readonly] [default to 'aws_role']
**uuid** | **string** | aws_role uuid | [optional]
**project_reference** | [**\OpenAPI\Client\Model\ProjectReference**](ProjectReference.md) |  | [optional]
**creation_time** | **\DateTime** | UTC date and time in RFC-3339 format when aws_role was created | [optional] [readonly]
**spec_version** | **int** | Version number of the latest spec. | [optional]
**owner_reference** | [**\OpenAPI\Client\Model\UserReference**](UserReference.md) |  | [optional]
**categories** | **array<string,string>** | Categories for the aws_role | [optional]
**name** | **string** | aws_role name | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
