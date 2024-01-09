<?php
/**
 * PortalSoftware
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
 * PortalSoftware Class Doc Comment
 *
 * @category Class
 * @description Software information from Nutanix Portal
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PortalSoftware implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'portal_software';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'release_note_url' => 'string',
        'upgrade_notification' => '\OpenAPI\Client\Model\UpgradeNotification',
        'release_date' => '\DateTime',
        'md5sum' => 'string',
        'compatible_version_list' => 'string[]',
        'version' => 'string',
        'compatible_pe_version_list' => 'string[]',
        'software_type' => 'string',
        'size_bytes' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'release_note_url' => null,
        'upgrade_notification' => null,
        'release_date' => 'date-time',
        'md5sum' => null,
        'compatible_version_list' => null,
        'version' => null,
        'compatible_pe_version_list' => null,
        'software_type' => null,
        'size_bytes' => 'int64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'release_note_url' => false,
        'upgrade_notification' => false,
        'release_date' => false,
        'md5sum' => false,
        'compatible_version_list' => false,
        'version' => false,
        'compatible_pe_version_list' => false,
        'software_type' => false,
        'size_bytes' => false
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
        'release_note_url' => 'release_note_url',
        'upgrade_notification' => 'upgrade_notification',
        'release_date' => 'release_date',
        'md5sum' => 'md5sum',
        'compatible_version_list' => 'compatible_version_list',
        'version' => 'version',
        'compatible_pe_version_list' => 'compatible_pe_version_list',
        'software_type' => 'software_type',
        'size_bytes' => 'size_bytes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'release_note_url' => 'setReleaseNoteUrl',
        'upgrade_notification' => 'setUpgradeNotification',
        'release_date' => 'setReleaseDate',
        'md5sum' => 'setMd5sum',
        'compatible_version_list' => 'setCompatibleVersionList',
        'version' => 'setVersion',
        'compatible_pe_version_list' => 'setCompatiblePeVersionList',
        'software_type' => 'setSoftwareType',
        'size_bytes' => 'setSizeBytes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'release_note_url' => 'getReleaseNoteUrl',
        'upgrade_notification' => 'getUpgradeNotification',
        'release_date' => 'getReleaseDate',
        'md5sum' => 'getMd5sum',
        'compatible_version_list' => 'getCompatibleVersionList',
        'version' => 'getVersion',
        'compatible_pe_version_list' => 'getCompatiblePeVersionList',
        'software_type' => 'getSoftwareType',
        'size_bytes' => 'getSizeBytes'
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
        $this->setIfExists('release_note_url', $data ?? [], null);
        $this->setIfExists('upgrade_notification', $data ?? [], null);
        $this->setIfExists('release_date', $data ?? [], null);
        $this->setIfExists('md5sum', $data ?? [], null);
        $this->setIfExists('compatible_version_list', $data ?? [], null);
        $this->setIfExists('version', $data ?? [], null);
        $this->setIfExists('compatible_pe_version_list', $data ?? [], null);
        $this->setIfExists('software_type', $data ?? [], null);
        $this->setIfExists('size_bytes', $data ?? [], null);
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
     * Gets release_note_url
     *
     * @return string|null
     */
    public function getReleaseNoteUrl()
    {
        return $this->container['release_note_url'];
    }

    /**
     * Sets release_note_url
     *
     * @param string|null $release_note_url URL to point to the support portal release note of this software. Currently only set and used for NOS releases
     *
     * @return self
     */
    public function setReleaseNoteUrl($release_note_url)
    {
        if (is_null($release_note_url)) {
            throw new \InvalidArgumentException('non-nullable release_note_url cannot be null');
        }
        $this->container['release_note_url'] = $release_note_url;

        return $this;
    }

    /**
     * Gets upgrade_notification
     *
     * @return \OpenAPI\Client\Model\UpgradeNotification|null
     */
    public function getUpgradeNotification()
    {
        return $this->container['upgrade_notification'];
    }

    /**
     * Sets upgrade_notification
     *
     * @param \OpenAPI\Client\Model\UpgradeNotification|null $upgrade_notification upgrade_notification
     *
     * @return self
     */
    public function setUpgradeNotification($upgrade_notification)
    {
        if (is_null($upgrade_notification)) {
            throw new \InvalidArgumentException('non-nullable upgrade_notification cannot be null');
        }
        $this->container['upgrade_notification'] = $upgrade_notification;

        return $this;
    }

    /**
     * Gets release_date
     *
     * @return \DateTime|null
     */
    public function getReleaseDate()
    {
        return $this->container['release_date'];
    }

    /**
     * Sets release_date
     *
     * @param \DateTime|null $release_date Release date of this software in RFC3339 format.
     *
     * @return self
     */
    public function setReleaseDate($release_date)
    {
        if (is_null($release_date)) {
            throw new \InvalidArgumentException('non-nullable release_date cannot be null');
        }
        $this->container['release_date'] = $release_date;

        return $this;
    }

    /**
     * Gets md5sum
     *
     * @return string|null
     */
    public function getMd5sum()
    {
        return $this->container['md5sum'];
    }

    /**
     * Sets md5sum
     *
     * @param string|null $md5sum MD5 checksum of the software file
     *
     * @return self
     */
    public function setMd5sum($md5sum)
    {
        if (is_null($md5sum)) {
            throw new \InvalidArgumentException('non-nullable md5sum cannot be null');
        }
        $this->container['md5sum'] = $md5sum;

        return $this;
    }

    /**
     * Gets compatible_version_list
     *
     * @return string[]|null
     */
    public function getCompatibleVersionList()
    {
        return $this->container['compatible_version_list'];
    }

    /**
     * Sets compatible_version_list
     *
     * @param string[]|null $compatible_version_list List of software versions that this version can be upgraded from
     *
     * @return self
     */
    public function setCompatibleVersionList($compatible_version_list)
    {
        if (is_null($compatible_version_list)) {
            throw new \InvalidArgumentException('non-nullable compatible_version_list cannot be null');
        }
        $this->container['compatible_version_list'] = $compatible_version_list;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string|null
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string|null $version Software version string
     *
     * @return self
     */
    public function setVersion($version)
    {
        if (is_null($version)) {
            throw new \InvalidArgumentException('non-nullable version cannot be null');
        }
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets compatible_pe_version_list
     *
     * @return string[]|null
     */
    public function getCompatiblePeVersionList()
    {
        return $this->container['compatible_pe_version_list'];
    }

    /**
     * Sets compatible_pe_version_list
     *
     * @param string[]|null $compatible_pe_version_list List of Prism Element compatible versions
     *
     * @return self
     */
    public function setCompatiblePeVersionList($compatible_pe_version_list)
    {
        if (is_null($compatible_pe_version_list)) {
            throw new \InvalidArgumentException('non-nullable compatible_pe_version_list cannot be null');
        }
        $this->container['compatible_pe_version_list'] = $compatible_pe_version_list;

        return $this;
    }

    /**
     * Gets software_type
     *
     * @return string|null
     */
    public function getSoftwareType()
    {
        return $this->container['software_type'];
    }

    /**
     * Sets software_type
     *
     * @param string|null $software_type Software type
     *
     * @return self
     */
    public function setSoftwareType($software_type)
    {
        if (is_null($software_type)) {
            throw new \InvalidArgumentException('non-nullable software_type cannot be null');
        }
        $this->container['software_type'] = $software_type;

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
     * @param int|null $size_bytes Total size of the software file in bytes
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

