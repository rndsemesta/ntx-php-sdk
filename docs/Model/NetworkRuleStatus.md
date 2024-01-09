# # NetworkRuleStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**protocol** | **string** | Select a protocol to allow.  Multiple protocols can be allowed by repeating network_rule object.  If a protocol is not configured in the network_rule object then it is allowed. | [optional]
**description** | **string** | Description for network security rule that is for inbound or outbound | [optional]
**ip_subnet** | [**\OpenAPI\Client\Model\IpSubnet**](IpSubnet.md) |  | [optional]
**tcp_port_range_list** | [**\OpenAPI\Client\Model\PortRangeStatus[]**](PortRangeStatus.md) | List of TCP ports that are allowed by this rule. | [optional]
**udp_port_range_list** | [**\OpenAPI\Client\Model\PortRangeStatus[]**](PortRangeStatus.md) | List of UDP ports that are allowed by this rule. | [optional]
**peer_specification_type** | **string** | The set of categories that matching VMs need to have. | [optional]
**filter** | [**\OpenAPI\Client\Model\CategoryFilter**](CategoryFilter.md) |  | [optional]
**service_group_list** | [**\OpenAPI\Client\Model\ServiceGroupReference[]**](ServiceGroupReference.md) | List of service groups associated with this rule. The existing fields for protocol or ports is not recommended for and will be deprecated for these new fields at the API level. | [optional]
**icmp_type_code_list** | [**\OpenAPI\Client\Model\NetworkRuleStatusIcmpTypeCodeListInner[]**](NetworkRuleStatusIcmpTypeCodeListInner.md) | List of ICMP types and codes allowed by this rule. | [optional]
**network_function_chain_reference** | [**\OpenAPI\Client\Model\NetworkFunctionChainReference**](NetworkFunctionChainReference.md) |  | [optional]
**expiration_time** | **string** | Timestamp of expiration time. | [optional]
**rule_id** | **int** | Unique identifier for inbound or outbound rule. This is system generated and used internally. User should not set this field while creating a new rule or should not modify it while updating the existing rule. | [optional]
**address_group_inclusion_list** | [**\OpenAPI\Client\Model\AddressGroupReference[]**](AddressGroupReference.md) | List of address groups that are allowed access by this rule | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
