# # NetworkSecurityRuleMetadata

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**last_update_time** | **\DateTime** | UTC date and time in RFC-3339 format when network_security_rule was last updated | [optional] [readonly]
**use_categories_mapping** | **bool** | Client need to specify this field as true if user want to use the newer way of assigning the categories. Without this things should work as it was earlier. | [optional] [default to false]
**kind** | **string** | The kind name | [readonly] [default to 'network_security_rule']
**uuid** | **string** | network_security_rule uuid | [optional]
**project_reference** | [**\OpenAPI\Client\Model\ProjectReference**](ProjectReference.md) |  | [optional]
**creation_time** | **\DateTime** | UTC date and time in RFC-3339 format when network_security_rule was created | [optional] [readonly]
**spec_version** | **int** | Version number of the latest spec. | [optional]
**spec_hash** | **string** | Hash of the spec. This will be returned from server. | [optional]
**categories_mapping** | **array<string,string[]>** | Categories for the network_security_rule. This allows setting up multiple values from a single key. Categories assigned using the older view will be present here. This is the new way of assigning categories. | [optional]
**should_force_translate** | **bool** | Applied on Prism Central only. Indicate whether force to translate the spec of the fanout request to fit the target cluster API schema. | [optional]
**entity_version** | **string** | Logical entity version that allows serializing updates to the entity across multiple API namespaces.  For kinds that support entity_version, it overrides spec_version described above. | [optional] [readonly]
**owner_reference** | [**\OpenAPI\Client\Model\UserReference**](UserReference.md) |  | [optional]
**categories** | **array<string,string>** | Categories for the network_security_rule. This allows assigning one value of a key to any entity. Changes done in this will be reflected in the categories_mapping field. | [optional]
**name** | **string** | network_security_rule name | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
