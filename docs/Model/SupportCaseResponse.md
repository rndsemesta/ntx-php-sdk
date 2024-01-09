# # SupportCaseResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Status of the case. | [optional]
**log_collector** | [**\OpenAPI\Client\Model\LogCollectorSupportCaseUpload**](LogCollectorSupportCaseUpload.md) |  | [optional]
**contact_details** | [**\OpenAPI\Client\Model\ContactInformation**](ContactInformation.md) |  | [optional]
**ncc_checks_pc** | [**\OpenAPI\Client\Model\NccChecksSupportCaseUpload**](NccChecksSupportCaseUpload.md) |  | [optional]
**creator_name** | **string** | Name of the person who created the case. | [optional]
**case_number** | **string** | Support Case Number. This is the pretty version of case as visible to the user. Example \&quot;00151752\&quot; | [optional]
**nos_version** | **string** | Nos version of the block for which support case is opened. | [optional]
**creation_date** | **\DateTime** | Date on which the case was created. | [optional]
**priority** | **string** | Priority of the support case being created Example P4-Low, P3-Normal, P2-Critical, P1-Emergency. | [optional]
**hypervisor_version** | **string** | Hypervisor version for which support case is opened. | [optional]
**case_type** | **string** | Type of the support case being opened. | [optional]
**case_id** | **string** | Support Case Id. This is the id to be used to query support details. Example \&quot;500W0000003w3FEIAY\&quot; | [optional]
**custom_key_values** | **array<string,string>** | Generic key value pair used for custom attributes. | [optional]
**owner** | **string** | Owner of the case. | [optional]
**serial_number** | **string** | Serial Number of the block for which help is needed. | [optional]
**additional_notification_list** | [**\OpenAPI\Client\Model\ContactInformation[]**](ContactInformation.md) | List of email addresses of the extra recipients who need to be notified for case management. | [optional]
**log_collector_pc** | [**\OpenAPI\Client\Model\LogCollectorSupportCaseUpload**](LogCollectorSupportCaseUpload.md) |  | [optional]
**cluster_reference** | [**\OpenAPI\Client\Model\ClusterReference**](ClusterReference.md) |  | [optional]
**ncc_checks** | [**\OpenAPI\Client\Model\NccChecksSupportCaseUpload**](NccChecksSupportCaseUpload.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
