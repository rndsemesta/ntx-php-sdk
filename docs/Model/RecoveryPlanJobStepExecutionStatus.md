# # RecoveryPlanJobStepExecutionStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Status of this step. |
**error_detail** | **string** | The error detail for the step failure. | [optional]
**any_entity_reference_list** | [**\OpenAPI\Client\Model\Reference[]**](Reference.md) | Reference to the list of the entities on which the step is performing action. | [optional]
**start_time** | **\DateTime** | Time when this step started. | [optional]
**recovered_entity_info_list** | [**\OpenAPI\Client\Model\RecoveredEntityInformation[]**](RecoveredEntityInformation.md) | List containing the details about the recovered entities. | [optional]
**percentage_complete** | **int** | Percentage of step completed. | [optional]
**step_sequence_number** | **int** | Sequence number of the step among its siblings. This can be used for ordering the sub-steps for a step. | [optional]
**end_time** | **\DateTime** | Time when this step ended. | [optional]
**operation_type** | **string** | Type of operation being performed. |
**parent_step_uuid** | **string** | UUID of the parent step. | [optional]
**message** | **string** | User readable message for the action being done for the step. | [optional]
**error_code** | **string** | The error code for the step failure. | [optional]
**step_uuid** | **string** | UUID of a step. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
