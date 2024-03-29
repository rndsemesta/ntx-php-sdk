<?php
/**
 * FileItemResourcesDefStatus
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
 * FileItemResourcesDefStatus Class Doc Comment
 *
 * @category Class
 * @description File item object
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class FileItemResourcesDefStatus implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'file_item_resources_def_status';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'retrieval_uri_list' => 'string[]',
        'checksum' => '\OpenAPI\Client\Model\Checksum',
        'source_uri' => 'string',
        'source_auth' => '\OpenAPI\Client\Model\SourceAuth',
        'size_bytes' => 'int',
        'data_source_reference' => '\OpenAPI\Client\Model\Reference'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'retrieval_uri_list' => null,
        'checksum' => null,
        'source_uri' => null,
        'source_auth' => null,
        'size_bytes' => 'int64',
        'data_source_reference' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'retrieval_uri_list' => false,
        'checksum' => false,
        'source_uri' => false,
        'source_auth' => false,
        'size_bytes' => false,
        'data_source_reference' => false
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
        'retrieval_uri_list' => 'retrieval_uri_list',
        'checksum' => 'checksum',
        'source_uri' => 'source_uri',
        'source_auth' => 'source_auth',
        'size_bytes' => 'size_bytes',
        'data_source_reference' => 'data_source_reference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'retrieval_uri_list' => 'setRetrievalUriList',
        'checksum' => 'setChecksum',
        'source_uri' => 'setSourceUri',
        'source_auth' => 'setSourceAuth',
        'size_bytes' => 'setSizeBytes',
        'data_source_reference' => 'setDataSourceReference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'retrieval_uri_list' => 'getRetrievalUriList',
        'checksum' => 'getChecksum',
        'source_uri' => 'getSourceUri',
        'source_auth' => 'getSourceAuth',
        'size_bytes' => 'getSizeBytes',
        'data_source_reference' => 'getDataSourceReference'
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
        $this->setIfExists('retrieval_uri_list', $data ?? [], null);
        $this->setIfExists('checksum', $data ?? [], null);
        $this->setIfExists('source_uri', $data ?? [], null);
        $this->setIfExists('source_auth', $data ?? [], null);
        $this->setIfExists('size_bytes', $data ?? [], null);
        $this->setIfExists('data_source_reference', $data ?? [], null);
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
     * Gets retrieval_uri_list
     *
     * @return string[]|null
     */
    public function getRetrievalUriList()
    {
        return $this->container['retrieval_uri_list'];
    }

    /**
     * Sets retrieval_uri_list
     *
     * @param string[]|null $retrieval_uri_list List of URIs where the raw file_item data can be accessed.
     *
     * @return self
     */
    public function setRetrievalUriList($retrieval_uri_list)
    {
        if (is_null($retrieval_uri_list)) {
            throw new \InvalidArgumentException('non-nullable retrieval_uri_list cannot be null');
        }
        $this->container['retrieval_uri_list'] = $retrieval_uri_list;

        return $this;
    }

    /**
     * Gets checksum
     *
     * @return \OpenAPI\Client\Model\Checksum|null
     */
    public function getChecksum()
    {
        return $this->container['checksum'];
    }

    /**
     * Sets checksum
     *
     * @param \OpenAPI\Client\Model\Checksum|null $checksum checksum
     *
     * @return self
     */
    public function setChecksum($checksum)
    {
        if (is_null($checksum)) {
            throw new \InvalidArgumentException('non-nullable checksum cannot be null');
        }
        $this->container['checksum'] = $checksum;

        return $this;
    }

    /**
     * Gets source_uri
     *
     * @return string|null
     */
    public function getSourceUri()
    {
        return $this->container['source_uri'];
    }

    /**
     * Sets source_uri
     *
     * @param string|null $source_uri URI that points at the file to create the file_item from.
     *
     * @return self
     */
    public function setSourceUri($source_uri)
    {
        if (is_null($source_uri)) {
            throw new \InvalidArgumentException('non-nullable source_uri cannot be null');
        }
        $this->container['source_uri'] = $source_uri;

        return $this;
    }

    /**
     * Gets source_auth
     *
     * @return \OpenAPI\Client\Model\SourceAuth|null
     */
    public function getSourceAuth()
    {
        return $this->container['source_auth'];
    }

    /**
     * Sets source_auth
     *
     * @param \OpenAPI\Client\Model\SourceAuth|null $source_auth source_auth
     *
     * @return self
     */
    public function setSourceAuth($source_auth)
    {
        if (is_null($source_auth)) {
            throw new \InvalidArgumentException('non-nullable source_auth cannot be null');
        }
        $this->container['source_auth'] = $source_auth;

        return $this;
    }

    /**
     * Gets size_bytes
     *
     * @return int|null
     */
    public function getSizeBytes()
    {
        return $this->container['size_bytes'];
    }

    /**
     * Sets size_bytes
     *
     * @param int|null $size_bytes size_bytes
     *
     * @return self
     */
    public function setSizeBytes($size_bytes)
    {
        if (is_null($size_bytes)) {
            throw new \InvalidArgumentException('non-nullable size_bytes cannot be null');
        }
        $this->container['size_bytes'] = $size_bytes;

        return $this;
    }

    /**
     * Gets data_source_reference
     *
     * @return \OpenAPI\Client\Model\Reference|null
     */
    public function getDataSourceReference()
    {
        return $this->container['data_source_reference'];
    }

    /**
     * Sets data_source_reference
     *
     * @param \OpenAPI\Client\Model\Reference|null $data_source_reference data_source_reference
     *
     * @return self
     */
    public function setDataSourceReference($data_source_reference)
    {
        if (is_null($data_source_reference)) {
            throw new \InvalidArgumentException('non-nullable data_source_reference cannot be null');
        }
        $this->container['data_source_reference'] = $data_source_reference;

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


