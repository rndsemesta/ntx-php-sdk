# # GuestCustomizationStatusSysprep

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**install_type** | **string** | Whether the guest will be freshly installed using this unattend configuration, or whether this unattend configuration will be applied to a pre-prepared image. Default is \&quot;PREPARED\&quot;. | [optional] [default to 'PREPARED']
**unattend_xml** | **string** | This field contains a Sysprep unattend xml definition, as a string. The value must be base64 encoded. | [optional]
**custom_key_values** | **array<string,string>** | Generic key value pair used for custom attributes | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
