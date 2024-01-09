# # ClusterNetwork

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**masquerading_ip** | **string** | The cluster NAT&#39;d or proxy IP which maps to the cluster local IP. | [optional]
**masquerading_port** | **int** | Port used together with masquerading_ip to connect to the cluster. | [optional]
**external_ip** | **string** | The local IP of cluster visible externally. | [optional]
**http_proxy_list** | [**\OpenAPI\Client\Model\ClusterNetworkEntity[]**](ClusterNetworkEntity.md) | List of proxies to connect to the service centers. | [optional]
**smtp_server** | [**\OpenAPI\Client\Model\SmtpServer**](SmtpServer.md) |  | [optional]
**ntp_server_ip_list** | **string[]** | The list of IP addresses or FQDNs of the NTP servers. | [optional]
**external_subnet** | **string** | External subnet for cross server communication. The format is IP/netmask. | [optional] [default to '172.16.0.0/255.240.0.0']
**nfs_subnet_whitelist** | **string[]** | Comma separated list of subnets (of the form &#39;a.b.c.d/l.m.n.o&#39;) that are allowed to send NFS requests to this container. If not specified, the global NFS whitelist will be looked up for access permission. The internal subnet is always automatically considered part of the whitelist, even if the field below does not explicitly specify it. Similarly, all the hypervisor IPs are considered part of the whitelist. Finally, to permit debugging, all of the SVMs local IPs are considered to be implicitly part of the whitelist. | [optional]
**external_data_services_ip** | **string** | The cluster IP address that provides external entities access to various cluster data services. | [optional]
**domain_server** | [**\OpenAPI\Client\Model\ClusterDomainServer**](ClusterDomainServer.md) |  | [optional]
**fully_qualified_domain_name** | **string** | fully qualified domain name of the cluster visible externally. | [optional]
**name_server_ip_list** | **string[]** | The list of IP addresses of the name servers. | [optional]
**http_proxy_whitelist** | [**\OpenAPI\Client\Model\HttpProxyWhitelist[]**](HttpProxyWhitelist.md) | HTTP proxy whitelist. | [optional]
**internal_subnet** | **string** | The internal subnet is local to every server - its not visible outside.iSCSI requests generated internally within the appliance (by user VMs or VMFS) are sent to the internal subnet. The format is IP/netmask. | [optional] [default to '192.168.5.0/255.255.255.0']
**default_vswitch_config** | [**\OpenAPI\Client\Model\VswitchConfig**](VswitchConfig.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
