<?php
/**
 * AccessControlPolicyResources1
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
 * AccessControlPolicyResources1 Class Doc Comment
 *
 * @category Class
 * @description Access Control Policy resources.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AccessControlPolicyResources1 implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Access_Control_Policy_Resources__1';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'role_reference' => '\OpenAPI\Client\Model\RoleReference',
        'user_reference_list' => '\OpenAPI\Client\Model\UserReference[]',
        'filter_list' => '\OpenAPI\Client\Model\AccessControlPolicyDetailFilterList',
        'user_group_reference_list' => '\OpenAPI\Client\Model\UserGroupReference[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'role_reference' => null,
        'user_reference_list' => null,
        'filter_list' => null,
        'user_group_reference_list' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'role_reference' => false,
        'user_reference_list' => false,
        'filter_list' => false,
        'user_group_reference_list' => false
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
        'role_reference' => 'role_reference',
        'user_reference_list' => 'user_reference_list',
        'filter_list' => 'filter_list',
        'user_group_reference_list' => 'user_group_reference_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'role_reference' => 'setRoleReference',
        'user_reference_list' => 'setUserReferenceList',
        'filter_list' => 'setFilterList',
        'user_group_reference_list' => 'setUserGroupReferenceList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'role_reference' => 'getRoleReference',
        'user_reference_list' => 'getUserReferenceList',
        'filter_list' => 'getFilterList',
        'user_group_reference_list' => 'getUserGroupReferenceList'
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
        $this->setIfExists('role_reference', $data ?? [], null);
        $this->setIfExists('user_reference_list', $data ?? [], null);
        $this->setIfExists('filter_list', $data ?? [], null);
        $this->setIfExists('user_group_reference_list', $data ?? [], null);
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

        if ($this->container['role_reference'] === null) {
            $invalidProperties[] = "'role_reference' can't be null";
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
     * Gets role_reference
     *
     * @return \OpenAPI\Client\Model\RoleReference
     */
    public function getRoleReference()
    {
        return $this->container['role_reference'];
    }

    /**
     * Sets role_reference
     *
     * @param \OpenAPI\Client\Model\RoleReference $role_reference role_reference
     *
     * @return self
     */
    public function setRoleReference($role_reference)
    {
        if (is_null($role_reference)) {
            throw new \InvalidArgumentException('non-nullable role_reference cannot be null');
        }
        $this->container['role_reference'] = $role_reference;

        return $this;
    }

    /**
     * Gets user_reference_list
     *
     * @return \OpenAPI\Client\Model\UserReference[]|null
     */
    public function getUserReferenceList()
    {
        return $this->container['user_reference_list'];
    }

    /**
     * Sets user_reference_list
     *
     * @param \OpenAPI\Client\Model\UserReference[]|null $user_reference_list The User(s) being assigned a given role.
     *
     * @return self
     */
    public function setUserReferenceList($user_reference_list)
    {
        if (is_null($user_reference_list)) {
            throw new \InvalidArgumentException('non-nullable user_reference_list cannot be null');
        }
        $this->container['user_reference_list'] = $user_reference_list;

        return $this;
    }

    /**
     * Gets filter_list
     *
     * @return \OpenAPI\Client\Model\AccessControlPolicyDetailFilterList|null
     */
    public function getFilterList()
    {
        return $this->container['filter_list'];
    }

    /**
     * Sets filter_list
     *
     * @param \OpenAPI\Client\Model\AccessControlPolicyDetailFilterList|null $filter_list filter_list
     *
     * @return self
     */
    public function setFilterList($filter_list)
    {
        if (is_null($filter_list)) {
            throw new \InvalidArgumentException('non-nullable filter_list cannot be null');
        }
        $this->container['filter_list'] = $filter_list;

        return $this;
    }

    /**
     * Gets user_group_reference_list
     *
     * @return \OpenAPI\Client\Model\UserGroupReference[]|null
     */
    public function getUserGroupReferenceList()
    {
        return $this->container['user_group_reference_list'];
    }

    /**
     * Sets user_group_reference_list
     *
     * @param \OpenAPI\Client\Model\UserGroupReference[]|null $user_group_reference_list The User group(s) being assigned a given role.
     *
     * @return self
     */
    public function setUserGroupReferenceList($user_group_reference_list)
    {
        if (is_null($user_group_reference_list)) {
            throw new \InvalidArgumentException('non-nullable user_group_reference_list cannot be null');
        }
        $this->container['user_group_reference_list'] = $user_group_reference_list;

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


