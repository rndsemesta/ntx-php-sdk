# # Deployment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**install_lb_route** | **bool** | Boolean flag indicating user opt-in for installing Xi LB route in on-prem PC and PE CVMs provided on-prem PC, PE and VPN VM are in the same subnet | [optional]
**vcenter_deployment_details** | [**\OpenAPI\Client\Model\VcenterDeploymentDetails**](VcenterDeploymentDetails.md) |  | [optional]
**ip_prefix_length** | **int** | IP prefix length of the subnet that the gateway VM is on. | [optional]
**static_ip** | **string** | Static IP address of the VPN gateway VM. | [optional]
**default_gateway_ip** | **string** | Default gateway IP address. | [optional]
**image_source_url** | **string** | The software image to install on the gateway appliance. If set, \&quot;installed_software_version\&quot; must be omitted. | [optional]
**pe_cluster_reference** | [**\OpenAPI\Client\Model\ClusterReference**](ClusterReference.md) |  | [optional]
**subnet_reference** | [**\OpenAPI\Client\Model\SubnetReference**](SubnetReference.md) |  | [optional]
**installed_software_version** | **string** | The software version to install on the gateway appliance. If set, \&quot;image_source_url\&quot; must be omitted. | [optional]
**vlan_id** | **int** | The on-prem VLAN to deploy the VPN gateway on. This is not needed if the subnet_reference is provided. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
