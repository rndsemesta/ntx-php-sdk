<?php
/**
 * RecoverEntitiesEntityInfoListInner
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
 * RecoverEntitiesEntityInfoListInner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RecoverEntitiesEntityInfoListInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'recover_entities_entity_info_list_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'vm_power_state' => 'string',
        'any_entity_reference' => '\OpenAPI\Client\Model\Reference',
        'volume_group_attachment_list' => '\OpenAPI\Client\Model\RecoverEntitiesEntityInfoListInnerVolumeGroupAttachmentListInner[]',
        'categories' => 'array<string,string>',
        'script_list' => '\OpenAPI\Client\Model\RecoveryPlanScriptConfig[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'vm_power_state' => null,
        'any_entity_reference' => null,
        'volume_group_attachment_list' => null,
        'categories' => null,
        'script_list' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'vm_power_state' => false,
        'any_entity_reference' => false,
        'volume_group_attachment_list' => false,
        'categories' => false,
        'script_list' => false
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
        'vm_power_state' => 'vm_power_state',
        'any_entity_reference' => 'any_entity_reference',
        'volume_group_attachment_list' => 'volume_group_attachment_list',
        'categories' => 'categories',
        'script_list' => 'script_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vm_power_state' => 'setVmPowerState',
        'any_entity_reference' => 'setAnyEntityReference',
        'volume_group_attachment_list' => 'setVolumeGroupAttachmentList',
        'categories' => 'setCategories',
        'script_list' => 'setScriptList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vm_power_state' => 'getVmPowerState',
        'any_entity_reference' => 'getAnyEntityReference',
        'volume_group_attachment_list' => 'getVolumeGroupAttachmentList',
        'categories' => 'getCategories',
        'script_list' => 'getScriptList'
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
        $this->setIfExists('vm_power_state', $data ?? [], null);
        $this->setIfExists('any_entity_reference', $data ?? [], null);
        $this->setIfExists('volume_group_attachment_list', $data ?? [], null);
        $this->setIfExists('categories', $data ?? [], null);
        $this->setIfExists('script_list', $data ?? [], null);
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
     * Gets vm_power_state
     *
     * @return string|null
     */
    public function getVmPowerState()
    {
        return $this->container['vm_power_state'];
    }

    /**
     * Sets vm_power_state
     *
     * @param string|null $vm_power_state Power state of the VM(s) after recovery.
     *
     * @return self
     */
    public function setVmPowerState($vm_power_state)
    {
        if (is_null($vm_power_state)) {
            throw new \InvalidArgumentException('non-nullable vm_power_state cannot be null');
        }
        $this->container['vm_power_state'] = $vm_power_state;

        return $this;
    }

    /**
     * Gets any_entity_reference
     *
     * @return \OpenAPI\Client\Model\Reference|null
     */
    public function getAnyEntityReference()
    {
        return $this->container['any_entity_reference'];
    }

    /**
     * Sets any_entity_reference
     *
     * @param \OpenAPI\Client\Model\Reference|null $any_entity_reference any_entity_reference
     *
     * @return self
     */
    public function setAnyEntityReference($any_entity_reference)
    {
        if (is_null($any_entity_reference)) {
            throw new \InvalidArgumentException('non-nullable any_entity_reference cannot be null');
        }
        $this->container['any_entity_reference'] = $any_entity_reference;

        return $this;
    }

    /**
     * Gets volume_group_attachment_list
     *
     * @return \OpenAPI\Client\Model\RecoverEntitiesEntityInfoListInnerVolumeGroupAttachmentListInner[]|null
     */
    public function getVolumeGroupAttachmentList()
    {
        return $this->container['volume_group_attachment_list'];
    }

    /**
     * Sets volume_group_attachment_list
     *
     * @param \OpenAPI\Client\Model\RecoverEntitiesEntityInfoListInnerVolumeGroupAttachmentListInner[]|null $volume_group_attachment_list List containing the VMs to Volume Group attachment information.
     *
     * @return self
     */
    public function setVolumeGroupAttachmentList($volume_group_attachment_list)
    {
        if (is_null($volume_group_attachment_list)) {
            throw new \InvalidArgumentException('non-nullable volume_group_attachment_list cannot be null');
        }
        $this->container['volume_group_attachment_list'] = $volume_group_attachment_list;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return array<string,string>|null
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param array<string,string>|null $categories Categories for filtering entities.
     *
     * @return self
     */
    public function setCategories($categories)
    {
        if (is_null($categories)) {
            throw new \InvalidArgumentException('non-nullable categories cannot be null');
        }
        $this->container['categories'] = $categories;

        return $this;
    }

    /**
     * Gets script_list
     *
     * @return \OpenAPI\Client\Model\RecoveryPlanScriptConfig[]|null
     */
    public function getScriptList()
    {
        return $this->container['script_list'];
    }

    /**
     * Sets script_list
     *
     * @param \OpenAPI\Client\Model\RecoveryPlanScriptConfig[]|null $script_list List of scripts to be executed inside the guest VMs after recovery.
     *
     * @return self
     */
    public function setScriptList($script_list)
    {
        if (is_null($script_list)) {
            throw new \InvalidArgumentException('non-nullable script_list cannot be null');
        }
        $this->container['script_list'] = $script_list;

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


