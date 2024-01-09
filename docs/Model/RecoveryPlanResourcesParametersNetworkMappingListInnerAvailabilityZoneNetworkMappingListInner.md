# # RecoveryPlanResourcesParametersNetworkMappingListInnerAvailabilityZoneNetworkMappingListInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**recovery_ip_assignment_list** | [**\OpenAPI\Client\Model\RecoveryPlanVmIpAssignment[]**](RecoveryPlanVmIpAssignment.md) | Static IP configuration for the VMs to be applied post recovery in the recovery network for migrate/ failover action on the Recovery Plan. | [optional]
**test_ip_assignment_list** | [**\OpenAPI\Client\Model\RecoveryPlanVmIpAssignment[]**](RecoveryPlanVmIpAssignment.md) | Static IP configuration for the VMs to be applied post recovery in the test network for test failover action on the Recovery Plan. | [optional]
**availability_zone_url** | **string** | URL of the Availability Zone. |
**recovery_network** | [**\OpenAPI\Client\Model\RecoveryPlanNetwork**](RecoveryPlanNetwork.md) |  | [optional]
**test_network** | [**\OpenAPI\Client\Model\RecoveryPlanNetwork**](RecoveryPlanNetwork.md) |  | [optional]
**cluster_reference_list** | [**\OpenAPI\Client\Model\ClusterReference[]**](ClusterReference.md) | The clusters where the recovery and test networks reside. This is required to specify network mapping across clusters for a Recovery Plan created to handle failover within the same Availability Zone. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
