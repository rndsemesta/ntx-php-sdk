# # Status

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Only value possible is \&quot;failure\&quot;. | [optional] [readonly]
**kind** | **string** | The entitys kind. i.e. \&quot;status\&quot;. | [optional] [readonly]
**code** | **int** | The HTTP error code. | [optional] [readonly]
**reason** | **string** | One snake case word. | [optional] [readonly]
**details** | **array<string,string>** | Custom key-value details relevant to the status. | [optional] [readonly]
**message** | **string** | A sentence explaining the reason for the status. | [optional] [readonly]
**api_version** | **string** | API Version of the Nutanix v3 API framework. | [optional] [default to '3.1.0']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
