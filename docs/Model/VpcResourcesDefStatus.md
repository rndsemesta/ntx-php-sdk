# # VpcResourcesDefStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**common_domain_name_server_ip_list** | [**\OpenAPI\Client\Model\Address[]**](Address.md) | List of domain name server IPs. | [optional]
**nat_ip_list** | **string[]** | List of IP addresses used for SNAT. | [optional]
**external_subnet_list** | [**\OpenAPI\Client\Model\ExternalSubnetDefStatus[]**](ExternalSubnetDefStatus.md) | List of external subnets attached to this VPC. | [optional]
**externally_routable_prefix_list** | [**\OpenAPI\Client\Model\IpSubnet[]**](IpSubnet.md) | CIDR blocks from the VPC which can talk externally without performing NAT. These blocks should be between /16 netmask and /28 netmask and cannot overlap across VPCs. They are effective when the VPC connects to a NAT-less external subnet. | [optional]
**availability_zone_reference_list** | [**\OpenAPI\Client\Model\AvailabilityZoneReference[]**](AvailabilityZoneReference.md) | List of availability zones in Xi from which resources are derived (Only supported on Xi) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
