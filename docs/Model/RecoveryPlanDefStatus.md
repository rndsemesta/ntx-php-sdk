# # RecoveryPlanDefStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Recovery Plan name |
**recovery_availability_zone_order_list** | [**\OpenAPI\Client\Model\RecoveryPlanDefStatusRecoveryAvailabilityZoneOrderListInner[]**](RecoveryPlanDefStatusRecoveryAvailabilityZoneOrderListInner.md) | List of recovery Availability Zones order list. Each unique Availability Zone order list will be reported. A cluster might also be specified for each Availability Zone in the Availability Zones order list, in case the entity is protected for replication to/from a cluster in the Protection Policy. |
**message_list** | [**\OpenAPI\Client\Model\MessageResource[]**](MessageResource.md) |  | [optional]
**state** | **string** | The state of the Recovery Plan entity. | [optional]
**latest_validation_time** | **\DateTime** | Time when latest validation was done for Recovery Plan. | [optional]
**latest_test_time** | **\DateTime** | Time when latest test was done for Recovery Plan. | [optional]
**resources** | [**\OpenAPI\Client\Model\RecoveryPlanResources**](RecoveryPlanResources.md) |  |
**description** | **string** | A description or user annotation for the Recovery Plan. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
