# # RootCertificate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**certificate_chain** | [**\OpenAPI\Client\Model\Certificate[]**](Certificate.md) | A certificate chain for validating JWT. At the beginning of this chain is an end-entity certificate whose private key is used to sign the JWT. The end of the chain is the root certificate. If this is passed from one PC to another PC, the root certificate in this chain should be the same as the root certificate to be configured. The chain guarantee the sender owns the end-entity certificate signed by the root certificate to be configured. If this is passed from one PC to PE, the root certificate in the chain on PC should be trusted by PE. This is to verify that the PC sending the root certificate to be configured is trusted by the PE. | [optional]
**local_gateway_role** | **string** | Local gateway role in handling root certificate configurations. |
**jwt** | **string** | JWT for validating the attached root certificate. | [optional]
**certificate** | [**\OpenAPI\Client\Model\Certificate**](Certificate.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
