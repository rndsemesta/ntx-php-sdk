<?php
/**
 * AppPackageElement
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
 * AppPackageElement Class Doc Comment
 *
 * @category Class
 * @description Package definition for Application
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AppPackageElement implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'app_package_element';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'image_spec' => 'object',
        'description' => 'string',
        'action_list' => '\OpenAPI\Client\Model\AppActionResponse[]',
        'message_list' => '\OpenAPI\Client\Model\MessageResource[]',
        'service_local_reference_list' => '\OpenAPI\Client\Model\AppServiceReference[]',
        'name' => 'string',
        'state' => 'string',
        'version' => 'string',
        'editables' => 'array<string,mixed>',
        'type' => 'string',
        'options' => 'array<string,mixed>',
        'variable_list' => '\OpenAPI\Client\Model\AppVariableResponse[]',
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
        'image_spec' => null,
        'description' => null,
        'action_list' => null,
        'message_list' => null,
        'service_local_reference_list' => null,
        'name' => null,
        'state' => null,
        'version' => null,
        'editables' => null,
        'type' => null,
        'options' => null,
        'variable_list' => null,
        'uuid' => 'UUID'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'image_spec' => false,
        'description' => false,
        'action_list' => false,
        'message_list' => false,
        'service_local_reference_list' => false,
        'name' => false,
        'state' => false,
        'version' => false,
        'editables' => false,
        'type' => false,
        'options' => false,
        'variable_list' => false,
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
        'image_spec' => 'image_spec',
        'description' => 'description',
        'action_list' => 'action_list',
        'message_list' => 'message_list',
        'service_local_reference_list' => 'service_local_reference_list',
        'name' => 'name',
        'state' => 'state',
        'version' => 'version',
        'editables' => 'editables',
        'type' => 'type',
        'options' => 'options',
        'variable_list' => 'variable_list',
        'uuid' => 'uuid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'image_spec' => 'setImageSpec',
        'description' => 'setDescription',
        'action_list' => 'setActionList',
        'message_list' => 'setMessageList',
        'service_local_reference_list' => 'setServiceLocalReferenceList',
        'name' => 'setName',
        'state' => 'setState',
        'version' => 'setVersion',
        'editables' => 'setEditables',
        'type' => 'setType',
        'options' => 'setOptions',
        'variable_list' => 'setVariableList',
        'uuid' => 'setUuid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'image_spec' => 'getImageSpec',
        'description' => 'getDescription',
        'action_list' => 'getActionList',
        'message_list' => 'getMessageList',
        'service_local_reference_list' => 'getServiceLocalReferenceList',
        'name' => 'getName',
        'state' => 'getState',
        'version' => 'getVersion',
        'editables' => 'getEditables',
        'type' => 'getType',
        'options' => 'getOptions',
        'variable_list' => 'getVariableList',
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
        $this->setIfExists('image_spec', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('action_list', $data ?? [], null);
        $this->setIfExists('message_list', $data ?? [], null);
        $this->setIfExists('service_local_reference_list', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('editables', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('options', $data ?? [], null);
        $this->setIfExists('variable_list', $data ?? [], null);
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

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1000)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1000.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 128)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
        }

        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['uuid'] === null) {
            $invalidProperties[] = "'uuid' can't be null";
        }
        if (!preg_match("/^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/", $this->container['uuid'])) {
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
     * Gets image_spec
     *
     * @return object|null
     */
    public function getImageSpec()
    {
        return $this->container['image_spec'];
    }

    /**
     * Sets image_spec
     *
     * @param object|null $image_spec Additional properties for k8s image spec
     *
     * @return self
     */
    public function setImageSpec($image_spec)
    {
        if (is_null($image_spec)) {
            throw new \InvalidArgumentException('non-nullable image_spec cannot be null');
        }
        $this->container['image_spec'] = $image_spec;

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
            throw new \InvalidArgumentException('invalid length for $description when calling AppPackageElement., must be smaller than or equal to 1000.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets action_list
     *
     * @return \OpenAPI\Client\Model\AppActionResponse[]|null
     */
    public function getActionList()
    {
        return $this->container['action_list'];
    }

    /**
     * Sets action_list
     *
     * @param \OpenAPI\Client\Model\AppActionResponse[]|null $action_list List of references to action
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
     * @param \OpenAPI\Client\Model\MessageResource[]|null $message_list Message list for package
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
     * Gets service_local_reference_list
     *
     * @return \OpenAPI\Client\Model\AppServiceReference[]|null
     */
    public function getServiceLocalReferenceList()
    {
        return $this->container['service_local_reference_list'];
    }

    /**
     * Sets service_local_reference_list
     *
     * @param \OpenAPI\Client\Model\AppServiceReference[]|null $service_local_reference_list References of the service.
     *
     * @return self
     */
    public function setServiceLocalReferenceList($service_local_reference_list)
    {
        if (is_null($service_local_reference_list)) {
            throw new \InvalidArgumentException('non-nullable service_local_reference_list cannot be null');
        }
        $this->container['service_local_reference_list'] = $service_local_reference_list;

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
        if ((mb_strlen($name) > 128)) {
            throw new \InvalidArgumentException('invalid length for $name when calling AppPackageElement., must be smaller than or equal to 128.');
        }

        $this->container['name'] = $name;

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
     * @param string|null $version 
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
     * Gets options
     *
     * @return array<string,mixed>|null
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param array<string,mixed>|null $options Details based on type of the package.
     *
     * @return self
     */
    public function setOptions($options)
    {
        if (is_null($options)) {
            throw new \InvalidArgumentException('non-nullable options cannot be null');
        }
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets variable_list
     *
     * @return \OpenAPI\Client\Model\AppVariableResponse[]|null
     */
    public function getVariableList()
    {
        return $this->container['variable_list'];
    }

    /**
     * Sets variable_list
     *
     * @param \OpenAPI\Client\Model\AppVariableResponse[]|null $variable_list 
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
            throw new \InvalidArgumentException("invalid value for \$uuid when calling AppPackageElement., must conform to the pattern /^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/.");
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


