<?php
/**
 * VmSpec
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
 * VmSpec Class Doc Comment
 *
 * @category Class
 * @description Details of the VM.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class VmSpec implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'vm_spec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'uuid' => 'string',
        'num_cores_per_vcpu' => 'int',
        'vm_disk_list' => '\OpenAPI\Client\Model\DiskSpec[]',
        'vm_recovery_point_reference' => '\OpenAPI\Client\Model\VmRecoveryPointReference',
        'num_vcpus' => 'int',
        'memory_bytes' => 'int',
        'virtual_hardware_version' => 'int',
        'source_vm_uuid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'uuid' => 'UUID',
        'num_cores_per_vcpu' => null,
        'vm_disk_list' => null,
        'vm_recovery_point_reference' => null,
        'num_vcpus' => null,
        'memory_bytes' => null,
        'virtual_hardware_version' => null,
        'source_vm_uuid' => 'UUID'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'uuid' => false,
        'num_cores_per_vcpu' => false,
        'vm_disk_list' => false,
        'vm_recovery_point_reference' => false,
        'num_vcpus' => false,
        'memory_bytes' => false,
        'virtual_hardware_version' => false,
        'source_vm_uuid' => false
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
        'uuid' => 'uuid',
        'num_cores_per_vcpu' => 'num_cores_per_vcpu',
        'vm_disk_list' => 'vm_disk_list',
        'vm_recovery_point_reference' => 'vm_recovery_point_reference',
        'num_vcpus' => 'num_vcpus',
        'memory_bytes' => 'memory_bytes',
        'virtual_hardware_version' => 'virtual_hardware_version',
        'source_vm_uuid' => 'source_vm_uuid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uuid' => 'setUuid',
        'num_cores_per_vcpu' => 'setNumCoresPerVcpu',
        'vm_disk_list' => 'setVmDiskList',
        'vm_recovery_point_reference' => 'setVmRecoveryPointReference',
        'num_vcpus' => 'setNumVcpus',
        'memory_bytes' => 'setMemoryBytes',
        'virtual_hardware_version' => 'setVirtualHardwareVersion',
        'source_vm_uuid' => 'setSourceVmUuid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uuid' => 'getUuid',
        'num_cores_per_vcpu' => 'getNumCoresPerVcpu',
        'vm_disk_list' => 'getVmDiskList',
        'vm_recovery_point_reference' => 'getVmRecoveryPointReference',
        'num_vcpus' => 'getNumVcpus',
        'memory_bytes' => 'getMemoryBytes',
        'virtual_hardware_version' => 'getVirtualHardwareVersion',
        'source_vm_uuid' => 'getSourceVmUuid'
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
        $this->setIfExists('uuid', $data ?? [], null);
        $this->setIfExists('num_cores_per_vcpu', $data ?? [], null);
        $this->setIfExists('vm_disk_list', $data ?? [], null);
        $this->setIfExists('vm_recovery_point_reference', $data ?? [], null);
        $this->setIfExists('num_vcpus', $data ?? [], null);
        $this->setIfExists('memory_bytes', $data ?? [], null);
        $this->setIfExists('virtual_hardware_version', $data ?? [], null);
        $this->setIfExists('source_vm_uuid', $data ?? [], null);
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

        if ($this->container['uuid'] === null) {
            $invalidProperties[] = "'uuid' can't be null";
        }
        if (!preg_match("/^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/", $this->container['uuid'])) {
            $invalidProperties[] = "invalid value for 'uuid', must be conform to the pattern /^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/.";
        }

        if (!is_null($this->container['source_vm_uuid']) && !preg_match("/^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/", $this->container['source_vm_uuid'])) {
            $invalidProperties[] = "invalid value for 'source_vm_uuid', must be conform to the pattern /^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/.";
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
     * Gets uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string $uuid The UUID which is used to uniquely identify this VM.
     *
     * @return self
     */
    public function setUuid($uuid)
    {
        if (is_null($uuid)) {
            throw new \InvalidArgumentException('non-nullable uuid cannot be null');
        }

        if ((!preg_match("/^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/", ObjectSerializer::toString($uuid)))) {
            throw new \InvalidArgumentException("invalid value for \$uuid when calling VmSpec., must conform to the pattern /^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/.");
        }

        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets num_cores_per_vcpu
     *
     * @return int|null
     */
    public function getNumCoresPerVcpu()
    {
        return $this->container['num_cores_per_vcpu'];
    }

    /**
     * Sets num_cores_per_vcpu
     *
     * @param int|null $num_cores_per_vcpu Number of cores per vCPU.
     *
     * @return self
     */
    public function setNumCoresPerVcpu($num_cores_per_vcpu)
    {
        if (is_null($num_cores_per_vcpu)) {
            throw new \InvalidArgumentException('non-nullable num_cores_per_vcpu cannot be null');
        }
        $this->container['num_cores_per_vcpu'] = $num_cores_per_vcpu;

        return $this;
    }

    /**
     * Gets vm_disk_list
     *
     * @return \OpenAPI\Client\Model\DiskSpec[]|null
     */
    public function getVmDiskList()
    {
        return $this->container['vm_disk_list'];
    }

    /**
     * Sets vm_disk_list
     *
     * @param \OpenAPI\Client\Model\DiskSpec[]|null $vm_disk_list List of associated VM virtual disks.
     *
     * @return self
     */
    public function setVmDiskList($vm_disk_list)
    {
        if (is_null($vm_disk_list)) {
            throw new \InvalidArgumentException('non-nullable vm_disk_list cannot be null');
        }
        $this->container['vm_disk_list'] = $vm_disk_list;

        return $this;
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
     * Gets num_vcpus
     *
     * @return int|null
     */
    public function getNumVcpus()
    {
        return $this->container['num_vcpus'];
    }

    /**
     * Sets num_vcpus
     *
     * @param int|null $num_vcpus Number of vCPUs needed.
     *
     * @return self
     */
    public function setNumVcpus($num_vcpus)
    {
        if (is_null($num_vcpus)) {
            throw new \InvalidArgumentException('non-nullable num_vcpus cannot be null');
        }
        $this->container['num_vcpus'] = $num_vcpus;

        return $this;
    }

    /**
     * Gets memory_bytes
     *
     * @return int|null
     */
    public function getMemoryBytes()
    {
        return $this->container['memory_bytes'];
    }

    /**
     * Sets memory_bytes
     *
     * @param int|null $memory_bytes Amount of memory needed in bytes.
     *
     * @return self
     */
    public function setMemoryBytes($memory_bytes)
    {
        if (is_null($memory_bytes)) {
            throw new \InvalidArgumentException('non-nullable memory_bytes cannot be null');
        }
        $this->container['memory_bytes'] = $memory_bytes;

        return $this;
    }

    /**
     * Gets virtual_hardware_version
     *
     * @return int|null
     */
    public function getVirtualHardwareVersion()
    {
        return $this->container['virtual_hardware_version'];
    }

    /**
     * Sets virtual_hardware_version
     *
     * @param int|null $virtual_hardware_version Virtual hardware version of the VM.
     *
     * @return self
     */
    public function setVirtualHardwareVersion($virtual_hardware_version)
    {
        if (is_null($virtual_hardware_version)) {
            throw new \InvalidArgumentException('non-nullable virtual_hardware_version cannot be null');
        }
        $this->container['virtual_hardware_version'] = $virtual_hardware_version;

        return $this;
    }

    /**
     * Gets source_vm_uuid
     *
     * @return string|null
     */
    public function getSourceVmUuid()
    {
        return $this->container['source_vm_uuid'];
    }

    /**
     * Sets source_vm_uuid
     *
     * @param string|null $source_vm_uuid Source VM UUID of which this VM is clone of.
     *
     * @return self
     */
    public function setSourceVmUuid($source_vm_uuid)
    {
        if (is_null($source_vm_uuid)) {
            throw new \InvalidArgumentException('non-nullable source_vm_uuid cannot be null');
        }

        if ((!preg_match("/^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/", ObjectSerializer::toString($source_vm_uuid)))) {
            throw new \InvalidArgumentException("invalid value for \$source_vm_uuid when calling VmSpec., must conform to the pattern /^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/.");
        }

        $this->container['source_vm_uuid'] = $source_vm_uuid;

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


