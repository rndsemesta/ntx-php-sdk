<?php
/**
 * VpnConnectionResources
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
 * VpnConnectionResources Class Doc Comment
 *
 * @category Class
 * @description VPN connection creation/modification spec.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class VpnConnectionResources implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'vpn_connection_resources';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'local_gateway_role' => 'string',
        'qos_config' => '\OpenAPI\Client\Model\QosConfig',
        'remote_gateway_reference' => '\OpenAPI\Client\Model\VpnGatewayReference',
        'ipsec_config' => '\OpenAPI\Client\Model\IpsecConfig',
        'dynamic_route_priority' => 'int',
        'local_gateway_reference' => '\OpenAPI\Client\Model\VpnGatewayReference',
        'dpd_config' => '\OpenAPI\Client\Model\DpdConfig'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'local_gateway_role' => null,
        'qos_config' => null,
        'remote_gateway_reference' => null,
        'ipsec_config' => null,
        'dynamic_route_priority' => 'uint16',
        'local_gateway_reference' => null,
        'dpd_config' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'local_gateway_role' => false,
        'qos_config' => false,
        'remote_gateway_reference' => false,
        'ipsec_config' => false,
        'dynamic_route_priority' => false,
        'local_gateway_reference' => false,
        'dpd_config' => false
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
        'local_gateway_role' => 'local_gateway_role',
        'qos_config' => 'qos_config',
        'remote_gateway_reference' => 'remote_gateway_reference',
        'ipsec_config' => 'ipsec_config',
        'dynamic_route_priority' => 'dynamic_route_priority',
        'local_gateway_reference' => 'local_gateway_reference',
        'dpd_config' => 'dpd_config'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'local_gateway_role' => 'setLocalGatewayRole',
        'qos_config' => 'setQosConfig',
        'remote_gateway_reference' => 'setRemoteGatewayReference',
        'ipsec_config' => 'setIpsecConfig',
        'dynamic_route_priority' => 'setDynamicRoutePriority',
        'local_gateway_reference' => 'setLocalGatewayReference',
        'dpd_config' => 'setDpdConfig'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'local_gateway_role' => 'getLocalGatewayRole',
        'qos_config' => 'getQosConfig',
        'remote_gateway_reference' => 'getRemoteGatewayReference',
        'ipsec_config' => 'getIpsecConfig',
        'dynamic_route_priority' => 'getDynamicRoutePriority',
        'local_gateway_reference' => 'getLocalGatewayReference',
        'dpd_config' => 'getDpdConfig'
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
        $this->setIfExists('local_gateway_role', $data ?? [], null);
        $this->setIfExists('qos_config', $data ?? [], null);
        $this->setIfExists('remote_gateway_reference', $data ?? [], null);
        $this->setIfExists('ipsec_config', $data ?? [], null);
        $this->setIfExists('dynamic_route_priority', $data ?? [], null);
        $this->setIfExists('local_gateway_reference', $data ?? [], null);
        $this->setIfExists('dpd_config', $data ?? [], null);
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

        if ($this->container['local_gateway_role'] === null) {
            $invalidProperties[] = "'local_gateway_role' can't be null";
        }
        if ($this->container['remote_gateway_reference'] === null) {
            $invalidProperties[] = "'remote_gateway_reference' can't be null";
        }
        if ($this->container['ipsec_config'] === null) {
            $invalidProperties[] = "'ipsec_config' can't be null";
        }
        if (!is_null($this->container['dynamic_route_priority']) && ($this->container['dynamic_route_priority'] > 1000)) {
            $invalidProperties[] = "invalid value for 'dynamic_route_priority', must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['dynamic_route_priority']) && ($this->container['dynamic_route_priority'] < 10)) {
            $invalidProperties[] = "invalid value for 'dynamic_route_priority', must be bigger than or equal to 10.";
        }

        if ($this->container['local_gateway_reference'] === null) {
            $invalidProperties[] = "'local_gateway_reference' can't be null";
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
     * Gets local_gateway_role
     *
     * @return string
     */
    public function getLocalGatewayRole()
    {
        return $this->container['local_gateway_role'];
    }

    /**
     * Sets local_gateway_role
     *
     * @param string $local_gateway_role Local gateway role (acceptor or initiator) in the connection.
     *
     * @return self
     */
    public function setLocalGatewayRole($local_gateway_role)
    {
        if (is_null($local_gateway_role)) {
            throw new \InvalidArgumentException('non-nullable local_gateway_role cannot be null');
        }
        $this->container['local_gateway_role'] = $local_gateway_role;

        return $this;
    }

    /**
     * Gets qos_config
     *
     * @return \OpenAPI\Client\Model\QosConfig|null
     */
    public function getQosConfig()
    {
        return $this->container['qos_config'];
    }

    /**
     * Sets qos_config
     *
     * @param \OpenAPI\Client\Model\QosConfig|null $qos_config qos_config
     *
     * @return self
     */
    public function setQosConfig($qos_config)
    {
        if (is_null($qos_config)) {
            throw new \InvalidArgumentException('non-nullable qos_config cannot be null');
        }
        $this->container['qos_config'] = $qos_config;

        return $this;
    }

    /**
     * Gets remote_gateway_reference
     *
     * @return \OpenAPI\Client\Model\VpnGatewayReference
     */
    public function getRemoteGatewayReference()
    {
        return $this->container['remote_gateway_reference'];
    }

    /**
     * Sets remote_gateway_reference
     *
     * @param \OpenAPI\Client\Model\VpnGatewayReference $remote_gateway_reference remote_gateway_reference
     *
     * @return self
     */
    public function setRemoteGatewayReference($remote_gateway_reference)
    {
        if (is_null($remote_gateway_reference)) {
            throw new \InvalidArgumentException('non-nullable remote_gateway_reference cannot be null');
        }
        $this->container['remote_gateway_reference'] = $remote_gateway_reference;

        return $this;
    }

    /**
     * Gets ipsec_config
     *
     * @return \OpenAPI\Client\Model\IpsecConfig
     */
    public function getIpsecConfig()
    {
        return $this->container['ipsec_config'];
    }

    /**
     * Sets ipsec_config
     *
     * @param \OpenAPI\Client\Model\IpsecConfig $ipsec_config ipsec_config
     *
     * @return self
     */
    public function setIpsecConfig($ipsec_config)
    {
        if (is_null($ipsec_config)) {
            throw new \InvalidArgumentException('non-nullable ipsec_config cannot be null');
        }
        $this->container['ipsec_config'] = $ipsec_config;

        return $this;
    }

    /**
     * Gets dynamic_route_priority
     *
     * @return int|null
     */
    public function getDynamicRoutePriority()
    {
        return $this->container['dynamic_route_priority'];
    }

    /**
     * Sets dynamic_route_priority
     *
     * @param int|null $dynamic_route_priority Priority assigned to routes received on this connection over eBGP. A higher priority value indicates that the routes are more preferred.
     *
     * @return self
     */
    public function setDynamicRoutePriority($dynamic_route_priority)
    {
        if (is_null($dynamic_route_priority)) {
            throw new \InvalidArgumentException('non-nullable dynamic_route_priority cannot be null');
        }

        if (($dynamic_route_priority > 1000)) {
            throw new \InvalidArgumentException('invalid value for $dynamic_route_priority when calling VpnConnectionResources., must be smaller than or equal to 1000.');
        }
        if (($dynamic_route_priority < 10)) {
            throw new \InvalidArgumentException('invalid value for $dynamic_route_priority when calling VpnConnectionResources., must be bigger than or equal to 10.');
        }

        $this->container['dynamic_route_priority'] = $dynamic_route_priority;

        return $this;
    }

    /**
     * Gets local_gateway_reference
     *
     * @return \OpenAPI\Client\Model\VpnGatewayReference
     */
    public function getLocalGatewayReference()
    {
        return $this->container['local_gateway_reference'];
    }

    /**
     * Sets local_gateway_reference
     *
     * @param \OpenAPI\Client\Model\VpnGatewayReference $local_gateway_reference local_gateway_reference
     *
     * @return self
     */
    public function setLocalGatewayReference($local_gateway_reference)
    {
        if (is_null($local_gateway_reference)) {
            throw new \InvalidArgumentException('non-nullable local_gateway_reference cannot be null');
        }
        $this->container['local_gateway_reference'] = $local_gateway_reference;

        return $this;
    }

    /**
     * Gets dpd_config
     *
     * @return \OpenAPI\Client\Model\DpdConfig|null
     */
    public function getDpdConfig()
    {
        return $this->container['dpd_config'];
    }

    /**
     * Sets dpd_config
     *
     * @param \OpenAPI\Client\Model\DpdConfig|null $dpd_config dpd_config
     *
     * @return self
     */
    public function setDpdConfig($dpd_config)
    {
        if (is_null($dpd_config)) {
            throw new \InvalidArgumentException('non-nullable dpd_config cannot be null');
        }
        $this->container['dpd_config'] = $dpd_config;

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


