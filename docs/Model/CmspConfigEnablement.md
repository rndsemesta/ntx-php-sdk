# # CmspConfigEnablement

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**registry_image** | [**\OpenAPI\Client\Model\ImageSpec**](ImageSpec.md) |  | [optional]
**operation** | **string** | The type of operation is kValidate or kEnable. |
**config** | [**\OpenAPI\Client\Model\CmspConfig**](CmspConfig.md) |  |
**source** | **string** | Indicates if CMSP enablement is being made as part of PC deployment (value kPE) | [optional] [default to 'kPC']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
