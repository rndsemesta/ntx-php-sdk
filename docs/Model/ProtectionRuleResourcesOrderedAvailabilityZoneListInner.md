# # ProtectionRuleResourcesOrderedAvailabilityZoneListInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cluster_uuid** | **string** | UUID of specific cluster to which we will be replicating. This need to set only if availability zone is of type PC. | [optional]
**availability_zone_url** | **string** | The FQDN or IP address of the availability zone. Every Prism Central deployment acts as an availability zone. | [optional]
**cluster_uuid_list** | **string[]** | List of cluster UUIDs which are source or target for replication. This should be set only if the availability zone is of type PC. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
