# # RecoveryPlanJobDefStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**validation_information** | [**\OpenAPI\Client\Model\RecoveryPlanJobDefStatusValidationInformation**](RecoveryPlanJobDefStatusValidationInformation.md) |  | [optional]
**name** | **string** | Recovery Plan Job name. |
**cleanup_status** | [**\OpenAPI\Client\Model\RecoveryPlanJobExecutionPhasesStatus**](RecoveryPlanJobExecutionPhasesStatus.md) |  | [optional]
**start_time** | **\DateTime** | Time when the Recovery Plan Job was created. | [optional]
**execution_status** | [**\OpenAPI\Client\Model\RecoveryPlanJobExecutionPhasesStatus**](RecoveryPlanJobExecutionPhasesStatus.md) |  | [optional]
**recovery_plan_specification** | [**\OpenAPI\Client\Model\RecoveryPlanJobDefStatusRecoveryPlanSpecification**](RecoveryPlanJobDefStatusRecoveryPlanSpecification.md) |  | [optional]
**parent_recovery_plan_job_reference** | [**\OpenAPI\Client\Model\RecoveryPlanJobReference**](RecoveryPlanJobReference.md) |  | [optional]
**end_time** | **\DateTime** | Time when the Recovery Plan Job execution ended. | [optional]
**root_recovery_plan_job_reference** | [**\OpenAPI\Client\Model\RecoveryPlanJobReference**](RecoveryPlanJobReference.md) |  | [optional]
**witness_address** | **string** | Address of the witness, which has triggered this Recovery Plan Job. This will be same as Availability Zone URL, on which witness is deployed. | [optional]
**resources** | [**\OpenAPI\Client\Model\RecoveryPlanJobResources**](RecoveryPlanJobResources.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
