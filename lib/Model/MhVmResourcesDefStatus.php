<?php
/**
 * MhVmResourcesDefStatus
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
 * MhVmResourcesDefStatus Class Doc Comment
 *
 * @category Class
 * @description VM Resources Status Definition.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MhVmResourcesDefStatus implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'mh_vm_resources_def_status';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'hypervisor_specific_id' => 'string',
        'host_reference' => '\OpenAPI\Client\Model\Reference',
        'guest_tools' => '\OpenAPI\Client\Model\GuestToolsStatus',
        'hypervisor_type' => 'string',
        'storage_config' => '\OpenAPI\Client\Model\MhVmStorageConfigStatus',
        'protection_type' => 'string',
        'parent_reference' => '\OpenAPI\Client\Model\Reference',
        'recovery_plan_state_list' => '\OpenAPI\Client\Model\RecoveryPlanPolicyState[]',
        'protection_policy_state' => '\OpenAPI\Client\Model\ProtectionPolicyState'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'hypervisor_specific_id' => null,
        'host_reference' => null,
        'guest_tools' => null,
        'hypervisor_type' => null,
        'storage_config' => null,
        'protection_type' => null,
        'parent_reference' => null,
        'recovery_plan_state_list' => null,
        'protection_policy_state' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'hypervisor_specific_id' => false,
        'host_reference' => false,
        'guest_tools' => false,
        'hypervisor_type' => false,
        'storage_config' => false,
        'protection_type' => false,
        'parent_reference' => false,
        'recovery_plan_state_list' => false,
        'protection_policy_state' => false
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
        'hypervisor_specific_id' => 'hypervisor_specific_id',
        'host_reference' => 'host_reference',
        'guest_tools' => 'guest_tools',
        'hypervisor_type' => 'hypervisor_type',
        'storage_config' => 'storage_config',
        'protection_type' => 'protection_type',
        'parent_reference' => 'parent_reference',
        'recovery_plan_state_list' => 'recovery_plan_state_list',
        'protection_policy_state' => 'protection_policy_state'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hypervisor_specific_id' => 'setHypervisorSpecificId',
        'host_reference' => 'setHostReference',
        'guest_tools' => 'setGuestTools',
        'hypervisor_type' => 'setHypervisorType',
        'storage_config' => 'setStorageConfig',
        'protection_type' => 'setProtectionType',
        'parent_reference' => 'setParentReference',
        'recovery_plan_state_list' => 'setRecoveryPlanStateList',
        'protection_policy_state' => 'setProtectionPolicyState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hypervisor_specific_id' => 'getHypervisorSpecificId',
        'host_reference' => 'getHostReference',
        'guest_tools' => 'getGuestTools',
        'hypervisor_type' => 'getHypervisorType',
        'storage_config' => 'getStorageConfig',
        'protection_type' => 'getProtectionType',
        'parent_reference' => 'getParentReference',
        'recovery_plan_state_list' => 'getRecoveryPlanStateList',
        'protection_policy_state' => 'getProtectionPolicyState'
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
        $this->setIfExists('hypervisor_specific_id', $data ?? [], null);
        $this->setIfExists('host_reference', $data ?? [], null);
        $this->setIfExists('guest_tools', $data ?? [], null);
        $this->setIfExists('hypervisor_type', $data ?? [], null);
        $this->setIfExists('storage_config', $data ?? [], null);
        $this->setIfExists('protection_type', $data ?? [], null);
        $this->setIfExists('parent_reference', $data ?? [], null);
        $this->setIfExists('recovery_plan_state_list', $data ?? [], null);
        $this->setIfExists('protection_policy_state', $data ?? [], null);
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
     * Gets hypervisor_specific_id
     *
     * @return string|null
     */
    public function getHypervisorSpecificId()
    {
        return $this->container['hypervisor_specific_id'];
    }

    /**
     * Sets hypervisor_specific_id
     *
     * @param string|null $hypervisor_specific_id The hypervisor specific ID of the VM.
     *
     * @return self
     */
    public function setHypervisorSpecificId($hypervisor_specific_id)
    {
        if (is_null($hypervisor_specific_id)) {
            throw new \InvalidArgumentException('non-nullable hypervisor_specific_id cannot be null');
        }
        $this->container['hypervisor_specific_id'] = $hypervisor_specific_id;

        return $this;
    }

    /**
     * Gets host_reference
     *
     * @return \OpenAPI\Client\Model\Reference|null
     */
    public function getHostReference()
    {
        return $this->container['host_reference'];
    }

    /**
     * Sets host_reference
     *
     * @param \OpenAPI\Client\Model\Reference|null $host_reference host_reference
     *
     * @return self
     */
    public function setHostReference($host_reference)
    {
        if (is_null($host_reference)) {
            throw new \InvalidArgumentException('non-nullable host_reference cannot be null');
        }
        $this->container['host_reference'] = $host_reference;

        return $this;
    }

    /**
     * Gets guest_tools
     *
     * @return \OpenAPI\Client\Model\GuestToolsStatus|null
     */
    public function getGuestTools()
    {
        return $this->container['guest_tools'];
    }

    /**
     * Sets guest_tools
     *
     * @param \OpenAPI\Client\Model\GuestToolsStatus|null $guest_tools guest_tools
     *
     * @return self
     */
    public function setGuestTools($guest_tools)
    {
        if (is_null($guest_tools)) {
            throw new \InvalidArgumentException('non-nullable guest_tools cannot be null');
        }
        $this->container['guest_tools'] = $guest_tools;

        return $this;
    }

    /**
     * Gets hypervisor_type
     *
     * @return string|null
     */
    public function getHypervisorType()
    {
        return $this->container['hypervisor_type'];
    }

    /**
     * Sets hypervisor_type
     *
     * @param string|null $hypervisor_type The hypervisor type for the hypervisor the VM is hosted on.
     *
     * @return self
     */
    public function setHypervisorType($hypervisor_type)
    {
        if (is_null($hypervisor_type)) {
            throw new \InvalidArgumentException('non-nullable hypervisor_type cannot be null');
        }
        $this->container['hypervisor_type'] = $hypervisor_type;

        return $this;
    }

    /**
     * Gets storage_config
     *
     * @return \OpenAPI\Client\Model\MhVmStorageConfigStatus|null
     */
    public function getStorageConfig()
    {
        return $this->container['storage_config'];
    }

    /**
     * Sets storage_config
     *
     * @param \OpenAPI\Client\Model\MhVmStorageConfigStatus|null $storage_config storage_config
     *
     * @return self
     */
    public function setStorageConfig($storage_config)
    {
        if (is_null($storage_config)) {
            throw new \InvalidArgumentException('non-nullable storage_config cannot be null');
        }
        $this->container['storage_config'] = $storage_config;

        return $this;
    }

    /**
     * Gets protection_type
     *
     * @return string|null
     */
    public function getProtectionType()
    {
        return $this->container['protection_type'];
    }

    /**
     * Sets protection_type
     *
     * @param string|null $protection_type The type of protection applied on a VM. PD_PROTECTED indicates a VM protected using Prism Element. RULE_PROTECTED indicates a VM protected using Prism Central.
     *
     * @return self
     */
    public function setProtectionType($protection_type)
    {
        if (is_null($protection_type)) {
            throw new \InvalidArgumentException('non-nullable protection_type cannot be null');
        }
        $this->container['protection_type'] = $protection_type;

        return $this;
    }

    /**
     * Gets parent_reference
     *
     * @return \OpenAPI\Client\Model\Reference|null
     */
    public function getParentReference()
    {
        return $this->container['parent_reference'];
    }

    /**
     * Sets parent_reference
     *
     * @param \OpenAPI\Client\Model\Reference|null $parent_reference parent_reference
     *
     * @return self
     */
    public function setParentReference($parent_reference)
    {
        if (is_null($parent_reference)) {
            throw new \InvalidArgumentException('non-nullable parent_reference cannot be null');
        }
        $this->container['parent_reference'] = $parent_reference;

        return $this;
    }

    /**
     * Gets recovery_plan_state_list
     *
     * @return \OpenAPI\Client\Model\RecoveryPlanPolicyState[]|null
     */
    public function getRecoveryPlanStateList()
    {
        return $this->container['recovery_plan_state_list'];
    }

    /**
     * Sets recovery_plan_state_list
     *
     * @param \OpenAPI\Client\Model\RecoveryPlanPolicyState[]|null $recovery_plan_state_list Status of the Recovery Plans associated with the VM.
     *
     * @return self
     */
    public function setRecoveryPlanStateList($recovery_plan_state_list)
    {
        if (is_null($recovery_plan_state_list)) {
            throw new \InvalidArgumentException('non-nullable recovery_plan_state_list cannot be null');
        }
        $this->container['recovery_plan_state_list'] = $recovery_plan_state_list;

        return $this;
    }

    /**
     * Gets protection_policy_state
     *
     * @return \OpenAPI\Client\Model\ProtectionPolicyState|null
     */
    public function getProtectionPolicyState()
    {
        return $this->container['protection_policy_state'];
    }

    /**
     * Sets protection_policy_state
     *
     * @param \OpenAPI\Client\Model\ProtectionPolicyState|null $protection_policy_state protection_policy_state
     *
     * @return self
     */
    public function setProtectionPolicyState($protection_policy_state)
    {
        if (is_null($protection_policy_state)) {
            throw new \InvalidArgumentException('non-nullable protection_policy_state cannot be null');
        }
        $this->container['protection_policy_state'] = $protection_policy_state;

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


