# # PlacementSpec

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**entity_spec_list** | [**\OpenAPI\Client\Model\EntitySpec[]**](EntitySpec.md) | List of entity specs. | [optional]
**hypervisor_type** | **string** | Preferred hypervisor type for the entities. | [optional]
**exclude_cluster_uuid_list** | **string[]** | List of UUIDs of the clusters which have to be excluded while auto selecting a target cluster for replication. | [optional]
**preferred_cluster_uuid_list** | **string[]** | List of uuids of the cluster which are preferred to be the replication target. | [optional]
**preferred_cluster_uuid** | **string** | Uuid of the cluster which is preferred to be the replication target. | [optional]
**replication_type** | **string** | Type of the replication. It can be asynchronous or synchronous. | [optional]
**operation_type** | **string** | Operation to be performed for entities. | [optional]
**source_availability_zone_url** | **string** | URL of the source availability zone. Based on this, the mapped load balancer ip address and port of the replication target will be returned. | [optional]
**tenant_uuid** | **string** | UUID of the tenant. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
