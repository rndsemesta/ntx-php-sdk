<?php
/**
 * VpcRouteTableResourcesDefStatus
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
 * VpcRouteTableResourcesDefStatus Class Doc Comment
 *
 * @category Class
 * @description VPC route table resources status
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class VpcRouteTableResourcesDefStatus implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'vpc_route_table_resources_def_status';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'static_routes_list' => '\OpenAPI\Client\Model\RouteStatus[]',
        'dynamic_routes_list' => '\OpenAPI\Client\Model\RouteStatus[]',
        'default_route' => '\OpenAPI\Client\Model\RouteStatus',
        'local_routes_list' => '\OpenAPI\Client\Model\RouteStatus[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'static_routes_list' => null,
        'dynamic_routes_list' => null,
        'default_route' => null,
        'local_routes_list' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'static_routes_list' => false,
        'dynamic_routes_list' => false,
        'default_route' => false,
        'local_routes_list' => false
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
        'static_routes_list' => 'static_routes_list',
        'dynamic_routes_list' => 'dynamic_routes_list',
        'default_route' => 'default_route',
        'local_routes_list' => 'local_routes_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'static_routes_list' => 'setStaticRoutesList',
        'dynamic_routes_list' => 'setDynamicRoutesList',
        'default_route' => 'setDefaultRoute',
        'local_routes_list' => 'setLocalRoutesList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'static_routes_list' => 'getStaticRoutesList',
        'dynamic_routes_list' => 'getDynamicRoutesList',
        'default_route' => 'getDefaultRoute',
        'local_routes_list' => 'getLocalRoutesList'
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
        $this->setIfExists('static_routes_list', $data ?? [], null);
        $this->setIfExists('dynamic_routes_list', $data ?? [], null);
        $this->setIfExists('default_route', $data ?? [], null);
        $this->setIfExists('local_routes_list', $data ?? [], null);
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
     * Gets static_routes_list
     *
     * @return \OpenAPI\Client\Model\RouteStatus[]|null
     */
    public function getStaticRoutesList()
    {
        return $this->container['static_routes_list'];
    }

    /**
     * Sets static_routes_list
     *
     * @param \OpenAPI\Client\Model\RouteStatus[]|null $static_routes_list Set of statically configured routes in this table.
     *
     * @return self
     */
    public function setStaticRoutesList($static_routes_list)
    {
        if (is_null($static_routes_list)) {
            throw new \InvalidArgumentException('non-nullable static_routes_list cannot be null');
        }
        $this->container['static_routes_list'] = $static_routes_list;

        return $this;
    }

    /**
     * Gets dynamic_routes_list
     *
     * @return \OpenAPI\Client\Model\RouteStatus[]|null
     */
    public function getDynamicRoutesList()
    {
        return $this->container['dynamic_routes_list'];
    }

    /**
     * Sets dynamic_routes_list
     *
     * @param \OpenAPI\Client\Model\RouteStatus[]|null $dynamic_routes_list Set of dynamically received routes in this table.
     *
     * @return self
     */
    public function setDynamicRoutesList($dynamic_routes_list)
    {
        if (is_null($dynamic_routes_list)) {
            throw new \InvalidArgumentException('non-nullable dynamic_routes_list cannot be null');
        }
        $this->container['dynamic_routes_list'] = $dynamic_routes_list;

        return $this;
    }

    /**
     * Gets default_route
     *
     * @return \OpenAPI\Client\Model\RouteStatus|null
     */
    public function getDefaultRoute()
    {
        return $this->container['default_route'];
    }

    /**
     * Sets default_route
     *
     * @param \OpenAPI\Client\Model\RouteStatus|null $default_route default_route
     *
     * @return self
     */
    public function setDefaultRoute($default_route)
    {
        if (is_null($default_route)) {
            throw new \InvalidArgumentException('non-nullable default_route cannot be null');
        }
        $this->container['default_route'] = $default_route;

        return $this;
    }

    /**
     * Gets local_routes_list
     *
     * @return \OpenAPI\Client\Model\RouteStatus[]|null
     */
    public function getLocalRoutesList()
    {
        return $this->container['local_routes_list'];
    }

    /**
     * Sets local_routes_list
     *
     * @param \OpenAPI\Client\Model\RouteStatus[]|null $local_routes_list Set of locally defined routes in this table.
     *
     * @return self
     */
    public function setLocalRoutesList($local_routes_list)
    {
        if (is_null($local_routes_list)) {
            throw new \InvalidArgumentException('non-nullable local_routes_list cannot be null');
        }
        $this->container['local_routes_list'] = $local_routes_list;

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

