<?php
/**
 * VmSnapshotInput
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
 * VmSnapshotInput Class Doc Comment
 *
 * @category Class
 * @description Input object for the snapshot API. User can provide optional UUID of the vm_recovery_point that will be created as a result of this operation.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class VmSnapshotInput implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'vm_snapshot_input';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'creation_time' => '\DateTime',
        'expiration_time' => '\DateTime',
        'vm_recovery_point_uuid' => 'string',
        'name' => 'string',
        'recovery_point_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'creation_time' => 'date-time',
        'expiration_time' => 'date-time',
        'vm_recovery_point_uuid' => 'UUID',
        'name' => null,
        'recovery_point_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'creation_time' => false,
        'expiration_time' => false,
        'vm_recovery_point_uuid' => false,
        'name' => false,
        'recovery_point_type' => false
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
        'creation_time' => 'creation_time',
        'expiration_time' => 'expiration_time',
        'vm_recovery_point_uuid' => 'vm_recovery_point_uuid',
        'name' => 'name',
        'recovery_point_type' => 'recovery_point_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'creation_time' => 'setCreationTime',
        'expiration_time' => 'setExpirationTime',
        'vm_recovery_point_uuid' => 'setVmRecoveryPointUuid',
        'name' => 'setName',
        'recovery_point_type' => 'setRecoveryPointType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'creation_time' => 'getCreationTime',
        'expiration_time' => 'getExpirationTime',
        'vm_recovery_point_uuid' => 'getVmRecoveryPointUuid',
        'name' => 'getName',
        'recovery_point_type' => 'getRecoveryPointType'
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
        $this->setIfExists('creation_time', $data ?? [], null);
        $this->setIfExists('expiration_time', $data ?? [], null);
        $this->setIfExists('vm_recovery_point_uuid', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('recovery_point_type', $data ?? [], null);
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

        if (!is_null($this->container['vm_recovery_point_uuid']) && !preg_match("/^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/", $this->container['vm_recovery_point_uuid'])) {
            $invalidProperties[] = "invalid value for 'vm_recovery_point_uuid', must be conform to the pattern /^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
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
     * Gets creation_time
     *
     * @return \DateTime|null
     */
    public function getCreationTime()
    {
        return $this->container['creation_time'];
    }

    /**
     * Sets creation_time
     *
     * @param \DateTime|null $creation_time The target time at which the user wishes to have a fully usable recovery point. This is in internet date/time format (RFC 3339). For example, 1985-04-12T22:10:10Z, this represents 10 minutes and 10.10 seconds after the 22nd hour of April 12th, 1985 in UTC. The backend will generate a complete recovery point out of the closest available partial backend recovery point that is created on or before the provided timestamp. This field is explicitly used for the realization semantics for high frequency snapshotting. If this field is set, none of the other fields in this parameter are valid.
     *
     * @return self
     */
    public function setCreationTime($creation_time)
    {
        if (is_null($creation_time)) {
            throw new \InvalidArgumentException('non-nullable creation_time cannot be null');
        }
        $this->container['creation_time'] = $creation_time;

        return $this;
    }

    /**
     * Gets expiration_time
     *
     * @return \DateTime|null
     */
    public function getExpirationTime()
    {
        return $this->container['expiration_time'];
    }

    /**
     * Sets expiration_time
     *
     * @param \DateTime|null $expiration_time The time when this recovery point expires and will be garbage collected. This is in internet date/time format (RFC 3339). If not set, then the recovery point never expires.
     *
     * @return self
     */
    public function setExpirationTime($expiration_time)
    {
        if (is_null($expiration_time)) {
            throw new \InvalidArgumentException('non-nullable expiration_time cannot be null');
        }
        $this->container['expiration_time'] = $expiration_time;

        return $this;
    }

    /**
     * Gets vm_recovery_point_uuid
     *
     * @return string|null
     */
    public function getVmRecoveryPointUuid()
    {
        return $this->container['vm_recovery_point_uuid'];
    }

    /**
     * Sets vm_recovery_point_uuid
     *
     * @param string|null $vm_recovery_point_uuid vm_recovery_point_uuid
     *
     * @return self
     */
    public function setVmRecoveryPointUuid($vm_recovery_point_uuid)
    {
        if (is_null($vm_recovery_point_uuid)) {
            throw new \InvalidArgumentException('non-nullable vm_recovery_point_uuid cannot be null');
        }

        if ((!preg_match("/^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/", ObjectSerializer::toString($vm_recovery_point_uuid)))) {
            throw new \InvalidArgumentException("invalid value for \$vm_recovery_point_uuid when calling VmSnapshotInput., must conform to the pattern /^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/.");
        }

        $this->container['vm_recovery_point_uuid'] = $vm_recovery_point_uuid;

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
     * @param string|null $name Name of the recovery point.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 64)) {
            throw new \InvalidArgumentException('invalid length for $name when calling VmSnapshotInput., must be smaller than or equal to 64.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets recovery_point_type
     *
     * @return string|null
     */
    public function getRecoveryPointType()
    {
        return $this->container['recovery_point_type'];
    }

    /**
     * Sets recovery_point_type
     *
     * @param string|null $recovery_point_type Crash consistent or Application Consistent recovery point
     *
     * @return self
     */
    public function setRecoveryPointType($recovery_point_type)
    {
        if (is_null($recovery_point_type)) {
            throw new \InvalidArgumentException('non-nullable recovery_point_type cannot be null');
        }
        $this->container['recovery_point_type'] = $recovery_point_type;

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


