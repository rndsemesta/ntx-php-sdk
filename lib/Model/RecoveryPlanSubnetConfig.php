<?php
/**
 * RecoveryPlanSubnetConfig
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
 * RecoveryPlanSubnetConfig Class Doc Comment
 *
 * @category Class
 * @description Subnet configuration for network mapping in the Recovery Plan.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RecoveryPlanSubnetConfig implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'recovery_plan_subnet_config';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'external_connectivity_state' => 'string',
        'gateway_ip' => 'string',
        'prefix_length' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'external_connectivity_state' => null,
        'gateway_ip' => null,
        'prefix_length' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'external_connectivity_state' => false,
        'gateway_ip' => false,
        'prefix_length' => false
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
        'external_connectivity_state' => 'external_connectivity_state',
        'gateway_ip' => 'gateway_ip',
        'prefix_length' => 'prefix_length'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'external_connectivity_state' => 'setExternalConnectivityState',
        'gateway_ip' => 'setGatewayIp',
        'prefix_length' => 'setPrefixLength'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'external_connectivity_state' => 'getExternalConnectivityState',
        'gateway_ip' => 'getGatewayIp',
        'prefix_length' => 'getPrefixLength'
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
        $this->setIfExists('external_connectivity_state', $data ?? [], null);
        $this->setIfExists('gateway_ip', $data ?? [], null);
        $this->setIfExists('prefix_length', $data ?? [], null);
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

        if ($this->container['gateway_ip'] === null) {
            $invalidProperties[] = "'gateway_ip' can't be null";
        }
        if (!preg_match("/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/", $this->container['gateway_ip'])) {
            $invalidProperties[] = "invalid value for 'gateway_ip', must be conform to the pattern /^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/.";
        }

        if ($this->container['prefix_length'] === null) {
            $invalidProperties[] = "'prefix_length' can't be null";
        }
        if (($this->container['prefix_length'] > 32)) {
            $invalidProperties[] = "invalid value for 'prefix_length', must be smaller than or equal to 32.";
        }

        if (($this->container['prefix_length'] < 0)) {
            $invalidProperties[] = "invalid value for 'prefix_length', must be bigger than or equal to 0.";
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
     * Gets external_connectivity_state
     *
     * @return string|null
     */
    public function getExternalConnectivityState()
    {
        return $this->container['external_connectivity_state'];
    }

    /**
     * Sets external_connectivity_state
     *
     * @param string|null $external_connectivity_state External connectivity state of the subnet. This is applicable only for the subnet to be created in public cloud Availability Zone.
     *
     * @return self
     */
    public function setExternalConnectivityState($external_connectivity_state)
    {
        if (is_null($external_connectivity_state)) {
            throw new \InvalidArgumentException('non-nullable external_connectivity_state cannot be null');
        }
        $this->container['external_connectivity_state'] = $external_connectivity_state;

        return $this;
    }

    /**
     * Gets gateway_ip
     *
     * @return string
     */
    public function getGatewayIp()
    {
        return $this->container['gateway_ip'];
    }

    /**
     * Sets gateway_ip
     *
     * @param string $gateway_ip Gateway IP address for the subnet.
     *
     * @return self
     */
    public function setGatewayIp($gateway_ip)
    {
        if (is_null($gateway_ip)) {
            throw new \InvalidArgumentException('non-nullable gateway_ip cannot be null');
        }

        if ((!preg_match("/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/", ObjectSerializer::toString($gateway_ip)))) {
            throw new \InvalidArgumentException("invalid value for \$gateway_ip when calling RecoveryPlanSubnetConfig., must conform to the pattern /^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/.");
        }

        $this->container['gateway_ip'] = $gateway_ip;

        return $this;
    }

    /**
     * Gets prefix_length
     *
     * @return int
     */
    public function getPrefixLength()
    {
        return $this->container['prefix_length'];
    }

    /**
     * Sets prefix_length
     *
     * @param int $prefix_length Prefix length for the subnet.
     *
     * @return self
     */
    public function setPrefixLength($prefix_length)
    {
        if (is_null($prefix_length)) {
            throw new \InvalidArgumentException('non-nullable prefix_length cannot be null');
        }

        if (($prefix_length > 32)) {
            throw new \InvalidArgumentException('invalid value for $prefix_length when calling RecoveryPlanSubnetConfig., must be smaller than or equal to 32.');
        }
        if (($prefix_length < 0)) {
            throw new \InvalidArgumentException('invalid value for $prefix_length when calling RecoveryPlanSubnetConfig., must be bigger than or equal to 0.');
        }

        $this->container['prefix_length'] = $prefix_length;

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


