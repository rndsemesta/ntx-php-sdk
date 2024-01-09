# # BgpConfigStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**asn** | **int** | ASN used in BGP. | [optional]
**password** | **string** | Password for authentication. Note that the clear-text password value specfied in the input spec is never revealed in the status. Use this field only as means to verify if the password is currently set or not. | [optional]
**distribute_connected** | **bool** | Boolean flag to indicate users choice on whether connected routes must be redistributed over eBGP. (Applicable to VLAN backed gateways only) | [optional]
**peer_ip** | **string** | IP address of the peer. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
