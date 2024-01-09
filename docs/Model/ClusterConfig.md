# # ClusterConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**gpu_driver_version** | **string** | GPU driver version. | [optional]
**client_auth** | [**\OpenAPI\Client\Model\ClientAuth**](ClientAuth.md) |  | [optional]
**authorized_public_key_list** | [**\OpenAPI\Client\Model\PublicKey[]**](PublicKey.md) | List of valid ssh keys for the cluster. | [optional]
**software_map** | [**array<string,\OpenAPI\Client\Model\ClusterSoftware>**](ClusterSoftware.md) | Map of software on the cluster with software type as the key. | [optional]
**encryption_status** | **string** | Cluster encryption status. | [optional] [default to 'NOT_SUPPORTED']
**ssl_key** | [**\OpenAPI\Client\Model\SslKey**](SslKey.md) |  | [optional]
**service_list** | **string[]** | Array of enabled cluster services. For example, a cluster can function as both AOS and cloud data gateway. - &#39;AOS&#39;: Regular Prism Element - &#39;PRISM_CENTRAL&#39;: Prism Central - &#39;CLOUD_DATA_GATEWAY&#39;: Cloud backup and DR gateway - &#39;AFS&#39;: Cluster for file server - &#39;WITNESS&#39; : Witness cluster - &#39;XI_PORTAL&#39;: Xi cluster - &#39;ONE_NODE_CLUSTER&#39;: Single node backup cluster - &#39;TWO_NODE_CLUSTER&#39;: Two node cluster | [optional]
**supported_information_verbosity** | **string** | Verbosity level settings for populating support information. - &#39;Nothing&#39;: Send nothing - &#39;Basic&#39;: Send basic information - skip core dump and hypervisor            stats information - &#39;BasicPlusCoreDump&#39;: Send basic and core dump information - &#39;All&#39;: Send all information | [optional] [default to 'BASIC_PLUS_CORE_DUMP']
**certification_signing_info** | [**\OpenAPI\Client\Model\CertificationSigningInfo**](CertificationSigningInfo.md) |  | [optional]
**redundancy_factor** | **int** | Cluster supported redundancy factor. | [optional]
**external_configurations** | [**\OpenAPI\Client\Model\ExternalConfigurations**](ExternalConfigurations.md) |  | [optional]
**operation_mode** | **string** | Cluster operation mode. - &#39;NORMAL&#39;: Cluster is operating normally. - &#39;READ_ONLY&#39;: Cluster is operating in read only mode. - &#39;STAND_ALONE&#39;: Only one node is operational in the cluster. This is                  valid only for single node or two node clusters. - &#39;SWITCH_TO_TWO_NODE&#39;: Cluster is moving from single node to two node                         cluster. - &#39;OVERRIDE&#39;: Valid only for single node cluster. If the user wants to               run vms on a single node cluster in read only mode, he               can set the cluster peration mode to override. Writes               will be allowed in override mode. | [optional]
**ca_certificate_list** | [**\OpenAPI\Client\Model\CaCert[]**](CaCert.md) | List of cluster trusted CA certificates. | [optional] [readonly]
**domain_awareness_level** | **string** | Domain awareness supported on cluster. | [optional] [default to 'NODE']
**enabled_feature_list** | **string[]** | Array of enabled features. | [optional]
**is_available** | **bool** | Indicates if cluster is available to contact. | [optional] [readonly]
**build** | [**\OpenAPI\Client\Model\BuildInfo**](BuildInfo.md) |  | [optional]
**timezone** | **string** | Zone name used in value of TZ environment variable. | [optional]
**enable_efficient_metric_sync** | **bool** | Indicates if downsampling of metrics syncing between PE and PC is enabled or not. | [optional]
**cluster_arch** | **string** | Cluster architecture. | [optional] [readonly]
**management_server_list** | [**\OpenAPI\Client\Model\ClusterManagementServer[]**](ClusterManagementServer.md) | List of cluster management servers. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
