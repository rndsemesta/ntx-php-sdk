# # PhysicalAvailabilityZoneResources

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cell_fqdn_list** | **string[]** | List of cell FQDN mapped to the cluster. | [optional]
**olb_virtual_address** | [**\OpenAPI\Client\Model\Address**](Address.md) |  | [optional]
**xlb_virtual_address** | [**\OpenAPI\Client\Model\Address**](Address.md) |  | [optional]
**billing_domain** | **string** | Billing Domain Address. | [optional]
**is_multi_tenant** | **bool** | Flag indicates if the Prism Central can be shared by multiple tenants. Default is False, this must be set to True for XI multitenant PC. | [optional] [default to false]
**idp_service_provider_name** | **string** | IDP Service Provider name. | [optional]
**pulse_configuration** | [**\OpenAPI\Client\Model\PulseConfiguration**](PulseConfiguration.md) |  | [optional]
**ntp_server_list** | **string[]** | List of NTP Server addresses. | [optional]
**cloud_uuid** | **string** | Reference to the Infra Cloud this physical AZ belongs. | [optional]
**my_nutanix_domain** | **string** | My Nutanix Domain Address used for IDP Registration. | [optional]
**external_url** | **string** | External URL for the Physical Availability Zone, required when is_mutlti_tenant set to False. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
