# # RecoveryPlanNetwork

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the network. | [optional]
**vpc_reference** | [**\OpenAPI\Client\Model\VpcReference**](VpcReference.md) |  | [optional]
**use_vpc_reference** | **bool** | Client need to specify this field as true while using vpc_reference for specifying the VPC for the network. Without this values in vpc_reference will be ignored. | [optional]
**virtual_network_reference** | [**\OpenAPI\Client\Model\VirtualNetworkReference**](VirtualNetworkReference.md) |  | [optional]
**subnet_list** | [**\OpenAPI\Client\Model\RecoveryPlanSubnetConfig[]**](RecoveryPlanSubnetConfig.md) | List of subnets for the network. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
