<?php
/**
 * SecurityPlanningDataCollectorUpgradeStatus
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
 * SecurityPlanningDataCollectorUpgradeStatus Class Doc Comment
 *
 * @category Class
 * @description Status of a Data Collector Upgrade for Security Planning
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SecurityPlanningDataCollectorUpgradeStatus implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'security_planning_data_collector_upgrade_status';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'current_version' => 'string',
        'task_uuid' => 'string',
        'is_upgrade_available' => 'bool',
        'latest_version' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'current_version' => null,
        'task_uuid' => 'UUID',
        'is_upgrade_available' => null,
        'latest_version' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'current_version' => false,
        'task_uuid' => false,
        'is_upgrade_available' => false,
        'latest_version' => false
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
        'current_version' => 'current_version',
        'task_uuid' => 'task_uuid',
        'is_upgrade_available' => 'is_upgrade_available',
        'latest_version' => 'latest_version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'current_version' => 'setCurrentVersion',
        'task_uuid' => 'setTaskUuid',
        'is_upgrade_available' => 'setIsUpgradeAvailable',
        'latest_version' => 'setLatestVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'current_version' => 'getCurrentVersion',
        'task_uuid' => 'getTaskUuid',
        'is_upgrade_available' => 'getIsUpgradeAvailable',
        'latest_version' => 'getLatestVersion'
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
        $this->setIfExists('current_version', $data ?? [], null);
        $this->setIfExists('task_uuid', $data ?? [], null);
        $this->setIfExists('is_upgrade_available', $data ?? [], null);
        $this->setIfExists('latest_version', $data ?? [], null);
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

        if (!is_null($this->container['task_uuid']) && !preg_match("/^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/", $this->container['task_uuid'])) {
            $invalidProperties[] = "invalid value for 'task_uuid', must be conform to the pattern /^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/.";
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
     * Gets current_version
     *
     * @return string|null
     */
    public function getCurrentVersion()
    {
        return $this->container['current_version'];
    }

    /**
     * Sets current_version
     *
     * @param string|null $current_version Current running version of the data collector
     *
     * @return self
     */
    public function setCurrentVersion($current_version)
    {
        if (is_null($current_version)) {
            throw new \InvalidArgumentException('non-nullable current_version cannot be null');
        }
        $this->container['current_version'] = $current_version;

        return $this;
    }

    /**
     * Gets task_uuid
     *
     * @return string|null
     */
    public function getTaskUuid()
    {
        return $this->container['task_uuid'];
    }

    /**
     * Sets task_uuid
     *
     * @param string|null $task_uuid UUID of the data collector upgrade task that's currently running. Absence of this field implies that an upgrade is not in progress.
     *
     * @return self
     */
    public function setTaskUuid($task_uuid)
    {
        if (is_null($task_uuid)) {
            throw new \InvalidArgumentException('non-nullable task_uuid cannot be null');
        }

        if ((!preg_match("/^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/", ObjectSerializer::toString($task_uuid)))) {
            throw new \InvalidArgumentException("invalid value for \$task_uuid when calling SecurityPlanningDataCollectorUpgradeStatus., must conform to the pattern /^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/.");
        }

        $this->container['task_uuid'] = $task_uuid;

        return $this;
    }

    /**
     * Gets is_upgrade_available
     *
     * @return bool|null
     */
    public function getIsUpgradeAvailable()
    {
        return $this->container['is_upgrade_available'];
    }

    /**
     * Sets is_upgrade_available
     *
     * @param bool|null $is_upgrade_available Is a data collector upgrade available
     *
     * @return self
     */
    public function setIsUpgradeAvailable($is_upgrade_available)
    {
        if (is_null($is_upgrade_available)) {
            throw new \InvalidArgumentException('non-nullable is_upgrade_available cannot be null');
        }
        $this->container['is_upgrade_available'] = $is_upgrade_available;

        return $this;
    }

    /**
     * Gets latest_version
     *
     * @return string|null
     */
    public function getLatestVersion()
    {
        return $this->container['latest_version'];
    }

    /**
     * Sets latest_version
     *
     * @param string|null $latest_version Latest available version of the data collector
     *
     * @return self
     */
    public function setLatestVersion($latest_version)
    {
        if (is_null($latest_version)) {
            throw new \InvalidArgumentException('non-nullable latest_version cannot be null');
        }
        $this->container['latest_version'] = $latest_version;

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


