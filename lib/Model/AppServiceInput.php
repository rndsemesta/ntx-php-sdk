<?php
/**
 * AppServiceInput
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
 * AppServiceInput Class Doc Comment
 *
 * @category Class
 * @description Service definition for Application
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AppServiceInput implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'app_service_input';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'singleton' => 'bool',
        'uuid' => 'string',
        'action_list' => '\OpenAPI\Client\Model\AppActionInput[]',
        'description' => 'string',
        'depends_on_list' => '\OpenAPI\Client\Model\EntityReference[]',
        'config_reference' => '\OpenAPI\Client\Model\AppServiceReference',
        'port_list' => '\OpenAPI\Client\Model\AppServicePort[]',
        'editables' => 'array<string,mixed>',
        'tier' => 'string',
        'container_spec' => 'object',
        'variable_list' => '\OpenAPI\Client\Model\AppVariableInput[]',
        'name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'singleton' => null,
        'uuid' => 'UUID',
        'action_list' => null,
        'description' => null,
        'depends_on_list' => null,
        'config_reference' => null,
        'port_list' => null,
        'editables' => null,
        'tier' => null,
        'container_spec' => null,
        'variable_list' => null,
        'name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'singleton' => false,
        'uuid' => false,
        'action_list' => false,
        'description' => false,
        'depends_on_list' => false,
        'config_reference' => false,
        'port_list' => false,
        'editables' => false,
        'tier' => false,
        'container_spec' => false,
        'variable_list' => false,
        'name' => false
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
        'singleton' => 'singleton',
        'uuid' => 'uuid',
        'action_list' => 'action_list',
        'description' => 'description',
        'depends_on_list' => 'depends_on_list',
        'config_reference' => 'config_reference',
        'port_list' => 'port_list',
        'editables' => 'editables',
        'tier' => 'tier',
        'container_spec' => 'container_spec',
        'variable_list' => 'variable_list',
        'name' => 'name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'singleton' => 'setSingleton',
        'uuid' => 'setUuid',
        'action_list' => 'setActionList',
        'description' => 'setDescription',
        'depends_on_list' => 'setDependsOnList',
        'config_reference' => 'setConfigReference',
        'port_list' => 'setPortList',
        'editables' => 'setEditables',
        'tier' => 'setTier',
        'container_spec' => 'setContainerSpec',
        'variable_list' => 'setVariableList',
        'name' => 'setName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'singleton' => 'getSingleton',
        'uuid' => 'getUuid',
        'action_list' => 'getActionList',
        'description' => 'getDescription',
        'depends_on_list' => 'getDependsOnList',
        'config_reference' => 'getConfigReference',
        'port_list' => 'getPortList',
        'editables' => 'getEditables',
        'tier' => 'getTier',
        'container_spec' => 'getContainerSpec',
        'variable_list' => 'getVariableList',
        'name' => 'getName'
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
        $this->setIfExists('singleton', $data ?? [], false);
        $this->setIfExists('uuid', $data ?? [], null);
        $this->setIfExists('action_list', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('depends_on_list', $data ?? [], null);
        $this->setIfExists('config_reference', $data ?? [], null);
        $this->setIfExists('port_list', $data ?? [], null);
        $this->setIfExists('editables', $data ?? [], null);
        $this->setIfExists('tier', $data ?? [], null);
        $this->setIfExists('container_spec', $data ?? [], null);
        $this->setIfExists('variable_list', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
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

        if ($this->container['action_list'] === null) {
            $invalidProperties[] = "'action_list' can't be null";
        }
        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1000)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1000.";
        }

        if ($this->container['variable_list'] === null) {
            $invalidProperties[] = "'variable_list' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 64)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
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
     * Gets singleton
     *
     * @return bool|null
     */
    public function getSingleton()
    {
        return $this->container['singleton'];
    }

    /**
     * Sets singleton
     *
     * @param bool|null $singleton If True, then this service can only be in a deployment with replica 1
     *
     * @return self
     */
    public function setSingleton($singleton)
    {
        if (is_null($singleton)) {
            throw new \InvalidArgumentException('non-nullable singleton cannot be null');
        }
        $this->container['singleton'] = $singleton;

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
            throw new \InvalidArgumentException("invalid value for \$uuid when calling AppServiceInput., must conform to the pattern /^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/.");
        }

        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets action_list
     *
     * @return \OpenAPI\Client\Model\AppActionInput[]
     */
    public function getActionList()
    {
        return $this->container['action_list'];
    }

    /**
     * Sets action_list
     *
     * @param \OpenAPI\Client\Model\AppActionInput[] $action_list List of references to service action
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
            throw new \InvalidArgumentException('invalid length for $description when calling AppServiceInput., must be smaller than or equal to 1000.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets depends_on_list
     *
     * @return \OpenAPI\Client\Model\EntityReference[]|null
     */
    public function getDependsOnList()
    {
        return $this->container['depends_on_list'];
    }

    /**
     * Sets depends_on_list
     *
     * @param \OpenAPI\Client\Model\EntityReference[]|null $depends_on_list 
     *
     * @return self
     */
    public function setDependsOnList($depends_on_list)
    {
        if (is_null($depends_on_list)) {
            throw new \InvalidArgumentException('non-nullable depends_on_list cannot be null');
        }
        $this->container['depends_on_list'] = $depends_on_list;

        return $this;
    }

    /**
     * Gets config_reference
     *
     * @return \OpenAPI\Client\Model\AppServiceReference|null
     */
    public function getConfigReference()
    {
        return $this->container['config_reference'];
    }

    /**
     * Sets config_reference
     *
     * @param \OpenAPI\Client\Model\AppServiceReference|null $config_reference config_reference
     *
     * @return self
     */
    public function setConfigReference($config_reference)
    {
        if (is_null($config_reference)) {
            throw new \InvalidArgumentException('non-nullable config_reference cannot be null');
        }
        $this->container['config_reference'] = $config_reference;

        return $this;
    }

    /**
     * Gets port_list
     *
     * @return \OpenAPI\Client\Model\AppServicePort[]|null
     */
    public function getPortList()
    {
        return $this->container['port_list'];
    }

    /**
     * Sets port_list
     *
     * @param \OpenAPI\Client\Model\AppServicePort[]|null $port_list 
     *
     * @return self
     */
    public function setPortList($port_list)
    {
        if (is_null($port_list)) {
            throw new \InvalidArgumentException('non-nullable port_list cannot be null');
        }
        $this->container['port_list'] = $port_list;

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
     * Gets tier
     *
     * @return string|null
     */
    public function getTier()
    {
        return $this->container['tier'];
    }

    /**
     * Sets tier
     *
     * @param string|null $tier Service tier name
     *
     * @return self
     */
    public function setTier($tier)
    {
        if (is_null($tier)) {
            throw new \InvalidArgumentException('non-nullable tier cannot be null');
        }
        $this->container['tier'] = $tier;

        return $this;
    }

    /**
     * Gets container_spec
     *
     * @return object|null
     */
    public function getContainerSpec()
    {
        return $this->container['container_spec'];
    }

    /**
     * Sets container_spec
     *
     * @param object|null $container_spec Additional properties for k8s continaer spec
     *
     * @return self
     */
    public function setContainerSpec($container_spec)
    {
        if (is_null($container_spec)) {
            throw new \InvalidArgumentException('non-nullable container_spec cannot be null');
        }
        $this->container['container_spec'] = $container_spec;

        return $this;
    }

    /**
     * Gets variable_list
     *
     * @return \OpenAPI\Client\Model\AppVariableInput[]
     */
    public function getVariableList()
    {
        return $this->container['variable_list'];
    }

    /**
     * Sets variable_list
     *
     * @param \OpenAPI\Client\Model\AppVariableInput[] $variable_list 
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
            throw new \InvalidArgumentException('invalid length for $name when calling AppServiceInput., must be smaller than or equal to 64.');
        }

        $this->container['name'] = $name;

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

