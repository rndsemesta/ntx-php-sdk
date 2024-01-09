# # ServiceEnablementStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**task_uuid** | **string** | UUID of the task created for handling the request. | [optional]
**service_capabilities** | [**array<string,\OpenAPI\Client\Model\ServiceCapability>**](ServiceCapability.md) | Capabilities of this service. For example if the service can be enabled/disabled. | [optional]
**service_enablement_timestamp** | **\DateTime** | Date and time at which the service was enabled.  Currently this is used only for Microsegmentation. | [optional]
**service_enablement_status** | **string** |  | [optional]
**is_trial_period_expired** | **bool** | Flag indicating if the service trial period has expired. Currently this is used only for Microsegmentation. | [optional]
**service_running_status** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
