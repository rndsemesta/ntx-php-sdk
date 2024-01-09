# # RecoveryPlanEntities

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**entities_per_availability_zone_list** | [**\OpenAPI\Client\Model\RecoveryPlanEntitiesEntitiesPerAvailabilityZoneListInner[]**](RecoveryPlanEntitiesEntitiesPerAvailabilityZoneListInner.md) | List of entities and recovery Availability Zones order list per local Availability Zone. In case of public cloud, entity list and recovery Availability Zones order for each of the Availability Zones will be reported. For example, Let AZ1 and AZ2 be the two Availability Zones for a public cloud and OnPrem be the on-premise Availability Zone. If VMs VM1 and VM2 on OnPrem is protected by a Protection Rule with Availabilty Zone order [OnPrem, AZ1, AZ2], then entities_per_availability_zone_list will be [{AZ1, [[OnPrem, AZ1, AZ2]], [{VM1}, {VM2}]},  {AZ2, [[OnPrem, AZ1, AZ2]], [{VM1}, {VM2}]}]. All the Availability Zones should have same Availability Zone order for a valid Recovery Plan. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
