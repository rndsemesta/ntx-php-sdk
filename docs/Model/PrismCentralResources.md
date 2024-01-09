# # PrismCentralResources

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**should_auto_register** | **bool** | Indicates if the new prism central should be automatically register to the cluster. | [optional] [default to false]
**initial_password** | **string** | Initial boot up password for new created Prism Central. | [optional]
**cmsp_config** | [**\OpenAPI\Client\Model\CmspConfig**](CmspConfig.md) |  | [optional]
**pc_vm_list** | [**\OpenAPI\Client\Model\PcVm[]**](PcVm.md) |  |
**version** | **string** | The desired version of Prism Central. |
**virtual_ip** | **string** | The desired virtual IP address of Prism Central cluster. | [optional]
**cluster_uuid** | **string** | The Cluster UUID for the Prism Central Deployment. | [optional]
**type** | **string** | The type of the Prism Central cluster. | [optional] [default to 'PC']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
