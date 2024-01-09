# # AvailabilityZoneResources

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**management_url** | **string** | Identifier of the management plane. This could be the URL of the PC or the FQDN of Xi portal. | [optional]
**region** | **string** | Cloud region where the data will be replicated to. Based on the cloud provider type the available list of regions will differ. | [optional]
**management_plane_type** | **string** | This defines the type of management entity. Its value can be Xi, PC, or Local. Local AZs are auto-created and cannot be deleted. How to talk to management entity will be decided based on the type of management plane. |
**display_name** | **string** | Display name. It is mainly used by user interface to show the user-friendly name of the availability zone. If unset, default value will be used. | [optional]
**credentials** | [**\OpenAPI\Client\Model\AvailabilityZoneResourcesSpecCredentials**](AvailabilityZoneResourcesSpecCredentials.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
