<?php
/**
 * VmRecoveryPointRealizeRestoreInput
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
 * VmRecoveryPointRealizeRestoreInput Class Doc Comment
 *
 * @category Class
 * @description Input object for the restore API of the recovery points. User can provide optional UUID of the vm that will be created as a result of this operation.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class VmRecoveryPointRealizeRestoreInput implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'vm_recovery_point_realize_restore_input';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cluster_uuid' => 'string',
        'restore_target_time' => '\DateTime',
        'vm_override_spec' => '\OpenAPI\Client\Model\VmRestoreOverrideSpec',
        'vm_uuid' => 'string',
        'metadata' => '\OpenAPI\Client\Model\MetadataOfTheRestoredVm'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cluster_uuid' => 'UUID',
        'restore_target_time' => 'date-time',
        'vm_override_spec' => null,
        'vm_uuid' => 'UUID',
        'metadata' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cluster_uuid' => false,
        'restore_target_time' => false,
        'vm_override_spec' => false,
        'vm_uuid' => false,
        'metadata' => false
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
        'cluster_uuid' => 'cluster_uuid',
        'restore_target_time' => 'restore_target_time',
        'vm_override_spec' => 'vm_override_spec',
        'vm_uuid' => 'vm_uuid',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cluster_uuid' => 'setClusterUuid',
        'restore_target_time' => 'setRestoreTargetTime',
        'vm_override_spec' => 'setVmOverrideSpec',
        'vm_uuid' => 'setVmUuid',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cluster_uuid' => 'getClusterUuid',
        'restore_target_time' => 'getRestoreTargetTime',
        'vm_override_spec' => 'getVmOverrideSpec',
        'vm_uuid' => 'getVmUuid',
        'metadata' => 'getMetadata'
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
        $this->setIfExists('cluster_uuid', $data ?? [], null);
        $this->setIfExists('restore_target_time', $data ?? [], null);
        $this->setIfExists('vm_override_spec', $data ?? [], null);
        $this->setIfExists('vm_uuid', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
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

        if (!is_null($this->container['cluster_uuid']) && !preg_match("/^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/", $this->container['cluster_uuid'])) {
            $invalidProperties[] = "invalid value for 'cluster_uuid', must be conform to the pattern /^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/.";
        }

        if ($this->container['restore_target_time'] === null) {
            $invalidProperties[] = "'restore_target_time' can't be null";
        }
        if ($this->container['vm_uuid'] === null) {
            $invalidProperties[] = "'vm_uuid' can't be null";
        }
        if (!preg_match("/^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/", $this->container['vm_uuid'])) {
            $invalidProperties[] = "invalid value for 'vm_uuid', must be conform to the pattern /^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/.";
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
     * Gets cluster_uuid
     *
     * @return string|null
     */
    public function getClusterUuid()
    {
        return $this->container['cluster_uuid'];
    }

    /**
     * Sets cluster_uuid
     *
     * @param string|null $cluster_uuid UUID of the cluster where recovery point is present. This needs to be provided in case of Self AZ restore.
     *
     * @return self
     */
    public function setClusterUuid($cluster_uuid)
    {
        if (is_null($cluster_uuid)) {
            throw new \InvalidArgumentException('non-nullable cluster_uuid cannot be null');
        }

        if ((!preg_match("/^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/", ObjectSerializer::toString($cluster_uuid)))) {
            throw new \InvalidArgumentException("invalid value for \$cluster_uuid when calling VmRecoveryPointRealizeRestoreInput., must conform to the pattern /^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/.");
        }

        $this->container['cluster_uuid'] = $cluster_uuid;

        return $this;
    }

    /**
     * Gets restore_target_time
     *
     * @return \DateTime
     */
    public function getRestoreTargetTime()
    {
        return $this->container['restore_target_time'];
    }

    /**
     * Sets restore_target_time
     *
     * @param \DateTime $restore_target_time The target time to which the user wishes to restore to. This is in internet date/time format (RFC 3339). This field is explicitly used for time based restore in high frequency snapshotting and will be ignored for a regular restore.
     *
     * @return self
     */
    public function setRestoreTargetTime($restore_target_time)
    {
        if (is_null($restore_target_time)) {
            throw new \InvalidArgumentException('non-nullable restore_target_time cannot be null');
        }
        $this->container['restore_target_time'] = $restore_target_time;

        return $this;
    }

    /**
     * Gets vm_override_spec
     *
     * @return \OpenAPI\Client\Model\VmRestoreOverrideSpec|null
     */
    public function getVmOverrideSpec()
    {
        return $this->container['vm_override_spec'];
    }

    /**
     * Sets vm_override_spec
     *
     * @param \OpenAPI\Client\Model\VmRestoreOverrideSpec|null $vm_override_spec vm_override_spec
     *
     * @return self
     */
    public function setVmOverrideSpec($vm_override_spec)
    {
        if (is_null($vm_override_spec)) {
            throw new \InvalidArgumentException('non-nullable vm_override_spec cannot be null');
        }
        $this->container['vm_override_spec'] = $vm_override_spec;

        return $this;
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
     * @param string $vm_uuid UUID of the vm entity for which the recovery point is to be restored.
     *
     * @return self
     */
    public function setVmUuid($vm_uuid)
    {
        if (is_null($vm_uuid)) {
            throw new \InvalidArgumentException('non-nullable vm_uuid cannot be null');
        }

        if ((!preg_match("/^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/", ObjectSerializer::toString($vm_uuid)))) {
            throw new \InvalidArgumentException("invalid value for \$vm_uuid when calling VmRecoveryPointRealizeRestoreInput., must conform to the pattern /^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/.");
        }

        $this->container['vm_uuid'] = $vm_uuid;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return \OpenAPI\Client\Model\MetadataOfTheRestoredVm|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param \OpenAPI\Client\Model\MetadataOfTheRestoredVm|null $metadata metadata
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (is_null($metadata)) {
            throw new \InvalidArgumentException('non-nullable metadata cannot be null');
        }
        $this->container['metadata'] = $metadata;

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


