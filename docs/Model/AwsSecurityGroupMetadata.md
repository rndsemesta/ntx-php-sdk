# # AwsSecurityGroupMetadata

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**last_update_time** | **\DateTime** | UTC date and time in RFC-3339 format when aws_security_group was last updated | [optional] [readonly]
**kind** | **string** | The kind name | [readonly] [default to 'aws_security_group']
**uuid** | **string** | aws_security_group uuid | [optional]
**project_reference** | [**\OpenAPI\Client\Model\ProjectReference**](ProjectReference.md) |  | [optional]
**creation_time** | **\DateTime** | UTC date and time in RFC-3339 format when aws_security_group was created | [optional] [readonly]
**spec_version** | **int** | Version number of the latest spec. | [optional]
**owner_reference** | [**\OpenAPI\Client\Model\UserReference**](UserReference.md) |  | [optional]
**categories** | **array<string,string>** | Categories for the aws_security_group | [optional]
**name** | **string** | aws_security_group name | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
