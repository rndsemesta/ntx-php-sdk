<?php
/**
 * IdentityProviderResources
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
 * IdentityProviderResources Class Doc Comment
 *
 * @category Class
 * @description Urls and other info about the IDP.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class IdentityProviderResources implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'identity_provider_resources';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'groups_delim' => 'string',
        'idp_properties' => '\OpenAPI\Client\Model\IdentityProviderDefStatusResourcesIdpProperties',
        'idp_metadata' => 'string',
        'groups_attr' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'groups_delim' => null,
        'idp_properties' => null,
        'idp_metadata' => null,
        'groups_attr' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'groups_delim' => false,
        'idp_properties' => false,
        'idp_metadata' => false,
        'groups_attr' => false
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
        'groups_delim' => 'groups_delim',
        'idp_properties' => 'idp_properties',
        'idp_metadata' => 'idp_metadata',
        'groups_attr' => 'groups_attr'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'groups_delim' => 'setGroupsDelim',
        'idp_properties' => 'setIdpProperties',
        'idp_metadata' => 'setIdpMetadata',
        'groups_attr' => 'setGroupsAttr'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'groups_delim' => 'getGroupsDelim',
        'idp_properties' => 'getIdpProperties',
        'idp_metadata' => 'getIdpMetadata',
        'groups_attr' => 'getGroupsAttr'
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
        $this->setIfExists('groups_delim', $data ?? [], null);
        $this->setIfExists('idp_properties', $data ?? [], null);
        $this->setIfExists('idp_metadata', $data ?? [], null);
        $this->setIfExists('groups_attr', $data ?? [], null);
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

        if (!is_null($this->container['groups_delim']) && (mb_strlen($this->container['groups_delim']) > 3)) {
            $invalidProperties[] = "invalid value for 'groups_delim', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['groups_delim']) && (mb_strlen($this->container['groups_delim']) < 1)) {
            $invalidProperties[] = "invalid value for 'groups_delim', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['groups_attr']) && (mb_strlen($this->container['groups_attr']) > 256)) {
            $invalidProperties[] = "invalid value for 'groups_attr', the character length must be smaller than or equal to 256.";
        }

        if (!is_null($this->container['groups_attr']) && (mb_strlen($this->container['groups_attr']) < 3)) {
            $invalidProperties[] = "invalid value for 'groups_attr', the character length must be bigger than or equal to 3.";
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
     * Gets groups_delim
     *
     * @return string|null
     */
    public function getGroupsDelim()
    {
        return $this->container['groups_delim'];
    }

    /**
     * Sets groups_delim
     *
     * @param string|null $groups_delim If groups delimiter is provided groups are assumed to be represented as a single attribute and the delimiter is used to split the attribute's value into multiple groups.
     *
     * @return self
     */
    public function setGroupsDelim($groups_delim)
    {
        if (is_null($groups_delim)) {
            throw new \InvalidArgumentException('non-nullable groups_delim cannot be null');
        }
        if ((mb_strlen($groups_delim) > 3)) {
            throw new \InvalidArgumentException('invalid length for $groups_delim when calling IdentityProviderResources., must be smaller than or equal to 3.');
        }
        if ((mb_strlen($groups_delim) < 1)) {
            throw new \InvalidArgumentException('invalid length for $groups_delim when calling IdentityProviderResources., must be bigger than or equal to 1.');
        }

        $this->container['groups_delim'] = $groups_delim;

        return $this;
    }

    /**
     * Gets idp_properties
     *
     * @return \OpenAPI\Client\Model\IdentityProviderDefStatusResourcesIdpProperties|null
     */
    public function getIdpProperties()
    {
        return $this->container['idp_properties'];
    }

    /**
     * Sets idp_properties
     *
     * @param \OpenAPI\Client\Model\IdentityProviderDefStatusResourcesIdpProperties|null $idp_properties idp_properties
     *
     * @return self
     */
    public function setIdpProperties($idp_properties)
    {
        if (is_null($idp_properties)) {
            throw new \InvalidArgumentException('non-nullable idp_properties cannot be null');
        }
        $this->container['idp_properties'] = $idp_properties;

        return $this;
    }

    /**
     * Gets idp_metadata
     *
     * @return string|null
     */
    public function getIdpMetadata()
    {
        return $this->container['idp_metadata'];
    }

    /**
     * Sets idp_metadata
     *
     * @param string|null $idp_metadata Metadata in xml format with IDP details.
     *
     * @return self
     */
    public function setIdpMetadata($idp_metadata)
    {
        if (is_null($idp_metadata)) {
            throw new \InvalidArgumentException('non-nullable idp_metadata cannot be null');
        }
        $this->container['idp_metadata'] = $idp_metadata;

        return $this;
    }

    /**
     * Gets groups_attr
     *
     * @return string|null
     */
    public function getGroupsAttr()
    {
        return $this->container['groups_attr'];
    }

    /**
     * Sets groups_attr
     *
     * @param string|null $groups_attr Saml assertion groups attribute element.
     *
     * @return self
     */
    public function setGroupsAttr($groups_attr)
    {
        if (is_null($groups_attr)) {
            throw new \InvalidArgumentException('non-nullable groups_attr cannot be null');
        }
        if ((mb_strlen($groups_attr) > 256)) {
            throw new \InvalidArgumentException('invalid length for $groups_attr when calling IdentityProviderResources., must be smaller than or equal to 256.');
        }
        if ((mb_strlen($groups_attr) < 3)) {
            throw new \InvalidArgumentException('invalid length for $groups_attr when calling IdentityProviderResources., must be bigger than or equal to 3.');
        }

        $this->container['groups_attr'] = $groups_attr;

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

