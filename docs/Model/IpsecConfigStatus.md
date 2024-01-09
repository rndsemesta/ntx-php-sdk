# # IpsecConfigStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**remote_vti_ip** | **string** | Virtual tunnel interface IP of the remote VPN gateway. | [optional]
**negotiated_proposal** | [**\OpenAPI\Client\Model\IpsecConfigStatusNegotiatedProposal**](IpsecConfigStatusNegotiatedProposal.md) |  | [optional]
**remote_authentication_id** | **string** | IKE Authentication ID of the remote peer. | [optional]
**local_vti_ip** | **string** | Virtual tunnel interface IP of the local VPN gateway. | [optional]
**ike_lifetime_secs** | **int** | IKE lifetime (in seconds) | [optional]
**esp_pfs_dh_group_number** | **int** | Diffie-Hellman group configured for Perfect Forward Secrecy (PFS). Supported DH groups are 14, 19 and 20. | [optional]
**local_authentication_id** | **string** | Local IKE authentication ID used for this connection. | [optional]
**ipsec_lifetime_secs** | **int** | IPSec lifetime (in seconds) | [optional]
**vti_ip_prefix_length** | **int** | IP prefix length of the virtual tunnel interface. | [optional]
**pre_shared_key** | **string** | Shared secret for authentication between gateway peers. Note that the clear-text secret value specfied in the input spec is never revealed in the status. Use this field only as means to verify if the secret is currently set or not. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
