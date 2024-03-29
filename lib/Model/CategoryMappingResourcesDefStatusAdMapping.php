<?php
/**
 * CategoryMappingResourcesDefStatusAdMapping
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
 * CategoryMappingResourcesDefStatusAdMapping Class Doc Comment
 *
 * @category Class
 * @description A mapping to an object in Active Directory.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CategoryMappingResourcesDefStatusAdMapping implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'category_mapping_resources_def_status_ad_mapping';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'object_identifier' => 'string',
        'object_common_name' => 'string',
        'status' => 'string',
        'directory_service_reference' => '\OpenAPI\Client\Model\DirectoryServiceReference',
        'object_path' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'object_identifier' => null,
        'object_common_name' => null,
        'status' => null,
        'directory_service_reference' => null,
        'object_path' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'object_identifier' => false,
        'object_common_name' => false,
        'status' => false,
        'directory_service_reference' => false,
        'object_path' => false
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
        'object_identifier' => 'object_identifier',
        'object_common_name' => 'object_common_name',
        'status' => 'status',
        'directory_service_reference' => 'directory_service_reference',
        'object_path' => 'object_path'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'object_identifier' => 'setObjectIdentifier',
        'object_common_name' => 'setObjectCommonName',
        'status' => 'setStatus',
        'directory_service_reference' => 'setDirectoryServiceReference',
        'object_path' => 'setObjectPath'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'object_identifier' => 'getObjectIdentifier',
        'object_common_name' => 'getObjectCommonName',
        'status' => 'getStatus',
        'directory_service_reference' => 'getDirectoryServiceReference',
        'object_path' => 'getObjectPath'
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
        $this->setIfExists('object_identifier', $data ?? [], null);
        $this->setIfExists('object_common_name', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('directory_service_reference', $data ?? [], null);
        $this->setIfExists('object_path', $data ?? [], null);
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
     * Gets object_identifier
     *
     * @return string|null
     */
    public function getObjectIdentifier()
    {
        return $this->container['object_identifier'];
    }

    /**
     * Sets object_identifier
     *
     * @param string|null $object_identifier The objectGUID for the object in AD.
     *
     * @return self
     */
    public function setObjectIdentifier($object_identifier)
    {
        if (is_null($object_identifier)) {
            throw new \InvalidArgumentException('non-nullable object_identifier cannot be null');
        }
        $this->container['object_identifier'] = $object_identifier;

        return $this;
    }

    /**
     * Gets object_common_name
     *
     * @return string|null
     */
    public function getObjectCommonName()
    {
        return $this->container['object_common_name'];
    }

    /**
     * Sets object_common_name
     *
     * @param string|null $object_common_name The CN for the mapped object in AD.
     *
     * @return self
     */
    public function setObjectCommonName($object_common_name)
    {
        if (is_null($object_common_name)) {
            throw new \InvalidArgumentException('non-nullable object_common_name cannot be null');
        }
        $this->container['object_common_name'] = $object_common_name;

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
     * @param string|null $status Whether the mapping is usable or not; USABLE means it is usable. DELETED means the mapped object has been removed from AD, and DIRECTORY_NOT_CONFIGURED means either the directory service the mapping references has been removed or that directory service is not currently in use for identity categorization.
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
     * Gets directory_service_reference
     *
     * @return \OpenAPI\Client\Model\DirectoryServiceReference|null
     */
    public function getDirectoryServiceReference()
    {
        return $this->container['directory_service_reference'];
    }

    /**
     * Sets directory_service_reference
     *
     * @param \OpenAPI\Client\Model\DirectoryServiceReference|null $directory_service_reference directory_service_reference
     *
     * @return self
     */
    public function setDirectoryServiceReference($directory_service_reference)
    {
        if (is_null($directory_service_reference)) {
            throw new \InvalidArgumentException('non-nullable directory_service_reference cannot be null');
        }
        $this->container['directory_service_reference'] = $directory_service_reference;

        return $this;
    }

    /**
     * Gets object_path
     *
     * @return string|null
     */
    public function getObjectPath()
    {
        return $this->container['object_path'];
    }

    /**
     * Sets object_path
     *
     * @param string|null $object_path The path for the mapped object in AD.
     *
     * @return self
     */
    public function setObjectPath($object_path)
    {
        if (is_null($object_path)) {
            throw new \InvalidArgumentException('non-nullable object_path cannot be null');
        }
        $this->container['object_path'] = $object_path;

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


