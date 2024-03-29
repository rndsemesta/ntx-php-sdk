<?php
/**
 * HostGpu
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
 * HostGpu Class Doc Comment
 *
 * @category Class
 * @description Host GPU.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class HostGpu implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'host_gpu';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'status' => 'string',
        'assignable' => 'bool',
        'vendor' => 'string',
        'name' => 'string',
        'index' => 'int',
        'license_list' => 'string[]',
        'numa_node' => 'int',
        'max_resolution' => 'string',
        'num_vgpus_allocated' => 'int',
        'consumer_reference' => '\OpenAPI\Client\Model\Reference',
        'pci_address' => 'string',
        'fraction' => 'int',
        'mode' => 'string',
        'num_virtual_display_heads' => 'int',
        'guest_driver_version' => 'string',
        'frame_buffer_size_mib' => 'int',
        'device_id' => 'int',
        'max_instances_per_vm' => 'int',
        'uuid' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'status' => null,
        'assignable' => null,
        'vendor' => null,
        'name' => null,
        'index' => 'int32',
        'license_list' => null,
        'numa_node' => 'int32',
        'max_resolution' => null,
        'num_vgpus_allocated' => 'int32',
        'consumer_reference' => null,
        'pci_address' => null,
        'fraction' => 'int32',
        'mode' => null,
        'num_virtual_display_heads' => 'int32',
        'guest_driver_version' => null,
        'frame_buffer_size_mib' => 'int64',
        'device_id' => 'int32',
        'max_instances_per_vm' => 'int64',
        'uuid' => 'UUID'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'status' => false,
        'assignable' => false,
        'vendor' => false,
        'name' => false,
        'index' => false,
        'license_list' => false,
        'numa_node' => false,
        'max_resolution' => false,
        'num_vgpus_allocated' => false,
        'consumer_reference' => false,
        'pci_address' => false,
        'fraction' => false,
        'mode' => false,
        'num_virtual_display_heads' => false,
        'guest_driver_version' => false,
        'frame_buffer_size_mib' => false,
        'device_id' => false,
        'max_instances_per_vm' => false,
        'uuid' => false
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
        'status' => 'status',
        'assignable' => 'assignable',
        'vendor' => 'vendor',
        'name' => 'name',
        'index' => 'index',
        'license_list' => 'license_list',
        'numa_node' => 'numa_node',
        'max_resolution' => 'max_resolution',
        'num_vgpus_allocated' => 'num_vgpus_allocated',
        'consumer_reference' => 'consumer_reference',
        'pci_address' => 'pci_address',
        'fraction' => 'fraction',
        'mode' => 'mode',
        'num_virtual_display_heads' => 'num_virtual_display_heads',
        'guest_driver_version' => 'guest_driver_version',
        'frame_buffer_size_mib' => 'frame_buffer_size_mib',
        'device_id' => 'device_id',
        'max_instances_per_vm' => 'max_instances_per_vm',
        'uuid' => 'uuid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'assignable' => 'setAssignable',
        'vendor' => 'setVendor',
        'name' => 'setName',
        'index' => 'setIndex',
        'license_list' => 'setLicenseList',
        'numa_node' => 'setNumaNode',
        'max_resolution' => 'setMaxResolution',
        'num_vgpus_allocated' => 'setNumVgpusAllocated',
        'consumer_reference' => 'setConsumerReference',
        'pci_address' => 'setPciAddress',
        'fraction' => 'setFraction',
        'mode' => 'setMode',
        'num_virtual_display_heads' => 'setNumVirtualDisplayHeads',
        'guest_driver_version' => 'setGuestDriverVersion',
        'frame_buffer_size_mib' => 'setFrameBufferSizeMib',
        'device_id' => 'setDeviceId',
        'max_instances_per_vm' => 'setMaxInstancesPerVm',
        'uuid' => 'setUuid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'assignable' => 'getAssignable',
        'vendor' => 'getVendor',
        'name' => 'getName',
        'index' => 'getIndex',
        'license_list' => 'getLicenseList',
        'numa_node' => 'getNumaNode',
        'max_resolution' => 'getMaxResolution',
        'num_vgpus_allocated' => 'getNumVgpusAllocated',
        'consumer_reference' => 'getConsumerReference',
        'pci_address' => 'getPciAddress',
        'fraction' => 'getFraction',
        'mode' => 'getMode',
        'num_virtual_display_heads' => 'getNumVirtualDisplayHeads',
        'guest_driver_version' => 'getGuestDriverVersion',
        'frame_buffer_size_mib' => 'getFrameBufferSizeMib',
        'device_id' => 'getDeviceId',
        'max_instances_per_vm' => 'getMaxInstancesPerVm',
        'uuid' => 'getUuid'
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
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('assignable', $data ?? [], null);
        $this->setIfExists('vendor', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('index', $data ?? [], null);
        $this->setIfExists('license_list', $data ?? [], null);
        $this->setIfExists('numa_node', $data ?? [], null);
        $this->setIfExists('max_resolution', $data ?? [], null);
        $this->setIfExists('num_vgpus_allocated', $data ?? [], null);
        $this->setIfExists('consumer_reference', $data ?? [], null);
        $this->setIfExists('pci_address', $data ?? [], null);
        $this->setIfExists('fraction', $data ?? [], null);
        $this->setIfExists('mode', $data ?? [], null);
        $this->setIfExists('num_virtual_display_heads', $data ?? [], null);
        $this->setIfExists('guest_driver_version', $data ?? [], null);
        $this->setIfExists('frame_buffer_size_mib', $data ?? [], null);
        $this->setIfExists('device_id', $data ?? [], null);
        $this->setIfExists('max_instances_per_vm', $data ?? [], null);
        $this->setIfExists('uuid', $data ?? [], null);
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

        if (!is_null($this->container['uuid']) && !preg_match("/^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/", $this->container['uuid'])) {
            $invalidProperties[] = "invalid value for 'uuid', must be conform to the pattern /^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/.";
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
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Current status of the physical GPU.
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets assignable
     *
     * @return bool|null
     */
    public function getAssignable()
    {
        return $this->container['assignable'];
    }

    /**
     * Sets assignable
     *
     * @param bool|null $assignable Whether this vGPU instance can be allocated to a VM.
     *
     * @return self
     */
    public function setAssignable($assignable)
    {
        if (is_null($assignable)) {
            throw new \InvalidArgumentException('non-nullable assignable cannot be null');
        }
        $this->container['assignable'] = $assignable;

        return $this;
    }

    /**
     * Gets vendor
     *
     * @return string|null
     */
    public function getVendor()
    {
        return $this->container['vendor'];
    }

    /**
     * Sets vendor
     *
     * @param string|null $vendor The vendor of the GPU.
     *
     * @return self
     */
    public function setVendor($vendor)
    {
        if (is_null($vendor)) {
            throw new \InvalidArgumentException('non-nullable vendor cannot be null');
        }
        $this->container['vendor'] = $vendor;

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
     * @param string|null $name Name of the host GPU.
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
     * Gets index
     *
     * @return int|null
     */
    public function getIndex()
    {
        return $this->container['index'];
    }

    /**
     * Sets index
     *
     * @param int|null $index The index of the vGPU within physical GPU resource.
     *
     * @return self
     */
    public function setIndex($index)
    {
        if (is_null($index)) {
            throw new \InvalidArgumentException('non-nullable index cannot be null');
        }
        $this->container['index'] = $index;

        return $this;
    }

    /**
     * Gets license_list
     *
     * @return string[]|null
     */
    public function getLicenseList()
    {
        return $this->container['license_list'];
    }

    /**
     * Sets license_list
     *
     * @param string[]|null $license_list List of license types associated with this GPU.
     *
     * @return self
     */
    public function setLicenseList($license_list)
    {
        if (is_null($license_list)) {
            throw new \InvalidArgumentException('non-nullable license_list cannot be null');
        }
        $this->container['license_list'] = $license_list;

        return $this;
    }

    /**
     * Gets numa_node
     *
     * @return int|null
     */
    public function getNumaNode()
    {
        return $this->container['numa_node'];
    }

    /**
     * Sets numa_node
     *
     * @param int|null $numa_node NUMA node this GPU belongs to.
     *
     * @return self
     */
    public function setNumaNode($numa_node)
    {
        if (is_null($numa_node)) {
            throw new \InvalidArgumentException('non-nullable numa_node cannot be null');
        }
        $this->container['numa_node'] = $numa_node;

        return $this;
    }

    /**
     * Gets max_resolution
     *
     * @return string|null
     */
    public function getMaxResolution()
    {
        return $this->container['max_resolution'];
    }

    /**
     * Sets max_resolution
     *
     * @param string|null $max_resolution Maximum resolution per display head.
     *
     * @return self
     */
    public function setMaxResolution($max_resolution)
    {
        if (is_null($max_resolution)) {
            throw new \InvalidArgumentException('non-nullable max_resolution cannot be null');
        }
        $this->container['max_resolution'] = $max_resolution;

        return $this;
    }

    /**
     * Gets num_vgpus_allocated
     *
     * @return int|null
     */
    public function getNumVgpusAllocated()
    {
        return $this->container['num_vgpus_allocated'];
    }

    /**
     * Sets num_vgpus_allocated
     *
     * @param int|null $num_vgpus_allocated The number of vGPU instances allocated for this physical GPU resource.
     *
     * @return self
     */
    public function setNumVgpusAllocated($num_vgpus_allocated)
    {
        if (is_null($num_vgpus_allocated)) {
            throw new \InvalidArgumentException('non-nullable num_vgpus_allocated cannot be null');
        }
        $this->container['num_vgpus_allocated'] = $num_vgpus_allocated;

        return $this;
    }

    /**
     * Gets consumer_reference
     *
     * @return \OpenAPI\Client\Model\Reference|null
     */
    public function getConsumerReference()
    {
        return $this->container['consumer_reference'];
    }

    /**
     * Sets consumer_reference
     *
     * @param \OpenAPI\Client\Model\Reference|null $consumer_reference consumer_reference
     *
     * @return self
     */
    public function setConsumerReference($consumer_reference)
    {
        if (is_null($consumer_reference)) {
            throw new \InvalidArgumentException('non-nullable consumer_reference cannot be null');
        }
        $this->container['consumer_reference'] = $consumer_reference;

        return $this;
    }

    /**
     * Gets pci_address
     *
     * @return string|null
     */
    public function getPciAddress()
    {
        return $this->container['pci_address'];
    }

    /**
     * Sets pci_address
     *
     * @param string|null $pci_address GPU {segment:bus:device:function} (sbdf) address.
     *
     * @return self
     */
    public function setPciAddress($pci_address)
    {
        if (is_null($pci_address)) {
            throw new \InvalidArgumentException('non-nullable pci_address cannot be null');
        }
        $this->container['pci_address'] = $pci_address;

        return $this;
    }

    /**
     * Gets fraction
     *
     * @return int|null
     */
    public function getFraction()
    {
        return $this->container['fraction'];
    }

    /**
     * Sets fraction
     *
     * @param int|null $fraction Fraction of the physical GPU.
     *
     * @return self
     */
    public function setFraction($fraction)
    {
        if (is_null($fraction)) {
            throw new \InvalidArgumentException('non-nullable fraction cannot be null');
        }
        $this->container['fraction'] = $fraction;

        return $this;
    }

    /**
     * Gets mode
     *
     * @return string|null
     */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
     * Sets mode
     *
     * @param string|null $mode The type of this GPU.
     *
     * @return self
     */
    public function setMode($mode)
    {
        if (is_null($mode)) {
            throw new \InvalidArgumentException('non-nullable mode cannot be null');
        }
        $this->container['mode'] = $mode;

        return $this;
    }

    /**
     * Gets num_virtual_display_heads
     *
     * @return int|null
     */
    public function getNumVirtualDisplayHeads()
    {
        return $this->container['num_virtual_display_heads'];
    }

    /**
     * Sets num_virtual_display_heads
     *
     * @param int|null $num_virtual_display_heads Number of supported virtual display heads.
     *
     * @return self
     */
    public function setNumVirtualDisplayHeads($num_virtual_display_heads)
    {
        if (is_null($num_virtual_display_heads)) {
            throw new \InvalidArgumentException('non-nullable num_virtual_display_heads cannot be null');
        }
        $this->container['num_virtual_display_heads'] = $num_virtual_display_heads;

        return $this;
    }

    /**
     * Gets guest_driver_version
     *
     * @return string|null
     */
    public function getGuestDriverVersion()
    {
        return $this->container['guest_driver_version'];
    }

    /**
     * Sets guest_driver_version
     *
     * @param string|null $guest_driver_version Last determined guest driver version.
     *
     * @return self
     */
    public function setGuestDriverVersion($guest_driver_version)
    {
        if (is_null($guest_driver_version)) {
            throw new \InvalidArgumentException('non-nullable guest_driver_version cannot be null');
        }
        $this->container['guest_driver_version'] = $guest_driver_version;

        return $this;
    }

    /**
     * Gets frame_buffer_size_mib
     *
     * @return int|null
     */
    public function getFrameBufferSizeMib()
    {
        return $this->container['frame_buffer_size_mib'];
    }

    /**
     * Sets frame_buffer_size_mib
     *
     * @param int|null $frame_buffer_size_mib GPU frame buffer size in MiB.
     *
     * @return self
     */
    public function setFrameBufferSizeMib($frame_buffer_size_mib)
    {
        if (is_null($frame_buffer_size_mib)) {
            throw new \InvalidArgumentException('non-nullable frame_buffer_size_mib cannot be null');
        }
        $this->container['frame_buffer_size_mib'] = $frame_buffer_size_mib;

        return $this;
    }

    /**
     * Gets device_id
     *
     * @return int|null
     */
    public function getDeviceId()
    {
        return $this->container['device_id'];
    }

    /**
     * Sets device_id
     *
     * @param int|null $device_id The device ID of the GPU.
     *
     * @return self
     */
    public function setDeviceId($device_id)
    {
        if (is_null($device_id)) {
            throw new \InvalidArgumentException('non-nullable device_id cannot be null');
        }
        $this->container['device_id'] = $device_id;

        return $this;
    }

    /**
     * Gets max_instances_per_vm
     *
     * @return int|null
     */
    public function getMaxInstancesPerVm()
    {
        return $this->container['max_instances_per_vm'];
    }

    /**
     * Sets max_instances_per_vm
     *
     * @param int|null $max_instances_per_vm Maximum number of vGPUs of a GPU type assignable to a VM.
     *
     * @return self
     */
    public function setMaxInstancesPerVm($max_instances_per_vm)
    {
        if (is_null($max_instances_per_vm)) {
            throw new \InvalidArgumentException('non-nullable max_instances_per_vm cannot be null');
        }
        $this->container['max_instances_per_vm'] = $max_instances_per_vm;

        return $this;
    }

    /**
     * Gets uuid
     *
     * @return string|null
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string|null $uuid UUID of the GPU.
     *
     * @return self
     */
    public function setUuid($uuid)
    {
        if (is_null($uuid)) {
            throw new \InvalidArgumentException('non-nullable uuid cannot be null');
        }

        if ((!preg_match("/^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/", ObjectSerializer::toString($uuid)))) {
            throw new \InvalidArgumentException("invalid value for \$uuid when calling HostGpu., must conform to the pattern /^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/.");
        }

        $this->container['uuid'] = $uuid;

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


