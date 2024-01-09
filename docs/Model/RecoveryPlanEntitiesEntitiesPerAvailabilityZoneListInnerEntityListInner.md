# # RecoveryPlanEntitiesEntitiesPerAvailabilityZoneListInnerEntityListInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**protection_status** | **string** | Protection status of the entity. | [optional]
**recoverability** | [**\OpenAPI\Client\Model\RecoveryPlanEntitiesEntitiesPerAvailabilityZoneListInnerEntityListInnerRecoverability**](RecoveryPlanEntitiesEntitiesPerAvailabilityZoneListInnerEntityListInnerRecoverability.md) |  | [optional]
**recovery_availability_zone_order_index** | **int** | Index of recovery Availability Zone order for this entity in availability_zone_order_list. Index starts at 0. | [optional]
**is_recovery_point** | **bool** | On the Availability Zone, whether the live entity is present or the Recovery Points for the entity are present. This will be set to true, only if the Recovery Points for the entity are present on the Availability Zone and not the live entity. |
**replication_status** | **string** | Replication status of the entity for which synchronous replication is enabled. | [optional]
**any_entity_reference** | [**\OpenAPI\Client\Model\Reference**](Reference.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
