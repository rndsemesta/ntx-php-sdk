# # SupportCaseResources

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contact_details** | [**\OpenAPI\Client\Model\ContactInformation**](ContactInformation.md) |  |
**ncc_checks_pc** | [**\OpenAPI\Client\Model\NccChecksSupportCaseUpload**](NccChecksSupportCaseUpload.md) |  | [optional]
**log_collector_pc** | [**\OpenAPI\Client\Model\LogCollectorSupportCaseUpload**](LogCollectorSupportCaseUpload.md) |  | [optional]
**nos_version** | **string** | Nos version of the block for which support case is opened. | [optional]
**priority** | **string** | Priority of the support case being created Example P4-Low, P3-Normal, P2-Critical, P1-Emergency. | [optional]
**case_type** | **string** | Type of the support case being opened. | [optional]
**hypervisor_version** | **string** | Hypervisor version for which support case is opened. | [optional]
**serial_number** | **string** | Serial Number of the block for which help is needed. | [optional]
**additional_notification_list** | [**\OpenAPI\Client\Model\ContactInformation[]**](ContactInformation.md) | List of email addresses of the extra recipients who need to be notified for case management. | [optional]
**log_collector** | [**\OpenAPI\Client\Model\LogCollectorSupportCaseUpload**](LogCollectorSupportCaseUpload.md) |  | [optional]
**cluster_reference** | [**\OpenAPI\Client\Model\ClusterReference**](ClusterReference.md) |  | [optional]
**ncc_checks** | [**\OpenAPI\Client\Model\NccChecksSupportCaseUpload**](NccChecksSupportCaseUpload.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
