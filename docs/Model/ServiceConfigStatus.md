# # ServiceConfigStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**validation_result_list** | [**\OpenAPI\Client\Model\ValidationResult[]**](ValidationResult.md) | Validation results of the service enablement. Will only be populated when user does validation_only operation. | [optional]
**task_uuid** | **string** | Enablement task uuid for the submitted request. This will not be populated when validation only is done. | [optional]
**configuration_info** | [**\OpenAPI\Client\Model\ConfigurationInfo**](ConfigurationInfo.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
