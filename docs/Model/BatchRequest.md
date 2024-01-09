# # BatchRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**execution_order** | **string** | The order of execution of the APIs in the batch. Can be either Sequential (default value) or Parallel. | [optional] [default to 'SEQUENTIAL']
**action_on_failure** | **string** | If the specified parameter is CONTINUE, the remaining APIs in the batch continue to be executed. | [optional] [default to 'CONTINUE']
**api_request_list** | [**\OpenAPI\Client\Model\ApiRequest[]**](ApiRequest.md) | A list of API requests in the batch. |
**api_version** | **string** | API Version of the Nutanix v3 API framework. | [optional] [default to '3.1.0']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
