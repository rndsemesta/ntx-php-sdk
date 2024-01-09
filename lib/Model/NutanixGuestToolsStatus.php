<?php
/**
 * NutanixGuestToolsStatus
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
 * NutanixGuestToolsStatus Class Doc Comment
 *
 * @category Class
 * @description Information regarding Nutanix Guest Tools.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NutanixGuestToolsStatus implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'nutanix_guest_tools_status';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'available_version' => 'string',
        'ngt_state' => 'string',
        'iso_mount_state' => 'string',
        'guest_os_version' => 'string',
        'state' => 'string',
        'version' => 'string',
        'enabled_capability_list' => 'string[]',
        'credentials' => '\OpenAPI\Client\Model\Credentials',
        'vss_snapshot_capable' => 'bool',
        'is_reachable' => 'bool',
        'vm_mobility_drivers_installed' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'available_version' => null,
        'ngt_state' => null,
        'iso_mount_state' => null,
        'guest_os_version' => null,
        'state' => null,
        'version' => null,
        'enabled_capability_list' => null,
        'credentials' => null,
        'vss_snapshot_capable' => null,
        'is_reachable' => null,
        'vm_mobility_drivers_installed' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'available_version' => false,
        'ngt_state' => false,
        'iso_mount_state' => false,
        'guest_os_version' => false,
        'state' => false,
        'version' => false,
        'enabled_capability_list' => false,
        'credentials' => false,
        'vss_snapshot_capable' => false,
        'is_reachable' => false,
        'vm_mobility_drivers_installed' => false
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
        'available_version' => 'available_version',
        'ngt_state' => 'ngt_state',
        'iso_mount_state' => 'iso_mount_state',
        'guest_os_version' => 'guest_os_version',
        'state' => 'state',
        'version' => 'version',
        'enabled_capability_list' => 'enabled_capability_list',
        'credentials' => 'credentials',
        'vss_snapshot_capable' => 'vss_snapshot_capable',
        'is_reachable' => 'is_reachable',
        'vm_mobility_drivers_installed' => 'vm_mobility_drivers_installed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'available_version' => 'setAvailableVersion',
        'ngt_state' => 'setNgtState',
        'iso_mount_state' => 'setIsoMountState',
        'guest_os_version' => 'setGuestOsVersion',
        'state' => 'setState',
        'version' => 'setVersion',
        'enabled_capability_list' => 'setEnabledCapabilityList',
        'credentials' => 'setCredentials',
        'vss_snapshot_capable' => 'setVssSnapshotCapable',
        'is_reachable' => 'setIsReachable',
        'vm_mobility_drivers_installed' => 'setVmMobilityDriversInstalled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'available_version' => 'getAvailableVersion',
        'ngt_state' => 'getNgtState',
        'iso_mount_state' => 'getIsoMountState',
        'guest_os_version' => 'getGuestOsVersion',
        'state' => 'getState',
        'version' => 'getVersion',
        'enabled_capability_list' => 'getEnabledCapabilityList',
        'credentials' => 'getCredentials',
        'vss_snapshot_capable' => 'getVssSnapshotCapable',
        'is_reachable' => 'getIsReachable',
        'vm_mobility_drivers_installed' => 'getVmMobilityDriversInstalled'
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
        $this->setIfExists('available_version', $data ?? [], null);
        $this->setIfExists('ngt_state', $data ?? [], null);
        $this->setIfExists('iso_mount_state', $data ?? [], null);
        $this->setIfExists('guest_os_version', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('enabled_capability_list', $data ?? [], null);
        $this->setIfExists('credentials', $data ?? [], null);
        $this->setIfExists('vss_snapshot_capable', $data ?? [], null);
        $this->setIfExists('is_reachable', $data ?? [], null);
        $this->setIfExists('vm_mobility_drivers_installed', $data ?? [], null);
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
     * Gets available_version
     *
     * @return string|null
     */
    public function getAvailableVersion()
    {
        return $this->container['available_version'];
    }

    /**
     * Sets available_version
     *
     * @param string|null $available_version Version of Nutanix Guest Tools available on the cluster.
     *
     * @return self
     */
    public function setAvailableVersion($available_version)
    {
        if (is_null($available_version)) {
            throw new \InvalidArgumentException('non-nullable available_version cannot be null');
        }
        $this->container['available_version'] = $available_version;

        return $this;
    }

    /**
     * Gets ngt_state
     *
     * @return string|null
     */
    public function getNgtState()
    {
        return $this->container['ngt_state'];
    }

    /**
     * Sets ngt_state
     *
     * @param string|null $ngt_state Nutanix guest tools is installed or not.
     *
     * @return self
     */
    public function setNgtState($ngt_state)
    {
        if (is_null($ngt_state)) {
            throw new \InvalidArgumentException('non-nullable ngt_state cannot be null');
        }
        $this->container['ngt_state'] = $ngt_state;

        return $this;
    }

    /**
     * Gets iso_mount_state
     *
     * @return string|null
     */
    public function getIsoMountState()
    {
        return $this->container['iso_mount_state'];
    }

    /**
     * Sets iso_mount_state
     *
     * @param string|null $iso_mount_state Desired mount state of Nutanix Guest Tools ISO.
     *
     * @return self
     */
    public function setIsoMountState($iso_mount_state)
    {
        if (is_null($iso_mount_state)) {
            throw new \InvalidArgumentException('non-nullable iso_mount_state cannot be null');
        }
        $this->container['iso_mount_state'] = $iso_mount_state;

        return $this;
    }

    /**
     * Gets guest_os_version
     *
     * @return string|null
     */
    public function getGuestOsVersion()
    {
        return $this->container['guest_os_version'];
    }

    /**
     * Sets guest_os_version
     *
     * @param string|null $guest_os_version Version of the operating system on the VM.
     *
     * @return self
     */
    public function setGuestOsVersion($guest_os_version)
    {
        if (is_null($guest_os_version)) {
            throw new \InvalidArgumentException('non-nullable guest_os_version cannot be null');
        }
        $this->container['guest_os_version'] = $guest_os_version;

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
     * @param string|null $state Nutanix Guest Tools is enabled or not.
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
     * Gets version
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string|null $version Version of Nutanix Guest Tools installed on the VM.
     *
     * @return self
     */
    public function setVersion($version)
    {
        if (is_null($version)) {
            throw new \InvalidArgumentException('non-nullable version cannot be null');
        }
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets enabled_capability_list
     *
     * @return string[]|null
     */
    public function getEnabledCapabilityList()
    {
        return $this->container['enabled_capability_list'];
    }

    /**
     * Sets enabled_capability_list
     *
     * @param string[]|null $enabled_capability_list Application names that are enabled.
     *
     * @return self
     */
    public function setEnabledCapabilityList($enabled_capability_list)
    {
        if (is_null($enabled_capability_list)) {
            throw new \InvalidArgumentException('non-nullable enabled_capability_list cannot be null');
        }
        $this->container['enabled_capability_list'] = $enabled_capability_list;

        return $this;
    }

    /**
     * Gets credentials
     *
     * @return \OpenAPI\Client\Model\Credentials|null
     */
    public function getCredentials()
    {
        return $this->container['credentials'];
    }

    /**
     * Sets credentials
     *
     * @param \OpenAPI\Client\Model\Credentials|null $credentials credentials
     *
     * @return self
     */
    public function setCredentials($credentials)
    {
        if (is_null($credentials)) {
            throw new \InvalidArgumentException('non-nullable credentials cannot be null');
        }
        $this->container['credentials'] = $credentials;

        return $this;
    }

    /**
     * Gets vss_snapshot_capable
     *
     * @return bool|null
     */
    public function getVssSnapshotCapable()
    {
        return $this->container['vss_snapshot_capable'];
    }

    /**
     * Sets vss_snapshot_capable
     *
     * @param bool|null $vss_snapshot_capable Whether the VM is configured to take VSS snapshots through NGT.
     *
     * @return self
     */
    public function setVssSnapshotCapable($vss_snapshot_capable)
    {
        if (is_null($vss_snapshot_capable)) {
            throw new \InvalidArgumentException('non-nullable vss_snapshot_capable cannot be null');
        }
        $this->container['vss_snapshot_capable'] = $vss_snapshot_capable;

        return $this;
    }

    /**
     * Gets is_reachable
     *
     * @return bool|null
     */
    public function getIsReachable()
    {
        return $this->container['is_reachable'];
    }

    /**
     * Sets is_reachable
     *
     * @param bool|null $is_reachable Communication from VM to CVM is active or not.
     *
     * @return self
     */
    public function setIsReachable($is_reachable)
    {
        if (is_null($is_reachable)) {
            throw new \InvalidArgumentException('non-nullable is_reachable cannot be null');
        }
        $this->container['is_reachable'] = $is_reachable;

        return $this;
    }

    /**
     * Gets vm_mobility_drivers_installed
     *
     * @return bool|null
     */
    public function getVmMobilityDriversInstalled()
    {
        return $this->container['vm_mobility_drivers_installed'];
    }

    /**
     * Sets vm_mobility_drivers_installed
     *
     * @param bool|null $vm_mobility_drivers_installed Whether VM mobility drivers are installed in the VM.
     *
     * @return self
     */
    public function setVmMobilityDriversInstalled($vm_mobility_drivers_installed)
    {
        if (is_null($vm_mobility_drivers_installed)) {
            throw new \InvalidArgumentException('non-nullable vm_mobility_drivers_installed cannot be null');
        }
        $this->container['vm_mobility_drivers_installed'] = $vm_mobility_drivers_installed;

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


