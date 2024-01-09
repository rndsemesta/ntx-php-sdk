<?php
/**
 * StoragePolicyResourcesDefStatus
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
 * StoragePolicyResourcesDefStatus Class Doc Comment
 *
 * @category Class
 * @description Storage Policy Resources Status Definition
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class StoragePolicyResourcesDefStatus implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'storage_policy_resources_def_status';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'encryption' => '\OpenAPI\Client\Model\EncryptionParametersForTheEntities',
        'qos' => '\OpenAPI\Client\Model\StorageQoSParametersForTheEntities',
        'compression' => '\OpenAPI\Client\Model\CompressionParametersForTheEntities',
        'filter_list' => '\OpenAPI\Client\Model\Filter[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'encryption' => null,
        'qos' => null,
        'compression' => null,
        'filter_list' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'encryption' => false,
        'qos' => false,
        'compression' => false,
        'filter_list' => false
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
        'encryption' => 'encryption',
        'qos' => 'qos',
        'compression' => 'compression',
        'filter_list' => 'filter_list'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'encryption' => 'setEncryption',
        'qos' => 'setQos',
        'compression' => 'setCompression',
        'filter_list' => 'setFilterList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'encryption' => 'getEncryption',
        'qos' => 'getQos',
        'compression' => 'getCompression',
        'filter_list' => 'getFilterList'
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
        $this->setIfExists('encryption', $data ?? [], null);
        $this->setIfExists('qos', $data ?? [], null);
        $this->setIfExists('compression', $data ?? [], null);
        $this->setIfExists('filter_list', $data ?? [], null);
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
     * Gets encryption
     *
     * @return \OpenAPI\Client\Model\EncryptionParametersForTheEntities|null
     */
    public function getEncryption()
    {
        return $this->container['encryption'];
    }

    /**
     * Sets encryption
     *
     * @param \OpenAPI\Client\Model\EncryptionParametersForTheEntities|null $encryption encryption
     *
     * @return self
     */
    public function setEncryption($encryption)
    {
        if (is_null($encryption)) {
            throw new \InvalidArgumentException('non-nullable encryption cannot be null');
        }
        $this->container['encryption'] = $encryption;

        return $this;
    }

    /**
     * Gets qos
     *
     * @return \OpenAPI\Client\Model\StorageQoSParametersForTheEntities|null
     */
    public function getQos()
    {
        return $this->container['qos'];
    }

    /**
     * Sets qos
     *
     * @param \OpenAPI\Client\Model\StorageQoSParametersForTheEntities|null $qos qos
     *
     * @return self
     */
    public function setQos($qos)
    {
        if (is_null($qos)) {
            throw new \InvalidArgumentException('non-nullable qos cannot be null');
        }
        $this->container['qos'] = $qos;

        return $this;
    }

    /**
     * Gets compression
     *
     * @return \OpenAPI\Client\Model\CompressionParametersForTheEntities|null
     */
    public function getCompression()
    {
        return $this->container['compression'];
    }

    /**
     * Sets compression
     *
     * @param \OpenAPI\Client\Model\CompressionParametersForTheEntities|null $compression compression
     *
     * @return self
     */
    public function setCompression($compression)
    {
        if (is_null($compression)) {
            throw new \InvalidArgumentException('non-nullable compression cannot be null');
        }
        $this->container['compression'] = $compression;

        return $this;
    }

    /**
     * Gets filter_list
     *
     * @return \OpenAPI\Client\Model\Filter[]|null
     */
    public function getFilterList()
    {
        return $this->container['filter_list'];
    }

    /**
     * Sets filter_list
     *
     * @param \OpenAPI\Client\Model\Filter[]|null $filter_list Regex for entities on which the policy has been applied
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


