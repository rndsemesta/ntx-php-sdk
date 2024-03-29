<?php
/**
 * OauthClientInput
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
 * OauthClientInput Class Doc Comment
 *
 * @category Class
 * @description Oauth client information
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class OauthClientInput implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'oauth_client_input';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'client_name' => 'string',
        'redirect_uris' => 'string[]',
        'client_description' => 'string',
        'default_scopes' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'client_name' => null,
        'redirect_uris' => null,
        'client_description' => null,
        'default_scopes' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'client_name' => false,
        'redirect_uris' => false,
        'client_description' => false,
        'default_scopes' => false
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
        'client_name' => 'client_name',
        'redirect_uris' => 'redirect_uris',
        'client_description' => 'client_description',
        'default_scopes' => 'default_scopes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'client_name' => 'setClientName',
        'redirect_uris' => 'setRedirectUris',
        'client_description' => 'setClientDescription',
        'default_scopes' => 'setDefaultScopes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'client_name' => 'getClientName',
        'redirect_uris' => 'getRedirectUris',
        'client_description' => 'getClientDescription',
        'default_scopes' => 'getDefaultScopes'
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
        $this->setIfExists('client_name', $data ?? [], null);
        $this->setIfExists('redirect_uris', $data ?? [], null);
        $this->setIfExists('client_description', $data ?? [], null);
        $this->setIfExists('default_scopes', $data ?? [], null);
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

        if ($this->container['client_name'] === null) {
            $invalidProperties[] = "'client_name' can't be null";
        }
        if ((mb_strlen($this->container['client_name']) > 64)) {
            $invalidProperties[] = "invalid value for 'client_name', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['redirect_uris'] === null) {
            $invalidProperties[] = "'redirect_uris' can't be null";
        }
        if ($this->container['client_description'] === null) {
            $invalidProperties[] = "'client_description' can't be null";
        }
        if ((mb_strlen($this->container['client_description']) > 1000)) {
            $invalidProperties[] = "invalid value for 'client_description', the character length must be smaller than or equal to 1000.";
        }

        if ($this->container['default_scopes'] === null) {
            $invalidProperties[] = "'default_scopes' can't be null";
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
     * Gets client_name
     *
     * @return string
     */
    public function getClientName()
    {
        return $this->container['client_name'];
    }

    /**
     * Sets client_name
     *
     * @param string $client_name client name of the Oauth Client
     *
     * @return self
     */
    public function setClientName($client_name)
    {
        if (is_null($client_name)) {
            throw new \InvalidArgumentException('non-nullable client_name cannot be null');
        }
        if ((mb_strlen($client_name) > 64)) {
            throw new \InvalidArgumentException('invalid length for $client_name when calling OauthClientInput., must be smaller than or equal to 64.');
        }

        $this->container['client_name'] = $client_name;

        return $this;
    }

    /**
     * Gets redirect_uris
     *
     * @return string[]
     */
    public function getRedirectUris()
    {
        return $this->container['redirect_uris'];
    }

    /**
     * Sets redirect_uris
     *
     * @param string[] $redirect_uris redirect_uris
     *
     * @return self
     */
    public function setRedirectUris($redirect_uris)
    {
        if (is_null($redirect_uris)) {
            throw new \InvalidArgumentException('non-nullable redirect_uris cannot be null');
        }
        $this->container['redirect_uris'] = $redirect_uris;

        return $this;
    }

    /**
     * Gets client_description
     *
     * @return string
     */
    public function getClientDescription()
    {
        return $this->container['client_description'];
    }

    /**
     * Sets client_description
     *
     * @param string $client_description client description of the Oauth Client
     *
     * @return self
     */
    public function setClientDescription($client_description)
    {
        if (is_null($client_description)) {
            throw new \InvalidArgumentException('non-nullable client_description cannot be null');
        }
        if ((mb_strlen($client_description) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $client_description when calling OauthClientInput., must be smaller than or equal to 1000.');
        }

        $this->container['client_description'] = $client_description;

        return $this;
    }

    /**
     * Gets default_scopes
     *
     * @return string[]
     */
    public function getDefaultScopes()
    {
        return $this->container['default_scopes'];
    }

    /**
     * Sets default_scopes
     *
     * @param string[] $default_scopes default_scopes
     *
     * @return self
     */
    public function setDefaultScopes($default_scopes)
    {
        if (is_null($default_scopes)) {
            throw new \InvalidArgumentException('non-nullable default_scopes cannot be null');
        }
        $this->container['default_scopes'] = $default_scopes;

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


