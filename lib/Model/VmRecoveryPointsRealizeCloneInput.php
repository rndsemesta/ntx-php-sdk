<?php
/**
 * VmRecoveryPointsRealizeCloneInput
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
 * VmRecoveryPointsRealizeCloneInput Class Doc Comment
 *
 * @category Class
 * @description Input object for the clone API for vm recovery point. User can provide the optional UUID of the vm_recovery_point that will be created as a result of this operation on target site.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class VmRecoveryPointsRealizeCloneInput implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'vm_recovery_points_realize_clone_input';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'vm_uuid' => 'string',
        'availability_zone_reference' => '\OpenAPI\Client\Model\AvailabilityZoneReference',
        'clone_target_time' => '\DateTime',
        'vm_recovery_point_uuid' => 'string',
        'cluster_reference' => '\OpenAPI\Client\Model\ClusterReference',
        'override_spec' => '\OpenAPI\Client\Model\VmRecoveryPointsOverrideSpec'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'vm_uuid' => 'UUID',
        'availability_zone_reference' => null,
        'clone_target_time' => 'date-time',
        'vm_recovery_point_uuid' => 'UUID',
        'cluster_reference' => null,
        'override_spec' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'vm_uuid' => false,
        'availability_zone_reference' => false,
        'clone_target_time' => false,
        'vm_recovery_point_uuid' => false,
        'cluster_reference' => false,
        'override_spec' => false
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
        'vm_uuid' => 'vm_uuid',
        'availability_zone_reference' => 'availability_zone_reference',
        'clone_target_time' => 'clone_target_time',
        'vm_recovery_point_uuid' => 'vm_recovery_point_uuid',
        'cluster_reference' => 'cluster_reference',
        'override_spec' => 'override_spec'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vm_uuid' => 'setVmUuid',
        'availability_zone_reference' => 'setAvailabilityZoneReference',
        'clone_target_time' => 'setCloneTargetTime',
        'vm_recovery_point_uuid' => 'setVmRecoveryPointUuid',
        'cluster_reference' => 'setClusterReference',
        'override_spec' => 'setOverrideSpec'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vm_uuid' => 'getVmUuid',
        'availability_zone_reference' => 'getAvailabilityZoneReference',
        'clone_target_time' => 'getCloneTargetTime',
        'vm_recovery_point_uuid' => 'getVmRecoveryPointUuid',
        'cluster_reference' => 'getClusterReference',
        'override_spec' => 'getOverrideSpec'
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
        $this->setIfExists('vm_uuid', $data ?? [], null);
        $this->setIfExists('availability_zone_reference', $data ?? [], null);
        $this->setIfExists('clone_target_time', $data ?? [], null);
        $this->setIfExists('vm_recovery_point_uuid', $data ?? [], null);
        $this->setIfExists('cluster_reference', $data ?? [], null);
        $this->setIfExists('override_spec', $data ?? [], null);
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

        if ($this->container['vm_uuid'] === null) {
            $invalidProperties[] = "'vm_uuid' can't be null";
        }
        if (!preg_match("/^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/", $this->container['vm_uuid'])) {
            $invalidProperties[] = "invalid value for 'vm_uuid', must be conform to the pattern /^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/.";
        }

        if ($this->container['availability_zone_reference'] === null) {
            $invalidProperties[] = "'availability_zone_reference' can't be null";
        }
        if ($this->container['clone_target_time'] === null) {
            $invalidProperties[] = "'clone_target_time' can't be null";
        }
        if (!is_null($this->container['vm_recovery_point_uuid']) && !preg_match("/^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/", $this->container['vm_recovery_point_uuid'])) {
            $invalidProperties[] = "invalid value for 'vm_recovery_point_uuid', must be conform to the pattern /^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/.";
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
     * Gets vm_uuid
     *
     * @return string
     */
    public function getVmUuid()
    {
        return $this->container['vm_uuid'];
    }

    /**
     * Sets vm_uuid
     *
     * @param string $vm_uuid UUID of the vm entity for which the recovery point is to be cloned.
     *
     * @return self
     */
    public function setVmUuid($vm_uuid)
    {
        if (is_null($vm_uuid)) {
            throw new \InvalidArgumentException('non-nullable vm_uuid cannot be null');
        }

        if ((!preg_match("/^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/", ObjectSerializer::toString($vm_uuid)))) {
            throw new \InvalidArgumentException("invalid value for \$vm_uuid when calling VmRecoveryPointsRealizeCloneInput., must conform to the pattern /^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/.");
        }

        $this->container['vm_uuid'] = $vm_uuid;

        return $this;
    }

    /**
     * Gets availability_zone_reference
     *
     * @return \OpenAPI\Client\Model\AvailabilityZoneReference
     */
    public function getAvailabilityZoneReference()
    {
        return $this->container['availability_zone_reference'];
    }

    /**
     * Sets availability_zone_reference
     *
     * @param \OpenAPI\Client\Model\AvailabilityZoneReference $availability_zone_reference availability_zone_reference
     *
     * @return self
     */
    public function setAvailabilityZoneReference($availability_zone_reference)
    {
        if (is_null($availability_zone_reference)) {
            throw new \InvalidArgumentException('non-nullable availability_zone_reference cannot be null');
        }
        $this->container['availability_zone_reference'] = $availability_zone_reference;

        return $this;
    }

    /**
     * Gets clone_target_time
     *
     * @return \DateTime
     */
    public function getCloneTargetTime()
    {
        return $this->container['clone_target_time'];
    }

    /**
     * Sets clone_target_time
     *
     * @param \DateTime $clone_target_time The target time of the state that the user wishes to clone to a target site. This is in internet date/time format (RFC 3339). This field is explicitly used for time based replication in high frequency snapshotting and will be ignored for a regular restore.
     *
     * @return self
     */
    public function setCloneTargetTime($clone_target_time)
    {
        if (is_null($clone_target_time)) {
            throw new \InvalidArgumentException('non-nullable clone_target_time cannot be null');
        }
        $this->container['clone_target_time'] = $clone_target_time;

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
     * @param string|null $vm_recovery_point_uuid UUID of the new vm_recovery_point that will be created.
     *
     * @return self
     */
    public function setVmRecoveryPointUuid($vm_recovery_point_uuid)
    {
        if (is_null($vm_recovery_point_uuid)) {
            throw new \InvalidArgumentException('non-nullable vm_recovery_point_uuid cannot be null');
        }

        if ((!preg_match("/^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/", ObjectSerializer::toString($vm_recovery_point_uuid)))) {
            throw new \InvalidArgumentException("invalid value for \$vm_recovery_point_uuid when calling VmRecoveryPointsRealizeCloneInput., must conform to the pattern /^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/.");
        }

        $this->container['vm_recovery_point_uuid'] = $vm_recovery_point_uuid;

        return $this;
    }

    /**
     * Gets cluster_reference
     *
     * @return \OpenAPI\Client\Model\ClusterReference|null
     */
    public function getClusterReference()
    {
        return $this->container['cluster_reference'];
    }

    /**
     * Sets cluster_reference
     *
     * @param \OpenAPI\Client\Model\ClusterReference|null $cluster_reference cluster_reference
     *
     * @return self
     */
    public function setClusterReference($cluster_reference)
    {
        if (is_null($cluster_reference)) {
            throw new \InvalidArgumentException('non-nullable cluster_reference cannot be null');
        }
        $this->container['cluster_reference'] = $cluster_reference;

        return $this;
    }

    /**
     * Gets override_spec
     *
     * @return \OpenAPI\Client\Model\VmRecoveryPointsOverrideSpec|null
     */
    public function getOverrideSpec()
    {
        return $this->container['override_spec'];
    }

    /**
     * Sets override_spec
     *
     * @param \OpenAPI\Client\Model\VmRecoveryPointsOverrideSpec|null $override_spec override_spec
     *
     * @return self
     */
    public function setOverrideSpec($override_spec)
    {
        if (is_null($override_spec)) {
            throw new \InvalidArgumentException('non-nullable override_spec cannot be null');
        }
        $this->container['override_spec'] = $override_spec;

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

