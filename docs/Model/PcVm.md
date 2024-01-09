# # PcVm

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**vm_name** | **string** | VM name. |
**data_disk_size_bytes** | **int** | Data disk size in bytes. |
**dns_server_ip_list** | **string[]** | List of DNS IP addresses. | [optional]
**nic_list** | [**\OpenAPI\Client\Model\PcVmNicConfiguration[]**](PcVmNicConfiguration.md) |  |
**container_uuid** | **string** | Container uuid. | [optional]
**num_sockets** | **int** | Number of sockets allocated per VM. |
**memory_size_bytes** | **int** | Memory in bytes. |
**status** | **string** | Prism central VM status | [optional] [readonly]
**power_state** | **string** | The current power state of the VM. | [optional] [readonly]
**vm_uuid** | **string** | VM uuid. | [optional]
**ntp_server_list** | **string[]** | List of NTP servers. | [optional]
**cluster_reference** | [**\OpenAPI\Client\Model\ClusterReference**](ClusterReference.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
