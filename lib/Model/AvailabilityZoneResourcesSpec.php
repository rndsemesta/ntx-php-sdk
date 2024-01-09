<?php
/**
 * AvailabilityZoneResourcesSpec
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
 * AvailabilityZoneResourcesSpec Class Doc Comment
 *
 * @category Class
 * @description Availability Zone resources
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class AvailabilityZoneResourcesSpec implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'availability_zone_resources_spec';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'management_url' => 'string',
        'region' => 'string',
        'management_plane_type' => 'string',
        'display_name' => 'string',
        'credentials' => '\OpenAPI\Client\Model\AvailabilityZoneResourcesSpecCredentials'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'management_url' => null,
        'region' => null,
        'management_plane_type' => null,
        'display_name' => null,
        'credentials' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'management_url' => false,
        'region' => false,
        'management_plane_type' => false,
        'display_name' => false,
        'credentials' => false
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
        'management_url' => 'management_url',
        'region' => 'region',
        'management_plane_type' => 'management_plane_type',
        'display_name' => 'display_name',
        'credentials' => 'credentials'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'management_url' => 'setManagementUrl',
        'region' => 'setRegion',
        'management_plane_type' => 'setManagementPlaneType',
        'display_name' => 'setDisplayName',
        'credentials' => 'setCredentials'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'management_url' => 'getManagementUrl',
        'region' => 'getRegion',
        'management_plane_type' => 'getManagementPlaneType',
        'display_name' => 'getDisplayName',
        'credentials' => 'getCredentials'
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
        $this->setIfExists('management_url', $data ?? [], null);
        $this->setIfExists('region', $data ?? [], null);
        $this->setIfExists('management_plane_type', $data ?? [], null);
        $this->setIfExists('display_name', $data ?? [], null);
        $this->setIfExists('credentials', $data ?? [], null);
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

        if ($this->container['management_plane_type'] === null) {
            $invalidProperties[] = "'management_plane_type' can't be null";
        }
        if (!is_null($this->container['display_name']) && (mb_strlen($this->container['display_name']) > 64)) {
            $invalidProperties[] = "invalid value for 'display_name', the character length must be smaller than or equal to 64.";
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
     * Gets management_url
     *
     * @return string|null
     */
    public function getManagementUrl()
    {
        return $this->container['management_url'];
    }

    /**
     * Sets management_url
     *
     * @param string|null $management_url Identifier of the management plane. This could be the URL of the PC or the FQDN of Xi portal.
     *
     * @return self
     */
    public function setManagementUrl($management_url)
    {
        if (is_null($management_url)) {
            throw new \InvalidArgumentException('non-nullable management_url cannot be null');
        }
        $this->container['management_url'] = $management_url;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string|null
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string|null $region Cloud region where the data will be replicated to. Based on the cloud provider type the available list of regions will differ.
     *
     * @return self
     */
    public function setRegion($region)
    {
        if (is_null($region)) {
            throw new \InvalidArgumentException('non-nullable region cannot be null');
        }
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets management_plane_type
     *
     * @return string
     */
    public function getManagementPlaneType()
    {
        return $this->container['management_plane_type'];
    }

    /**
     * Sets management_plane_type
     *
     * @param string $management_plane_type This defines the type of management entity. Its value can be Xi, PC, or Local. Local AZs are auto-created and cannot be deleted. How to talk to management entity will be decided based on the type of management plane.
     *
     * @return self
     */
    public function setManagementPlaneType($management_plane_type)
    {
        if (is_null($management_plane_type)) {
            throw new \InvalidArgumentException('non-nullable management_plane_type cannot be null');
        }
        $this->container['management_plane_type'] = $management_plane_type;

        return $this;
    }

    /**
     * Gets display_name
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string|null $display_name Display name. It is mainly used by user interface to show the user-friendly name of the availability zone. If unset, default value will be used.
     *
     * @return self
     */
    public function setDisplayName($display_name)
    {
        if (is_null($display_name)) {
            throw new \InvalidArgumentException('non-nullable display_name cannot be null');
        }
        if ((mb_strlen($display_name) > 64)) {
            throw new \InvalidArgumentException('invalid length for $display_name when calling AvailabilityZoneResourcesSpec., must be smaller than or equal to 64.');
        }

        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets credentials
     *
     * @return \OpenAPI\Client\Model\AvailabilityZoneResourcesSpecCredentials|null
     */
    public function getCredentials()
    {
        return $this->container['credentials'];
    }

    /**
     * Sets credentials
     *
     * @param \OpenAPI\Client\Model\AvailabilityZoneResourcesSpecCredentials|null $credentials credentials
     *
     * @return self
     */
    public function setCredentials($credentials)
    {
        if (is_null($credentials)) {
            throw new \InvalidArgumentException('non-nullable credentials cannot be null');
        }
        $this->container['credentials'] = $credentials;

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


