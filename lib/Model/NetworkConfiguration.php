<?php
/**
 * NetworkConfiguration
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
 * NetworkConfiguration Class Doc Comment
 *
 * @category Class
 * @description Network configuration of the VM.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NetworkConfiguration implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'network_configuration';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'dns_ip_addresses_list' => 'string[]',
        'name' => 'string',
        'mac_address' => 'string',
        'dhcp_server_ip' => 'string',
        'default_gateway_address_list' => 'string[]',
        'ip_info_list' => '\OpenAPI\Client\Model\IpAddress[]'
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
        'name' => null,
        'mac_address' => null,
        'dhcp_server_ip' => null,
        'default_gateway_address_list' => null,
        'ip_info_list' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'dns_ip_addresses_list' => false,
        'name' => false,
        'mac_address' => false,
        'dhcp_server_ip' => false,
        'default_gateway_address_list' => false,
        'ip_info_list' => false
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
        'name' => 'name',
        'mac_address' => 'mac_address',
        'dhcp_server_ip' => 'dhcp_server_ip',
        'default_gateway_address_list' => 'default_gateway_address_list',
        'ip_info_list' => 'ip_info_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dns_ip_addresses_list' => 'setDnsIpAddressesList',
        'name' => 'setName',
        'mac_address' => 'setMacAddress',
        'dhcp_server_ip' => 'setDhcpServerIp',
        'default_gateway_address_list' => 'setDefaultGatewayAddressList',
        'ip_info_list' => 'setIpInfoList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dns_ip_addresses_list' => 'getDnsIpAddressesList',
        'name' => 'getName',
        'mac_address' => 'getMacAddress',
        'dhcp_server_ip' => 'getDhcpServerIp',
        'default_gateway_address_list' => 'getDefaultGatewayAddressList',
        'ip_info_list' => 'getIpInfoList'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('mac_address', $data ?? [], null);
        $this->setIfExists('dhcp_server_ip', $data ?? [], null);
        $this->setIfExists('default_gateway_address_list', $data ?? [], null);
        $this->setIfExists('ip_info_list', $data ?? [], null);
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name of the network interface.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

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
     * @param string|null $mac_address MAC Address of the network interface.
     *
     * @return self
     */
    public function setMacAddress($mac_address)
    {
        if (is_null($mac_address)) {
            throw new \InvalidArgumentException('non-nullable mac_address cannot be null');
        }

        if ((!preg_match("/^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$/", ObjectSerializer::toString($mac_address)))) {
            throw new \InvalidArgumentException("invalid value for \$mac_address when calling NetworkConfiguration., must conform to the pattern /^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$/.");
        }

        $this->container['mac_address'] = $mac_address;

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
            throw new \InvalidArgumentException("invalid value for \$dhcp_server_ip when calling NetworkConfiguration., must conform to the pattern /^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/.");
        }

        $this->container['dhcp_server_ip'] = $dhcp_server_ip;

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
     * Gets ip_info_list
     *
     * @return \OpenAPI\Client\Model\IpAddress[]|null
     */
    public function getIpInfoList()
    {
        return $this->container['ip_info_list'];
    }

    /**
     * Sets ip_info_list
     *
     * @param \OpenAPI\Client\Model\IpAddress[]|null $ip_info_list List of IP information of the network interface.
     *
     * @return self
     */
    public function setIpInfoList($ip_info_list)
    {
        if (is_null($ip_info_list)) {
            throw new \InvalidArgumentException('non-nullable ip_info_list cannot be null');
        }
        $this->container['ip_info_list'] = $ip_info_list;

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


