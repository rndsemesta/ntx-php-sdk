<?php
/**
 * DatacenterComponent
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
 * DatacenterComponent Class Doc Comment
 *
 * @category Class
 * @description Common properties for node or a network device in datacenters
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DatacenterComponent implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'datacenter_component';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'rack_unit_height' => 'int',
        'management_ip' => 'string',
        'management_mac_address' => 'string',
        'rack_unit_position' => 'int',
        'installation_time' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'rack_unit_height' => 'int32',
        'management_ip' => null,
        'management_mac_address' => null,
        'rack_unit_position' => 'int32',
        'installation_time' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'rack_unit_height' => false,
        'management_ip' => false,
        'management_mac_address' => false,
        'rack_unit_position' => false,
        'installation_time' => false
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
        'rack_unit_height' => 'rack_unit_height',
        'management_ip' => 'management_ip',
        'management_mac_address' => 'management_mac_address',
        'rack_unit_position' => 'rack_unit_position',
        'installation_time' => 'installation_time'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rack_unit_height' => 'setRackUnitHeight',
        'management_ip' => 'setManagementIp',
        'management_mac_address' => 'setManagementMacAddress',
        'rack_unit_position' => 'setRackUnitPosition',
        'installation_time' => 'setInstallationTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rack_unit_height' => 'getRackUnitHeight',
        'management_ip' => 'getManagementIp',
        'management_mac_address' => 'getManagementMacAddress',
        'rack_unit_position' => 'getRackUnitPosition',
        'installation_time' => 'getInstallationTime'
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
        $this->setIfExists('rack_unit_height', $data ?? [], null);
        $this->setIfExists('management_ip', $data ?? [], null);
        $this->setIfExists('management_mac_address', $data ?? [], null);
        $this->setIfExists('rack_unit_position', $data ?? [], null);
        $this->setIfExists('installation_time', $data ?? [], null);
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

        if (!is_null($this->container['rack_unit_height']) && ($this->container['rack_unit_height'] < 1)) {
            $invalidProperties[] = "invalid value for 'rack_unit_height', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['management_ip']) && !preg_match("/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/", $this->container['management_ip'])) {
            $invalidProperties[] = "invalid value for 'management_ip', must be conform to the pattern /^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/.";
        }

        if (!is_null($this->container['management_mac_address']) && !preg_match("/^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$/", $this->container['management_mac_address'])) {
            $invalidProperties[] = "invalid value for 'management_mac_address', must be conform to the pattern /^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$/.";
        }

        if (!is_null($this->container['rack_unit_position']) && ($this->container['rack_unit_position'] < 0)) {
            $invalidProperties[] = "invalid value for 'rack_unit_position', must be bigger than or equal to 0.";
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
     * Gets rack_unit_height
     *
     * @return int|null
     */
    public function getRackUnitHeight()
    {
        return $this->container['rack_unit_height'];
    }

    /**
     * Sets rack_unit_height
     *
     * @param int|null $rack_unit_height rack unit height
     *
     * @return self
     */
    public function setRackUnitHeight($rack_unit_height)
    {
        if (is_null($rack_unit_height)) {
            throw new \InvalidArgumentException('non-nullable rack_unit_height cannot be null');
        }

        if (($rack_unit_height < 1)) {
            throw new \InvalidArgumentException('invalid value for $rack_unit_height when calling DatacenterComponent., must be bigger than or equal to 1.');
        }

        $this->container['rack_unit_height'] = $rack_unit_height;

        return $this;
    }

    /**
     * Gets management_ip
     *
     * @return string|null
     */
    public function getManagementIp()
    {
        return $this->container['management_ip'];
    }

    /**
     * Sets management_ip
     *
     * @param string|null $management_ip management IP address
     *
     * @return self
     */
    public function setManagementIp($management_ip)
    {
        if (is_null($management_ip)) {
            throw new \InvalidArgumentException('non-nullable management_ip cannot be null');
        }

        if ((!preg_match("/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/", ObjectSerializer::toString($management_ip)))) {
            throw new \InvalidArgumentException("invalid value for \$management_ip when calling DatacenterComponent., must conform to the pattern /^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/.");
        }

        $this->container['management_ip'] = $management_ip;

        return $this;
    }

    /**
     * Gets management_mac_address
     *
     * @return string|null
     */
    public function getManagementMacAddress()
    {
        return $this->container['management_mac_address'];
    }

    /**
     * Sets management_mac_address
     *
     * @param string|null $management_mac_address management mac address
     *
     * @return self
     */
    public function setManagementMacAddress($management_mac_address)
    {
        if (is_null($management_mac_address)) {
            throw new \InvalidArgumentException('non-nullable management_mac_address cannot be null');
        }

        if ((!preg_match("/^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$/", ObjectSerializer::toString($management_mac_address)))) {
            throw new \InvalidArgumentException("invalid value for \$management_mac_address when calling DatacenterComponent., must conform to the pattern /^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$/.");
        }

        $this->container['management_mac_address'] = $management_mac_address;

        return $this;
    }

    /**
     * Gets rack_unit_position
     *
     * @return int|null
     */
    public function getRackUnitPosition()
    {
        return $this->container['rack_unit_position'];
    }

    /**
     * Sets rack_unit_position
     *
     * @param int|null $rack_unit_position rack unit position
     *
     * @return self
     */
    public function setRackUnitPosition($rack_unit_position)
    {
        if (is_null($rack_unit_position)) {
            throw new \InvalidArgumentException('non-nullable rack_unit_position cannot be null');
        }

        if (($rack_unit_position < 0)) {
            throw new \InvalidArgumentException('invalid value for $rack_unit_position when calling DatacenterComponent., must be bigger than or equal to 0.');
        }

        $this->container['rack_unit_position'] = $rack_unit_position;

        return $this;
    }

    /**
     * Gets installation_time
     *
     * @return \DateTime|null
     */
    public function getInstallationTime()
    {
        return $this->container['installation_time'];
    }

    /**
     * Sets installation_time
     *
     * @param \DateTime|null $installation_time installation date time
     *
     * @return self
     */
    public function setInstallationTime($installation_time)
    {
        if (is_null($installation_time)) {
            throw new \InvalidArgumentException('non-nullable installation_time cannot be null');
        }
        $this->container['installation_time'] = $installation_time;

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


