<?php
/**
 * Token
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
 * Token Class Doc Comment
 *
 * @category Class
 * @description Token object definition. This holds the Interpretation of a query term.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Token implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'token';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'display_context' => '\OpenAPI\Client\Model\Expression',
        'identifier' => '\OpenAPI\Client\Model\Expression',
        'match_type' => 'string',
        'is_child_entity_type' => 'bool',
        'additional_context' => '\OpenAPI\Client\Model\Expression[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'display_context' => null,
        'identifier' => null,
        'match_type' => null,
        'is_child_entity_type' => null,
        'additional_context' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'display_context' => false,
        'identifier' => false,
        'match_type' => false,
        'is_child_entity_type' => false,
        'additional_context' => false
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
        'display_context' => 'display_context',
        'identifier' => 'identifier',
        'match_type' => 'match_type',
        'is_child_entity_type' => 'is_child_entity_type',
        'additional_context' => 'additional_context'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'display_context' => 'setDisplayContext',
        'identifier' => 'setIdentifier',
        'match_type' => 'setMatchType',
        'is_child_entity_type' => 'setIsChildEntityType',
        'additional_context' => 'setAdditionalContext'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'display_context' => 'getDisplayContext',
        'identifier' => 'getIdentifier',
        'match_type' => 'getMatchType',
        'is_child_entity_type' => 'getIsChildEntityType',
        'additional_context' => 'getAdditionalContext'
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
        $this->setIfExists('display_context', $data ?? [], null);
        $this->setIfExists('identifier', $data ?? [], null);
        $this->setIfExists('match_type', $data ?? [], null);
        $this->setIfExists('is_child_entity_type', $data ?? [], null);
        $this->setIfExists('additional_context', $data ?? [], null);
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
     * Gets display_context
     *
     * @return \OpenAPI\Client\Model\Expression|null
     */
    public function getDisplayContext()
    {
        return $this->container['display_context'];
    }

    /**
     * Sets display_context
     *
     * @param \OpenAPI\Client\Model\Expression|null $display_context display_context
     *
     * @return self
     */
    public function setDisplayContext($display_context)
    {
        if (is_null($display_context)) {
            throw new \InvalidArgumentException('non-nullable display_context cannot be null');
        }
        $this->container['display_context'] = $display_context;

        return $this;
    }

    /**
     * Gets identifier
     *
     * @return \OpenAPI\Client\Model\Expression|null
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param \OpenAPI\Client\Model\Expression|null $identifier identifier
     *
     * @return self
     */
    public function setIdentifier($identifier)
    {
        if (is_null($identifier)) {
            throw new \InvalidArgumentException('non-nullable identifier cannot be null');
        }
        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets match_type
     *
     * @return string|null
     */
    public function getMatchType()
    {
        return $this->container['match_type'];
    }

    /**
     * Sets match_type
     *
     * @param string|null $match_type Match type of the query term (e.g. exact, prefix).
     *
     * @return self
     */
    public function setMatchType($match_type)
    {
        if (is_null($match_type)) {
            throw new \InvalidArgumentException('non-nullable match_type cannot be null');
        }
        $this->container['match_type'] = $match_type;

        return $this;
    }

    /**
     * Gets is_child_entity_type
     *
     * @return bool|null
     */
    public function getIsChildEntityType()
    {
        return $this->container['is_child_entity_type'];
    }

    /**
     * Sets is_child_entity_type
     *
     * @param bool|null $is_child_entity_type An indication whether the token is a child entity type.
     *
     * @return self
     */
    public function setIsChildEntityType($is_child_entity_type)
    {
        if (is_null($is_child_entity_type)) {
            throw new \InvalidArgumentException('non-nullable is_child_entity_type cannot be null');
        }
        $this->container['is_child_entity_type'] = $is_child_entity_type;

        return $this;
    }

    /**
     * Gets additional_context
     *
     * @return \OpenAPI\Client\Model\Expression[]|null
     */
    public function getAdditionalContext()
    {
        return $this->container['additional_context'];
    }

    /**
     * Sets additional_context
     *
     * @param \OpenAPI\Client\Model\Expression[]|null $additional_context Any additional information we have about the token.
     *
     * @return self
     */
    public function setAdditionalContext($additional_context)
    {
        if (is_null($additional_context)) {
            throw new \InvalidArgumentException('non-nullable additional_context cannot be null');
        }
        $this->container['additional_context'] = $additional_context;

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


