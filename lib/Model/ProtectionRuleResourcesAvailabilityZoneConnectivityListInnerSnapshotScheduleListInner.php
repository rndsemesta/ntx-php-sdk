<?php
/**
 * ProtectionRuleResourcesAvailabilityZoneConnectivityListInnerSnapshotScheduleListInner
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
 * ProtectionRuleResourcesAvailabilityZoneConnectivityListInnerSnapshotScheduleListInner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ProtectionRuleResourcesAvailabilityZoneConnectivityListInnerSnapshotScheduleListInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'protection_rule_resources_availability_zone_connectivity_list_inner_snapshot_schedule_list_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'recovery_point_objective_secs' => 'int',
        'local_snapshot_retention_policy' => '\OpenAPI\Client\Model\SnapshotRetentionPolicy',
        'auto_suspend_timeout_secs' => 'int',
        'snapshot_type' => 'string',
        'remote_snapshot_retention_policy' => '\OpenAPI\Client\Model\SnapshotRetentionPolicy'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'recovery_point_objective_secs' => 'int32',
        'local_snapshot_retention_policy' => null,
        'auto_suspend_timeout_secs' => 'int32',
        'snapshot_type' => null,
        'remote_snapshot_retention_policy' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'recovery_point_objective_secs' => false,
        'local_snapshot_retention_policy' => false,
        'auto_suspend_timeout_secs' => false,
        'snapshot_type' => false,
        'remote_snapshot_retention_policy' => false
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
        'recovery_point_objective_secs' => 'recovery_point_objective_secs',
        'local_snapshot_retention_policy' => 'local_snapshot_retention_policy',
        'auto_suspend_timeout_secs' => 'auto_suspend_timeout_secs',
        'snapshot_type' => 'snapshot_type',
        'remote_snapshot_retention_policy' => 'remote_snapshot_retention_policy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'recovery_point_objective_secs' => 'setRecoveryPointObjectiveSecs',
        'local_snapshot_retention_policy' => 'setLocalSnapshotRetentionPolicy',
        'auto_suspend_timeout_secs' => 'setAutoSuspendTimeoutSecs',
        'snapshot_type' => 'setSnapshotType',
        'remote_snapshot_retention_policy' => 'setRemoteSnapshotRetentionPolicy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'recovery_point_objective_secs' => 'getRecoveryPointObjectiveSecs',
        'local_snapshot_retention_policy' => 'getLocalSnapshotRetentionPolicy',
        'auto_suspend_timeout_secs' => 'getAutoSuspendTimeoutSecs',
        'snapshot_type' => 'getSnapshotType',
        'remote_snapshot_retention_policy' => 'getRemoteSnapshotRetentionPolicy'
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
        $this->setIfExists('recovery_point_objective_secs', $data ?? [], null);
        $this->setIfExists('local_snapshot_retention_policy', $data ?? [], null);
        $this->setIfExists('auto_suspend_timeout_secs', $data ?? [], null);
        $this->setIfExists('snapshot_type', $data ?? [], null);
        $this->setIfExists('remote_snapshot_retention_policy', $data ?? [], null);
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

        if ($this->container['recovery_point_objective_secs'] === null) {
            $invalidProperties[] = "'recovery_point_objective_secs' can't be null";
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
     * Gets recovery_point_objective_secs
     *
     * @return int
     */
    public function getRecoveryPointObjectiveSecs()
    {
        return $this->container['recovery_point_objective_secs'];
    }

    /**
     * Sets recovery_point_objective_secs
     *
     * @param int $recovery_point_objective_secs A recovery point objective (RPO) is the maximum acceptable amount of data loss. RPO is measured in time (in seconds) and then dictates disaster recovery procedures. For example, if the RPO is set to 30 minutes, then a backup of the entity is required to be done every 30 minutes.
     *
     * @return self
     */
    public function setRecoveryPointObjectiveSecs($recovery_point_objective_secs)
    {
        if (is_null($recovery_point_objective_secs)) {
            throw new \InvalidArgumentException('non-nullable recovery_point_objective_secs cannot be null');
        }
        $this->container['recovery_point_objective_secs'] = $recovery_point_objective_secs;

        return $this;
    }

    /**
     * Gets local_snapshot_retention_policy
     *
     * @return \OpenAPI\Client\Model\SnapshotRetentionPolicy|null
     */
    public function getLocalSnapshotRetentionPolicy()
    {
        return $this->container['local_snapshot_retention_policy'];
    }

    /**
     * Sets local_snapshot_retention_policy
     *
     * @param \OpenAPI\Client\Model\SnapshotRetentionPolicy|null $local_snapshot_retention_policy local_snapshot_retention_policy
     *
     * @return self
     */
    public function setLocalSnapshotRetentionPolicy($local_snapshot_retention_policy)
    {
        if (is_null($local_snapshot_retention_policy)) {
            throw new \InvalidArgumentException('non-nullable local_snapshot_retention_policy cannot be null');
        }
        $this->container['local_snapshot_retention_policy'] = $local_snapshot_retention_policy;

        return $this;
    }

    /**
     * Gets auto_suspend_timeout_secs
     *
     * @return int|null
     */
    public function getAutoSuspendTimeoutSecs()
    {
        return $this->container['auto_suspend_timeout_secs'];
    }

    /**
     * Sets auto_suspend_timeout_secs
     *
     * @param int|null $auto_suspend_timeout_secs Auto suspend timeout in case of connection failure between the sites. If not set, then policy will not be suspended in case of site connection failure.
     *
     * @return self
     */
    public function setAutoSuspendTimeoutSecs($auto_suspend_timeout_secs)
    {
        if (is_null($auto_suspend_timeout_secs)) {
            throw new \InvalidArgumentException('non-nullable auto_suspend_timeout_secs cannot be null');
        }
        $this->container['auto_suspend_timeout_secs'] = $auto_suspend_timeout_secs;

        return $this;
    }

    /**
     * Gets snapshot_type
     *
     * @return string|null
     */
    public function getSnapshotType()
    {
        return $this->container['snapshot_type'];
    }

    /**
     * Sets snapshot_type
     *
     * @param string|null $snapshot_type Crash consistent or Application Consistent snapshot
     *
     * @return self
     */
    public function setSnapshotType($snapshot_type)
    {
        if (is_null($snapshot_type)) {
            throw new \InvalidArgumentException('non-nullable snapshot_type cannot be null');
        }
        $this->container['snapshot_type'] = $snapshot_type;

        return $this;
    }

    /**
     * Gets remote_snapshot_retention_policy
     *
     * @return \OpenAPI\Client\Model\SnapshotRetentionPolicy|null
     */
    public function getRemoteSnapshotRetentionPolicy()
    {
        return $this->container['remote_snapshot_retention_policy'];
    }

    /**
     * Sets remote_snapshot_retention_policy
     *
     * @param \OpenAPI\Client\Model\SnapshotRetentionPolicy|null $remote_snapshot_retention_policy remote_snapshot_retention_policy
     *
     * @return self
     */
    public function setRemoteSnapshotRetentionPolicy($remote_snapshot_retention_policy)
    {
        if (is_null($remote_snapshot_retention_policy)) {
            throw new \InvalidArgumentException('non-nullable remote_snapshot_retention_policy cannot be null');
        }
        $this->container['remote_snapshot_retention_policy'] = $remote_snapshot_retention_policy;

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


