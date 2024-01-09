<?php
/**
 * RecoveryPointResourceReservationSpecRecoveryPointSpec
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
 * RecoveryPointResourceReservationSpecRecoveryPointSpec Class Doc Comment
 *
 * @category Class
 * @description Recovery point specification.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RecoveryPointResourceReservationSpecRecoveryPointSpec implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'recovery_point_resource_reservation_spec_recovery_point_spec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'vm_recovery_point_reference' => '\OpenAPI\Client\Model\VmRecoveryPointReference',
        'vg_recovery_point_reference' => '\OpenAPI\Client\Model\VgRecoveryPointReference',
        'cluster_reference' => '\OpenAPI\Client\Model\ClusterReference'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'vm_recovery_point_reference' => null,
        'vg_recovery_point_reference' => null,
        'cluster_reference' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'vm_recovery_point_reference' => false,
        'vg_recovery_point_reference' => false,
        'cluster_reference' => false
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
        'vm_recovery_point_reference' => 'vm_recovery_point_reference',
        'vg_recovery_point_reference' => 'vg_recovery_point_reference',
        'cluster_reference' => 'cluster_reference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vm_recovery_point_reference' => 'setVmRecoveryPointReference',
        'vg_recovery_point_reference' => 'setVgRecoveryPointReference',
        'cluster_reference' => 'setClusterReference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vm_recovery_point_reference' => 'getVmRecoveryPointReference',
        'vg_recovery_point_reference' => 'getVgRecoveryPointReference',
        'cluster_reference' => 'getClusterReference'
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
        $this->setIfExists('vm_recovery_point_reference', $data ?? [], null);
        $this->setIfExists('vg_recovery_point_reference', $data ?? [], null);
        $this->setIfExists('cluster_reference', $data ?? [], null);
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
     * Gets vm_recovery_point_reference
     *
     * @return \OpenAPI\Client\Model\VmRecoveryPointReference|null
     */
    public function getVmRecoveryPointReference()
    {
        return $this->container['vm_recovery_point_reference'];
    }

    /**
     * Sets vm_recovery_point_reference
     *
     * @param \OpenAPI\Client\Model\VmRecoveryPointReference|null $vm_recovery_point_reference vm_recovery_point_reference
     *
     * @return self
     */
    public function setVmRecoveryPointReference($vm_recovery_point_reference)
    {
        if (is_null($vm_recovery_point_reference)) {
            throw new \InvalidArgumentException('non-nullable vm_recovery_point_reference cannot be null');
        }
        $this->container['vm_recovery_point_reference'] = $vm_recovery_point_reference;

        return $this;
    }

    /**
     * Gets vg_recovery_point_reference
     *
     * @return \OpenAPI\Client\Model\VgRecoveryPointReference|null
     */
    public function getVgRecoveryPointReference()
    {
        return $this->container['vg_recovery_point_reference'];
    }

    /**
     * Sets vg_recovery_point_reference
     *
     * @param \OpenAPI\Client\Model\VgRecoveryPointReference|null $vg_recovery_point_reference vg_recovery_point_reference
     *
     * @return self
     */
    public function setVgRecoveryPointReference($vg_recovery_point_reference)
    {
        if (is_null($vg_recovery_point_reference)) {
            throw new \InvalidArgumentException('non-nullable vg_recovery_point_reference cannot be null');
        }
        $this->container['vg_recovery_point_reference'] = $vg_recovery_point_reference;

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


