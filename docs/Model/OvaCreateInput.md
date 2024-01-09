# # OvaCreateInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**url** | **string** | URL that can be used to download OVA. | [optional]
**checksum** | [**\OpenAPI\Client\Model\Checksum**](Checksum.md) |  | [optional]
**name** | **string** | Name of the OVA. |
**upload_cluster_ref_list** | [**\OpenAPI\Client\Model\ClusterReference[]**](ClusterReference.md) | List of clusters where OVA is requested to be placed at time of creation. Multiple clusters are supported only when OVA is uploaded using url. | [optional]
**upload_length** | **int** | Length of the OVA file to be uploaded in bytes. It is mandatory to provide file size if local file upload is used. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
