<?php
/**
 * TopologyRequest
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
 * TopologyRequest Class Doc Comment
 *
 * @category Class
 * @description Topology request.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TopologyRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'topology_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'enable_one_hop_traffic' => 'bool',
        'filter_criteria' => 'string',
        'interval_end_ms' => 'int',
        'interval_start_ms' => 'int',
        'group_by' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'enable_one_hop_traffic' => null,
        'filter_criteria' => null,
        'interval_end_ms' => 'int64',
        'interval_start_ms' => 'int64',
        'group_by' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'enable_one_hop_traffic' => false,
        'filter_criteria' => false,
        'interval_end_ms' => false,
        'interval_start_ms' => false,
        'group_by' => false
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
        'enable_one_hop_traffic' => 'enable_one_hop_traffic',
        'filter_criteria' => 'filter_criteria',
        'interval_end_ms' => 'interval_end_ms',
        'interval_start_ms' => 'interval_start_ms',
        'group_by' => 'group_by'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'enable_one_hop_traffic' => 'setEnableOneHopTraffic',
        'filter_criteria' => 'setFilterCriteria',
        'interval_end_ms' => 'setIntervalEndMs',
        'interval_start_ms' => 'setIntervalStartMs',
        'group_by' => 'setGroupBy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'enable_one_hop_traffic' => 'getEnableOneHopTraffic',
        'filter_criteria' => 'getFilterCriteria',
        'interval_end_ms' => 'getIntervalEndMs',
        'interval_start_ms' => 'getIntervalStartMs',
        'group_by' => 'getGroupBy'
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
        $this->setIfExists('enable_one_hop_traffic', $data ?? [], null);
        $this->setIfExists('filter_criteria', $data ?? [], null);
        $this->setIfExists('interval_end_ms', $data ?? [], null);
        $this->setIfExists('interval_start_ms', $data ?? [], null);
        $this->setIfExists('group_by', $data ?? [], null);
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
     * Gets enable_one_hop_traffic
     *
     * @return bool|null
     */
    public function getEnableOneHopTraffic()
    {
        return $this->container['enable_one_hop_traffic'];
    }

    /**
     * Sets enable_one_hop_traffic
     *
     * @param bool|null $enable_one_hop_traffic Toggle to view one hop traffic
     *
     * @return self
     */
    public function setEnableOneHopTraffic($enable_one_hop_traffic)
    {
        if (is_null($enable_one_hop_traffic)) {
            throw new \InvalidArgumentException('non-nullable enable_one_hop_traffic cannot be null');
        }
        $this->container['enable_one_hop_traffic'] = $enable_one_hop_traffic;

        return $this;
    }

    /**
     * Gets filter_criteria
     *
     * @return string|null
     */
    public function getFilterCriteria()
    {
        return $this->container['filter_criteria'];
    }

    /**
     * Sets filter_criteria
     *
     * @param string|null $filter_criteria FIQL filter criteria that will be used to form the filter field for the backend queries.
     *
     * @return self
     */
    public function setFilterCriteria($filter_criteria)
    {
        if (is_null($filter_criteria)) {
            throw new \InvalidArgumentException('non-nullable filter_criteria cannot be null');
        }
        $this->container['filter_criteria'] = $filter_criteria;

        return $this;
    }

    /**
     * Gets interval_end_ms
     *
     * @return int|null
     */
    public function getIntervalEndMs()
    {
        return $this->container['interval_end_ms'];
    }

    /**
     * Sets interval_end_ms
     *
     * @param int|null $interval_end_ms For a time-series query, the end of the interval since epoch in ms.
     *
     * @return self
     */
    public function setIntervalEndMs($interval_end_ms)
    {
        if (is_null($interval_end_ms)) {
            throw new \InvalidArgumentException('non-nullable interval_end_ms cannot be null');
        }
        $this->container['interval_end_ms'] = $interval_end_ms;

        return $this;
    }

    /**
     * Gets interval_start_ms
     *
     * @return int|null
     */
    public function getIntervalStartMs()
    {
        return $this->container['interval_start_ms'];
    }

    /**
     * Sets interval_start_ms
     *
     * @param int|null $interval_start_ms For a time-series query, the start of the interval since epoch in ms.
     *
     * @return self
     */
    public function setIntervalStartMs($interval_start_ms)
    {
        if (is_null($interval_start_ms)) {
            throw new \InvalidArgumentException('non-nullable interval_start_ms cannot be null');
        }
        $this->container['interval_start_ms'] = $interval_start_ms;

        return $this;
    }

    /**
     * Gets group_by
     *
     * @return string|null
     */
    public function getGroupBy()
    {
        return $this->container['group_by'];
    }

    /**
     * Sets group_by
     *
     * @param string|null $group_by GroupBy field
     *
     * @return self
     */
    public function setGroupBy($group_by)
    {
        if (is_null($group_by)) {
            throw new \InvalidArgumentException('non-nullable group_by cannot be null');
        }
        $this->container['group_by'] = $group_by;

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

