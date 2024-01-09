# # WhatifScenario

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**new_cluster** | **bool** | The flag to indicate whether it is a new cluster or not. | [optional]
**cluster_entity_type** | **string** | The entity type for the cluster e.g. cluster or nutanix_vcenter__cluster. | [optional] [default to 'cluster']
**uuid** | **string** | The uuid would be automatically generated when created. | [optional]
**vendor_list** | **string[]** |  | [optional]
**workload_list** | [**\OpenAPI\Client\Model\Workload[]**](Workload.md) | workload added by user. | [optional]
**recommended_runway** | [**\OpenAPI\Client\Model\Runway**](Runway.md) |  | [optional]
**updated_time_sec** | **int** | Last updated timestamp. | [optional]
**cluster_uuid** | **string** | The cluster uuid. | [optional]
**target_runway_days** | **int** | The target runway. | [optional]
**cluster_spec** | [**\OpenAPI\Client\Model\ClusterSpec**](ClusterSpec.md) |  | [optional]
**runway** | [**\OpenAPI\Client\Model\Runway**](Runway.md) |  | [optional]
**name** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
