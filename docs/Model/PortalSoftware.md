# # PortalSoftware

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**release_note_url** | **string** | URL to point to the support portal release note of this software. Currently only set and used for NOS releases | [optional]
**upgrade_notification** | [**\OpenAPI\Client\Model\UpgradeNotification**](UpgradeNotification.md) |  | [optional]
**release_date** | **\DateTime** | Release date of this software in RFC3339 format. | [optional]
**md5sum** | **string** | MD5 checksum of the software file | [optional]
**compatible_version_list** | **string[]** | List of software versions that this version can be upgraded from | [optional]
**version** | **string** | Software version string | [optional]
**compatible_pe_version_list** | **string[]** | List of Prism Element compatible versions | [optional]
**software_type** | **string** | Software type | [optional]
**size_bytes** | **int** | Total size of the software file in bytes | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
