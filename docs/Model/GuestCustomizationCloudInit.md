# # GuestCustomizationCloudInit

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**meta_data** | **string** | The contents of the meta_data configuration for cloud-init. This can be formatted as YAML or JSON. The value must be base64 encoded. | [optional]
**user_data** | **string** | The contents of the user_data configuration for cloud-init. This can be formatted as YAML, JSON, or could be a shell script. The value must be base64 encoded. | [optional]
**custom_key_values** | **array<string,string>** | Generic key value pair used for custom attributes | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
