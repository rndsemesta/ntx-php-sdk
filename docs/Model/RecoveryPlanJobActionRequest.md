# # RecoveryPlanJobActionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**should_continue_rerun_on_validation_failure** | **bool** | Whether to continue rerun execution if warnings are detected during recovery validations. | [optional] [default to false]
**rerun_recovery_plan_job_uuid** | **string** | UUID for referencing the new Recovery Plan Job created for running the failed and incomplete operations. If not specified system generated one will be used. Reference to this will also be populated in entity_reference_list of the task returned in the response. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
