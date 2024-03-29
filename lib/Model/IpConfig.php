<?php
/**
 * IpConfig
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
 * IpConfig Class Doc Comment
 *
 * @category Class
 * @description IP config.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class IpConfig implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ip_config';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'default_gateway_ip' => 'string',
        'dhcp_server_address' => '\OpenAPI\Client\Model\Address',
        'pool_list' => '\OpenAPI\Client\Model\IpPool[]',
        'prefix_length' => 'int',
        'subnet_ip' => 'string',
        'dhcp_options' => '\OpenAPI\Client\Model\DhcpOptions'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'default_gateway_ip' => null,
        'dhcp_server_address' => null,
        'pool_list' => null,
        'prefix_length' => 'int32',
        'subnet_ip' => null,
        'dhcp_options' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'default_gateway_ip' => false,
        'dhcp_server_address' => false,
        'pool_list' => false,
        'prefix_length' => false,
        'subnet_ip' => false,
        'dhcp_options' => false
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
        'default_gateway_ip' => 'default_gateway_ip',
        'dhcp_server_address' => 'dhcp_server_address',
        'pool_list' => 'pool_list',
        'prefix_length' => 'prefix_length',
        'subnet_ip' => 'subnet_ip',
        'dhcp_options' => 'dhcp_options'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'default_gateway_ip' => 'setDefaultGatewayIp',
        'dhcp_server_address' => 'setDhcpServerAddress',
        'pool_list' => 'setPoolList',
        'prefix_length' => 'setPrefixLength',
        'subnet_ip' => 'setSubnetIp',
        'dhcp_options' => 'setDhcpOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'default_gateway_ip' => 'getDefaultGatewayIp',
        'dhcp_server_address' => 'getDhcpServerAddress',
        'pool_list' => 'getPoolList',
        'prefix_length' => 'getPrefixLength',
        'subnet_ip' => 'getSubnetIp',
        'dhcp_options' => 'getDhcpOptions'
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
        $this->setIfExists('default_gateway_ip', $data ?? [], null);
        $this->setIfExists('dhcp_server_address', $data ?? [], null);
        $this->setIfExists('pool_list', $data ?? [], null);
        $this->setIfExists('prefix_length', $data ?? [], null);
        $this->setIfExists('subnet_ip', $data ?? [], null);
        $this->setIfExists('dhcp_options', $data ?? [], null);
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

        if (!is_null($this->container['default_gateway_ip']) && !preg_match("/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/", $this->container['default_gateway_ip'])) {
            $invalidProperties[] = "invalid value for 'default_gateway_ip', must be conform to the pattern /^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/.";
        }

        if (!is_null($this->container['subnet_ip']) && !preg_match("/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/", $this->container['subnet_ip'])) {
            $invalidProperties[] = "invalid value for 'subnet_ip', must be conform to the pattern /^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/.";
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
     * Gets default_gateway_ip
     *
     * @return string|null
     */
    public function getDefaultGatewayIp()
    {
        return $this->container['default_gateway_ip'];
    }

    /**
     * Sets default_gateway_ip
     *
     * @param string|null $default_gateway_ip Default gateway IP address.
     *
     * @return self
     */
    public function setDefaultGatewayIp($default_gateway_ip)
    {
        if (is_null($default_gateway_ip)) {
            throw new \InvalidArgumentException('non-nullable default_gateway_ip cannot be null');
        }

        if ((!preg_match("/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/", ObjectSerializer::toString($default_gateway_ip)))) {
            throw new \InvalidArgumentException("invalid value for \$default_gateway_ip when calling IpConfig., must conform to the pattern /^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/.");
        }

        $this->container['default_gateway_ip'] = $default_gateway_ip;

        return $this;
    }

    /**
     * Gets dhcp_server_address
     *
     * @return \OpenAPI\Client\Model\Address|null
     */
    public function getDhcpServerAddress()
    {
        return $this->container['dhcp_server_address'];
    }

    /**
     * Sets dhcp_server_address
     *
     * @param \OpenAPI\Client\Model\Address|null $dhcp_server_address dhcp_server_address
     *
     * @return self
     */
    public function setDhcpServerAddress($dhcp_server_address)
    {
        if (is_null($dhcp_server_address)) {
            throw new \InvalidArgumentException('non-nullable dhcp_server_address cannot be null');
        }
        $this->container['dhcp_server_address'] = $dhcp_server_address;

        return $this;
    }

    /**
     * Gets pool_list
     *
     * @return \OpenAPI\Client\Model\IpPool[]|null
     */
    public function getPoolList()
    {
        return $this->container['pool_list'];
    }

    /**
     * Sets pool_list
     *
     * @param \OpenAPI\Client\Model\IpPool[]|null $pool_list pool_list
     *
     * @return self
     */
    public function setPoolList($pool_list)
    {
        if (is_null($pool_list)) {
            throw new \InvalidArgumentException('non-nullable pool_list cannot be null');
        }
        $this->container['pool_list'] = $pool_list;

        return $this;
    }

    /**
     * Gets prefix_length
     *
     * @return int|null
     */
    public function getPrefixLength()
    {
        return $this->container['prefix_length'];
    }

    /**
     * Sets prefix_length
     *
     * @param int|null $prefix_length prefix_length
     *
     * @return self
     */
    public function setPrefixLength($prefix_length)
    {
        if (is_null($prefix_length)) {
            throw new \InvalidArgumentException('non-nullable prefix_length cannot be null');
        }
        $this->container['prefix_length'] = $prefix_length;

        return $this;
    }

    /**
     * Gets subnet_ip
     *
     * @return string|null
     */
    public function getSubnetIp()
    {
        return $this->container['subnet_ip'];
    }

    /**
     * Sets subnet_ip
     *
     * @param string|null $subnet_ip Subnet IP address.
     *
     * @return self
     */
    public function setSubnetIp($subnet_ip)
    {
        if (is_null($subnet_ip)) {
            throw new \InvalidArgumentException('non-nullable subnet_ip cannot be null');
        }

        if ((!preg_match("/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/", ObjectSerializer::toString($subnet_ip)))) {
            throw new \InvalidArgumentException("invalid value for \$subnet_ip when calling IpConfig., must conform to the pattern /^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/.");
        }

        $this->container['subnet_ip'] = $subnet_ip;

        return $this;
    }

    /**
     * Gets dhcp_options
     *
     * @return \OpenAPI\Client\Model\DhcpOptions|null
     */
    public function getDhcpOptions()
    {
        return $this->container['dhcp_options'];
    }

    /**
     * Sets dhcp_options
     *
     * @param \OpenAPI\Client\Model\DhcpOptions|null $dhcp_options dhcp_options
     *
     * @return self
     */
    public function setDhcpOptions($dhcp_options)
    {
        if (is_null($dhcp_options)) {
            throw new \InvalidArgumentException('non-nullable dhcp_options cannot be null');
        }
        $this->container['dhcp_options'] = $dhcp_options;

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


