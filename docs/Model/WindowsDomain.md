# # WindowsDomain

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the node to be renamed to during domain-join. If not given,a new name will be automatically assigned. | [optional]
**domain_name** | **string** | Full name of domain. | [optional]
**domain_credential** | [**\OpenAPI\Client\Model\Credentials**](Credentials.md) |  |
**organization_unit_path** | **string** | Path to organization unit in the domain. | [optional]
**name_prefix** | **string** | The name prefix in the domain in case of CPS deployment. | [optional]
**name_server_ip** | **string** | The ip of name server that can resolve the domain name. Required during joining domain. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
