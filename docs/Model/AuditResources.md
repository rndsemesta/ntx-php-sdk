# # AuditResources

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**audit_message** | **string** | Audit message. |
**cluster_reference** | [**\OpenAPI\Client\Model\ClusterReference**](ClusterReference.md) |  | [optional]
**operation_parameter_list** | [**\OpenAPI\Client\Model\AuditParameters[]**](AuditParameters.md) | Parameters associated with the operation captured in the audit. | [optional]
**source_entity_reference** | [**\OpenAPI\Client\Model\EntityInfo**](EntityInfo.md) |  | [optional]
**operation_start_time** | **\DateTime** | UTC date and time in RFC-3339 format when operation was started. | [optional]
**initiated_user** | [**\OpenAPI\Client\Model\AuditUser**](AuditUser.md) |  | [optional]
**operation_complete_time** | **\DateTime** | UTC date and time in RFC-3339 format when operation was completed. | [optional]
**operation_type** | **string** | The operation type the audit captures. | [optional]
**affected_entity_reference_list** | [**\OpenAPI\Client\Model\EntityInfo[]**](EntityInfo.md) | A list of entities causing and/or related to the audit. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
