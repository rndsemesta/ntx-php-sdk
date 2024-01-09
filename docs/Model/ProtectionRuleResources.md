# # ProtectionRuleResources

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**start_time** | **string** | Time of the day, the policy will be started. This is in \&quot;&lt;x&gt;h:&lt;y&gt;m\&quot; format. The values must be between 00h:00m and 23h:59m. For example user specified 18h:00m and the current time is 17h:00m then the first snapshot will be captured at 18h:00m. If the current time is 19h:00m then the first snapshot will be captured at 18h:00m next day. If not set, policy will be applicable immediately. | [optional]
**availability_zone_connectivity_list** | [**\OpenAPI\Client\Model\ProtectionRuleResourcesAvailabilityZoneConnectivityListInner[]**](ProtectionRuleResourcesAvailabilityZoneConnectivityListInner.md) | This encodes the datapipes between various availability zones and the backup policy of the pipes. For example, [1, 2, 3600], [2, 3, 3600], [4, 5, 15000], [2, 6, 4200]. Note 2 here means the entry at index 2 in the ordered_availability_zone_list. And 3600 is the RPO (Recovery Point Objective) in seconds between the two availability zones. |
**ordered_availability_zone_list** | [**\OpenAPI\Client\Model\ProtectionRuleResourcesOrderedAvailabilityZoneListInner[]**](ProtectionRuleResourcesOrderedAvailabilityZoneListInner.md) | A list of availability zones, each of which, receives a replica of the data for the entities protected by this protection rule. The order of the availability zones in the list determines the preference order (highest to lowest) for the entity to run in the case of failure of one or more availability zones. For example, if this list is [A, B, C, D], then the entity will prefer to run on A unless A has failed, in which case, the entity will run on the second choice, B. Failover of the entity is not automatic but this information is used by DR runbook to failover an entity to the desired availability zone. |
**primary_location_list** | **int[]** | List of indexes in ordered_availability_zone_list, which constitutes the primary locations of this Protection Rule. This field is mandatory if more than two Availability Zones are provided in the policy. | [optional]
**category_filter** | [**\OpenAPI\Client\Model\CategoryFilter**](CategoryFilter.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
