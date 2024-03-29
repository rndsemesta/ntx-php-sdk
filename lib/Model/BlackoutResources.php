<?php
/**
 * BlackoutResources
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
 * BlackoutResources Class Doc Comment
 *
 * @category Class
 * @description Blackout object definition
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BlackoutResources implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'blackout_resources';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'scope_entity_list' => '\OpenAPI\Client\Model\BlackoutResourcesScopeEntityListInner[]',
        'schedule_list' => '\OpenAPI\Client\Model\Schedule[]',
        'feature_list' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'scope_entity_list' => null,
        'schedule_list' => null,
        'feature_list' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'scope_entity_list' => false,
        'schedule_list' => false,
        'feature_list' => false
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
        'scope_entity_list' => 'scope_entity_list',
        'schedule_list' => 'schedule_list',
        'feature_list' => 'feature_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'scope_entity_list' => 'setScopeEntityList',
        'schedule_list' => 'setScheduleList',
        'feature_list' => 'setFeatureList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'scope_entity_list' => 'getScopeEntityList',
        'schedule_list' => 'getScheduleList',
        'feature_list' => 'getFeatureList'
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
        $this->setIfExists('scope_entity_list', $data ?? [], null);
        $this->setIfExists('schedule_list', $data ?? [], null);
        $this->setIfExists('feature_list', $data ?? [], null);
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

        if ($this->container['scope_entity_list'] === null) {
            $invalidProperties[] = "'scope_entity_list' can't be null";
        }
        if ($this->container['schedule_list'] === null) {
            $invalidProperties[] = "'schedule_list' can't be null";
        }
        if ($this->container['feature_list'] === null) {
            $invalidProperties[] = "'feature_list' can't be null";
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
     * Gets scope_entity_list
     *
     * @return \OpenAPI\Client\Model\BlackoutResourcesScopeEntityListInner[]
     */
    public function getScopeEntityList()
    {
        return $this->container['scope_entity_list'];
    }

    /**
     * Sets scope_entity_list
     *
     * @param \OpenAPI\Client\Model\BlackoutResourcesScopeEntityListInner[] $scope_entity_list The list of 1) entity type, or 2) entity type + uuid_list, will define the targeted entities.  Any entities contained inside the targeted entities are affected by this blackout schedule. If it is case 1), where the uuid_list is empty, then, it means the blackout applies to all the entities of this entity_type.  For example, blackout for all clusters, the entity_type = \"cluster\", the uuid_list will be empty.  If the uuid_list is not empty, then, the blackout is applied to only these entities in the uuid_list.
     *
     * @return self
     */
    public function setScopeEntityList($scope_entity_list)
    {
        if (is_null($scope_entity_list)) {
            throw new \InvalidArgumentException('non-nullable scope_entity_list cannot be null');
        }
        $this->container['scope_entity_list'] = $scope_entity_list;

        return $this;
    }

    /**
     * Gets schedule_list
     *
     * @return \OpenAPI\Client\Model\Schedule[]
     */
    public function getScheduleList()
    {
        return $this->container['schedule_list'];
    }

    /**
     * Sets schedule_list
     *
     * @param \OpenAPI\Client\Model\Schedule[] $schedule_list A list of time schedules for the blackout.  For example, if the blackout is for every Monday and Friday, 10:00 - 11:00 am, 3:00-5:00 pm, then, there will be 2 items:   schedule1: day_of_week = Monday,Friday, Time = 10:00 - 11:00 am   schedule2: day_of_week = Monday,Friday, 3:00 - 5:00 pm
     *
     * @return self
     */
    public function setScheduleList($schedule_list)
    {
        if (is_null($schedule_list)) {
            throw new \InvalidArgumentException('non-nullable schedule_list cannot be null');
        }
        $this->container['schedule_list'] = $schedule_list;

        return $this;
    }

    /**
     * Gets feature_list
     *
     * @return string[]
     */
    public function getFeatureList()
    {
        return $this->container['feature_list'];
    }

    /**
     * Sets feature_list
     *
     * @param string[] $feature_list A list of features that this blackout is applied to.
     *
     * @return self
     */
    public function setFeatureList($feature_list)
    {
        if (is_null($feature_list)) {
            throw new \InvalidArgumentException('non-nullable feature_list cannot be null');
        }
        $this->container['feature_list'] = $feature_list;

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


