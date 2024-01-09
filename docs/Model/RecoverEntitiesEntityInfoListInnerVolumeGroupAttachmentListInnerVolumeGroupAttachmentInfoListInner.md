# # RecoverEntitiesEntityInfoListInnerVolumeGroupAttachmentListInnerVolumeGroupAttachmentInfoListInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**authentication_type** | **string** | Type of authentication protocol to be used. | [optional]
**client_secret** | **string** | Client secret in case of CHAP authentication is required. | [optional]
**attachment_type** | **string** | Mechanism to be used for Volume Group attachment. The only allowed attachment type is IQN i.e \&quot;iSCSI Qualified Name\&quot; based attachments. In case of IQN based attachment, authentication_type, client_secret can be specified for client authentication. | [default to 'IQN']
**volume_group_reference** | [**\OpenAPI\Client\Model\VolumeGroupReference**](VolumeGroupReference.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
