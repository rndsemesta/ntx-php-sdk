<?php
/**
 * NodeSpec
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
 * NodeSpec Class Doc Comment
 *
 * @category Class
 * @description node_spec Object.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class NodeSpec implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'node_spec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'recommended_online_timestamp_secs' => 'int',
        'to_removed' => 'bool',
        'model' => 'string',
        'resource_spec' => '\OpenAPI\Client\Model\GenericResourceSpec',
        'num_of_nodes' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'recommended_online_timestamp_secs' => null,
        'to_removed' => null,
        'model' => null,
        'resource_spec' => null,
        'num_of_nodes' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'recommended_online_timestamp_secs' => false,
        'to_removed' => false,
        'model' => false,
        'resource_spec' => false,
        'num_of_nodes' => false
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
        'recommended_online_timestamp_secs' => 'recommended_online_timestamp_secs',
        'to_removed' => 'to_removed',
        'model' => 'model',
        'resource_spec' => 'resource_spec',
        'num_of_nodes' => 'num_of_nodes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'recommended_online_timestamp_secs' => 'setRecommendedOnlineTimestampSecs',
        'to_removed' => 'setToRemoved',
        'model' => 'setModel',
        'resource_spec' => 'setResourceSpec',
        'num_of_nodes' => 'setNumOfNodes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'recommended_online_timestamp_secs' => 'getRecommendedOnlineTimestampSecs',
        'to_removed' => 'getToRemoved',
        'model' => 'getModel',
        'resource_spec' => 'getResourceSpec',
        'num_of_nodes' => 'getNumOfNodes'
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
        $this->setIfExists('recommended_online_timestamp_secs', $data ?? [], null);
        $this->setIfExists('to_removed', $data ?? [], null);
        $this->setIfExists('model', $data ?? [], null);
        $this->setIfExists('resource_spec', $data ?? [], null);
        $this->setIfExists('num_of_nodes', $data ?? [], null);
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
     * Gets recommended_online_timestamp_secs
     *
     * @return int|null
     */
    public function getRecommendedOnlineTimestampSecs()
    {
        return $this->container['recommended_online_timestamp_secs'];
    }

    /**
     * Sets recommended_online_timestamp_secs
     *
     * @param int|null $recommended_online_timestamp_secs recommended_online_timestamp_secs
     *
     * @return self
     */
    public function setRecommendedOnlineTimestampSecs($recommended_online_timestamp_secs)
    {
        if (is_null($recommended_online_timestamp_secs)) {
            throw new \InvalidArgumentException('non-nullable recommended_online_timestamp_secs cannot be null');
        }
        $this->container['recommended_online_timestamp_secs'] = $recommended_online_timestamp_secs;

        return $this;
    }

    /**
     * Gets to_removed
     *
     * @return bool|null
     */
    public function getToRemoved()
    {
        return $this->container['to_removed'];
    }

    /**
     * Sets to_removed
     *
     * @param bool|null $to_removed Indicate if the node is set for removal.
     *
     * @return self
     */
    public function setToRemoved($to_removed)
    {
        if (is_null($to_removed)) {
            throw new \InvalidArgumentException('non-nullable to_removed cannot be null');
        }
        $this->container['to_removed'] = $to_removed;

        return $this;
    }

    /**
     * Gets model
     *
     * @return string|null
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param string|null $model model
     *
     * @return self
     */
    public function setModel($model)
    {
        if (is_null($model)) {
            throw new \InvalidArgumentException('non-nullable model cannot be null');
        }
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets resource_spec
     *
     * @return \OpenAPI\Client\Model\GenericResourceSpec|null
     */
    public function getResourceSpec()
    {
        return $this->container['resource_spec'];
    }

    /**
     * Sets resource_spec
     *
     * @param \OpenAPI\Client\Model\GenericResourceSpec|null $resource_spec resource_spec
     *
     * @return self
     */
    public function setResourceSpec($resource_spec)
    {
        if (is_null($resource_spec)) {
            throw new \InvalidArgumentException('non-nullable resource_spec cannot be null');
        }
        $this->container['resource_spec'] = $resource_spec;

        return $this;
    }

    /**
     * Gets num_of_nodes
     *
     * @return int|null
     */
    public function getNumOfNodes()
    {
        return $this->container['num_of_nodes'];
    }

    /**
     * Sets num_of_nodes
     *
     * @param int|null $num_of_nodes num_of_nodes
     *
     * @return self
     */
    public function setNumOfNodes($num_of_nodes)
    {
        if (is_null($num_of_nodes)) {
            throw new \InvalidArgumentException('non-nullable num_of_nodes cannot be null');
        }
        $this->container['num_of_nodes'] = $num_of_nodes;

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


