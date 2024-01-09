<?php
/**
 * NetworkRuleStatus
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
 * NetworkRuleStatus Class Doc Comment
 *
 * @category Class
 * @description Network rule status
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NetworkRuleStatus implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'network_rule_status';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'protocol' => 'string',
        'description' => 'string',
        'ip_subnet' => '\OpenAPI\Client\Model\IpSubnet',
        'tcp_port_range_list' => '\OpenAPI\Client\Model\PortRangeStatus[]',
        'udp_port_range_list' => '\OpenAPI\Client\Model\PortRangeStatus[]',
        'peer_specification_type' => 'string',
        'filter' => '\OpenAPI\Client\Model\CategoryFilter',
        'service_group_list' => '\OpenAPI\Client\Model\ServiceGroupReference[]',
        'icmp_type_code_list' => '\OpenAPI\Client\Model\NetworkRuleStatusIcmpTypeCodeListInner[]',
        'network_function_chain_reference' => '\OpenAPI\Client\Model\NetworkFunctionChainReference',
        'expiration_time' => 'string',
        'rule_id' => 'int',
        'address_group_inclusion_list' => '\OpenAPI\Client\Model\AddressGroupReference[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'protocol' => null,
        'description' => null,
        'ip_subnet' => null,
        'tcp_port_range_list' => null,
        'udp_port_range_list' => null,
        'peer_specification_type' => null,
        'filter' => null,
        'service_group_list' => null,
        'icmp_type_code_list' => null,
        'network_function_chain_reference' => null,
        'expiration_time' => null,
        'rule_id' => 'int32',
        'address_group_inclusion_list' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'protocol' => false,
        'description' => false,
        'ip_subnet' => false,
        'tcp_port_range_list' => false,
        'udp_port_range_list' => false,
        'peer_specification_type' => false,
        'filter' => false,
        'service_group_list' => false,
        'icmp_type_code_list' => false,
        'network_function_chain_reference' => false,
        'expiration_time' => false,
        'rule_id' => false,
        'address_group_inclusion_list' => false
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
        'protocol' => 'protocol',
        'description' => 'description',
        'ip_subnet' => 'ip_subnet',
        'tcp_port_range_list' => 'tcp_port_range_list',
        'udp_port_range_list' => 'udp_port_range_list',
        'peer_specification_type' => 'peer_specification_type',
        'filter' => 'filter',
        'service_group_list' => 'service_group_list',
        'icmp_type_code_list' => 'icmp_type_code_list',
        'network_function_chain_reference' => 'network_function_chain_reference',
        'expiration_time' => 'expiration_time',
        'rule_id' => 'rule_id',
        'address_group_inclusion_list' => 'address_group_inclusion_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'protocol' => 'setProtocol',
        'description' => 'setDescription',
        'ip_subnet' => 'setIpSubnet',
        'tcp_port_range_list' => 'setTcpPortRangeList',
        'udp_port_range_list' => 'setUdpPortRangeList',
        'peer_specification_type' => 'setPeerSpecificationType',
        'filter' => 'setFilter',
        'service_group_list' => 'setServiceGroupList',
        'icmp_type_code_list' => 'setIcmpTypeCodeList',
        'network_function_chain_reference' => 'setNetworkFunctionChainReference',
        'expiration_time' => 'setExpirationTime',
        'rule_id' => 'setRuleId',
        'address_group_inclusion_list' => 'setAddressGroupInclusionList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'protocol' => 'getProtocol',
        'description' => 'getDescription',
        'ip_subnet' => 'getIpSubnet',
        'tcp_port_range_list' => 'getTcpPortRangeList',
        'udp_port_range_list' => 'getUdpPortRangeList',
        'peer_specification_type' => 'getPeerSpecificationType',
        'filter' => 'getFilter',
        'service_group_list' => 'getServiceGroupList',
        'icmp_type_code_list' => 'getIcmpTypeCodeList',
        'network_function_chain_reference' => 'getNetworkFunctionChainReference',
        'expiration_time' => 'getExpirationTime',
        'rule_id' => 'getRuleId',
        'address_group_inclusion_list' => 'getAddressGroupInclusionList'
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
        $this->setIfExists('protocol', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('ip_subnet', $data ?? [], null);
        $this->setIfExists('tcp_port_range_list', $data ?? [], null);
        $this->setIfExists('udp_port_range_list', $data ?? [], null);
        $this->setIfExists('peer_specification_type', $data ?? [], null);
        $this->setIfExists('filter', $data ?? [], null);
        $this->setIfExists('service_group_list', $data ?? [], null);
        $this->setIfExists('icmp_type_code_list', $data ?? [], null);
        $this->setIfExists('network_function_chain_reference', $data ?? [], null);
        $this->setIfExists('expiration_time', $data ?? [], null);
        $this->setIfExists('rule_id', $data ?? [], null);
        $this->setIfExists('address_group_inclusion_list', $data ?? [], null);
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

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 64)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['rule_id']) && ($this->container['rule_id'] > 4095)) {
            $invalidProperties[] = "invalid value for 'rule_id', must be smaller than or equal to 4095.";
        }

        if (!is_null($this->container['rule_id']) && ($this->container['rule_id'] < 0)) {
            $invalidProperties[] = "invalid value for 'rule_id', must be bigger than or equal to 0.";
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
     * Gets protocol
     *
     * @return string|null
     */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
     * Sets protocol
     *
     * @param string|null $protocol Select a protocol to allow.  Multiple protocols can be allowed by repeating network_rule object.  If a protocol is not configured in the network_rule object then it is allowed.
     *
     * @return self
     */
    public function setProtocol($protocol)
    {
        if (is_null($protocol)) {
            throw new \InvalidArgumentException('non-nullable protocol cannot be null');
        }
        $this->container['protocol'] = $protocol;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description for network security rule that is for inbound or outbound
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        if ((mb_strlen($description) > 64)) {
            throw new \InvalidArgumentException('invalid length for $description when calling NetworkRuleStatus., must be smaller than or equal to 64.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets ip_subnet
     *
     * @return \OpenAPI\Client\Model\IpSubnet|null
     */
    public function getIpSubnet()
    {
        return $this->container['ip_subnet'];
    }

    /**
     * Sets ip_subnet
     *
     * @param \OpenAPI\Client\Model\IpSubnet|null $ip_subnet ip_subnet
     *
     * @return self
     */
    public function setIpSubnet($ip_subnet)
    {
        if (is_null($ip_subnet)) {
            throw new \InvalidArgumentException('non-nullable ip_subnet cannot be null');
        }
        $this->container['ip_subnet'] = $ip_subnet;

        return $this;
    }

    /**
     * Gets tcp_port_range_list
     *
     * @return \OpenAPI\Client\Model\PortRangeStatus[]|null
     */
    public function getTcpPortRangeList()
    {
        return $this->container['tcp_port_range_list'];
    }

    /**
     * Sets tcp_port_range_list
     *
     * @param \OpenAPI\Client\Model\PortRangeStatus[]|null $tcp_port_range_list List of TCP ports that are allowed by this rule.
     *
     * @return self
     */
    public function setTcpPortRangeList($tcp_port_range_list)
    {
        if (is_null($tcp_port_range_list)) {
            throw new \InvalidArgumentException('non-nullable tcp_port_range_list cannot be null');
        }
        $this->container['tcp_port_range_list'] = $tcp_port_range_list;

        return $this;
    }

    /**
     * Gets udp_port_range_list
     *
     * @return \OpenAPI\Client\Model\PortRangeStatus[]|null
     */
    public function getUdpPortRangeList()
    {
        return $this->container['udp_port_range_list'];
    }

    /**
     * Sets udp_port_range_list
     *
     * @param \OpenAPI\Client\Model\PortRangeStatus[]|null $udp_port_range_list List of UDP ports that are allowed by this rule.
     *
     * @return self
     */
    public function setUdpPortRangeList($udp_port_range_list)
    {
        if (is_null($udp_port_range_list)) {
            throw new \InvalidArgumentException('non-nullable udp_port_range_list cannot be null');
        }
        $this->container['udp_port_range_list'] = $udp_port_range_list;

        return $this;
    }

    /**
     * Gets peer_specification_type
     *
     * @return string|null
     */
    public function getPeerSpecificationType()
    {
        return $this->container['peer_specification_type'];
    }

    /**
     * Sets peer_specification_type
     *
     * @param string|null $peer_specification_type The set of categories that matching VMs need to have.
     *
     * @return self
     */
    public function setPeerSpecificationType($peer_specification_type)
    {
        if (is_null($peer_specification_type)) {
            throw new \InvalidArgumentException('non-nullable peer_specification_type cannot be null');
        }
        $this->container['peer_specification_type'] = $peer_specification_type;

        return $this;
    }

    /**
     * Gets filter
     *
     * @return \OpenAPI\Client\Model\CategoryFilter|null
     */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
     * Sets filter
     *
     * @param \OpenAPI\Client\Model\CategoryFilter|null $filter filter
     *
     * @return self
     */
    public function setFilter($filter)
    {
        if (is_null($filter)) {
            throw new \InvalidArgumentException('non-nullable filter cannot be null');
        }
        $this->container['filter'] = $filter;

        return $this;
    }

    /**
     * Gets service_group_list
     *
     * @return \OpenAPI\Client\Model\ServiceGroupReference[]|null
     */
    public function getServiceGroupList()
    {
        return $this->container['service_group_list'];
    }

    /**
     * Sets service_group_list
     *
     * @param \OpenAPI\Client\Model\ServiceGroupReference[]|null $service_group_list List of service groups associated with this rule. The existing fields for protocol or ports is not recommended for and will be deprecated for these new fields at the API level.
     *
     * @return self
     */
    public function setServiceGroupList($service_group_list)
    {
        if (is_null($service_group_list)) {
            throw new \InvalidArgumentException('non-nullable service_group_list cannot be null');
        }
        $this->container['service_group_list'] = $service_group_list;

        return $this;
    }

    /**
     * Gets icmp_type_code_list
     *
     * @return \OpenAPI\Client\Model\NetworkRuleStatusIcmpTypeCodeListInner[]|null
     */
    public function getIcmpTypeCodeList()
    {
        return $this->container['icmp_type_code_list'];
    }

    /**
     * Sets icmp_type_code_list
     *
     * @param \OpenAPI\Client\Model\NetworkRuleStatusIcmpTypeCodeListInner[]|null $icmp_type_code_list List of ICMP types and codes allowed by this rule.
     *
     * @return self
     */
    public function setIcmpTypeCodeList($icmp_type_code_list)
    {
        if (is_null($icmp_type_code_list)) {
            throw new \InvalidArgumentException('non-nullable icmp_type_code_list cannot be null');
        }
        $this->container['icmp_type_code_list'] = $icmp_type_code_list;

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
     * Gets expiration_time
     *
     * @return string|null
     */
    public function getExpirationTime()
    {
        return $this->container['expiration_time'];
    }

    /**
     * Sets expiration_time
     *
     * @param string|null $expiration_time Timestamp of expiration time.
     *
     * @return self
     */
    public function setExpirationTime($expiration_time)
    {
        if (is_null($expiration_time)) {
            throw new \InvalidArgumentException('non-nullable expiration_time cannot be null');
        }
        $this->container['expiration_time'] = $expiration_time;

        return $this;
    }

    /**
     * Gets rule_id
     *
     * @return int|null
     */
    public function getRuleId()
    {
        return $this->container['rule_id'];
    }

    /**
     * Sets rule_id
     *
     * @param int|null $rule_id Unique identifier for inbound or outbound rule. This is system generated and used internally. User should not set this field while creating a new rule or should not modify it while updating the existing rule.
     *
     * @return self
     */
    public function setRuleId($rule_id)
    {
        if (is_null($rule_id)) {
            throw new \InvalidArgumentException('non-nullable rule_id cannot be null');
        }

        if (($rule_id > 4095)) {
            throw new \InvalidArgumentException('invalid value for $rule_id when calling NetworkRuleStatus., must be smaller than or equal to 4095.');
        }
        if (($rule_id < 0)) {
            throw new \InvalidArgumentException('invalid value for $rule_id when calling NetworkRuleStatus., must be bigger than or equal to 0.');
        }

        $this->container['rule_id'] = $rule_id;

        return $this;
    }

    /**
     * Gets address_group_inclusion_list
     *
     * @return \OpenAPI\Client\Model\AddressGroupReference[]|null
     */
    public function getAddressGroupInclusionList()
    {
        return $this->container['address_group_inclusion_list'];
    }

    /**
     * Sets address_group_inclusion_list
     *
     * @param \OpenAPI\Client\Model\AddressGroupReference[]|null $address_group_inclusion_list List of address groups that are allowed access by this rule
     *
     * @return self
     */
    public function setAddressGroupInclusionList($address_group_inclusion_list)
    {
        if (is_null($address_group_inclusion_list)) {
            throw new \InvalidArgumentException('non-nullable address_group_inclusion_list cannot be null');
        }
        $this->container['address_group_inclusion_list'] = $address_group_inclusion_list;

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


