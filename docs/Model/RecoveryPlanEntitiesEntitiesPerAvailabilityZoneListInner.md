# # RecoveryPlanEntitiesEntitiesPerAvailabilityZoneListInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**availability_zone_url** | **string** | URL of the Availability Zone. |
**availability_zone_order_list** | [**\OpenAPI\Client\Model\RecoveryPlanEntitiesEntitiesPerAvailabilityZoneListInnerAvailabilityZoneOrderListInner[]**](RecoveryPlanEntitiesEntitiesPerAvailabilityZoneListInnerAvailabilityZoneOrderListInner.md) | List of recovery Availability Zone orders for entities in the Recovery Plan. More than one entry in this list indicates entities in Recovery Plan are protected by the Protection Rules with different recovery Availability Zone order and makes Recovery Plan invalid. | [optional]
**entity_list** | [**\OpenAPI\Client\Model\RecoveryPlanEntitiesEntitiesPerAvailabilityZoneListInnerEntityListInner[]**](RecoveryPlanEntitiesEntitiesPerAvailabilityZoneListInnerEntityListInner.md) | List of protected entities associated with Recovery Plan. This list includes the entities which are live and the entities for which Recovery Points are present on the Availability Zone. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
