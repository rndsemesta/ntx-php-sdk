<?php
/**
 * RecoveryPlanDefStatus
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
 * RecoveryPlanDefStatus Class Doc Comment
 *
 * @category Class
 * @description Recovery Plan status
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RecoveryPlanDefStatus implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'recovery_plan_def_status';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'recovery_availability_zone_order_list' => '\OpenAPI\Client\Model\RecoveryPlanDefStatusRecoveryAvailabilityZoneOrderListInner[]',
        'message_list' => '\OpenAPI\Client\Model\MessageResource[]',
        'state' => 'string',
        'latest_validation_time' => '\DateTime',
        'latest_test_time' => '\DateTime',
        'resources' => '\OpenAPI\Client\Model\RecoveryPlanResources',
        'description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'recovery_availability_zone_order_list' => null,
        'message_list' => null,
        'state' => null,
        'latest_validation_time' => 'date-time',
        'latest_test_time' => 'date-time',
        'resources' => null,
        'description' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'name' => false,
        'recovery_availability_zone_order_list' => false,
        'message_list' => false,
        'state' => false,
        'latest_validation_time' => false,
        'latest_test_time' => false,
        'resources' => false,
        'description' => false
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
        'name' => 'name',
        'recovery_availability_zone_order_list' => 'recovery_availability_zone_order_list',
        'message_list' => 'message_list',
        'state' => 'state',
        'latest_validation_time' => 'latest_validation_time',
        'latest_test_time' => 'latest_test_time',
        'resources' => 'resources',
        'description' => 'description'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'recovery_availability_zone_order_list' => 'setRecoveryAvailabilityZoneOrderList',
        'message_list' => 'setMessageList',
        'state' => 'setState',
        'latest_validation_time' => 'setLatestValidationTime',
        'latest_test_time' => 'setLatestTestTime',
        'resources' => 'setResources',
        'description' => 'setDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'recovery_availability_zone_order_list' => 'getRecoveryAvailabilityZoneOrderList',
        'message_list' => 'getMessageList',
        'state' => 'getState',
        'latest_validation_time' => 'getLatestValidationTime',
        'latest_test_time' => 'getLatestTestTime',
        'resources' => 'getResources',
        'description' => 'getDescription'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('recovery_availability_zone_order_list', $data ?? [], null);
        $this->setIfExists('message_list', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('latest_validation_time', $data ?? [], null);
        $this->setIfExists('latest_test_time', $data ?? [], null);
        $this->setIfExists('resources', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['recovery_availability_zone_order_list'] === null) {
            $invalidProperties[] = "'recovery_availability_zone_order_list' can't be null";
        }
        if ($this->container['resources'] === null) {
            $invalidProperties[] = "'resources' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Recovery Plan name
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
     * Gets recovery_availability_zone_order_list
     *
     * @return \OpenAPI\Client\Model\RecoveryPlanDefStatusRecoveryAvailabilityZoneOrderListInner[]
     */
    public function getRecoveryAvailabilityZoneOrderList()
    {
        return $this->container['recovery_availability_zone_order_list'];
    }

    /**
     * Sets recovery_availability_zone_order_list
     *
     * @param \OpenAPI\Client\Model\RecoveryPlanDefStatusRecoveryAvailabilityZoneOrderListInner[] $recovery_availability_zone_order_list List of recovery Availability Zones order list. Each unique Availability Zone order list will be reported. A cluster might also be specified for each Availability Zone in the Availability Zones order list, in case the entity is protected for replication to/from a cluster in the Protection Policy.
     *
     * @return self
     */
    public function setRecoveryAvailabilityZoneOrderList($recovery_availability_zone_order_list)
    {
        if (is_null($recovery_availability_zone_order_list)) {
            throw new \InvalidArgumentException('non-nullable recovery_availability_zone_order_list cannot be null');
        }
        $this->container['recovery_availability_zone_order_list'] = $recovery_availability_zone_order_list;

        return $this;
    }

    /**
     * Gets message_list
     *
     * @return \OpenAPI\Client\Model\MessageResource[]|null
     */
    public function getMessageList()
    {
        return $this->container['message_list'];
    }

    /**
     * Sets message_list
     *
     * @param \OpenAPI\Client\Model\MessageResource[]|null $message_list message_list
     *
     * @return self
     */
    public function setMessageList($message_list)
    {
        if (is_null($message_list)) {
            throw new \InvalidArgumentException('non-nullable message_list cannot be null');
        }
        $this->container['message_list'] = $message_list;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state The state of the Recovery Plan entity.
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets latest_validation_time
     *
     * @return \DateTime|null
     */
    public function getLatestValidationTime()
    {
        return $this->container['latest_validation_time'];
    }

    /**
     * Sets latest_validation_time
     *
     * @param \DateTime|null $latest_validation_time Time when latest validation was done for Recovery Plan.
     *
     * @return self
     */
    public function setLatestValidationTime($latest_validation_time)
    {
        if (is_null($latest_validation_time)) {
            throw new \InvalidArgumentException('non-nullable latest_validation_time cannot be null');
        }
        $this->container['latest_validation_time'] = $latest_validation_time;

        return $this;
    }

    /**
     * Gets latest_test_time
     *
     * @return \DateTime|null
     */
    public function getLatestTestTime()
    {
        return $this->container['latest_test_time'];
    }

    /**
     * Sets latest_test_time
     *
     * @param \DateTime|null $latest_test_time Time when latest test was done for Recovery Plan.
     *
     * @return self
     */
    public function setLatestTestTime($latest_test_time)
    {
        if (is_null($latest_test_time)) {
            throw new \InvalidArgumentException('non-nullable latest_test_time cannot be null');
        }
        $this->container['latest_test_time'] = $latest_test_time;

        return $this;
    }

    /**
     * Gets resources
     *
     * @return \OpenAPI\Client\Model\RecoveryPlanResources
     */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
     * Sets resources
     *
     * @param \OpenAPI\Client\Model\RecoveryPlanResources $resources resources
     *
     * @return self
     */
    public function setResources($resources)
    {
        if (is_null($resources)) {
            throw new \InvalidArgumentException('non-nullable resources cannot be null');
        }
        $this->container['resources'] = $resources;

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
     * @param string|null $description A description or user annotation for the Recovery Plan.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

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


