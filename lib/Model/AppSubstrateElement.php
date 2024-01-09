<?php
/**
 * AppSubstrateElement
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
 * AppSubstrateElement Class Doc Comment
 *
 * @category Class
 * @description Substrate element definition for Application
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AppSubstrateElement implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'app_substrate_element';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'platform_data' => 'string',
        'instance_address' => 'string',
        'instance_power_state' => 'string',
        'action_list' => '\OpenAPI\Client\Model\AppActionResponse[]',
        'instance_id' => 'string',
        'uuid' => 'string',
        'name' => 'string',
        'instance_name' => 'string',
        'state' => 'string',
        'readiness_probe' => '\OpenAPI\Client\Model\AppSubstrateReadinessProbe',
        'editables' => 'array<string,mixed>',
        'message_list' => '\OpenAPI\Client\Model\MessageResource[]',
        'os_type' => 'string',
        'type' => 'string',
        'create_spec' => 'array<string,mixed>',
        'variable_list' => '\OpenAPI\Client\Model\AppVariableResponse[]',
        'description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'platform_data' => null,
        'instance_address' => null,
        'instance_power_state' => null,
        'action_list' => null,
        'instance_id' => null,
        'uuid' => 'UUID',
        'name' => null,
        'instance_name' => null,
        'state' => null,
        'readiness_probe' => null,
        'editables' => null,
        'message_list' => null,
        'os_type' => null,
        'type' => null,
        'create_spec' => null,
        'variable_list' => null,
        'description' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'platform_data' => false,
        'instance_address' => false,
        'instance_power_state' => false,
        'action_list' => false,
        'instance_id' => false,
        'uuid' => false,
        'name' => false,
        'instance_name' => false,
        'state' => false,
        'readiness_probe' => false,
        'editables' => false,
        'message_list' => false,
        'os_type' => false,
        'type' => false,
        'create_spec' => false,
        'variable_list' => false,
        'description' => false
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
        'platform_data' => 'platform_data',
        'instance_address' => 'instance_address',
        'instance_power_state' => 'instance_power_state',
        'action_list' => 'action_list',
        'instance_id' => 'instance_id',
        'uuid' => 'uuid',
        'name' => 'name',
        'instance_name' => 'instance_name',
        'state' => 'state',
        'readiness_probe' => 'readiness_probe',
        'editables' => 'editables',
        'message_list' => 'message_list',
        'os_type' => 'os_type',
        'type' => 'type',
        'create_spec' => 'create_spec',
        'variable_list' => 'variable_list',
        'description' => 'description'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'platform_data' => 'setPlatformData',
        'instance_address' => 'setInstanceAddress',
        'instance_power_state' => 'setInstancePowerState',
        'action_list' => 'setActionList',
        'instance_id' => 'setInstanceId',
        'uuid' => 'setUuid',
        'name' => 'setName',
        'instance_name' => 'setInstanceName',
        'state' => 'setState',
        'readiness_probe' => 'setReadinessProbe',
        'editables' => 'setEditables',
        'message_list' => 'setMessageList',
        'os_type' => 'setOsType',
        'type' => 'setType',
        'create_spec' => 'setCreateSpec',
        'variable_list' => 'setVariableList',
        'description' => 'setDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'platform_data' => 'getPlatformData',
        'instance_address' => 'getInstanceAddress',
        'instance_power_state' => 'getInstancePowerState',
        'action_list' => 'getActionList',
        'instance_id' => 'getInstanceId',
        'uuid' => 'getUuid',
        'name' => 'getName',
        'instance_name' => 'getInstanceName',
        'state' => 'getState',
        'readiness_probe' => 'getReadinessProbe',
        'editables' => 'getEditables',
        'message_list' => 'getMessageList',
        'os_type' => 'getOsType',
        'type' => 'getType',
        'create_spec' => 'getCreateSpec',
        'variable_list' => 'getVariableList',
        'description' => 'getDescription'
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
        $this->setIfExists('platform_data', $data ?? [], null);
        $this->setIfExists('instance_address', $data ?? [], null);
        $this->setIfExists('instance_power_state', $data ?? [], null);
        $this->setIfExists('action_list', $data ?? [], null);
        $this->setIfExists('instance_id', $data ?? [], null);
        $this->setIfExists('uuid', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('instance_name', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('readiness_probe', $data ?? [], null);
        $this->setIfExists('editables', $data ?? [], null);
        $this->setIfExists('message_list', $data ?? [], null);
        $this->setIfExists('os_type', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('create_spec', $data ?? [], null);
        $this->setIfExists('variable_list', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
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

        if ($this->container['action_list'] === null) {
            $invalidProperties[] = "'action_list' can't be null";
        }
        if (!is_null($this->container['instance_id']) && (mb_strlen($this->container['instance_id']) > 64)) {
            $invalidProperties[] = "invalid value for 'instance_id', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['uuid'] === null) {
            $invalidProperties[] = "'uuid' can't be null";
        }
        if (!preg_match("/^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/", $this->container['uuid'])) {
            $invalidProperties[] = "invalid value for 'uuid', must be conform to the pattern /^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 64)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['instance_name']) && (mb_strlen($this->container['instance_name']) > 64)) {
            $invalidProperties[] = "invalid value for 'instance_name', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['variable_list'] === null) {
            $invalidProperties[] = "'variable_list' can't be null";
        }
        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1000)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1000.";
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
     * Gets platform_data
     *
     * @return string|null
     */
    public function getPlatformData()
    {
        return $this->container['platform_data'];
    }

    /**
     * Sets platform_data
     *
     * @param string|null $platform_data 
     *
     * @return self
     */
    public function setPlatformData($platform_data)
    {
        if (is_null($platform_data)) {
            throw new \InvalidArgumentException('non-nullable platform_data cannot be null');
        }
        $this->container['platform_data'] = $platform_data;

        return $this;
    }

    /**
     * Gets instance_address
     *
     * @return string|null
     */
    public function getInstanceAddress()
    {
        return $this->container['instance_address'];
    }

    /**
     * Sets instance_address
     *
     * @param string|null $instance_address 
     *
     * @return self
     */
    public function setInstanceAddress($instance_address)
    {
        if (is_null($instance_address)) {
            throw new \InvalidArgumentException('non-nullable instance_address cannot be null');
        }
        $this->container['instance_address'] = $instance_address;

        return $this;
    }

    /**
     * Gets instance_power_state
     *
     * @return string|null
     */
    public function getInstancePowerState()
    {
        return $this->container['instance_power_state'];
    }

    /**
     * Sets instance_power_state
     *
     * @param string|null $instance_power_state 
     *
     * @return self
     */
    public function setInstancePowerState($instance_power_state)
    {
        if (is_null($instance_power_state)) {
            throw new \InvalidArgumentException('non-nullable instance_power_state cannot be null');
        }
        $this->container['instance_power_state'] = $instance_power_state;

        return $this;
    }

    /**
     * Gets action_list
     *
     * @return \OpenAPI\Client\Model\AppActionResponse[]
     */
    public function getActionList()
    {
        return $this->container['action_list'];
    }

    /**
     * Sets action_list
     *
     * @param \OpenAPI\Client\Model\AppActionResponse[] $action_list List of references to action
     *
     * @return self
     */
    public function setActionList($action_list)
    {
        if (is_null($action_list)) {
            throw new \InvalidArgumentException('non-nullable action_list cannot be null');
        }
        $this->container['action_list'] = $action_list;

        return $this;
    }

    /**
     * Gets instance_id
     *
     * @return string|null
     */
    public function getInstanceId()
    {
        return $this->container['instance_id'];
    }

    /**
     * Sets instance_id
     *
     * @param string|null $instance_id 
     *
     * @return self
     */
    public function setInstanceId($instance_id)
    {
        if (is_null($instance_id)) {
            throw new \InvalidArgumentException('non-nullable instance_id cannot be null');
        }
        if ((mb_strlen($instance_id) > 64)) {
            throw new \InvalidArgumentException('invalid length for $instance_id when calling AppSubstrateElement., must be smaller than or equal to 64.');
        }

        $this->container['instance_id'] = $instance_id;

        return $this;
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
     * @param string $uuid 
     *
     * @return self
     */
    public function setUuid($uuid)
    {
        if (is_null($uuid)) {
            throw new \InvalidArgumentException('non-nullable uuid cannot be null');
        }

        if ((!preg_match("/^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/", ObjectSerializer::toString($uuid)))) {
            throw new \InvalidArgumentException("invalid value for \$uuid when calling AppSubstrateElement., must conform to the pattern /^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/.");
        }

        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name 
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 64)) {
            throw new \InvalidArgumentException('invalid length for $name when calling AppSubstrateElement., must be smaller than or equal to 64.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets instance_name
     *
     * @return string|null
     */
    public function getInstanceName()
    {
        return $this->container['instance_name'];
    }

    /**
     * Sets instance_name
     *
     * @param string|null $instance_name 
     *
     * @return self
     */
    public function setInstanceName($instance_name)
    {
        if (is_null($instance_name)) {
            throw new \InvalidArgumentException('non-nullable instance_name cannot be null');
        }
        if ((mb_strlen($instance_name) > 64)) {
            throw new \InvalidArgumentException('invalid length for $instance_name when calling AppSubstrateElement., must be smaller than or equal to 64.');
        }

        $this->container['instance_name'] = $instance_name;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state 
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
     * Gets readiness_probe
     *
     * @return \OpenAPI\Client\Model\AppSubstrateReadinessProbe|null
     */
    public function getReadinessProbe()
    {
        return $this->container['readiness_probe'];
    }

    /**
     * Sets readiness_probe
     *
     * @param \OpenAPI\Client\Model\AppSubstrateReadinessProbe|null $readiness_probe readiness_probe
     *
     * @return self
     */
    public function setReadinessProbe($readiness_probe)
    {
        if (is_null($readiness_probe)) {
            throw new \InvalidArgumentException('non-nullable readiness_probe cannot be null');
        }
        $this->container['readiness_probe'] = $readiness_probe;

        return $this;
    }

    /**
     * Gets editables
     *
     * @return array<string,mixed>|null
     */
    public function getEditables()
    {
        return $this->container['editables'];
    }

    /**
     * Sets editables
     *
     * @param array<string,mixed>|null $editables Runtime editable attributes for this entity. The structure for this is a dictionary. The keys in this dictionary should be the name of the attribute on the entity. If the attribute is editable, the value should be true, else false. If the attribute is a nested dictionary, the value can contain a nested dictionary with the same key value structure described above.
     *
     * @return self
     */
    public function setEditables($editables)
    {
        if (is_null($editables)) {
            throw new \InvalidArgumentException('non-nullable editables cannot be null');
        }
        $this->container['editables'] = $editables;

        return $this;
    }

    /**
     * Gets message_list
     *
     * @return \OpenAPI\Client\Model\MessageResource[]|null
     */
    public function getMessageList()
    {
        return $this->container['message_list'];
    }

    /**
     * Sets message_list
     *
     * @param \OpenAPI\Client\Model\MessageResource[]|null $message_list 
     *
     * @return self
     */
    public function setMessageList($message_list)
    {
        if (is_null($message_list)) {
            throw new \InvalidArgumentException('non-nullable message_list cannot be null');
        }
        $this->container['message_list'] = $message_list;

        return $this;
    }

    /**
     * Gets os_type
     *
     * @return string|null
     */
    public function getOsType()
    {
        return $this->container['os_type'];
    }

    /**
     * Sets os_type
     *
     * @param string|null $os_type 
     *
     * @return self
     */
    public function setOsType($os_type)
    {
        if (is_null($os_type)) {
            throw new \InvalidArgumentException('non-nullable os_type cannot be null');
        }
        $this->container['os_type'] = $os_type;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type 
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
     * Gets create_spec
     *
     * @return array<string,mixed>|null
     */
    public function getCreateSpec()
    {
        return $this->container['create_spec'];
    }

    /**
     * Sets create_spec
     *
     * @param array<string,mixed>|null $create_spec Spec of the substrate
     *
     * @return self
     */
    public function setCreateSpec($create_spec)
    {
        if (is_null($create_spec)) {
            throw new \InvalidArgumentException('non-nullable create_spec cannot be null');
        }
        $this->container['create_spec'] = $create_spec;

        return $this;
    }

    /**
     * Gets variable_list
     *
     * @return \OpenAPI\Client\Model\AppVariableResponse[]
     */
    public function getVariableList()
    {
        return $this->container['variable_list'];
    }

    /**
     * Sets variable_list
     *
     * @param \OpenAPI\Client\Model\AppVariableResponse[] $variable_list List of variables
     *
     * @return self
     */
    public function setVariableList($variable_list)
    {
        if (is_null($variable_list)) {
            throw new \InvalidArgumentException('non-nullable variable_list cannot be null');
        }
        $this->container['variable_list'] = $variable_list;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description 
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        if ((mb_strlen($description) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $description when calling AppSubstrateElement., must be smaller than or equal to 1000.');
        }

        $this->container['description'] = $description;

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


