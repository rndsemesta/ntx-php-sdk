<?php
/**
 * SplunkWorkload
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
 * SplunkWorkload Class Doc Comment
 *
 * @category Class
 * @description Splunk workload Object.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SplunkWorkload implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'splunk_workload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'search_users' => 'int',
        'cold_retention_days' => 'int',
        'daily_average_indexing_rate' => 'int',
        'hot_retention_days' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'search_users' => null,
        'cold_retention_days' => null,
        'daily_average_indexing_rate' => null,
        'hot_retention_days' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'search_users' => false,
        'cold_retention_days' => false,
        'daily_average_indexing_rate' => false,
        'hot_retention_days' => false
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
        'search_users' => 'search_users',
        'cold_retention_days' => 'cold_retention_days',
        'daily_average_indexing_rate' => 'daily_average_indexing_rate',
        'hot_retention_days' => 'hot_retention_days'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'search_users' => 'setSearchUsers',
        'cold_retention_days' => 'setColdRetentionDays',
        'daily_average_indexing_rate' => 'setDailyAverageIndexingRate',
        'hot_retention_days' => 'setHotRetentionDays'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'search_users' => 'getSearchUsers',
        'cold_retention_days' => 'getColdRetentionDays',
        'daily_average_indexing_rate' => 'getDailyAverageIndexingRate',
        'hot_retention_days' => 'getHotRetentionDays'
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
        $this->setIfExists('search_users', $data ?? [], null);
        $this->setIfExists('cold_retention_days', $data ?? [], null);
        $this->setIfExists('daily_average_indexing_rate', $data ?? [], null);
        $this->setIfExists('hot_retention_days', $data ?? [], null);
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
     * Gets search_users
     *
     * @return int|null
     */
    public function getSearchUsers()
    {
        return $this->container['search_users'];
    }

    /**
     * Sets search_users
     *
     * @param int|null $search_users search_users
     *
     * @return self
     */
    public function setSearchUsers($search_users)
    {
        if (is_null($search_users)) {
            throw new \InvalidArgumentException('non-nullable search_users cannot be null');
        }
        $this->container['search_users'] = $search_users;

        return $this;
    }

    /**
     * Gets cold_retention_days
     *
     * @return int|null
     */
    public function getColdRetentionDays()
    {
        return $this->container['cold_retention_days'];
    }

    /**
     * Sets cold_retention_days
     *
     * @param int|null $cold_retention_days cold_retention_days
     *
     * @return self
     */
    public function setColdRetentionDays($cold_retention_days)
    {
        if (is_null($cold_retention_days)) {
            throw new \InvalidArgumentException('non-nullable cold_retention_days cannot be null');
        }
        $this->container['cold_retention_days'] = $cold_retention_days;

        return $this;
    }

    /**
     * Gets daily_average_indexing_rate
     *
     * @return int|null
     */
    public function getDailyAverageIndexingRate()
    {
        return $this->container['daily_average_indexing_rate'];
    }

    /**
     * Sets daily_average_indexing_rate
     *
     * @param int|null $daily_average_indexing_rate daily_average_indexing_rate
     *
     * @return self
     */
    public function setDailyAverageIndexingRate($daily_average_indexing_rate)
    {
        if (is_null($daily_average_indexing_rate)) {
            throw new \InvalidArgumentException('non-nullable daily_average_indexing_rate cannot be null');
        }
        $this->container['daily_average_indexing_rate'] = $daily_average_indexing_rate;

        return $this;
    }

    /**
     * Gets hot_retention_days
     *
     * @return int|null
     */
    public function getHotRetentionDays()
    {
        return $this->container['hot_retention_days'];
    }

    /**
     * Sets hot_retention_days
     *
     * @param int|null $hot_retention_days hot_retention_days
     *
     * @return self
     */
    public function setHotRetentionDays($hot_retention_days)
    {
        if (is_null($hot_retention_days)) {
            throw new \InvalidArgumentException('non-nullable hot_retention_days cannot be null');
        }
        $this->container['hot_retention_days'] = $hot_retention_days;

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


