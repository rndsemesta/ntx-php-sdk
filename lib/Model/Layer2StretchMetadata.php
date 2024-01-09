<?php
/**
 * Layer2StretchMetadata
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
 * Layer2StretchMetadata Class Doc Comment
 *
 * @category Class
 * @description The layer2_stretch kind metadata
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Layer2StretchMetadata implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'layer2_stretch_metadata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'last_update_time' => '\DateTime',
        'use_categories_mapping' => 'bool',
        'kind' => 'string',
        'uuid' => 'string',
        'project_reference' => '\OpenAPI\Client\Model\ProjectReference',
        'creation_time' => '\DateTime',
        'spec_version' => 'int',
        'spec_hash' => 'string',
        'categories_mapping' => 'array<string,string[]>',
        'should_force_translate' => 'bool',
        'entity_version' => 'string',
        'owner_reference' => '\OpenAPI\Client\Model\UserReference',
        'categories' => 'array<string,string>',
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
        'last_update_time' => 'date-time',
        'use_categories_mapping' => null,
        'kind' => null,
        'uuid' => 'UUID',
        'project_reference' => null,
        'creation_time' => 'date-time',
        'spec_version' => null,
        'spec_hash' => null,
        'categories_mapping' => null,
        'should_force_translate' => null,
        'entity_version' => null,
        'owner_reference' => null,
        'categories' => null,
        'name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'last_update_time' => false,
        'use_categories_mapping' => false,
        'kind' => false,
        'uuid' => false,
        'project_reference' => false,
        'creation_time' => false,
        'spec_version' => false,
        'spec_hash' => false,
        'categories_mapping' => false,
        'should_force_translate' => false,
        'entity_version' => false,
        'owner_reference' => false,
        'categories' => false,
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
        'last_update_time' => 'last_update_time',
        'use_categories_mapping' => 'use_categories_mapping',
        'kind' => 'kind',
        'uuid' => 'uuid',
        'project_reference' => 'project_reference',
        'creation_time' => 'creation_time',
        'spec_version' => 'spec_version',
        'spec_hash' => 'spec_hash',
        'categories_mapping' => 'categories_mapping',
        'should_force_translate' => 'should_force_translate',
        'entity_version' => 'entity_version',
        'owner_reference' => 'owner_reference',
        'categories' => 'categories',
        'name' => 'name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'last_update_time' => 'setLastUpdateTime',
        'use_categories_mapping' => 'setUseCategoriesMapping',
        'kind' => 'setKind',
        'uuid' => 'setUuid',
        'project_reference' => 'setProjectReference',
        'creation_time' => 'setCreationTime',
        'spec_version' => 'setSpecVersion',
        'spec_hash' => 'setSpecHash',
        'categories_mapping' => 'setCategoriesMapping',
        'should_force_translate' => 'setShouldForceTranslate',
        'entity_version' => 'setEntityVersion',
        'owner_reference' => 'setOwnerReference',
        'categories' => 'setCategories',
        'name' => 'setName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'last_update_time' => 'getLastUpdateTime',
        'use_categories_mapping' => 'getUseCategoriesMapping',
        'kind' => 'getKind',
        'uuid' => 'getUuid',
        'project_reference' => 'getProjectReference',
        'creation_time' => 'getCreationTime',
        'spec_version' => 'getSpecVersion',
        'spec_hash' => 'getSpecHash',
        'categories_mapping' => 'getCategoriesMapping',
        'should_force_translate' => 'getShouldForceTranslate',
        'entity_version' => 'getEntityVersion',
        'owner_reference' => 'getOwnerReference',
        'categories' => 'getCategories',
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
        $this->setIfExists('last_update_time', $data ?? [], null);
        $this->setIfExists('use_categories_mapping', $data ?? [], false);
        $this->setIfExists('kind', $data ?? [], 'layer2_stretch');
        $this->setIfExists('uuid', $data ?? [], null);
        $this->setIfExists('project_reference', $data ?? [], null);
        $this->setIfExists('creation_time', $data ?? [], null);
        $this->setIfExists('spec_version', $data ?? [], null);
        $this->setIfExists('spec_hash', $data ?? [], null);
        $this->setIfExists('categories_mapping', $data ?? [], null);
        $this->setIfExists('should_force_translate', $data ?? [], null);
        $this->setIfExists('entity_version', $data ?? [], null);
        $this->setIfExists('owner_reference', $data ?? [], null);
        $this->setIfExists('categories', $data ?? [], null);
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

        if ($this->container['kind'] === null) {
            $invalidProperties[] = "'kind' can't be null";
        }
        if (!is_null($this->container['uuid']) && !preg_match("/^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/", $this->container['uuid'])) {
            $invalidProperties[] = "invalid value for 'uuid', must be conform to the pattern /^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 80)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 80.";
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
     * Gets last_update_time
     *
     * @return \DateTime|null
     */
    public function getLastUpdateTime()
    {
        return $this->container['last_update_time'];
    }

    /**
     * Sets last_update_time
     *
     * @param \DateTime|null $last_update_time UTC date and time in RFC-3339 format when layer2_stretch was last updated
     *
     * @return self
     */
    public function setLastUpdateTime($last_update_time)
    {
        if (is_null($last_update_time)) {
            throw new \InvalidArgumentException('non-nullable last_update_time cannot be null');
        }
        $this->container['last_update_time'] = $last_update_time;

        return $this;
    }

    /**
     * Gets use_categories_mapping
     *
     * @return bool|null
     */
    public function getUseCategoriesMapping()
    {
        return $this->container['use_categories_mapping'];
    }

    /**
     * Sets use_categories_mapping
     *
     * @param bool|null $use_categories_mapping Client need to specify this field as true if user want to use the newer way of assigning the categories. Without this things should work as it was earlier.
     *
     * @return self
     */
    public function setUseCategoriesMapping($use_categories_mapping)
    {
        if (is_null($use_categories_mapping)) {
            throw new \InvalidArgumentException('non-nullable use_categories_mapping cannot be null');
        }
        $this->container['use_categories_mapping'] = $use_categories_mapping;

        return $this;
    }

    /**
     * Gets kind
     *
     * @return string
     */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
     * Sets kind
     *
     * @param string $kind The kind name
     *
     * @return self
     */
    public function setKind($kind)
    {
        if (is_null($kind)) {
            throw new \InvalidArgumentException('non-nullable kind cannot be null');
        }
        $this->container['kind'] = $kind;

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
     * @param string|null $uuid layer2_stretch uuid
     *
     * @return self
     */
    public function setUuid($uuid)
    {
        if (is_null($uuid)) {
            throw new \InvalidArgumentException('non-nullable uuid cannot be null');
        }

        if ((!preg_match("/^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/", ObjectSerializer::toString($uuid)))) {
            throw new \InvalidArgumentException("invalid value for \$uuid when calling Layer2StretchMetadata., must conform to the pattern /^[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}$/.");
        }

        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets project_reference
     *
     * @return \OpenAPI\Client\Model\ProjectReference|null
     */
    public function getProjectReference()
    {
        return $this->container['project_reference'];
    }

    /**
     * Sets project_reference
     *
     * @param \OpenAPI\Client\Model\ProjectReference|null $project_reference project_reference
     *
     * @return self
     */
    public function setProjectReference($project_reference)
    {
        if (is_null($project_reference)) {
            throw new \InvalidArgumentException('non-nullable project_reference cannot be null');
        }
        $this->container['project_reference'] = $project_reference;

        return $this;
    }

    /**
     * Gets creation_time
     *
     * @return \DateTime|null
     */
    public function getCreationTime()
    {
        return $this->container['creation_time'];
    }

    /**
     * Sets creation_time
     *
     * @param \DateTime|null $creation_time UTC date and time in RFC-3339 format when layer2_stretch was created
     *
     * @return self
     */
    public function setCreationTime($creation_time)
    {
        if (is_null($creation_time)) {
            throw new \InvalidArgumentException('non-nullable creation_time cannot be null');
        }
        $this->container['creation_time'] = $creation_time;

        return $this;
    }

    /**
     * Gets spec_version
     *
     * @return int|null
     */
    public function getSpecVersion()
    {
        return $this->container['spec_version'];
    }

    /**
     * Sets spec_version
     *
     * @param int|null $spec_version Version number of the latest spec.
     *
     * @return self
     */
    public function setSpecVersion($spec_version)
    {
        if (is_null($spec_version)) {
            throw new \InvalidArgumentException('non-nullable spec_version cannot be null');
        }
        $this->container['spec_version'] = $spec_version;

        return $this;
    }

    /**
     * Gets spec_hash
     *
     * @return string|null
     */
    public function getSpecHash()
    {
        return $this->container['spec_hash'];
    }

    /**
     * Sets spec_hash
     *
     * @param string|null $spec_hash Hash of the spec. This will be returned from server.
     *
     * @return self
     */
    public function setSpecHash($spec_hash)
    {
        if (is_null($spec_hash)) {
            throw new \InvalidArgumentException('non-nullable spec_hash cannot be null');
        }
        $this->container['spec_hash'] = $spec_hash;

        return $this;
    }

    /**
     * Gets categories_mapping
     *
     * @return array<string,string[]>|null
     */
    public function getCategoriesMapping()
    {
        return $this->container['categories_mapping'];
    }

    /**
     * Sets categories_mapping
     *
     * @param array<string,string[]>|null $categories_mapping Categories for the layer2_stretch. This allows setting up multiple values from a single key. Categories assigned using the older view will be present here. This is the new way of assigning categories.
     *
     * @return self
     */
    public function setCategoriesMapping($categories_mapping)
    {
        if (is_null($categories_mapping)) {
            throw new \InvalidArgumentException('non-nullable categories_mapping cannot be null');
        }
        $this->container['categories_mapping'] = $categories_mapping;

        return $this;
    }

    /**
     * Gets should_force_translate
     *
     * @return bool|null
     */
    public function getShouldForceTranslate()
    {
        return $this->container['should_force_translate'];
    }

    /**
     * Sets should_force_translate
     *
     * @param bool|null $should_force_translate Applied on Prism Central only. Indicate whether force to translate the spec of the fanout request to fit the target cluster API schema.
     *
     * @return self
     */
    public function setShouldForceTranslate($should_force_translate)
    {
        if (is_null($should_force_translate)) {
            throw new \InvalidArgumentException('non-nullable should_force_translate cannot be null');
        }
        $this->container['should_force_translate'] = $should_force_translate;

        return $this;
    }

    /**
     * Gets entity_version
     *
     * @return string|null
     */
    public function getEntityVersion()
    {
        return $this->container['entity_version'];
    }

    /**
     * Sets entity_version
     *
     * @param string|null $entity_version Logical entity version that allows serializing updates to the entity across multiple API namespaces.  For kinds that support entity_version, it overrides spec_version described above.
     *
     * @return self
     */
    public function setEntityVersion($entity_version)
    {
        if (is_null($entity_version)) {
            throw new \InvalidArgumentException('non-nullable entity_version cannot be null');
        }
        $this->container['entity_version'] = $entity_version;

        return $this;
    }

    /**
     * Gets owner_reference
     *
     * @return \OpenAPI\Client\Model\UserReference|null
     */
    public function getOwnerReference()
    {
        return $this->container['owner_reference'];
    }

    /**
     * Sets owner_reference
     *
     * @param \OpenAPI\Client\Model\UserReference|null $owner_reference owner_reference
     *
     * @return self
     */
    public function setOwnerReference($owner_reference)
    {
        if (is_null($owner_reference)) {
            throw new \InvalidArgumentException('non-nullable owner_reference cannot be null');
        }
        $this->container['owner_reference'] = $owner_reference;

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
     * @param array<string,string>|null $categories Categories for the layer2_stretch. This allows assigning one value of a key to any entity. Changes done in this will be reflected in the categories_mapping field.
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
     * @param string|null $name layer2_stretch name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 80)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Layer2StretchMetadata., must be smaller than or equal to 80.');
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

