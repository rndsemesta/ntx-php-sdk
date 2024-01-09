<?php
/**
 * PrismCentralResources
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
 * PrismCentralResources Class Doc Comment
 *
 * @category Class
 * @description Prism central deployment resources.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PrismCentralResources implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'prism_central_resources';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'should_auto_register' => 'bool',
        'initial_password' => 'string',
        'cmsp_config' => '\OpenAPI\Client\Model\CmspConfig',
        'pc_vm_list' => '\OpenAPI\Client\Model\PcVm[]',
        'version' => 'string',
        'virtual_ip' => 'string',
        'cluster_uuid' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'should_auto_register' => null,
        'initial_password' => 'password',
        'cmsp_config' => null,
        'pc_vm_list' => null,
        'version' => null,
        'virtual_ip' => null,
        'cluster_uuid' => 'UUID',
        'type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'should_auto_register' => false,
        'initial_password' => false,
        'cmsp_config' => false,
        'pc_vm_list' => false,
        'version' => false,
        'virtual_ip' => false,
        'cluster_uuid' => false,
        'type' => false
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
        'should_auto_register' => 'should_auto_register',
        'initial_password' => 'initial_password',
        'cmsp_config' => 'cmsp_config',
        'pc_vm_list' => 'pc_vm_list',
        'version' => 'version',
        'virtual_ip' => 'virtual_ip',
        'cluster_uuid' => 'cluster_uuid',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'should_auto_register' => 'setShouldAutoRegister',
        'initial_password' => 'setInitialPassword',
        'cmsp_config' => 'setCmspConfig',
        'pc_vm_list' => 'setPcVmList',
        'version' => 'setVersion',
        'virtual_ip' => 'setVirtualIp',
        'cluster_uuid' => 'setClusterUuid',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'should_auto_register' => 'getShouldAutoRegister',
        'initial_password' => 'getInitialPassword',
        'cmsp_config' => 'getCmspConfig',
        'pc_vm_list' => 'getPcVmList',
        'version' => 'getVersion',
        'virtual_ip' => 'getVirtualIp',
        'cluster_uuid' => 'getClusterUuid',
        'type' => 'getType'
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
        $this->setIfExists('should_auto_register', $data ?? [], false);
        $this->setIfExists('initial_password', $data ?? [], null);
        $this->setIfExists('cmsp_config', $data ?? [], null);
        $this->setIfExists('pc_vm_list', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('virtual_ip', $data ?? [], null);
        $this->setIfExists('cluster_uuid', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], 'PC');
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

        if (!is_null($this->container['initial_password']) && (mb_strlen($this->container['initial_password']) > 50)) {
            $invalidProperties[] = "invalid value for 'initial_password', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['initial_password']) && (mb_strlen($this->container['initial_password']) < 1)) {
            $invalidProperties[] = "invalid value for 'initial_password', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['pc_vm_list'] === null) {
            $invalidProperties[] = "'pc_vm_list' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
        }
        if (!is_null($this->container['virtual_ip']) && !preg_match("/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/", $this->container['virtual_ip'])) {
            $invalidProperties[] = "invalid value for 'virtual_ip', must be conform to the pattern /^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/.";
        }

        if (!is_null($this->container['cluster_uuid']) && !preg_match("/^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/", $this->container['cluster_uuid'])) {
            $invalidProperties[] = "invalid value for 'cluster_uuid', must be conform to the pattern /^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/.";
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
     * Gets should_auto_register
     *
     * @return bool|null
     */
    public function getShouldAutoRegister()
    {
        return $this->container['should_auto_register'];
    }

    /**
     * Sets should_auto_register
     *
     * @param bool|null $should_auto_register Indicates if the new prism central should be automatically register to the cluster.
     *
     * @return self
     */
    public function setShouldAutoRegister($should_auto_register)
    {
        if (is_null($should_auto_register)) {
            throw new \InvalidArgumentException('non-nullable should_auto_register cannot be null');
        }
        $this->container['should_auto_register'] = $should_auto_register;

        return $this;
    }

    /**
     * Gets initial_password
     *
     * @return string|null
     */
    public function getInitialPassword()
    {
        return $this->container['initial_password'];
    }

    /**
     * Sets initial_password
     *
     * @param string|null $initial_password Initial boot up password for new created Prism Central.
     *
     * @return self
     */
    public function setInitialPassword($initial_password)
    {
        if (is_null($initial_password)) {
            throw new \InvalidArgumentException('non-nullable initial_password cannot be null');
        }
        if ((mb_strlen($initial_password) > 50)) {
            throw new \InvalidArgumentException('invalid length for $initial_password when calling PrismCentralResources., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($initial_password) < 1)) {
            throw new \InvalidArgumentException('invalid length for $initial_password when calling PrismCentralResources., must be bigger than or equal to 1.');
        }

        $this->container['initial_password'] = $initial_password;

        return $this;
    }

    /**
     * Gets cmsp_config
     *
     * @return \OpenAPI\Client\Model\CmspConfig|null
     */
    public function getCmspConfig()
    {
        return $this->container['cmsp_config'];
    }

    /**
     * Sets cmsp_config
     *
     * @param \OpenAPI\Client\Model\CmspConfig|null $cmsp_config cmsp_config
     *
     * @return self
     */
    public function setCmspConfig($cmsp_config)
    {
        if (is_null($cmsp_config)) {
            throw new \InvalidArgumentException('non-nullable cmsp_config cannot be null');
        }
        $this->container['cmsp_config'] = $cmsp_config;

        return $this;
    }

    /**
     * Gets pc_vm_list
     *
     * @return \OpenAPI\Client\Model\PcVm[]
     */
    public function getPcVmList()
    {
        return $this->container['pc_vm_list'];
    }

    /**
     * Sets pc_vm_list
     *
     * @param \OpenAPI\Client\Model\PcVm[] $pc_vm_list pc_vm_list
     *
     * @return self
     */
    public function setPcVmList($pc_vm_list)
    {
        if (is_null($pc_vm_list)) {
            throw new \InvalidArgumentException('non-nullable pc_vm_list cannot be null');
        }
        $this->container['pc_vm_list'] = $pc_vm_list;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version The desired version of Prism Central.
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
     * Gets virtual_ip
     *
     * @return string|null
     */
    public function getVirtualIp()
    {
        return $this->container['virtual_ip'];
    }

    /**
     * Sets virtual_ip
     *
     * @param string|null $virtual_ip The desired virtual IP address of Prism Central cluster.
     *
     * @return self
     */
    public function setVirtualIp($virtual_ip)
    {
        if (is_null($virtual_ip)) {
            throw new \InvalidArgumentException('non-nullable virtual_ip cannot be null');
        }

        if ((!preg_match("/^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/", ObjectSerializer::toString($virtual_ip)))) {
            throw new \InvalidArgumentException("invalid value for \$virtual_ip when calling PrismCentralResources., must conform to the pattern /^(?:(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\\.){3}(?:25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$/.");
        }

        $this->container['virtual_ip'] = $virtual_ip;

        return $this;
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
     * @param string|null $cluster_uuid The Cluster UUID for the Prism Central Deployment.
     *
     * @return self
     */
    public function setClusterUuid($cluster_uuid)
    {
        if (is_null($cluster_uuid)) {
            throw new \InvalidArgumentException('non-nullable cluster_uuid cannot be null');
        }

        if ((!preg_match("/^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/", ObjectSerializer::toString($cluster_uuid)))) {
            throw new \InvalidArgumentException("invalid value for \$cluster_uuid when calling PrismCentralResources., must conform to the pattern /^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/.");
        }

        $this->container['cluster_uuid'] = $cluster_uuid;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type The type of the Prism Central cluster.
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

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


