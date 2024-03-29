<?php
/**
 * ClusterConfig
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Nutanix Intentful API
 *
 * Move programming from the user to the machine.
 *
 * The version of the OpenAPI document: 3.1.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ClusterConfig Class Doc Comment
 *
 * @category Class
 * @description Cluster Configuration.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ClusterConfig implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'cluster_config';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'gpu_driver_version' => 'string',
        'client_auth' => '\OpenAPI\Client\Model\ClientAuth',
        'authorized_public_key_list' => '\OpenAPI\Client\Model\PublicKey[]',
        'software_map' => 'array<string,\OpenAPI\Client\Model\ClusterSoftware>',
        'encryption_status' => 'string',
        'ssl_key' => '\OpenAPI\Client\Model\SslKey',
        'service_list' => 'string[]',
        'supported_information_verbosity' => 'string',
        'certification_signing_info' => '\OpenAPI\Client\Model\CertificationSigningInfo',
        'redundancy_factor' => 'int',
        'external_configurations' => '\OpenAPI\Client\Model\ExternalConfigurations',
        'operation_mode' => 'string',
        'ca_certificate_list' => '\OpenAPI\Client\Model\CaCert[]',
        'domain_awareness_level' => 'string',
        'enabled_feature_list' => 'string[]',
        'is_available' => 'bool',
        'build' => '\OpenAPI\Client\Model\BuildInfo',
        'timezone' => 'string',
        'enable_efficient_metric_sync' => 'bool',
        'cluster_arch' => 'string',
        'management_server_list' => '\OpenAPI\Client\Model\ClusterManagementServer[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'gpu_driver_version' => null,
        'client_auth' => null,
        'authorized_public_key_list' => null,
        'software_map' => null,
        'encryption_status' => null,
        'ssl_key' => null,
        'service_list' => null,
        'supported_information_verbosity' => null,
        'certification_signing_info' => null,
        'redundancy_factor' => 'int32',
        'external_configurations' => null,
        'operation_mode' => null,
        'ca_certificate_list' => null,
        'domain_awareness_level' => null,
        'enabled_feature_list' => null,
        'is_available' => null,
        'build' => null,
        'timezone' => null,
        'enable_efficient_metric_sync' => null,
        'cluster_arch' => null,
        'management_server_list' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'gpu_driver_version' => false,
        'client_auth' => false,
        'authorized_public_key_list' => false,
        'software_map' => false,
        'encryption_status' => false,
        'ssl_key' => false,
        'service_list' => false,
        'supported_information_verbosity' => false,
        'certification_signing_info' => false,
        'redundancy_factor' => false,
        'external_configurations' => false,
        'operation_mode' => false,
        'ca_certificate_list' => false,
        'domain_awareness_level' => false,
        'enabled_feature_list' => false,
        'is_available' => false,
        'build' => false,
        'timezone' => false,
        'enable_efficient_metric_sync' => false,
        'cluster_arch' => false,
        'management_server_list' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'gpu_driver_version' => 'gpu_driver_version',
        'client_auth' => 'client_auth',
        'authorized_public_key_list' => 'authorized_public_key_list',
        'software_map' => 'software_map',
        'encryption_status' => 'encryption_status',
        'ssl_key' => 'ssl_key',
        'service_list' => 'service_list',
        'supported_information_verbosity' => 'supported_information_verbosity',
        'certification_signing_info' => 'certification_signing_info',
        'redundancy_factor' => 'redundancy_factor',
        'external_configurations' => 'external_configurations',
        'operation_mode' => 'operation_mode',
        'ca_certificate_list' => 'ca_certificate_list',
        'domain_awareness_level' => 'domain_awareness_level',
        'enabled_feature_list' => 'enabled_feature_list',
        'is_available' => 'is_available',
        'build' => 'build',
        'timezone' => 'timezone',
        'enable_efficient_metric_sync' => 'enable_efficient_metric_sync',
        'cluster_arch' => 'cluster_arch',
        'management_server_list' => 'management_server_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'gpu_driver_version' => 'setGpuDriverVersion',
        'client_auth' => 'setClientAuth',
        'authorized_public_key_list' => 'setAuthorizedPublicKeyList',
        'software_map' => 'setSoftwareMap',
        'encryption_status' => 'setEncryptionStatus',
        'ssl_key' => 'setSslKey',
        'service_list' => 'setServiceList',
        'supported_information_verbosity' => 'setSupportedInformationVerbosity',
        'certification_signing_info' => 'setCertificationSigningInfo',
        'redundancy_factor' => 'setRedundancyFactor',
        'external_configurations' => 'setExternalConfigurations',
        'operation_mode' => 'setOperationMode',
        'ca_certificate_list' => 'setCaCertificateList',
        'domain_awareness_level' => 'setDomainAwarenessLevel',
        'enabled_feature_list' => 'setEnabledFeatureList',
        'is_available' => 'setIsAvailable',
        'build' => 'setBuild',
        'timezone' => 'setTimezone',
        'enable_efficient_metric_sync' => 'setEnableEfficientMetricSync',
        'cluster_arch' => 'setClusterArch',
        'management_server_list' => 'setManagementServerList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'gpu_driver_version' => 'getGpuDriverVersion',
        'client_auth' => 'getClientAuth',
        'authorized_public_key_list' => 'getAuthorizedPublicKeyList',
        'software_map' => 'getSoftwareMap',
        'encryption_status' => 'getEncryptionStatus',
        'ssl_key' => 'getSslKey',
        'service_list' => 'getServiceList',
        'supported_information_verbosity' => 'getSupportedInformationVerbosity',
        'certification_signing_info' => 'getCertificationSigningInfo',
        'redundancy_factor' => 'getRedundancyFactor',
        'external_configurations' => 'getExternalConfigurations',
        'operation_mode' => 'getOperationMode',
        'ca_certificate_list' => 'getCaCertificateList',
        'domain_awareness_level' => 'getDomainAwarenessLevel',
        'enabled_feature_list' => 'getEnabledFeatureList',
        'is_available' => 'getIsAvailable',
        'build' => 'getBuild',
        'timezone' => 'getTimezone',
        'enable_efficient_metric_sync' => 'getEnableEfficientMetricSync',
        'cluster_arch' => 'getClusterArch',
        'management_server_list' => 'getManagementServerList'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('gpu_driver_version', $data ?? [], null);
        $this->setIfExists('client_auth', $data ?? [], null);
        $this->setIfExists('authorized_public_key_list', $data ?? [], null);
        $this->setIfExists('software_map', $data ?? [], null);
        $this->setIfExists('encryption_status', $data ?? [], 'NOT_SUPPORTED');
        $this->setIfExists('ssl_key', $data ?? [], null);
        $this->setIfExists('service_list', $data ?? [], null);
        $this->setIfExists('supported_information_verbosity', $data ?? [], 'BASIC_PLUS_CORE_DUMP');
        $this->setIfExists('certification_signing_info', $data ?? [], null);
        $this->setIfExists('redundancy_factor', $data ?? [], null);
        $this->setIfExists('external_configurations', $data ?? [], null);
        $this->setIfExists('operation_mode', $data ?? [], null);
        $this->setIfExists('ca_certificate_list', $data ?? [], null);
        $this->setIfExists('domain_awareness_level', $data ?? [], 'NODE');
        $this->setIfExists('enabled_feature_list', $data ?? [], null);
        $this->setIfExists('is_available', $data ?? [], null);
        $this->setIfExists('build', $data ?? [], null);
        $this->setIfExists('timezone', $data ?? [], null);
        $this->setIfExists('enable_efficient_metric_sync', $data ?? [], null);
        $this->setIfExists('cluster_arch', $data ?? [], null);
        $this->setIfExists('management_server_list', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets gpu_driver_version
     *
     * @return string|null
     */
    public function getGpuDriverVersion()
    {
        return $this->container['gpu_driver_version'];
    }

    /**
     * Sets gpu_driver_version
     *
     * @param string|null $gpu_driver_version GPU driver version.
     *
     * @return self
     */
    public function setGpuDriverVersion($gpu_driver_version)
    {
        if (is_null($gpu_driver_version)) {
            throw new \InvalidArgumentException('non-nullable gpu_driver_version cannot be null');
        }
        $this->container['gpu_driver_version'] = $gpu_driver_version;

        return $this;
    }

    /**
     * Gets client_auth
     *
     * @return \OpenAPI\Client\Model\ClientAuth|null
     */
    public function getClientAuth()
    {
        return $this->container['client_auth'];
    }

    /**
     * Sets client_auth
     *
     * @param \OpenAPI\Client\Model\ClientAuth|null $client_auth client_auth
     *
     * @return self
     */
    public function setClientAuth($client_auth)
    {
        if (is_null($client_auth)) {
            throw new \InvalidArgumentException('non-nullable client_auth cannot be null');
        }
        $this->container['client_auth'] = $client_auth;

        return $this;
    }

    /**
     * Gets authorized_public_key_list
     *
     * @return \OpenAPI\Client\Model\PublicKey[]|null
     */
    public function getAuthorizedPublicKeyList()
    {
        return $this->container['authorized_public_key_list'];
    }

    /**
     * Sets authorized_public_key_list
     *
     * @param \OpenAPI\Client\Model\PublicKey[]|null $authorized_public_key_list List of valid ssh keys for the cluster.
     *
     * @return self
     */
    public function setAuthorizedPublicKeyList($authorized_public_key_list)
    {
        if (is_null($authorized_public_key_list)) {
            throw new \InvalidArgumentException('non-nullable authorized_public_key_list cannot be null');
        }
        $this->container['authorized_public_key_list'] = $authorized_public_key_list;

        return $this;
    }

    /**
     * Gets software_map
     *
     * @return array<string,\OpenAPI\Client\Model\ClusterSoftware>|null
     */
    public function getSoftwareMap()
    {
        return $this->container['software_map'];
    }

    /**
     * Sets software_map
     *
     * @param array<string,\OpenAPI\Client\Model\ClusterSoftware>|null $software_map Map of software on the cluster with software type as the key.
     *
     * @return self
     */
    public function setSoftwareMap($software_map)
    {
        if (is_null($software_map)) {
            throw new \InvalidArgumentException('non-nullable software_map cannot be null');
        }
        $this->container['software_map'] = $software_map;

        return $this;
    }

    /**
     * Gets encryption_status
     *
     * @return string|null
     */
    public function getEncryptionStatus()
    {
        return $this->container['encryption_status'];
    }

    /**
     * Sets encryption_status
     *
     * @param string|null $encryption_status Cluster encryption status.
     *
     * @return self
     */
    public function setEncryptionStatus($encryption_status)
    {
        if (is_null($encryption_status)) {
            throw new \InvalidArgumentException('non-nullable encryption_status cannot be null');
        }
        $this->container['encryption_status'] = $encryption_status;

        return $this;
    }

    /**
     * Gets ssl_key
     *
     * @return \OpenAPI\Client\Model\SslKey|null
     */
    public function getSslKey()
    {
        return $this->container['ssl_key'];
    }

    /**
     * Sets ssl_key
     *
     * @param \OpenAPI\Client\Model\SslKey|null $ssl_key ssl_key
     *
     * @return self
     */
    public function setSslKey($ssl_key)
    {
        if (is_null($ssl_key)) {
            throw new \InvalidArgumentException('non-nullable ssl_key cannot be null');
        }
        $this->container['ssl_key'] = $ssl_key;

        return $this;
    }

    /**
     * Gets service_list
     *
     * @return string[]|null
     */
    public function getServiceList()
    {
        return $this->container['service_list'];
    }

    /**
     * Sets service_list
     *
     * @param string[]|null $service_list Array of enabled cluster services. For example, a cluster can function as both AOS and cloud data gateway. - 'AOS': Regular Prism Element - 'PRISM_CENTRAL': Prism Central - 'CLOUD_DATA_GATEWAY': Cloud backup and DR gateway - 'AFS': Cluster for file server - 'WITNESS' : Witness cluster - 'XI_PORTAL': Xi cluster - 'ONE_NODE_CLUSTER': Single node backup cluster - 'TWO_NODE_CLUSTER': Two node cluster
     *
     * @return self
     */
    public function setServiceList($service_list)
    {
        if (is_null($service_list)) {
            throw new \InvalidArgumentException('non-nullable service_list cannot be null');
        }
        $this->container['service_list'] = $service_list;

        return $this;
    }

    /**
     * Gets supported_information_verbosity
     *
     * @return string|null
     */
    public function getSupportedInformationVerbosity()
    {
        return $this->container['supported_information_verbosity'];
    }

    /**
     * Sets supported_information_verbosity
     *
     * @param string|null $supported_information_verbosity Verbosity level settings for populating support information. - 'Nothing': Send nothing - 'Basic': Send basic information - skip core dump and hypervisor            stats information - 'BasicPlusCoreDump': Send basic and core dump information - 'All': Send all information
     *
     * @return self
     */
    public function setSupportedInformationVerbosity($supported_information_verbosity)
    {
        if (is_null($supported_information_verbosity)) {
            throw new \InvalidArgumentException('non-nullable supported_information_verbosity cannot be null');
        }
        $this->container['supported_information_verbosity'] = $supported_information_verbosity;

        return $this;
    }

    /**
     * Gets certification_signing_info
     *
     * @return \OpenAPI\Client\Model\CertificationSigningInfo|null
     */
    public function getCertificationSigningInfo()
    {
        return $this->container['certification_signing_info'];
    }

    /**
     * Sets certification_signing_info
     *
     * @param \OpenAPI\Client\Model\CertificationSigningInfo|null $certification_signing_info certification_signing_info
     *
     * @return self
     */
    public function setCertificationSigningInfo($certification_signing_info)
    {
        if (is_null($certification_signing_info)) {
            throw new \InvalidArgumentException('non-nullable certification_signing_info cannot be null');
        }
        $this->container['certification_signing_info'] = $certification_signing_info;

        return $this;
    }

    /**
     * Gets redundancy_factor
     *
     * @return int|null
     */
    public function getRedundancyFactor()
    {
        return $this->container['redundancy_factor'];
    }

    /**
     * Sets redundancy_factor
     *
     * @param int|null $redundancy_factor Cluster supported redundancy factor.
     *
     * @return self
     */
    public function setRedundancyFactor($redundancy_factor)
    {
        if (is_null($redundancy_factor)) {
            throw new \InvalidArgumentException('non-nullable redundancy_factor cannot be null');
        }
        $this->container['redundancy_factor'] = $redundancy_factor;

        return $this;
    }

    /**
     * Gets external_configurations
     *
     * @return \OpenAPI\Client\Model\ExternalConfigurations|null
     */
    public function getExternalConfigurations()
    {
        return $this->container['external_configurations'];
    }

    /**
     * Sets external_configurations
     *
     * @param \OpenAPI\Client\Model\ExternalConfigurations|null $external_configurations external_configurations
     *
     * @return self
     */
    public function setExternalConfigurations($external_configurations)
    {
        if (is_null($external_configurations)) {
            throw new \InvalidArgumentException('non-nullable external_configurations cannot be null');
        }
        $this->container['external_configurations'] = $external_configurations;

        return $this;
    }

    /**
     * Gets operation_mode
     *
     * @return string|null
     */
    public function getOperationMode()
    {
        return $this->container['operation_mode'];
    }

    /**
     * Sets operation_mode
     *
     * @param string|null $operation_mode Cluster operation mode. - 'NORMAL': Cluster is operating normally. - 'READ_ONLY': Cluster is operating in read only mode. - 'STAND_ALONE': Only one node is operational in the cluster. This is                  valid only for single node or two node clusters. - 'SWITCH_TO_TWO_NODE': Cluster is moving from single node to two node                         cluster. - 'OVERRIDE': Valid only for single node cluster. If the user wants to               run vms on a single node cluster in read only mode, he               can set the cluster peration mode to override. Writes               will be allowed in override mode.
     *
     * @return self
     */
    public function setOperationMode($operation_mode)
    {
        if (is_null($operation_mode)) {
            throw new \InvalidArgumentException('non-nullable operation_mode cannot be null');
        }
        $this->container['operation_mode'] = $operation_mode;

        return $this;
    }

    /**
     * Gets ca_certificate_list
     *
     * @return \OpenAPI\Client\Model\CaCert[]|null
     */
    public function getCaCertificateList()
    {
        return $this->container['ca_certificate_list'];
    }

    /**
     * Sets ca_certificate_list
     *
     * @param \OpenAPI\Client\Model\CaCert[]|null $ca_certificate_list List of cluster trusted CA certificates.
     *
     * @return self
     */
    public function setCaCertificateList($ca_certificate_list)
    {
        if (is_null($ca_certificate_list)) {
            throw new \InvalidArgumentException('non-nullable ca_certificate_list cannot be null');
        }
        $this->container['ca_certificate_list'] = $ca_certificate_list;

        return $this;
    }

    /**
     * Gets domain_awareness_level
     *
     * @return string|null
     */
    public function getDomainAwarenessLevel()
    {
        return $this->container['domain_awareness_level'];
    }

    /**
     * Sets domain_awareness_level
     *
     * @param string|null $domain_awareness_level Domain awareness supported on cluster.
     *
     * @return self
     */
    public function setDomainAwarenessLevel($domain_awareness_level)
    {
        if (is_null($domain_awareness_level)) {
            throw new \InvalidArgumentException('non-nullable domain_awareness_level cannot be null');
        }
        $this->container['domain_awareness_level'] = $domain_awareness_level;

        return $this;
    }

    /**
     * Gets enabled_feature_list
     *
     * @return string[]|null
     */
    public function getEnabledFeatureList()
    {
        return $this->container['enabled_feature_list'];
    }

    /**
     * Sets enabled_feature_list
     *
     * @param string[]|null $enabled_feature_list Array of enabled features.
     *
     * @return self
     */
    public function setEnabledFeatureList($enabled_feature_list)
    {
        if (is_null($enabled_feature_list)) {
            throw new \InvalidArgumentException('non-nullable enabled_feature_list cannot be null');
        }
        $this->container['enabled_feature_list'] = $enabled_feature_list;

        return $this;
    }

    /**
     * Gets is_available
     *
     * @return bool|null
     */
    public function getIsAvailable()
    {
        return $this->container['is_available'];
    }

    /**
     * Sets is_available
     *
     * @param bool|null $is_available Indicates if cluster is available to contact.
     *
     * @return self
     */
    public function setIsAvailable($is_available)
    {
        if (is_null($is_available)) {
            throw new \InvalidArgumentException('non-nullable is_available cannot be null');
        }
        $this->container['is_available'] = $is_available;

        return $this;
    }

    /**
     * Gets build
     *
     * @return \OpenAPI\Client\Model\BuildInfo|null
     */
    public function getBuild()
    {
        return $this->container['build'];
    }

    /**
     * Sets build
     *
     * @param \OpenAPI\Client\Model\BuildInfo|null $build build
     *
     * @return self
     */
    public function setBuild($build)
    {
        if (is_null($build)) {
            throw new \InvalidArgumentException('non-nullable build cannot be null');
        }
        $this->container['build'] = $build;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return string|null
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string|null $timezone Zone name used in value of TZ environment variable.
     *
     * @return self
     */
    public function setTimezone($timezone)
    {
        if (is_null($timezone)) {
            throw new \InvalidArgumentException('non-nullable timezone cannot be null');
        }
        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets enable_efficient_metric_sync
     *
     * @return bool|null
     */
    public function getEnableEfficientMetricSync()
    {
        return $this->container['enable_efficient_metric_sync'];
    }

    /**
     * Sets enable_efficient_metric_sync
     *
     * @param bool|null $enable_efficient_metric_sync Indicates if downsampling of metrics syncing between PE and PC is enabled or not.
     *
     * @return self
     */
    public function setEnableEfficientMetricSync($enable_efficient_metric_sync)
    {
        if (is_null($enable_efficient_metric_sync)) {
            throw new \InvalidArgumentException('non-nullable enable_efficient_metric_sync cannot be null');
        }
        $this->container['enable_efficient_metric_sync'] = $enable_efficient_metric_sync;

        return $this;
    }

    /**
     * Gets cluster_arch
     *
     * @return string|null
     */
    public function getClusterArch()
    {
        return $this->container['cluster_arch'];
    }

    /**
     * Sets cluster_arch
     *
     * @param string|null $cluster_arch Cluster architecture.
     *
     * @return self
     */
    public function setClusterArch($cluster_arch)
    {
        if (is_null($cluster_arch)) {
            throw new \InvalidArgumentException('non-nullable cluster_arch cannot be null');
        }
        $this->container['cluster_arch'] = $cluster_arch;

        return $this;
    }

    /**
     * Gets management_server_list
     *
     * @return \OpenAPI\Client\Model\ClusterManagementServer[]|null
     */
    public function getManagementServerList()
    {
        return $this->container['management_server_list'];
    }

    /**
     * Sets management_server_list
     *
     * @param \OpenAPI\Client\Model\ClusterManagementServer[]|null $management_server_list List of cluster management servers.
     *
     * @return self
     */
    public function setManagementServerList($management_server_list)
    {
        if (is_null($management_server_list)) {
            throw new \InvalidArgumentException('non-nullable management_server_list cannot be null');
        }
        $this->container['management_server_list'] = $management_server_list;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


