<?php
/**
 * PcVm
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
 * PcVm Class Doc Comment
 *
 * @category Class
 * @description Prism central VM configuration.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PcVm implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'pc_vm';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'vm_name' => 'string',
        'data_disk_size_bytes' => 'int',
        'dns_server_ip_list' => 'string[]',
        'nic_list' => '\OpenAPI\Client\Model\PcVmNicConfiguration[]',
        'container_uuid' => 'string',
        'num_sockets' => 'int',
        'memory_size_bytes' => 'int',
        'status' => 'string',
        'power_state' => 'string',
        'vm_uuid' => 'string',
        'ntp_server_list' => 'string[]',
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
        'vm_name' => null,
        'data_disk_size_bytes' => 'int64',
        'dns_server_ip_list' => null,
        'nic_list' => null,
        'container_uuid' => 'UUID',
        'num_sockets' => 'int64',
        'memory_size_bytes' => 'int64',
        'status' => null,
        'power_state' => null,
        'vm_uuid' => 'UUID',
        'ntp_server_list' => null,
        'cluster_reference' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'vm_name' => false,
        'data_disk_size_bytes' => false,
        'dns_server_ip_list' => false,
        'nic_list' => false,
        'container_uuid' => false,
        'num_sockets' => false,
        'memory_size_bytes' => false,
        'status' => false,
        'power_state' => false,
        'vm_uuid' => false,
        'ntp_server_list' => false,
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
        'vm_name' => 'vm_name',
        'data_disk_size_bytes' => 'data_disk_size_bytes',
        'dns_server_ip_list' => 'dns_server_ip_list',
        'nic_list' => 'nic_list',
        'container_uuid' => 'container_uuid',
        'num_sockets' => 'num_sockets',
        'memory_size_bytes' => 'memory_size_bytes',
        'status' => 'status',
        'power_state' => 'power_state',
        'vm_uuid' => 'vm_uuid',
        'ntp_server_list' => 'ntp_server_list',
        'cluster_reference' => 'cluster_reference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vm_name' => 'setVmName',
        'data_disk_size_bytes' => 'setDataDiskSizeBytes',
        'dns_server_ip_list' => 'setDnsServerIpList',
        'nic_list' => 'setNicList',
        'container_uuid' => 'setContainerUuid',
        'num_sockets' => 'setNumSockets',
        'memory_size_bytes' => 'setMemorySizeBytes',
        'status' => 'setStatus',
        'power_state' => 'setPowerState',
        'vm_uuid' => 'setVmUuid',
        'ntp_server_list' => 'setNtpServerList',
        'cluster_reference' => 'setClusterReference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vm_name' => 'getVmName',
        'data_disk_size_bytes' => 'getDataDiskSizeBytes',
        'dns_server_ip_list' => 'getDnsServerIpList',
        'nic_list' => 'getNicList',
        'container_uuid' => 'getContainerUuid',
        'num_sockets' => 'getNumSockets',
        'memory_size_bytes' => 'getMemorySizeBytes',
        'status' => 'getStatus',
        'power_state' => 'getPowerState',
        'vm_uuid' => 'getVmUuid',
        'ntp_server_list' => 'getNtpServerList',
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
        $this->setIfExists('vm_name', $data ?? [], null);
        $this->setIfExists('data_disk_size_bytes', $data ?? [], null);
        $this->setIfExists('dns_server_ip_list', $data ?? [], null);
        $this->setIfExists('nic_list', $data ?? [], null);
        $this->setIfExists('container_uuid', $data ?? [], null);
        $this->setIfExists('num_sockets', $data ?? [], null);
        $this->setIfExists('memory_size_bytes', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('power_state', $data ?? [], null);
        $this->setIfExists('vm_uuid', $data ?? [], null);
        $this->setIfExists('ntp_server_list', $data ?? [], null);
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

        if ($this->container['vm_name'] === null) {
            $invalidProperties[] = "'vm_name' can't be null";
        }
        if ((mb_strlen($this->container['vm_name']) > 64)) {
            $invalidProperties[] = "invalid value for 'vm_name', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['data_disk_size_bytes'] === null) {
            $invalidProperties[] = "'data_disk_size_bytes' can't be null";
        }
        if ($this->container['nic_list'] === null) {
            $invalidProperties[] = "'nic_list' can't be null";
        }
        if (!is_null($this->container['container_uuid']) && !preg_match("/^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/", $this->container['container_uuid'])) {
            $invalidProperties[] = "invalid value for 'container_uuid', must be conform to the pattern /^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/.";
        }

        if ($this->container['num_sockets'] === null) {
            $invalidProperties[] = "'num_sockets' can't be null";
        }
        if ($this->container['memory_size_bytes'] === null) {
            $invalidProperties[] = "'memory_size_bytes' can't be null";
        }
        if (($this->container['memory_size_bytes'] < 8589934592)) {
            $invalidProperties[] = "invalid value for 'memory_size_bytes', must be bigger than or equal to 8589934592.";
        }

        if (!is_null($this->container['vm_uuid']) && !preg_match("/^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/", $this->container['vm_uuid'])) {
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
     * Gets vm_name
     *
     * @return string
     */
    public function getVmName()
    {
        return $this->container['vm_name'];
    }

    /**
     * Sets vm_name
     *
     * @param string $vm_name VM name.
     *
     * @return self
     */
    public function setVmName($vm_name)
    {
        if (is_null($vm_name)) {
            throw new \InvalidArgumentException('non-nullable vm_name cannot be null');
        }
        if ((mb_strlen($vm_name) > 64)) {
            throw new \InvalidArgumentException('invalid length for $vm_name when calling PcVm., must be smaller than or equal to 64.');
        }

        $this->container['vm_name'] = $vm_name;

        return $this;
    }

    /**
     * Gets data_disk_size_bytes
     *
     * @return int
     */
    public function getDataDiskSizeBytes()
    {
        return $this->container['data_disk_size_bytes'];
    }

    /**
     * Sets data_disk_size_bytes
     *
     * @param int $data_disk_size_bytes Data disk size in bytes.
     *
     * @return self
     */
    public function setDataDiskSizeBytes($data_disk_size_bytes)
    {
        if (is_null($data_disk_size_bytes)) {
            throw new \InvalidArgumentException('non-nullable data_disk_size_bytes cannot be null');
        }
        $this->container['data_disk_size_bytes'] = $data_disk_size_bytes;

        return $this;
    }

    /**
     * Gets dns_server_ip_list
     *
     * @return string[]|null
     */
    public function getDnsServerIpList()
    {
        return $this->container['dns_server_ip_list'];
    }

    /**
     * Sets dns_server_ip_list
     *
     * @param string[]|null $dns_server_ip_list List of DNS IP addresses.
     *
     * @return self
     */
    public function setDnsServerIpList($dns_server_ip_list)
    {
        if (is_null($dns_server_ip_list)) {
            throw new \InvalidArgumentException('non-nullable dns_server_ip_list cannot be null');
        }
        $this->container['dns_server_ip_list'] = $dns_server_ip_list;

        return $this;
    }

    /**
     * Gets nic_list
     *
     * @return \OpenAPI\Client\Model\PcVmNicConfiguration[]
     */
    public function getNicList()
    {
        return $this->container['nic_list'];
    }

    /**
     * Sets nic_list
     *
     * @param \OpenAPI\Client\Model\PcVmNicConfiguration[] $nic_list nic_list
     *
     * @return self
     */
    public function setNicList($nic_list)
    {
        if (is_null($nic_list)) {
            throw new \InvalidArgumentException('non-nullable nic_list cannot be null');
        }
        $this->container['nic_list'] = $nic_list;

        return $this;
    }

    /**
     * Gets container_uuid
     *
     * @return string|null
     */
    public function getContainerUuid()
    {
        return $this->container['container_uuid'];
    }

    /**
     * Sets container_uuid
     *
     * @param string|null $container_uuid Container uuid.
     *
     * @return self
     */
    public function setContainerUuid($container_uuid)
    {
        if (is_null($container_uuid)) {
            throw new \InvalidArgumentException('non-nullable container_uuid cannot be null');
        }

        if ((!preg_match("/^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/", ObjectSerializer::toString($container_uuid)))) {
            throw new \InvalidArgumentException("invalid value for \$container_uuid when calling PcVm., must conform to the pattern /^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/.");
        }

        $this->container['container_uuid'] = $container_uuid;

        return $this;
    }

    /**
     * Gets num_sockets
     *
     * @return int
     */
    public function getNumSockets()
    {
        return $this->container['num_sockets'];
    }

    /**
     * Sets num_sockets
     *
     * @param int $num_sockets Number of sockets allocated per VM.
     *
     * @return self
     */
    public function setNumSockets($num_sockets)
    {
        if (is_null($num_sockets)) {
            throw new \InvalidArgumentException('non-nullable num_sockets cannot be null');
        }
        $this->container['num_sockets'] = $num_sockets;

        return $this;
    }

    /**
     * Gets memory_size_bytes
     *
     * @return int
     */
    public function getMemorySizeBytes()
    {
        return $this->container['memory_size_bytes'];
    }

    /**
     * Sets memory_size_bytes
     *
     * @param int $memory_size_bytes Memory in bytes.
     *
     * @return self
     */
    public function setMemorySizeBytes($memory_size_bytes)
    {
        if (is_null($memory_size_bytes)) {
            throw new \InvalidArgumentException('non-nullable memory_size_bytes cannot be null');
        }

        if (($memory_size_bytes < 8589934592)) {
            throw new \InvalidArgumentException('invalid value for $memory_size_bytes when calling PcVm., must be bigger than or equal to 8589934592.');
        }

        $this->container['memory_size_bytes'] = $memory_size_bytes;

        return $this;
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
     * @param string|null $status Prism central VM status
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
     * Gets power_state
     *
     * @return string|null
     */
    public function getPowerState()
    {
        return $this->container['power_state'];
    }

    /**
     * Sets power_state
     *
     * @param string|null $power_state The current power state of the VM.
     *
     * @return self
     */
    public function setPowerState($power_state)
    {
        if (is_null($power_state)) {
            throw new \InvalidArgumentException('non-nullable power_state cannot be null');
        }
        $this->container['power_state'] = $power_state;

        return $this;
    }

    /**
     * Gets vm_uuid
     *
     * @return string|null
     */
    public function getVmUuid()
    {
        return $this->container['vm_uuid'];
    }

    /**
     * Sets vm_uuid
     *
     * @param string|null $vm_uuid VM uuid.
     *
     * @return self
     */
    public function setVmUuid($vm_uuid)
    {
        if (is_null($vm_uuid)) {
            throw new \InvalidArgumentException('non-nullable vm_uuid cannot be null');
        }

        if ((!preg_match("/^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/", ObjectSerializer::toString($vm_uuid)))) {
            throw new \InvalidArgumentException("invalid value for \$vm_uuid when calling PcVm., must conform to the pattern /^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/.");
        }

        $this->container['vm_uuid'] = $vm_uuid;

        return $this;
    }

    /**
     * Gets ntp_server_list
     *
     * @return string[]|null
     */
    public function getNtpServerList()
    {
        return $this->container['ntp_server_list'];
    }

    /**
     * Sets ntp_server_list
     *
     * @param string[]|null $ntp_server_list List of NTP servers.
     *
     * @return self
     */
    public function setNtpServerList($ntp_server_list)
    {
        if (is_null($ntp_server_list)) {
            throw new \InvalidArgumentException('non-nullable ntp_server_list cannot be null');
        }
        $this->container['ntp_server_list'] = $ntp_server_list;

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

