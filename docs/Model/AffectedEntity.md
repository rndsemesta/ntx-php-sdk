# # AffectedEntity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**conflicting_protection_rule_list** | [**\OpenAPI\Client\Model\AffectedEntityConflictingProtectionRuleListInner[]**](AffectedEntityConflictingProtectionRuleListInner.md) | List of reference to conflicting protection rules for an entity. If an entity is filtered by multiple protection rules, Kanon service can not protect that entity. We will flag those entities along with the protection rules. This is set only incase if the entity has conflicts. | [optional]
**vm_reference** | [**\OpenAPI\Client\Model\VmReference**](VmReference.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
