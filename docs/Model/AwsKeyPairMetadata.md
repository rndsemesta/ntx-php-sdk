# # AwsKeyPairMetadata

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**last_update_time** | **\DateTime** | UTC date and time in RFC-3339 format when aws_key_pair was last updated | [optional] [readonly]
**kind** | **string** | The kind name | [readonly] [default to 'aws_key_pair']
**uuid** | **string** | aws_key_pair uuid | [optional]
**project_reference** | [**\OpenAPI\Client\Model\ProjectReference**](ProjectReference.md) |  | [optional]
**creation_time** | **\DateTime** | UTC date and time in RFC-3339 format when aws_key_pair was created | [optional] [readonly]
**spec_version** | **int** | Version number of the latest spec. | [optional]
**owner_reference** | [**\OpenAPI\Client\Model\UserReference**](UserReference.md) |  | [optional]
**categories** | **array<string,string>** | Categories for the aws_key_pair | [optional]
**name** | **string** | aws_key_pair name | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
