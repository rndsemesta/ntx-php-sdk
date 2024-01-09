# # AwsVpcResourcesDefStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**instance_tenancy** | **string** | The supported tenancy options for instances launched into the VPC. | [optional]
**classic_link_enabled** | **bool** | Whether ClassicLink is enabled. | [optional]
**is_default** | **bool** | Whether the VPC is the default VPC. | [optional]
**state** | **string** | State of the AWS resource | [optional]
**cidr_block** | **string** | The CIDR block for the VPC. | [optional]
**tag_list** | [**\OpenAPI\Client\Model\AwsTagListInner[]**](AwsTagListInner.md) | The AWS Tags associated with any AWS resource | [optional]
**id** | **string** | The AWS ID of the VPC. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
