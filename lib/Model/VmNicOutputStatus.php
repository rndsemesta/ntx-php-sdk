<?php
/**
 * VmNicOutputStatus
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
 * VmNicOutputStatus Class Doc Comment
 *
 * @category Class
 * @description Virtual Machine NIC Status.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class VmNicOutputStatus implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'vm_nic_output_status';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'dns_ip_addresses_list' => 'string[]',
        'nic_type' => 'string',
        'subnet_reference' => '\OpenAPI\Client\Model\SubnetReference',
        'uuid' => 'string',
        'ip_endpoint_list' => '\OpenAPI\Client\Model\IpAddress[]',
        'network_function_chain_reference' => '\OpenAPI\Client\Model\NetworkFunctionChainReference',
        'secondary_ip_address_list' => 'string[]',
        'floating_ip' => 'string',
        'mac_address' => 'string',
        'network_function_nic_type' => 'string',
        'vlan_mode' => 'string',
        'num_queues' => 'int',
        'default_gateway_address_list' => 'string[]',
        'dhcp_server_ip' => 'string',
        'model' => 'string',
        'is_connected' => 'bool',
        'trunked_vlan_list' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'dns_ip_addresses_list' => null,
        'nic_type' => null,
        'subnet_reference' => null,
        'uuid' => 'UUID',
        'ip_endpoint_list' => null,
        'network_function_chain_reference' => null,
        'secondary_ip_address_list' => null,
        'floating_ip' => null,
        'mac_address' => null,
        'network_function_nic_type' => null,
        'vlan_mode' => null,
        'num_queues' => null,
        'default_gateway_address_list' => null,
        'dhcp_server_ip' => null,
        'model' => null,
        'is_connected' => null,
        'trunked_vlan_list' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'dns_ip_addresses_list' => false,
        'nic_type' => false,
        'subnet_reference' => false,
        'uuid' => false,
        'ip_endpoint_list' => false,
        'network_function_chain_reference' => false,
        'secondary_ip_address_list' => false,
        'floating_ip' => false,
        'mac_address' => false,
        'network_function_nic_type' => false,
        'vlan_mode' => false,
        'num_queues' => false,
        'default_gateway_address_list' => false,
        'dhcp_server_ip' => false,
        'model' => false,
        'is_connected' => false,
        'trunked_vlan_list' => false
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
        'dns_ip_addresses_list' => 'dns_ip_addresses_list',
        'nic_type' => 'nic_type',
        'subnet_reference' => 'subnet_reference',
        'uuid' => 'uuid',
        'ip_endpoint_list' => 'ip_endpoint_list',
        'network_function_chain_reference' => 'network_function_chain_reference',
        'secondary_ip_address_list' => 'secondary_ip_address_list',
        'floating_ip' => 'floating_ip',
        'mac_address' => 'mac_address',
        'network_function_nic_type' => 'network_function_nic_type',
        'vlan_mode' => 'vlan_mode',
        'num_queues' => 'num_queues',
        'default_gateway_address_list' => 'default_gateway_address_list',
        'dhcp_server_ip' => 'dhcp_server_ip',
        'model' => 'model',
        'is_connected' => 'is_connected',
        'trunked_vlan_list' => 'trunked_vlan_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dns_ip_addresses_list' => 'setDnsIpAddressesList',
        'nic_type' => 'setNicType',
        'subnet_reference' => 'setSubnetReference',
        'uuid' => 'setUuid',
        'ip_endpoint_list' => 'setIpEndpointList',
        'network_function_chain_reference' => 'setNetworkFunctionChainReference',
        'secondary_ip_address_list' => 'setSecondaryIpAddressList',
        'floating_ip' => 'setFloatingIp',
        'mac_address' => 'setMacAddress',
        'network_function_nic_type' => 'setNetworkFunctionNicType',
        'vlan_mode' => 'setVlanMode',
        'num_queues' => 'setNumQueues',
        'default_gateway_address_list' => 'setDefaultGatewayAddressList',
        'dhcp_server_ip' => 'setDhcpServerIp',
        'model' => 'setModel',
        'is_connected' => 'setIsConnected',
        'trunked_vlan_list' => 'setTrunkedVlanList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dns_ip_addresses_list' => 'getDnsIpAddressesList',
        'nic_type' => 'getNicType',
        'subnet_reference' => 'getSubnetReference',
        'uuid' => 'getUuid',
        'ip_endpoint_list' => 'getIpEndpointList',
        'network_function_chain_reference' => 'getNetworkFunctionChainReference',
        'secondary_ip_address_list' => 'getSecondaryIpAddressList',
        'floating_ip' => 'getFloatingIp',
        'mac_address' => 'getMacAddress',
        'network_function_nic_type' => 'getNetworkFunctionNicType',
        'vlan_mode' => 'getVlanMode',
        'num_queues' => 'getNumQueues',
        'default_gateway_address_list' => 'getDefaultGatewayAddressList',
        'dhcp_server_ip' => 'getDhcpServerIp',
        'model' => 'getModel',
        'is_connected' => 'getIsConnected',
        'trunked_vlan_list' => 'getTrunkedVlanList'
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
        $this->setIfExists('dns_ip_addresses_list', $data ?? [], null);
        $this->setIfExists('nic_type', $data ?? [], null);
        $this->setIfExists('subnet_reference', $data ?? [], null);
        $this->setIfExists('uuid', $data ?? [], null);
        $this->setIfExists('ip_endpoint_list', $data ?? [], null);
        $this->setIfExists('network_function_chain_reference', $data ?? [], null);
        $this->setIfExists('secondary_ip_address_list', $data ?? [], null);
        $this->setIfExists('floating_ip', $data ?? [], null);
        $this->setIfExists('mac_address', $data ?? [], null);
        $this->setIfExists('network_function_nic_type', $data ?? [], null);
        $this->setIfExists('vlan_mode', $data ?? [], null);
        $this->setIfExists('num_queues', $data ?? [], null);
        $this->setIfExists('default_gateway_address_list', $data ?? [], null);
        $this->setIfExists('dhcp_server_ip', $data ?? [], null);
        $this->setIfExists('model', $data ?? [], null);
        $this->setIfExists('is_connected', $data ?? [], null);
        $this->setIfExists('trunked_vlan_list', $data ?? [], null);
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

        if (!is_null($this->container['uuid']) && !preg_match("/^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/", $this->container['uuid'])) {
            $invalidProperties[] = "invalid value for 'uuid', must be conform to the pattern /^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/.";
        }

        if (!is_null($this->container['floating_ip']) && !preg_match("/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/", $this->container['floating_ip'])) {
            $invalidProperties[] = "invalid value for 'floating_ip', must be conform to the pattern /^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/.";
        }

        if (!is_null($this->container['mac_address']) && !preg_match("/^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$/", $this->container['mac_address'])) {
            $invalidProperties[] = "invalid value for 'mac_address', must be conform to the pattern /^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$/.";
        }

        if (!is_null($this->container['dhcp_server_ip']) && !preg_match("/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/", $this->container['dhcp_server_ip'])) {
            $invalidProperties[] = "invalid value for 'dhcp_server_ip', must be conform to the pattern /^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/.";
        }

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
     * Gets dns_ip_addresses_list
     *
     * @return string[]|null
     */
    public function getDnsIpAddressesList()
    {
        return $this->container['dns_ip_addresses_list'];
    }

    /**
     * Sets dns_ip_addresses_list
     *
     * @param string[]|null $dns_ip_addresses_list List of DNS IP addresses.
     *
     * @return self
     */
    public function setDnsIpAddressesList($dns_ip_addresses_list)
    {
        if (is_null($dns_ip_addresses_list)) {
            throw new \InvalidArgumentException('non-nullable dns_ip_addresses_list cannot be null');
        }
        $this->container['dns_ip_addresses_list'] = $dns_ip_addresses_list;

        return $this;
    }

    /**
     * Gets nic_type
     *
     * @return string|null
     */
    public function getNicType()
    {
        return $this->container['nic_type'];
    }

    /**
     * Sets nic_type
     *
     * @param string|null $nic_type The type of this NIC. Defaults to NORMAL_NIC.
     *
     * @return self
     */
    public function setNicType($nic_type)
    {
        if (is_null($nic_type)) {
            throw new \InvalidArgumentException('non-nullable nic_type cannot be null');
        }
        $this->container['nic_type'] = $nic_type;

        return $this;
    }

    /**
     * Gets subnet_reference
     *
     * @return \OpenAPI\Client\Model\SubnetReference|null
     */
    public function getSubnetReference()
    {
        return $this->container['subnet_reference'];
    }

    /**
     * Sets subnet_reference
     *
     * @param \OpenAPI\Client\Model\SubnetReference|null $subnet_reference subnet_reference
     *
     * @return self
     */
    public function setSubnetReference($subnet_reference)
    {
        if (is_null($subnet_reference)) {
            throw new \InvalidArgumentException('non-nullable subnet_reference cannot be null');
        }
        $this->container['subnet_reference'] = $subnet_reference;

        return $this;
    }

    /**
     * Gets uuid
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string|null $uuid The NIC's UUID, which is used to uniquely identify this particular NIC. This UUID may be used to refer to the NIC outside the context of the particular VM it is attached to.
     *
     * @return self
     */
    public function setUuid($uuid)
    {
        if (is_null($uuid)) {
            throw new \InvalidArgumentException('non-nullable uuid cannot be null');
        }

        if ((!preg_match("/^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/", ObjectSerializer::toString($uuid)))) {
            throw new \InvalidArgumentException("invalid value for \$uuid when calling VmNicOutputStatus., must conform to the pattern /^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/.");
        }

        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets ip_endpoint_list
     *
     * @return \OpenAPI\Client\Model\IpAddress[]|null
     */
    public function getIpEndpointList()
    {
        return $this->container['ip_endpoint_list'];
    }

    /**
     * Sets ip_endpoint_list
     *
     * @param \OpenAPI\Client\Model\IpAddress[]|null $ip_endpoint_list IP endpoints for the adapter. Currently, IPv4 addresses are supported.
     *
     * @return self
     */
    public function setIpEndpointList($ip_endpoint_list)
    {
        if (is_null($ip_endpoint_list)) {
            throw new \InvalidArgumentException('non-nullable ip_endpoint_list cannot be null');
        }
        $this->container['ip_endpoint_list'] = $ip_endpoint_list;

        return $this;
    }

    /**
     * Gets network_function_chain_reference
     *
     * @return \OpenAPI\Client\Model\NetworkFunctionChainReference|null
     */
    public function getNetworkFunctionChainReference()
    {
        return $this->container['network_function_chain_reference'];
    }

    /**
     * Sets network_function_chain_reference
     *
     * @param \OpenAPI\Client\Model\NetworkFunctionChainReference|null $network_function_chain_reference network_function_chain_reference
     *
     * @return self
     */
    public function setNetworkFunctionChainReference($network_function_chain_reference)
    {
        if (is_null($network_function_chain_reference)) {
            throw new \InvalidArgumentException('non-nullable network_function_chain_reference cannot be null');
        }
        $this->container['network_function_chain_reference'] = $network_function_chain_reference;

        return $this;
    }

    /**
     * Gets secondary_ip_address_list
     *
     * @return string[]|null
     */
    public function getSecondaryIpAddressList()
    {
        return $this->container['secondary_ip_address_list'];
    }

    /**
     * Sets secondary_ip_address_list
     *
     * @param string[]|null $secondary_ip_address_list Secondary IPv4 Addresses for this NIC.
     *
     * @return self
     */
    public function setSecondaryIpAddressList($secondary_ip_address_list)
    {
        if (is_null($secondary_ip_address_list)) {
            throw new \InvalidArgumentException('non-nullable secondary_ip_address_list cannot be null');
        }
        $this->container['secondary_ip_address_list'] = $secondary_ip_address_list;

        return $this;
    }

    /**
     * Gets floating_ip
     *
     * @return string|null
     */
    public function getFloatingIp()
    {
        return $this->container['floating_ip'];
    }

    /**
     * Sets floating_ip
     *
     * @param string|null $floating_ip The Floating IP associated with the vnic.
     *
     * @return self
     */
    public function setFloatingIp($floating_ip)
    {
        if (is_null($floating_ip)) {
            throw new \InvalidArgumentException('non-nullable floating_ip cannot be null');
        }

        if ((!preg_match("/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/", ObjectSerializer::toString($floating_ip)))) {
            throw new \InvalidArgumentException("invalid value for \$floating_ip when calling VmNicOutputStatus., must conform to the pattern /^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/.");
        }

        $this->container['floating_ip'] = $floating_ip;

        return $this;
    }

    /**
     * Gets mac_address
     *
     * @return string|null
     */
    public function getMacAddress()
    {
        return $this->container['mac_address'];
    }

    /**
     * Sets mac_address
     *
     * @param string|null $mac_address The MAC address for the adapter.
     *
     * @return self
     */
    public function setMacAddress($mac_address)
    {
        if (is_null($mac_address)) {
            throw new \InvalidArgumentException('non-nullable mac_address cannot be null');
        }

        if ((!preg_match("/^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$/", ObjectSerializer::toString($mac_address)))) {
            throw new \InvalidArgumentException("invalid value for \$mac_address when calling VmNicOutputStatus., must conform to the pattern /^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$/.");
        }

        $this->container['mac_address'] = $mac_address;

        return $this;
    }

    /**
     * Gets network_function_nic_type
     *
     * @return string|null
     */
    public function getNetworkFunctionNicType()
    {
        return $this->container['network_function_nic_type'];
    }

    /**
     * Sets network_function_nic_type
     *
     * @param string|null $network_function_nic_type The type of this Network function NIC. Defaults to INGRESS.
     *
     * @return self
     */
    public function setNetworkFunctionNicType($network_function_nic_type)
    {
        if (is_null($network_function_nic_type)) {
            throw new \InvalidArgumentException('non-nullable network_function_nic_type cannot be null');
        }
        $this->container['network_function_nic_type'] = $network_function_nic_type;

        return $this;
    }

    /**
     * Gets vlan_mode
     *
     * @return string|null
     */
    public function getVlanMode()
    {
        return $this->container['vlan_mode'];
    }

    /**
     * Sets vlan_mode
     *
     * @param string|null $vlan_mode VLAN mode.
     *
     * @return self
     */
    public function setVlanMode($vlan_mode)
    {
        if (is_null($vlan_mode)) {
            throw new \InvalidArgumentException('non-nullable vlan_mode cannot be null');
        }
        $this->container['vlan_mode'] = $vlan_mode;

        return $this;
    }

    /**
     * Gets num_queues
     *
     * @return int|null
     */
    public function getNumQueues()
    {
        return $this->container['num_queues'];
    }

    /**
     * Sets num_queues
     *
     * @param int|null $num_queues The number of tx/rx queue pairs for this NIC.
     *
     * @return self
     */
    public function setNumQueues($num_queues)
    {
        if (is_null($num_queues)) {
            throw new \InvalidArgumentException('non-nullable num_queues cannot be null');
        }
        $this->container['num_queues'] = $num_queues;

        return $this;
    }

    /**
     * Gets default_gateway_address_list
     *
     * @return string[]|null
     */
    public function getDefaultGatewayAddressList()
    {
        return $this->container['default_gateway_address_list'];
    }

    /**
     * Sets default_gateway_address_list
     *
     * @param string[]|null $default_gateway_address_list Default gateway IP addresses.
     *
     * @return self
     */
    public function setDefaultGatewayAddressList($default_gateway_address_list)
    {
        if (is_null($default_gateway_address_list)) {
            throw new \InvalidArgumentException('non-nullable default_gateway_address_list cannot be null');
        }
        $this->container['default_gateway_address_list'] = $default_gateway_address_list;

        return $this;
    }

    /**
     * Gets dhcp_server_ip
     *
     * @return string|null
     */
    public function getDhcpServerIp()
    {
        return $this->container['dhcp_server_ip'];
    }

    /**
     * Sets dhcp_server_ip
     *
     * @param string|null $dhcp_server_ip IP address of the DHCP server.
     *
     * @return self
     */
    public function setDhcpServerIp($dhcp_server_ip)
    {
        if (is_null($dhcp_server_ip)) {
            throw new \InvalidArgumentException('non-nullable dhcp_server_ip cannot be null');
        }

        if ((!preg_match("/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/", ObjectSerializer::toString($dhcp_server_ip)))) {
            throw new \InvalidArgumentException("invalid value for \$dhcp_server_ip when calling VmNicOutputStatus., must conform to the pattern /^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/.");
        }

        $this->container['dhcp_server_ip'] = $dhcp_server_ip;

        return $this;
    }

    /**
     * Gets model
     *
     * @return string|null
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param string|null $model The model of this NIC.
     *
     * @return self
     */
    public function setModel($model)
    {
        if (is_null($model)) {
            throw new \InvalidArgumentException('non-nullable model cannot be null');
        }
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets is_connected
     *
     * @return bool|null
     */
    public function getIsConnected()
    {
        return $this->container['is_connected'];
    }

    /**
     * Sets is_connected
     *
     * @param bool|null $is_connected Whether or not the NIC is connected. True by default.
     *
     * @return self
     */
    public function setIsConnected($is_connected)
    {
        if (is_null($is_connected)) {
            throw new \InvalidArgumentException('non-nullable is_connected cannot be null');
        }
        $this->container['is_connected'] = $is_connected;

        return $this;
    }

    /**
     * Gets trunked_vlan_list
     *
     * @return int[]|null
     */
    public function getTrunkedVlanList()
    {
        return $this->container['trunked_vlan_list'];
    }

    /**
     * Sets trunked_vlan_list
     *
     * @param int[]|null $trunked_vlan_list List of VLANs to trunk if vlan_mode is TRUNKED. If empty, all VLANs are trunked.
     *
     * @return self
     */
    public function setTrunkedVlanList($trunked_vlan_list)
    {
        if (is_null($trunked_vlan_list)) {
            throw new \InvalidArgumentException('non-nullable trunked_vlan_list cannot be null');
        }
        $this->container['trunked_vlan_list'] = $trunked_vlan_list;

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


